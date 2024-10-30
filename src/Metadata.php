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

final class Metadata
{
	/** @var string */
	private $channel = null;

	/** @var string */
	private $type = null;

	/** @var string*/
	private $source = null;

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
			'channel' => $this->channel,
			'type' => $this->type,
			'source' => $this->source,
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
		$self->channel = $json['channel'] ?? null;
		$self->type = $json['type'] ?? null;
		$self->source = $json['source'] ?? null;
		return $self;
	}

	/**
	 * Get channel property value
	 * 
	 *
	 * @return string
	 */
	public function getChannel()
	{
		# code...
		return $this->channel;
	}

	/**
	 * Get type property value
	 * 
	 *
	 * @return string
	 */
	public function getType()
	{
		# code...
		return $this->type;
	}

	/**
	 * Get source property value
	 * 
	 *
	 * @return string
	 */
	public function getSource()
	{
		# code...
		return $this->source;
	}

}