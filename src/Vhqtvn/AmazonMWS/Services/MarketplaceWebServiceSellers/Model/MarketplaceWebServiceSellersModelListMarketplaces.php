<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelMarketplace[]	$Marketplace
 */
class MarketplaceWebServiceSellersModelListMarketplaces extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Marketplace' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelMarketplace::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the Marketplace property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelMarketplace[] Marketplace.
     */
    public function getMarketplace()
    {
        if ($this->_fields['Marketplace']['FieldValue'] == null) {
            $this->_fields['Marketplace']['FieldValue'] = array();
        }
        return $this->_fields['Marketplace']['FieldValue'];
    }
    /**
     * Set the value of the Marketplace property.
     *
     * @param array marketplace
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Marketplace.
     */
    public function unsetMarketplace()
    {
        $this->_fields['Marketplace']['FieldValue'] = array();
    }
    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !empty($this->_fields['Marketplace']['FieldValue']);
    }
    /**
     * Add values for Marketplace, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelMarketplace[] $Marketplace_array,...
     * @return $this
     */
    public function withMarketplace(...$Marketplace_array)
    {
        foreach ($Marketplace_array as $Marketplace) {
            $this->_fields['Marketplace']['FieldValue'][] = $Marketplace;
        }
        return $this;
    }
}