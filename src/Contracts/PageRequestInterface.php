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

use Drewlabs\Bizao\Contracts\OperatorInterface;

interface PageRequestInterface
{

	/**
	 * Returns operator for the current request
	 * 
	 *
	 * @return OperatorInterface
	 */
	public function getOperator(): OperatorInterface;

	/**
	 * Returns invoice order or transaction id
	 * 
	 *
	 * @return string
	 */
	public function getTxn();

	/**
	 * Returns invoice reference
	 * 
	 *
	 * @return string
	 */
	public function getReference();

	/**
	 * Returns payment page language configuration
	 * 
	 *
	 * @return string
	 */
	public function getLang();

	/**
	 * Returns invoice amount value
	 * 
	 *
	 * @return float
	 */
	public function getAmount();

	/**
	 * Returns successful payment return/notification url
	 * 
	 *
	 * @return string
	 */
	public function getReturnURL();

	/**
	 * Returns cancelled payment return/notification url
	 * 
	 *
	 * @return string
	 */
	public function getCancelURL();

	/**
	 * Returns request server notify endpoint
	 * 
	 *
	 * @return string
	 */
	public function getNotifyURL(): string;
}
