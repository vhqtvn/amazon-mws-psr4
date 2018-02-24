<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney
 * 
 * @property	string	$CurrencyCode
 * @property	string	$Amount
 */
class MarketplaceWebServiceOrdersModelMoney extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'Amount' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the Amount property.
     *
     * @return String Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }
    /**
     * Set the value of the Amount property.
     *
     * @param string amount
     * @return $this 
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }
    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }
}