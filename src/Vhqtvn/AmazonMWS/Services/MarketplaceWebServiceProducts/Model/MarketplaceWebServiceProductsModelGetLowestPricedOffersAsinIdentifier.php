<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersAsinIdentifier
 * 
 * @property	string	$MarketplaceId
 * @property	string	$ASIN
 * @property	string	$ItemCondition
 * @property	string	$TimeOfOfferChange
 */
class MarketplaceWebServiceProductsModelGetLowestPricedOffersAsinIdentifier extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'TimeOfOfferChange' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
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