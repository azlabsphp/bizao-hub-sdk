<?php

namespace Drewlabs\Bizao;

use BadMethodCallException;
use Drewlabs\Bizao\Contracts\PaymentResultInterface;
use Drewlabs\Bizao\Contracts\TokenInterface;
use Drewlabs\Bizao\EndpointBuilder;
use Drewlabs\Bizao\Exceptions\RequestException;
use Drewlabs\Bizao\Middleware;
use Drewlabs\Bizao\TxnResult;
use Drewlabs\Psr18\Client;
use Drewlabs\Psr7\Request;
use Drewlabs\Psr7\ResponseReasonPhrase;

trait ChecksTxnStatus
{
    public function getTxnStatus(string $id): PaymentResultInterface
    {
        if (is_null($this->credentials)) {
            throw new BadMethodCallException('Please call withCredentials(...) with the authentication credentials beforce calling this method');
        }
        return Middleware::New(function () {
            return $this->tokenHub->getAccessToken($this->credentials);
        })->then(function (TokenInterface $token) use ($id) {
            $response = Client::new()
                ->json()
                ->sendRequest(
                    new Request(
                        'GET',
                        EndpointBuilder::New($this->host)->build(sprintf('mobilemoney/v1/getStatus/%s', $id)),
                        ['Authorization' => sprintf('Bearer %s', (string)$token)]
                    )
                );
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 204) {
                throw new RequestException(sprintf("%s : %s", ResponseReasonPhrase::getPrase($statusCode), $response->getBody()->__toString()), $statusCode);
            }
            return TxnResult::fromJson(json_decode($response->getBody()->__toString(), true));
        })->catch(function (\Throwable $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        })->resolve();
    }
}
