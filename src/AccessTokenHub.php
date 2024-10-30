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

use Drewlabs\Bizao\Contracts\CredentialsInterface;
use Drewlabs\Bizao\Contracts\TokenHubInterface;
use Drewlabs\Bizao\Contracts\TokenInterface;
use Drewlabs\Bizao\Exceptions\RequestException;
use Drewlabs\Psr18\Client;
use Drewlabs\Psr7\Request;
use Drewlabs\Psr7\ResponseReasonPhrase;

final class AccessTokenHub implements TokenHubInterface
{
	/**
	 * @var string
	 */
	private $host = null;

	/**
	 * Creates new class instance
	 * 
	 * @param stirng $host
	 * @return void
	 */
	public function __construct(string $host)
	{
		# code...
		$this->host = $host;
	}

	/**
	 * Get access token from Bizao hub server
	 * 
	 * @param CredentialsInterface $credentials
	 * 
	 * @return TokenInterface
	 */
	public function getAccessToken(CredentialsInterface $credentials)
	{
		# code...
		$response = Client::new()->sendRequest(
			new Request('POST', sprintf("%s?grant_type=client_credentials", EndpointBuilder::New($this->host)->build('token')), [
				'Content-Type' => 'application/x-www-form-urlencoded',
				'Authorization' => sprintf("Basic %s", (string)$credentials)
			])
		);
		$statusCode = $response->getStatusCode();
		if ($statusCode < 200 || $statusCode > 204) {
			throw new RequestException(sprintf("%s : %s", ResponseReasonPhrase::getPrase($statusCode), $response->getBody()->__toString()), $statusCode);
		}
		return AccessToken::fromJson(json_decode($response->getBody()->__toString(), true));
	}
}
