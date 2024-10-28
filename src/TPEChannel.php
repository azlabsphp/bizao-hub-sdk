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

use Drewlabs\Bizao\Contracts\ChannelInterface;
use Drewlabs\Bizao\Contracts\CredentialsInterface;
use Drewlabs\Bizao\Contracts\ChannelResponseInterface;
use Drewlabs\Bizao\Contracts\RequestInterface;
use Drewlabs\Bizao\Contracts\TokenHubInterface;

final class TPEChannel implements ChannelInterface
{

	/**
	 * @var CredentialsInterface
	 */
	private $credentials = null;


	/** @var TokenHubInterface */
	private $tokenHub = null;

	/**
	 * @var string
	 */
	private $endpoint = null;

	/**
	 * Creates new class instance
	 * 
	 * @param string $endpoint
	 * @param TokenHubInterface $tokenHub
	 * @param CredentialsInterface|null $credentials
	 *
	 * @return void
	 */
	public function __construct(string $endpoint, TokenHubInterface $tokenHub, CredentialsInterface $credentials = null)
	{
		# code...
		$this->endpoint = $endpoint;
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

	/**
	 * @param RequestInterface $req
	 *
	 * @return ChannelResponseInterface
	 */
	public function sendRequest(RequestInterface $req)
	{
		# code...
	}

	/**
	 * Set credentials property value
	 * 
	 * @param CredentialsInterface $value
	 *
	 * @return self
	 */
	public function withCredentials(CredentialsInterface $value)
	{
		# code...
		$self = clone $this;
		$self->credentials = $value;
		return $self;
	}
}
