<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList
 * 
 * @property	array	$Product
 */
class MarketplaceWebServiceProductsModelProductList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Product' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the Product property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct[] Product.
     */
    public function getProduct()
    {
        if ($this->_fields['Product']['FieldValue'] == null) {
            $this->_fields['Product']['FieldValue'] = array();
        }
        return $this->_fields['Product']['FieldValue'];
    }
    /**
     * Set the value of the Product property.
     *
     * @param array product
     * @return $this 
     */
    public function setProduct($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Product']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Product.
     */
    public function unsetProduct()
    {
        $this->_fields['Product']['FieldValue'] = array();
    }
    /**
     * Check to see if Product is set.
     *
     * @return true if Product is set.
     */
    public function isSetProduct()
    {
        return !empty($this->_fields['Product']['FieldValue']);
    }
    /**
     * Add values for Product, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct[] $Product_array,...
     * @return $this
     */
    public function withProduct(...$Product_array)
    {
        foreach ($Product_array as $Product) {
            $this->_fields['Product']['FieldValue'][] = $Product;
        }
        return $this;
    }
}