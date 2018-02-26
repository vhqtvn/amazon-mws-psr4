<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOfferListingsList
 * 
 * @property	array	$OfferListingCount
 */
class MarketplaceWebServiceProductsModelNumberOfOfferListingsList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('OfferListingCount' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferListingCountType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the OfferListingCount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferListingCountType[] OfferListingCount.
     */
    public function getOfferListingCount()
    {
        if ($this->_fields['OfferListingCount']['FieldValue'] == null) {
            $this->_fields['OfferListingCount']['FieldValue'] = array();
        }
        return $this->_fields['OfferListingCount']['FieldValue'];
    }
    /**
     * Set the value of the OfferListingCount property.
     *
     * @param array offerListingCount
     * @return $this 
     */
    public function setOfferListingCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OfferListingCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OfferListingCount.
     */
    public function unsetOfferListingCount()
    {
        $this->_fields['OfferListingCount']['FieldValue'] = array();
    }
    /**
     * Check to see if OfferListingCount is set.
     *
     * @return true if OfferListingCount is set.
     */
    public function isSetOfferListingCount()
    {
        return !empty($this->_fields['OfferListingCount']['FieldValue']);
    }
    /**
     * Add values for OfferListingCount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferListingCountType[] $OfferListingCount_array,...
     * @return $this
     */
    public function withOfferListingCount(...$OfferListingCount_array)
    {
        foreach ($OfferListingCount_array as $OfferListingCount) {
            $this->_fields['OfferListingCount']['FieldValue'][] = $OfferListingCount;
        }
        return $this;
    }
}