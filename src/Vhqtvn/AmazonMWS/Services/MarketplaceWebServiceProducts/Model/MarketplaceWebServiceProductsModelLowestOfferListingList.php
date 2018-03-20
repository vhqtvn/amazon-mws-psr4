<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingType[]	$LowestOfferListing
 */
class MarketplaceWebServiceProductsModelLowestOfferListingList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('LowestOfferListing' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the LowestOfferListing property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingType[] LowestOfferListing.
     */
    public function getLowestOfferListing()
    {
        if ($this->_fields['LowestOfferListing']['FieldValue'] == null) {
            $this->_fields['LowestOfferListing']['FieldValue'] = array();
        }
        return $this->_fields['LowestOfferListing']['FieldValue'];
    }
    /**
     * Set the value of the LowestOfferListing property.
     *
     * @param array lowestOfferListing
     * @return $this instance
     */
    public function setLowestOfferListing($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['LowestOfferListing']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear LowestOfferListing.
     */
    public function unsetLowestOfferListing()
    {
        $this->_fields['LowestOfferListing']['FieldValue'] = array();
    }
    /**
     * Check to see if LowestOfferListing is set.
     *
     * @return true if LowestOfferListing is set.
     */
    public function isSetLowestOfferListing()
    {
        return !empty($this->_fields['LowestOfferListing']['FieldValue']);
    }
    /**
     * Add values for LowestOfferListing, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingType[] $LowestOfferListing_array,...
     * @return $this
     */
    public function withLowestOfferListing(...$LowestOfferListing_array)
    {
        foreach ($LowestOfferListing_array as $LowestOfferListing) {
            $this->_fields['LowestOfferListing']['FieldValue'][] = $LowestOfferListing;
        }
        return $this;
    }
}