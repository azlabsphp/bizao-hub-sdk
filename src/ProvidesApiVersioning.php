<?php

namespace Drewlabs\Bizao;

use Drewlabs\Bizao\Contracts\ChannelInterface;

trait ProvidesApiVersioning
{
	/** @var string */
	private $version = 'v1';

	public function withApiVersion(int $number)
	{
		$self = clone $this;
		$self->version = "v$number";
		return $self;
	}
}