<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferCountType[]	$OfferCount
 */
class MarketplaceWebServiceProductsModelBuyBoxEligibleOffers extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('OfferCount' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferCountType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the OfferCount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferCountType[] OfferCount.
     */
    public function getOfferCount()
    {
        if ($this->_fields['OfferCount']['FieldValue'] == null) {
            $this->_fields['OfferCount']['FieldValue'] = array();
        }
        return $this->_fields['OfferCount']['FieldValue'];
    }
    /**
     * Set the value of the OfferCount property.
     *
     * @param array offerCount
     * @return $this instance
     */
    public function setOfferCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OfferCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OfferCount.
     */
    public function unsetOfferCount()
    {
        $this->_fields['OfferCount']['FieldValue'] = array();
    }
    /**
     * Check to see if OfferCount is set.
     *
     * @return true if OfferCount is set.
     */
    public function isSetOfferCount()
    {
        return !empty($this->_fields['OfferCount']['FieldValue']);
    }
    /**
     * Add values for OfferCount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferCountType[] $OfferCount_array,...
     * @return $this
     */
    public function withOfferCount(...$OfferCount_array)
    {
        foreach ($OfferCount_array as $OfferCount) {
            $this->_fields['OfferCount']['FieldValue'][] = $OfferCount;
        }
        return $this;
    }
}