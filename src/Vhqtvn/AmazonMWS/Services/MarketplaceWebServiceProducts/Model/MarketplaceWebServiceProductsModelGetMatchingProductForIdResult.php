<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList	$Products
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError	$Error
 * @property	string	$Id
 * @property	string	$IdType
 * @property	string	$status
 */
class MarketplaceWebServiceProductsModelGetMatchingProductForIdResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Products' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList::class), 'Error' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError::class), 'Id' => array('FieldValue' => null, 'FieldType' => '@string'), 'IdType' => array('FieldValue' => null, 'FieldType' => '@string'), 'status' => array('FieldValue' => null, 'FieldType' => '@string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Products property.
     *
     * @return ProductList Products.
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
     * Get the value of the Id property.
     *
     * @return String Id.
     */
    public function getId()
    {
        return $this->_fields['Id']['FieldValue'];
    }
    /**
     * Set the value of the Id property.
     *
     * @param string id
     * @return $this 
     */
    public function setId($value)
    {
        $this->_fields['Id']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Id is set.
     *
     * @return true if Id is set.
     */
    public function isSetId()
    {
        return !is_null($this->_fields['Id']['FieldValue']);
    }
    /**
     * Set the value of Id, return this.
     *
     * @param id
     *             The new value to set.
     *
     * @return $this .
     */
    public function withId($value)
    {
        $this->setId($value);
        return $this;
    }
    /**
     * Get the value of the IdType property.
     *
     * @return String IdType.
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }
    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @return $this 
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set.
     */
    public function isSetIdType()
    {
        return !is_null($this->_fields['IdType']['FieldValue']);
    }
    /**
     * Set the value of IdType, return this.
     *
     * @param idType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIdType($value)
    {
        $this->setIdType($value);
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