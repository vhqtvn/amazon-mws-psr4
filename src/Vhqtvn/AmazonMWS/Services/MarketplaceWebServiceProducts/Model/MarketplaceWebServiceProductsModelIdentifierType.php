<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier	$MarketplaceASIN
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier	$SKUIdentifier
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier MarketplaceASIN.
     */
    public function getMarketplaceASIN()
    {
        return $this->_fields['MarketplaceASIN']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceASIN property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier marketplaceASIN
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINIdentifier $MarketplaceASIN
     * @return $this
     */
    public function withMarketplaceASIN($MarketplaceASIN)
    {
        $this->setMarketplaceASIN($MarketplaceASIN);
        return $this;
    }
    /**
     * Get the value of the SKUIdentifier property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier SKUIdentifier.
     */
    public function getSKUIdentifier()
    {
        return $this->_fields['SKUIdentifier']['FieldValue'];
    }
    /**
     * Set the value of the SKUIdentifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier skuIdentifier
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUIdentifier $SKUIdentifier
     * @return $this
     */
    public function withSKUIdentifier($SKUIdentifier)
    {
        $this->setSKUIdentifier($SKUIdentifier);
        return $this;
    }
}