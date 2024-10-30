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

use Drewlabs\Bizao\Contracts\PaymentResultInterface;

final class TxnResult implements PaymentResultInterface
{

	/**
	 * @var string
	 */
	private $status = null;

	/**
	 * @var float
	 */
	private $amount = null;

	/**
	 * @var string
	 */
	private $txn = null;

	/**
	 * @var string
	 */
	private $currency = null;

	/**
	 * @var string
	 */
	private $reference = null;

	/**
	 * @var string
	 */
	private $country_code = null;

	/**
	 * @var string
	 */
	private $state = null;

	/**
	 * @var string
	 */
	private $msi_sdn = null;

	/**
	 * @var string
	 */
	private $otp_code = null;

	/**
	 * @var string|null
	 */
	private $external_txn_id = null;

	/**
	 * @var string|null
	 */
	private $internal_txn_id = null;

	/** @var Metadata */
	private $meta = null;

	/**
	 * Returns boolean flag which equals true if request is successful
	 * 
	 *
	 * @return bool
	 */
	public function ok()
	{
		return !in_array(strtolower($this->status), [TxnStatus::ABANDONED, TxnStatus::CANCELED, TxnStatus::FAILED]);
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

	/**
	 * Returns amount property value
	 * 
	 *
	 * @return float
	 */
	public function getAmount()
	{
		# code...
		return floatval($this->amount);
	}

	/**
	 * Returns payment currency property value
	 * 
	 *
	 * @return string
	 */
	public function getCurrency()
	{
		# code...
		return $this->currency;
	}

	/**
	 * Returns transaction reference property value
	 * 
	 *
	 * @return string
	 */
	public function getReference()
	{
		# code...
		return $this->reference;
	}

	/**
	 * Returns payment ISO3166 country code property value
	 * 
	 *
	 * @return string
	 */
	public function getCountryCode()
	{
		# code...
		return $this->country_code;
	}

	/**
	 * Returns MSI SDN identifier of the user who paid the invoice
	 * 
	 *
	 * @return string
	 */
	public function getMsiSdn()
	{
		# code...
		return $this->msi_sdn;
	}

	/**
	 * Returns the OTP code of the push request
	 * 
	 *
	 * @return string
	 */
	public function getOTP()
	{
		# code...
		return $this->otp_code;
	}

	/**
	 * Returns encoded request state
	 * 
	 *
	 * @return string
	 */
	public function getState()
	{
		# code...
		return $this->state;
	}

	/**
	 * Returns internal Bizao hub transaction id 
	 * 
	 *
	 * @return ?string
	 */
	public function getInternalTxnId()
	{
		# code...
		return $this->internal_txn_id;
	}

	/**
	 * Returns external Bizao hub transaction id
	 * 
	 *
	 * @return ?string
	 */
	public function getExternalTxnId()
	{
		# code...
		return $this->external_txn_id;
	}

	/**
	 * Returns transaction result metadata
	 * 
	 * @return null|Metadata 
	 */
	public function getMetadata(): ?Metadata
	{
		return $this->meta;
	}

	/**
	 * Returns a dictionnary/hash map representation of the current instance
	 * 
	 *
	 * @return array|mixed
	 */
	public function toJson()
	{
		# code...
		return [
			'status' => $this->status,
			'amount' => $this->amount,
			'txn' => $this->txn,
			'currency' => $this->currency,
			'reference' => $this->reference,
			'country_code' => $this->country_code,
			'state' => $this->state,
			'msi_sdn' => $this->msi_sdn,
			'otp_code' => $this->otp_code,
			'external_txn_id' => $this->external_txn_id,
			'internal_txn_id' => $this->internal_txn_id,
			'meta' => $this->meta ? $this->meta->toJson() : null
		];
	}

	/**
	 * Initialize class instance and properties from a dictionnary/hash map
	 * 
	 * @param array $json
	 */
	public static function fromJson(array $json = [])
	{
		# code...
		$self = new static;
		$self->meta = Metadata::fromJson($json['meta'] ?? []);
		$self->status = $json['status'] ?? null;
		$self->amount = $json['amount'] ?? null;
		$self->txn = $json['txn'] ?? null;
		$self->currency = $json['currency'] ?? null;
		$self->reference = $json['reference'] ?? null;
		$self->country_code = $json['country_code'] ?? null;
		$self->state = $json['state'] ?? null;
		$self->msi_sdn = $json['msi_sdn'] ?? null;
		$self->otp_code = $json['otp_code'] ?? null;
		$self->external_txn_id = $json['external_txn_id'] ?? null;
		$self->internal_txn_id = $json['internal_txn_id'] ?? null;

		return $self;
	}
}
