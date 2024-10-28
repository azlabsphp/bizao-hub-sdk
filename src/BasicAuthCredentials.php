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

final class BasicAuthCredentials implements CredentialsInterface
{

	/**
	 * User name or credentials id
	 * 
	 * @var string
	 */
	private $user = null;

	/**
	 * User password or credentials secret
	 * 
	 * @var string
	 */
	private $password = null;

	/**
	 * Creates new class instance
	 * 
	 * @param string $user
	 * @param string $password
	 *
	 * @return void
	 */
	public function __construct(string $user, string $password)
	{
		# code...
		$this->user = $user;
		$this->password = $password;
	}

	/**
	 * Returns string representation of the credentials
	 * 
	 *
	 * @return string
	 */
	public function __toString()
	{
		return base64_encode(sprintf("%s:%s", $this->user, $this->password));
	}
}
