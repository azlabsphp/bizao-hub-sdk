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

use Drewlabs\Bizao\Contracts\ChannelResponseInterface;
use Drewlabs\Bizao\Contracts\RequestInterface;

interface ChannelInterface
{
	/**
	 * Set credentials property value
	 * 
	 * @param CredentialsInterface $value
	 *
	 * @return self
	 */
	public function withCredentials(CredentialsInterface $value);

	/**
	 * @param PushRequestInterface|RequestInterface $req
	 *
	 * @return ChannelResponseInterface
	 */
	public function sendRequest(PushRequestInterface $req);
}
