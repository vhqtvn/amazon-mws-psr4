<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRetrochargeEvent
 * 
 * @property	string	$RetrochargeEventType
 * @property	string	$AmazonOrderId
 * @property	string	$PostedDate
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$BaseTax
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$ShippingTax
 * @property	string	$MarketplaceName
 */
class MwsFinancesServiceModelRetrochargeEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('RetrochargeEventType' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'BaseTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'ShippingTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'MarketplaceName' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the RetrochargeEventType property.
     *
     * @return String RetrochargeEventType.
     */
    public function getRetrochargeEventType()
    {
        return $this->_fields['RetrochargeEventType']['FieldValue'];
    }
    /**
     * Set the value of the RetrochargeEventType property.
     *
     * @param string retrochargeEventType
     * @return $this 
     */
    public function setRetrochargeEventType($value)
    {
        $this->_fields['RetrochargeEventType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RetrochargeEventType is set.
     *
     * @return true if RetrochargeEventType is set.
     */
    public function isSetRetrochargeEventType()
    {
        return !is_null($this->_fields['RetrochargeEventType']['FieldValue']);
    }
    /**
     * Set the value of RetrochargeEventType, return this.
     *
     * @param string $RetrochargeEventType
     * @return $this
     */
    public function withRetrochargeEventType($RetrochargeEventType)
    {
        $this->setRetrochargeEventType($RetrochargeEventType);
        return $this;
    }
    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this 
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param string $AmazonOrderId
     * @return $this
     */
    public function withAmazonOrderId($AmazonOrderId)
    {
        $this->setAmazonOrderId($AmazonOrderId);
        return $this;
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this 
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
        return !is_null($this->_fields['PostedDate']['FieldValue']);
    }
    /**
     * Set the value of PostedDate, return this.
     *
     * @param string $PostedDate
     * @return $this
     */
    public function withPostedDate($PostedDate)
    {
        $this->setPostedDate($PostedDate);
        return $this;
    }
    /**
     * Get the value of the BaseTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency BaseTax.
     */
    public function getBaseTax()
    {
        return $this->_fields['BaseTax']['FieldValue'];
    }
    /**
     * Set the value of the BaseTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency baseTax
     * @return $this 
     */
    public function setBaseTax($value)
    {
        $this->_fields['BaseTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BaseTax is set.
     *
     * @return true if BaseTax is set.
     */
    public function isSetBaseTax()
    {
        return !is_null($this->_fields['BaseTax']['FieldValue']);
    }
    /**
     * Set the value of BaseTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $BaseTax
     * @return $this
     */
    public function withBaseTax($BaseTax)
    {
        $this->setBaseTax($BaseTax);
        return $this;
    }
    /**
     * Get the value of the ShippingTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency ShippingTax.
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }
    /**
     * Set the value of the ShippingTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency shippingTax
     * @return $this 
     */
    public function setShippingTax($value)
    {
        $this->_fields['ShippingTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingTax is set.
     *
     * @return true if ShippingTax is set.
     */
    public function isSetShippingTax()
    {
        return !is_null($this->_fields['ShippingTax']['FieldValue']);
    }
    /**
     * Set the value of ShippingTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $ShippingTax
     * @return $this
     */
    public function withShippingTax($ShippingTax)
    {
        $this->setShippingTax($ShippingTax);
        return $this;
    }
    /**
     * Get the value of the MarketplaceName property.
     *
     * @return String MarketplaceName.
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @return $this 
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set.
     */
    public function isSetMarketplaceName()
    {
        return !is_null($this->_fields['MarketplaceName']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param string $MarketplaceName
     * @return $this
     */
    public function withMarketplaceName($MarketplaceName)
    {
        $this->setMarketplaceName($MarketplaceName);
        return $this;
    }
}