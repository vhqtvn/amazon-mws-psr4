<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOffersList
 * 
 * @property	array	$Offer
 */
class MarketplaceWebServiceProductsModelOffersList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Offer' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the Offer property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferType[] Offer.
     */
    public function getOffer()
    {
        if ($this->_fields['Offer']['FieldValue'] == null) {
            $this->_fields['Offer']['FieldValue'] = array();
        }
        return $this->_fields['Offer']['FieldValue'];
    }
    /**
     * Set the value of the Offer property.
     *
     * @param array offer
     * @return $this 
     */
    public function setOffer($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Offer']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Offer.
     */
    public function unsetOffer()
    {
        $this->_fields['Offer']['FieldValue'] = array();
    }
    /**
     * Check to see if Offer is set.
     *
     * @return true if Offer is set.
     */
    public function isSetOffer()
    {
        return !empty($this->_fields['Offer']['FieldValue']);
    }
    /**
     * Add values for Offer, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferType $Offer_array,...
     * @return $this
     */
    public function withOffer(...$Offer_array)
    {
        foreach ($Offer_array as $Offer) {
            $this->_fields['Offer']['FieldValue'][] = $Offer;
        }
        return $this;
    }
}