<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency
 * 
 * Properties:
 * <ul>
 * 
 * <li>CurrencyCode: string</li>
 * <li>CurrencyAmount: float</li>
 *
 * </ul>
 */
class MwsFinancesServiceModelCurrency extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'CurrencyAmount' => array('FieldValue' => null, 'FieldType' => 'float'));
        parent::__construct($data);
    }
    /**
     * Get the value of the CurrencyCode property.
     *
     * @return String CurrencyCode.
     */
    public function getCurrencyCode()
    {
        return $this->_fields['CurrencyCode']['FieldValue'];
    }
    /**
     * Set the value of the CurrencyCode property.
     *
     * @param string currencyCode
     * @return $this 
     */
    public function setCurrencyCode($value)
    {
        $this->_fields['CurrencyCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CurrencyCode is set.
     *
     * @return true if CurrencyCode is set.
     */
    public function isSetCurrencyCode()
    {
        return !is_null($this->_fields['CurrencyCode']['FieldValue']);
    }
    /**
     * Set the value of CurrencyCode, return this.
     *
     * @param currencyCode
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCurrencyCode($value)
    {
        $this->setCurrencyCode($value);
        return $this;
    }
    /**
     * Get the value of the CurrencyAmount property.
     *
     * @return BigDecimal CurrencyAmount.
     */
    public function getCurrencyAmount()
    {
        return $this->_fields['CurrencyAmount']['FieldValue'];
    }
    /**
     * Set the value of the CurrencyAmount property.
     *
     * @param float currencyAmount
     * @return $this 
     */
    public function setCurrencyAmount($value)
    {
        $this->_fields['CurrencyAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CurrencyAmount is set.
     *
     * @return true if CurrencyAmount is set.
     */
    public function isSetCurrencyAmount()
    {
        return !is_null($this->_fields['CurrencyAmount']['FieldValue']);
    }
    /**
     * Set the value of CurrencyAmount, return this.
     *
     * @param currencyAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCurrencyAmount($value)
    {
        $this->setCurrencyAmount($value);
        return $this;
    }
}