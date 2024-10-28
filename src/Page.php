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

use Drewlabs\Bizao\Contracts\PageInterface;

final class Page implements PageInterface
{
	/**
	 * @var string
	 */
	private $payment_url = null;

	/**
	 * @var string
	 */
	private $pay_token = null;

	/**
	 * @var string
	 */
	private $notif_token = null;

	/**
	 * @var string
	 */
	private $state = null;

	/**
	 * Returns payment page url
	 * 
	 */
	public function getURL(): string
	{
		return $this->payment_url;
	}

	/**
	 * Returns a dictionnary/hash map representation of the current instance
	 * 
	 *
	 * @return array|mixed
	 */
	public function toJson()
	{
		# code...
		return [
			'payment_url' => $this->payment_url,
			'pay_token' => $this->pay_token,
			'notif_token' => $this->notif_token,
			'state' => $this->state,
		];
	}

	/**
	 * Initialize class instance and properties from a dictionnary/hash map
	 * 
	 * @param array $json
	 */
	public static function fromJson(array $json = [ ])
	{
		# code...
		$self = new static;
		$self->payment_url = $json['payment_url'] ?? null;
		$self->pay_token = $json['pay_token'] ?? null;
		$self->notif_token = $json['notif_token'] ?? null;
		$self->state = $json['state'] ?? null;
		return $self;
	}

	/**
	 * Get pay_token property value
	 * 
	 *
	 * @return string
	 */
	public function getPaymentToken()
	{
		# code...
		return $this->pay_token;
	}

	/**
	 * Get notif_token property value
	 * 
	 *
	 * @return string
	 */
	public function getNotifToken()
	{
		# code...
		return $this->notif_token;
	}

	/**
	 * Get state property value
	 * 
	 *
	 * @return string
	 */
	public function getState()
	{
		# code...
		return $this->state;
	}

}