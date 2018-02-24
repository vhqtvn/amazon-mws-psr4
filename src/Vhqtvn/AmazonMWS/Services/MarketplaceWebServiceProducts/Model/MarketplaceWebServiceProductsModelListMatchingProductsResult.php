<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList	$Products
 */
class MarketplaceWebServiceProductsModelListMatchingProductsResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Products' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Products property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList Products.
     */
    public function getProducts()
    {
        return $this->_fields['Products']['FieldValue'];
    }
    /**
     * Set the value of the Products property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList products
     * @return $this 
     */
    public function setProducts($value)
    {
        $this->_fields['Products']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Products is set.
     *
     * @return true if Products is set.
     */
    public function isSetProducts()
    {
        return !is_null($this->_fields['Products']['FieldValue']);
    }
    /**
     * Set the value of Products, return this.
     *
     * @param products
     *             The new value to set.
     *
     * @return $this .
     */
    public function withProducts($value)
    {
        $this->setProducts($value);
        return $this;
    }
}