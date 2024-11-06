<?php

declare(strict_types=1);

/*
 * This file is auto generated using the drewlabs/mdl UML model class generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Drewlabs\Bizao;

use BadMethodCallException;
use Drewlabs\Bizao\Contracts\ChannelInterface;
use Drewlabs\Bizao\Contracts\CredentialsInterface;
use Drewlabs\Bizao\Contracts\RequestInterface;
use Drewlabs\Bizao\Contracts\TokenHubInterface;
use Drewlabs\Bizao\Contracts\TokenInterface;
use Drewlabs\Bizao\Exceptions\RequestException;
use Drewlabs\Psr7\ResponseReasonPhrase;

final class TPEChannel implements ChannelInterface
{
	use ChecksTxnStatus;
	use HasCredentials;
	use ProvidesApiVersioning;

	/** @var TokenHubInterface */
	private $tokenHub = null;

	/** @var string */
	private $host = null;

	/** @var string */
	private $channel = Channels::TPE;

	/**
	 * Creates new class instance
	 * 
	 * @param string $host
	 * @param TokenHubInterface $tokenHub
	 * @param CredentialsInterface|null $credentials
	 *
	 * @return void
	 */
	public function __construct(string $host, TokenHubInterface $tokenHub, CredentialsInterface $credentials = null)
	{
		# code...
		$this->host = $host;
		$this->tokenHub = $tokenHub;
		$this->credentials = $credentials;
	}

	/**
	 * Web channel factory constructor
	 * 
	 * @param string $endpoint 
	 * @param TokenHubInterface $tokenHub 
	 * @param CredentialsInterface|null $credentials
	 * 
	 * @return static 
	 */
	public static function New(string $endpoint, TokenHubInterface $tokenHub, CredentialsInterface $credentials = null)
	{
		return new static($endpoint, $tokenHub, $credentials);
	}

	public function sendRequest(RequestInterface $req)
	{
		if (is_null($this->credentials)) {
			throw new BadMethodCallException('Please call withCredentials(...) with the authentication credentials beforce calling this method');
		}
		return Middleware::New(function () {
			return $this->tokenHub->getAccessToken($this->credentials);
		})->then(function (TokenInterface $token) use ($req) {
			$response = TxnRequestHandler::New(Channels::TPE)
				->handle(EndpointBuilder::New($this->host)->build("mobilemoney/$this->version"), $token, $req, 
				function (&$headers, &$body) use ($req) {
					$body['user_msisdn'] = $req->getMsiSdn();
					$body['otp_code'] = $req->getOTP();
					return [$headers, $body];
				});
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
