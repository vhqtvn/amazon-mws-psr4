<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier
 * 
 * @property	string	$MarketplaceId
 * @property	string	$SellerSKU
 * @property	string	$ItemCondition
 * @property	string	$TimeOfOfferChange
 */
class MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'TimeOfOfferChange' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this 
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }
    /**
     * Get the value of the ItemCondition property.
     *
     * @return String ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return $this 
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemCondition is set.
     *
     * @return true if ItemCondition is set.
     */
    public function isSetItemCondition()
    {
        return !is_null($this->_fields['ItemCondition']['FieldValue']);
    }
    /**
     * Set the value of ItemCondition, return this.
     *
     * @param itemCondition
     *             The new value to set.
     *
     * @return $this .
     */
    public function withItemCondition($value)
    {
        $this->setItemCondition($value);
        return $this;
    }
    /**
     * Get the value of the TimeOfOfferChange property.
     *
     * @return XMLGregorianCalendar TimeOfOfferChange.
     */
    public function getTimeOfOfferChange()
    {
        return $this->_fields['TimeOfOfferChange']['FieldValue'];
    }
    /**
     * Set the value of the TimeOfOfferChange property.
     *
     * @param string timeOfOfferChange
     * @return $this 
     */
    public function setTimeOfOfferChange($value)
    {
        $this->_fields['TimeOfOfferChange']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TimeOfOfferChange is set.
     *
     * @return true if TimeOfOfferChange is set.
     */
    public function isSetTimeOfOfferChange()
    {
        return !is_null($this->_fields['TimeOfOfferChange']['FieldValue']);
    }
    /**
     * Set the value of TimeOfOfferChange, return this.
     *
     * @param timeOfOfferChange
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTimeOfOfferChange($value)
    {
        $this->setTimeOfOfferChange($value);
        return $this;
    }
}