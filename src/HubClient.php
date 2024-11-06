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
use Drewlabs\Bizao\Contracts\HasApiVersionning;

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
	 * @return ChannelInterface&HasApiVersionning
	 */
	public function channel(string $c)
	{
		switch (strtolower($c)) {
			case Channels::WEB:
				return WebChannel::New($this->host, $this->createTokenHub());
			case Channels::TPE:
				return TPEChannel::New($this->host, $this->createTokenHub());
			case Channels::USSD:
				return USSDPushChannel::New($this->host, $this->createTokenHub());
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
		return new AccessTokenHub($this->host);
	}
}
