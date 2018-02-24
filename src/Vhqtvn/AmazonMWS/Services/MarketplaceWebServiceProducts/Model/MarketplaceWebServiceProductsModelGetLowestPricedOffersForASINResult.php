<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINResult
 * 
 * @property	string	$MarketplaceID
 * @property	string	$ASIN
 * @property	string	$ItemCondition
 * @property	string	$status
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersAsinIdentifier	$Identifier
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary	$Summary
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINOfferDetailList	$Offers
 */
class MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceID' => array('FieldValue' => null, 'FieldType' => '@string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => '@string'), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => '@string'), 'status' => array('FieldValue' => null, 'FieldType' => '@string'), 'Identifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersAsinIdentifier::class), 'Summary' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary::class), 'Offers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINOfferDetailList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceID property.
     *
     * @return String MarketplaceID.
     */
    public function getMarketplaceID()
    {
        return $this->_fields['MarketplaceID']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceID property.
     *
     * @param string marketplaceID
     * @return $this 
     */
    public function setMarketplaceID($value)
    {
        $this->_fields['MarketplaceID']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceID is set.
     *
     * @return true if MarketplaceID is set.
     */
    public function isSetMarketplaceID()
    {
        return !is_null($this->_fields['MarketplaceID']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceID, return this.
     *
     * @param marketplaceID
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceID($value)
    {
        $this->setMarketplaceID($value);
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
     * Get the value of the status property.
     *
     * @return String status.
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }
    /**
     * Set the value of the status property.
     *
     * @param string status
     * @return $this 
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if status is set.
     *
     * @return true if status is set.
     */
    public function isSetstatus()
    {
        return !is_null($this->_fields['status']['FieldValue']);
    }
    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return $this .
     */
    public function withstatus($value)
    {
        $this->setstatus($value);
        return $this;
    }
    /**
     * Get the value of the Identifier property.
     *
     * @return GetLowestPricedOffersAsinIdentifier Identifier.
     */
    public function getIdentifier()
    {
        return $this->_fields['Identifier']['FieldValue'];
    }
    /**
     * Set the value of the Identifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersAsinIdentifier identifier
     * @return $this 
     */
    public function setIdentifier($value)
    {
        $this->_fields['Identifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Identifier is set.
     *
     * @return true if Identifier is set.
     */
    public function isSetIdentifier()
    {
        return !is_null($this->_fields['Identifier']['FieldValue']);
    }
    /**
     * Set the value of Identifier, return this.
     *
     * @param identifier
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIdentifier($value)
    {
        $this->setIdentifier($value);
        return $this;
    }
    /**
     * Get the value of the Summary property.
     *
     * @return Summary Summary.
     */
    public function getSummary()
    {
        return $this->_fields['Summary']['FieldValue'];
    }
    /**
     * Set the value of the Summary property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary summary
     * @return $this 
     */
    public function setSummary($value)
    {
        $this->_fields['Summary']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Summary is set.
     *
     * @return true if Summary is set.
     */
    public function isSetSummary()
    {
        return !is_null($this->_fields['Summary']['FieldValue']);
    }
    /**
     * Set the value of Summary, return this.
     *
     * @param summary
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSummary($value)
    {
        $this->setSummary($value);
        return $this;
    }
    /**
     * Get the value of the Offers property.
     *
     * @return ASINOfferDetailList Offers.
     */
    public function getOffers()
    {
        return $this->_fields['Offers']['FieldValue'];
    }
    /**
     * Set the value of the Offers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINOfferDetailList offers
     * @return $this 
     */
    public function setOffers($value)
    {
        $this->_fields['Offers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Offers is set.
     *
     * @return true if Offers is set.
     */
    public function isSetOffers()
    {
        return !is_null($this->_fields['Offers']['FieldValue']);
    }
    /**
     * Set the value of Offers, return this.
     *
     * @param offers
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOffers($value)
    {
        $this->setOffers($value);
        return $this;
    }
}