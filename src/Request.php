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

use Drewlabs\Bizao\Contracts\OperatorInterface;
use Drewlabs\Bizao\Contracts\RequestInterface;

final class Request implements RequestInterface
{
	/**
	 * @var OperatorInterface
	 */
	private $operator = null;

	/**
	 * @var string
	 */
	private $txn = null;

	/**
	 * @var string
	 */
	private $lang = null;

	/**
	 * @var float
	 */
	private $amount = null;

	/**
	 * @var string|null
	 */
	private $return_url = null;

	/**
	 * @var string|null
	 */
	private $cancel_url = null;

	/** @var string|null */
	private $notify_url;

	/** @var string|null */
	private $reference;

	/** @var string|null */
	private $msi_sdn;

	/** @var string|null */
	private $otp;

	public function getMsiSdn()
	{
		return $this->msi_sdn;
	}

	public function getOTP()
	{
		return $this->otp;
	}

	/**
	 * Returns operator for the current request
	 * 
	 *
	 * @return OperatorInterface
	 */
	public function getOperator(): OperatorInterface
	{
		# code...
		return $this->operator;
	}

	/**
	 * Returns invoice order or transaction id
	 * 
	 *
	 * @return string
	 */
	public function getTxn()
	{
		# code...
		return $this->txn;
	}

	public function getReference()
	{
		# code...
		return $this->reference;
	}

	/**
	 * Returns payment page language configuration
	 * 
	 *
	 * @return string
	 */
	public function getLang()
	{
		# code...
		return $this->lang;
	}

	/**
	 * Returns invoice amount value
	 * 
	 *
	 * @return float
	 */
	public function getAmount()
	{
		# code...
		return $this->amount;
	}

	/**
	 * Returns successful payment return/notification url
	 * 
	 *
	 * @return string
	 */
	public function getReturnURL()
	{
		# code...
		return $this->return_url;
	}

	/**
	 * Returns cancelled payment return/notification url
	 * 
	 *
	 * @return string
	 */
	public function getCancelURL()
	{
		# code...
		return $this->cancel_url;
	}

	public function getNotifyURL(): string
	{
		return $this->notify_url;
	}

	/**
	 * Set operator property value
	 * 
	 * @param OperatorInterface $value
	 *
	 * @return self
	 */
	public function withOperator(OperatorInterface $value)
	{
		# code...
		$self = clone $this;
		$self->operator = $value;
		return $self;
	}

	/**
	 * Set txn property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withTxn(string $value)
	{
		# code...
		$self = clone $this;
		$self->txn = $value;
		return $self;
	}

	/**
	 * Set reference property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withReference(string $value)
	{
		# code...
		$self = clone $this;
		$self->reference = $value;
		return $self;
	}


	/**
	 * Set lang property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withLang(string $value)
	{
		# code...
		$self = clone $this;
		$self->lang = $value;
		return $self;
	}

	/**
	 * Set amount property value
	 * 
	 * @param float $value
	 *
	 * @return self
	 */
	public function withAmount(float $value)
	{
		# code...
		$self = clone $this;
		$self->amount = $value;
		return $self;
	}

	/**
	 * Set return_url property value
	 * 
	 * @param string|null $value
	 *
	 * @return self
	 */
	public function withReturnUrl(string|null $value)
	{
		# code...
		$self = clone $this;
		$self->return_url = $value;
		return $self;
	}

	/**
	 * Set cancel_url property value
	 * 
	 * @param string|null $value
	 *
	 * @return self
	 */
	public function withCancelUrl(string|null $value)
	{
		# code...
		$self = clone $this;
		$self->cancel_url = $value;
		return $self;
	}

	/**
	 * Set notify_url property value
	 * 
	 * @param string|null $value
	 *
	 * @return self
	 */
	public function withNotifyURL(string|null $value)
	{
		# code...
		$self = clone $this;
		$self->notify_url = $value;
		return $self;
	}

	/**
	 * Set msi_sdn property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withMsiSdn(string $value)
	{
		# code...
		$self = clone $this;
		$self->msi_sdn = $value;
		return $self;
	}

	/**
	 * Set otp property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withOtp(string $value)
	{
		# code...
		$self = clone $this;
		$self->otp = $value;
		return $self;
	}
}
