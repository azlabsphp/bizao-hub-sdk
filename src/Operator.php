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

class Operator implements OperatorInterface
{

	/**
	 * @var string
	 */
	private $name = null;

	/**
	 * @var string
	 */
	private $currency = null;

	/**
	 * @var array
	 */
	private $currencies = null;

	/**
	 * @var string
	 */
	private $country_code = null;

	/**
	 * @var string|null
	 */
	private $lang;

	/**
	 * Creates new class instance
	 * 
	 * @param string $name
	 * @param string $currency
	 * @param string $country_code
	 * @param string[] $currencies
	 *
	 * @return void
	 */
	public function __construct(string $name, string $currency, string $country_code, string $lang = 'fr', array $currencies = [])
	{
		# code...
		$this->name = $name;
		$this->currency = $currency;
		$this->country_code = $country_code;
		$this->currencies = $currencies;
		$this->lang = $lang ?? 'fr';
	}

	/**
	 * Returns operator name property value
	 * 
	 *
	 * @return string
	 */
	public function getName()
	{
		# code...
		return $this->name;
	}

	/**
	 * Returns default supported ISO4217 standard currency
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
	 * Returns list of suppotred ISO4217 standard currencies
	 * 
	 *
	 * @return array
	 */
	public function getCurrencies(): array
	{
		# code...
		return $this->currencies ?? [];
	}

	/**
	 * Returns supported ISO3166 country code
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
	 * Returns supported operator lang
	 * 
	 * @return null|string 
	 */
	public function getLang(): ?string
	{
		return $this->lang;
	}

	/**
	 * Set name property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withName(string $value)
	{
		# code...
		$self = clone $this;
		$self->name = $value;
		return $self;
	}

	/**
	 * Set currency property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withCurrency(string $value)
	{
		# code...
		$self = clone $this;
		$self->currency = $value;
		return $self;
	}

	/**
	 * Set currencies property value
	 * 
	 * @param array $value
	 *
	 * @return self
	 */
	public function withCurrencies(array $value)
	{
		# code...
		$self = clone $this;
		$self->currencies = $value;
		return $self;
	}

	/**
	 * Set country_code property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withCountryCode(string $value)
	{
		# code...
		$self = clone $this;
		$self->country_code = $value;
		return $self;
	}
}
