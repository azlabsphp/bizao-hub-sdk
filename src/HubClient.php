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

use InvalidArgumentException;
use Drewlabs\Bizao\Contracts\ChannelInterface;

final class HubClient
{

	/**
	 * Bizao host IP/domain name
	 * 
	 * @var string
	 */
	private $host = null;

	/**
	 * Creates new class instance
	 * 
	 * @param string $host
	 *
	 * @return void
	 */
	public function __construct(string $host)
	{
		# code...
		$this->host = $host;
	}

	/**
	 * Creates new Bizao hub channel instance
	 * 
	 * @param string $c
	 *
	 * @return ChannelInterface
	 */
	public function channel(string $c)
	{
		switch (strtolower($c)) {
			case Channels::WEB:
				return WebChannel::New(
					$this->buildEndpoint('mobilemoney/v1'),
					$this->createTokenHub()
				);
			case Channels::TPE:
				return TPEChannel::New(
					$this->buildEndpoint('mobilemoney/v1'),
					$this->createTokenHub()
				);
			case Channels::USSD:
				return USSDPushChannel::New(
					$this->buildEndpoint('mobilemoney/v1'),
					$this->createTokenHub()
				);
			default:
				throw new InvalidArgumentException(sprintf("%s channel is not supported by the SDK", $c));
		}
	}

	/**
	 * Class factory constructor
	 * 
	 * @param string $host
	 *
	 * @return static
	 */
	public static function New(string $host)
	{
		return new static($host);
	}

	/**
	 * Create new access token hub instance
	 * 
	 * @return AccessTokenHub 
	 */
	private function createTokenHub()
	{
		return new AccessTokenHub($this->buildEndpoint('token'));
	}

	/**
	 * Build endpoint based on host property value
	 * 
	 * @param string $path
	 * 
	 * @return string 
	 */
	private function buildEndpoint(string $path): string
	{
		$host = $this->host;
		if ($this->host[$length = strlen($this->host) - 1] === '/') {
			$host = substr($this->host, 0, $length);
		}
		return sprintf("%s/%s", $host, $path);
	}
}
