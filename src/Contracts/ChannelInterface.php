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
use Drewlabs\Bizao\Contracts\PageRequestInterface;

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
	 * Query for payment transaction using provided id
	 * 
	 * @param string $id
	 * @param OperatorInterface $operator
	 * 
	 * @return TxnResultInterface 
	 * 
	 * @throws \Drewlabs\Bizao\Exceptions\RequestException
	 */
	public function getTxnStatus(OperatorInterface $operator, string $id): TxnResultInterface;

	/**
	 * Send request to Bizao Hub to create payment transaction
	 * 
	 * @param RequestInterface|PageRequestInterface $req
	 *
	 * @return ChannelResponseInterface
	 * 
	 * @throws \Drewlabs\Bizao\Exceptions\RequestException
	 */
	public function sendRequest(RequestInterface $req);
}
