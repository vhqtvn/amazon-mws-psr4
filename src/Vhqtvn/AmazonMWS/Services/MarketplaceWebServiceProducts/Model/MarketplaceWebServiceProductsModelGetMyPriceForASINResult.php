<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct	$Product
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError	$Error
 * @property	string	$ASIN
 * @property	string	$status
 */
class MarketplaceWebServiceProductsModelGetMyPriceForASINResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Product' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct::class), 'Error' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError::class), 'ASIN' => array('FieldValue' => null, 'FieldType' => '@string'), 'status' => array('FieldValue' => null, 'FieldType' => '@string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Product property.
     *
     * @return Product Product.
     */
    public function getProduct()
    {
        return $this->_fields['Product']['FieldValue'];
    }
    /**
     * Set the value of the Product property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct product
     * @return $this 
     */
    public function setProduct($value)
    {
        $this->_fields['Product']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Product is set.
     *
     * @return true if Product is set.
     */
    public function isSetProduct()
    {
        return !is_null($this->_fields['Product']['FieldValue']);
    }
    /**
     * Set the value of Product, return this.
     *
     * @param product
     *             The new value to set.
     *
     * @return $this .
     */
    public function withProduct($value)
    {
        $this->setProduct($value);
        return $this;
    }
    /**
     * Get the value of the Error property.
     *
     * @return Error Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }
    /**
     * Set the value of the Error property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError error
     * @return $this 
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set.
     */
    public function isSetError()
    {
        return !is_null($this->_fields['Error']['FieldValue']);
    }
    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set.
     *
     * @return $this .
     */
    public function withError($value)
    {
        $this->setError($value);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }
    /**
     * Get the value of the status property.
     *
     * @return String status.
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }
    /**
     * Set the value of the status property.
     *
     * @param string status
     * @return $this 
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if status is set.
     *
     * @return true if status is set.
     */
    public function isSetstatus()
    {
        return !is_null($this->_fields['status']['FieldValue']);
    }
    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return $this .
     */
    public function withstatus($value)
    {
        $this->setstatus($value);
        return $this;
    }
}