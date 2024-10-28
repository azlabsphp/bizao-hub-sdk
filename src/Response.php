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

use Drewlabs\Bizao\Contracts\ChannelResponseInterface;

final class Response implements ChannelResponseInterface
{

	/**
	 * Returns boolean flag which equals true if request is successful
	 * 
	 *
	 * @return bool
	 */
	public function ok()
	{
		# code...
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
		return $self;
	}

}