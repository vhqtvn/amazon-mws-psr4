<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceASIN: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier</li>
 * <li>SKUIdentifier: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelIdentifierType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceASIN' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier::class), 'SKUIdentifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceASIN property.
     *
     * @return ASINIdentifier MarketplaceASIN.
     */
    public function getMarketplaceASIN()
    {
        return $this->_fields['MarketplaceASIN']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceASIN property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier marketplaceASIN
     * @return $this 
     */
    public function setMarketplaceASIN($value)
    {
        $this->_fields['MarketplaceASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceASIN is set.
     *
     * @return true if MarketplaceASIN is set.
     */
    public function isSetMarketplaceASIN()
    {
        return !is_null($this->_fields['MarketplaceASIN']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceASIN, return this.
     *
     * @param marketplaceASIN
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceASIN($value)
    {
        $this->setMarketplaceASIN($value);
        return $this;
    }
    /**
     * Get the value of the SKUIdentifier property.
     *
     * @return SellerSKUIdentifier SKUIdentifier.
     */
    public function getSKUIdentifier()
    {
        return $this->_fields['SKUIdentifier']['FieldValue'];
    }
    /**
     * Set the value of the SKUIdentifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier skuIdentifier
     * @return $this 
     */
    public function setSKUIdentifier($value)
    {
        $this->_fields['SKUIdentifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SKUIdentifier is set.
     *
     * @return true if SKUIdentifier is set.
     */
    public function isSetSKUIdentifier()
    {
        return !is_null($this->_fields['SKUIdentifier']['FieldValue']);
    }
    /**
     * Set the value of SKUIdentifier, return this.
     *
     * @param skuIdentifier
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSKUIdentifier($value)
    {
        $this->setSKUIdentifier($value);
        return $this;
    }
}