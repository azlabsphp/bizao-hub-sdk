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


interface OperatorInterface
{

	/**
	 * Returns operator name property value
	 * 
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * Returns default supported ISO4217 standard currency
	 * 
	 *
	 * @return string
	 */
	public function getCurrency();

	/**
	 * Returns list of suppotred ISO4217 standard currencies
	 * 
	 *
	 * @return array
	 */
	public function getCurrencies(): array;

	/**
	 * Returns supported ISO3166 country code
	 * 
	 *
	 * @return string
	 */
	public function getCountryCode();


	/**
	 * Returns supported operator lang
	 * 
	 * @return null|string 
	 */
	public function getLang(): ?string;

}