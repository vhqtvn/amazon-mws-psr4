<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKUResult
 * 
 * @property	string	$MarketplaceID
 * @property	string	$SKU
 * @property	string	$ItemCondition
 * @property	string	$status
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier	$Identifier
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary	$Summary
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSKUOfferDetailList	$Offers
 */
class MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKUResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceID' => array('FieldValue' => null, 'FieldType' => '@string'), 'SKU' => array('FieldValue' => null, 'FieldType' => '@string'), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => '@string'), 'status' => array('FieldValue' => null, 'FieldType' => '@string'), 'Identifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier::class), 'Summary' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary::class), 'Offers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSKUOfferDetailList::class));
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
     * @param string $MarketplaceID
     * @return $this
     */
    public function withMarketplaceID($MarketplaceID)
    {
        $this->setMarketplaceID($MarketplaceID);
        return $this;
    }
    /**
     * Get the value of the SKU property.
     *
     * @return String SKU.
     */
    public function getSKU()
    {
        return $this->_fields['SKU']['FieldValue'];
    }
    /**
     * Set the value of the SKU property.
     *
     * @param string sku
     * @return $this 
     */
    public function setSKU($value)
    {
        $this->_fields['SKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SKU is set.
     *
     * @return true if SKU is set.
     */
    public function isSetSKU()
    {
        return !is_null($this->_fields['SKU']['FieldValue']);
    }
    /**
     * Set the value of SKU, return this.
     *
     * @param string $SKU
     * @return $this
     */
    public function withSKU($SKU)
    {
        $this->setSKU($SKU);
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
     * @param string $ItemCondition
     * @return $this
     */
    public function withItemCondition($ItemCondition)
    {
        $this->setItemCondition($ItemCondition);
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
     * @param string $status
     * @return $this
     */
    public function withstatus($status)
    {
        $this->setstatus($status);
        return $this;
    }
    /**
     * Get the value of the Identifier property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier Identifier.
     */
    public function getIdentifier()
    {
        return $this->_fields['Identifier']['FieldValue'];
    }
    /**
     * Set the value of the Identifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier identifier
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersSkuIdentifier $Identifier
     * @return $this
     */
    public function withIdentifier($Identifier)
    {
        $this->setIdentifier($Identifier);
        return $this;
    }
    /**
     * Get the value of the Summary property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary Summary.
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary $Summary
     * @return $this
     */
    public function withSummary($Summary)
    {
        $this->setSummary($Summary);
        return $this;
    }
    /**
     * Get the value of the Offers property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSKUOfferDetailList Offers.
     */
    public function getOffers()
    {
        return $this->_fields['Offers']['FieldValue'];
    }
    /**
     * Set the value of the Offers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSKUOfferDetailList offers
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSKUOfferDetailList $Offers
     * @return $this
     */
    public function withOffers($Offers)
    {
        $this->setOffers($Offers);
        return $this;
    }
}