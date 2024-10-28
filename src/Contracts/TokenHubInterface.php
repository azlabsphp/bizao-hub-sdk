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

namespace Drewlabs\Bizao\Contracts;

use Drewlabs\Bizao\Contracts\TokenInterface;

interface TokenHubInterface
{

	/**
	 * Get access token from Bizao hub server
	 * 
	 * @param CredentialsInterface $credentials
	 * @return TokenInterface
	 */
	public function getAccessToken(CredentialsInterface $credentials);

}