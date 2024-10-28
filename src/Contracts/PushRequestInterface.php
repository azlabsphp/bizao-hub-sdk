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

interface PushRequestInterface
{

	/**
	 * Returns MSI SDN identifier of the user paying the invoice
	 * 
	 *
	 * @return string
	 */
	public function getMsiSdn();

	/**
	 * Returns the OTP code of the push request
	 * 
	 *
	 * @return string
	 */
	public function getOTP();

}