<?php

namespace Drewlabs\Bizao;

use Drewlabs\Bizao\Contracts\RequestInterface;
use Drewlabs\Bizao\Contracts\TokenInterface;
use Drewlabs\Psr18\Client;
use Drewlabs\Psr7\Exceptions\NetworkException;
use Drewlabs\Psr7\Exceptions\RequestException;
use Drewlabs\Psr7\Request;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use ReflectionException;
use RuntimeException;

final class TxnRequestHandler
{
    /** @var string */
    private $channel;

    /**
     * Txn request handler constructor
     * 
     * @param string $channel 
     * @return void 
     */
    public function __construct(string $channel = Channels::WEB)
    {
        $this->channel = $channel;
    }

    /**
     * Txn request handler factory constructor
     * 
     * @param string $channel 
     * @return static 
     */
    public static function New(string $channel = Channels::WEB)
    {
        return new static($channel);
    }

    /**
     * Handles create mobile money payment request
     * 
     * @param string $endpoint 
     * @param TokenInterface $token 
     * @param RequestInterface $req 
     * @return ResponseInterface 
     * @throws ReflectionException 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws NetworkException 
     * @throws RequestException 
     */
    public function handle(string $endpoint, TokenInterface $token, RequestInterface $req): ResponseInterface
    {
        $operator = $req->getOperator();
        // Request headers
        $headers = [
            'country-code' => strtolower($operator->getCountryCode()),
            'mno-name' => $operator->getName(),
            'lang' => $req->getLang() ?? $operator->getLang() ?? 'fr',
            'channel' => $this->channel,
            'Content-Type' => 'application/json',
            'Authorization' => sprintf("Bearer %s", (string)$token),
        ];

        // Request body
        $value = [
            "currency" => "XOF",
            "order_id" => sprintf("ayael_pay%s", $req->getTxn()),
            "amount" => $req->getAmount(),
            "return_url" => $req->getReturnURL(),
            "cancel_url" => $req->getCancelURL(),
            "reference" => $req->getTxn(),
        ];

        $body = json_encode(
            array_merge($value, [
                'state' => urlencode($this->buildRequestState($value))
            ])
        );

        print_r([$body]);

        // Send HTTP request
        return Client::new()->sendRequest(new Request('POST', $endpoint, $headers, $body));
    }

    /**
     * Recursively sort provided array based on keys
     * 
     * @param array $value 
     * @param string $sortFunc 
     * @return array 
     */
    private static function sort(array $value, $sortFunc = 'ksort')
    {
        if (null === $sortFunc) {
            $sortFunc = 'ksort';
        }

        $sort = static function (array &$list) use ($sortFunc, &$sort) {
            foreach ($list as $key => $value) {
                $is_object = \is_object($value);
                if ($is_object || \is_array($value)) {
                    $current = $is_object ? get_object_vars($value) : $value;
                    $sort($current);
                    $list[$key] = $current;
                }
            }
            \call_user_func_array($sortFunc, [&$list]);
        };

        $sort($value);

        return $value;
    }

    /**
     * Build request state string value from request body
     * 
     * @param array $value 
     * @return string 
     */
    private function buildRequestState(array $value)
    {
        $array = [];
        foreach (static::sort($value) as $key => $value) {
            $array[] = "$key=$value";
        }
        return implode("&", $array);
    }
}
