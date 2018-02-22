<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces
 * 
 * Properties:
 * <ul>
 * 
 * <li>Marketplace: array</li>
 *
 * </ul>
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
     * @return List<Marketplace> Marketplace.
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
     * @return $this 
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
     * @param marketplace
     *             New values to add.
     *
     * @return $this .
     */
    public function withMarketplace()
    {
        foreach (func_get_args() as $Marketplace) {
            $this->_fields['Marketplace']['FieldValue'][] = $Marketplace;
        }
        return $this;
    }
}