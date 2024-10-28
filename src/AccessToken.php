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

use Drewlabs\Bizao\Contracts\TokenInterface;

final class AccessToken implements TokenInterface
{

	/**
	 * @var string
	 */
	private $access_token = null;

	/**
	 * @var string
	 */
	private $scope = null;

	/**
	 * @var string
	 */
	private $token_type = null;

	/**
	 * @var int
	 */
	private $expires_in = null;

	/**
	 * Returns string representation of the token instance
	 * 
	 *
	 * @return string
	 */
	public function __toString()
	{
		return $this->access_token;
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
			'access_token' => $this->access_token,
			'scope' => $this->scope,
			'token_type' => $this->token_type,
			'expires_in' => $this->expires_in,
		];
	}

	/**
	 * Initialize class instance and properties from a dictionnary/hash map
	 * 
	 * @param array $json
	 */
	public static function fromJson(array $json = [])
	{
		# code...
		$self = new static;
		$self->access_token = $json['access_token'] ?? null;
		$self->scope = $json['scope'] ?? null;
		$self->token_type = $json['token_type'] ?? null;
		$self->expires_in = $json['expires_in'] ?? null;

		return $self;
	}
}
