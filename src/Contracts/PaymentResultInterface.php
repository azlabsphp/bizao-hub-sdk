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

interface PaymentResultInterface extends ChannelResponseInterface
{

	/**
	 * Returns invoice order or transaction id
	 * 
	 * @return string
	 */
	public function getTxn();

	/**
	 * Returns amount property value
	 * 
	 * @return float
	 */
	public function getAmount();

	/**
	 * Returns payment currency property value
	 * 
	 * @return string
	 */
	public function getCurrency();

	/**
	 * Returns transaction reference property value
	 * 
	 * @return string
	 */
	public function getReference();

	/**
	 * Returns payment ISO3166 country code property value
	 * 
	 * @return string
	 */
	public function getCountryCode();

	/**
	 * Returns MSI SDN identifier of the user who paid the invoice
	 *
	 * @return string
	 */
	public function getMsiSdn();

	/**
	 * Returns the OTP code of the push request
	 * 
	 * @return string
	 */
	public function getOTP();

	/**
	 * Returns encoded request state
	 * 
	 * @return string
	 */
	public function getState();

	/**
	 * Returns internal Bizao hub transaction id 
	 *
	 * @return ?string
	 */
	public function getInternalTxnId();

	/**
	 * Returns external Bizao hub transaction id
	 *
	 * @return ?string
	 */
	public function getExternalTxnId();

}