<?php

namespace Drewlabs\Bizao;

use Drewlabs\Bizao\Contracts\CredentialsInterface;

trait HasCredentials
{
	/** @var CredentialsInterface */
	private $credentials = null;

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