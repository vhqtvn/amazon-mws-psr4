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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProductList $Products
     * @return $this
     */
    public function withProducts($Products)
    {
        $this->setProducts($Products);
        return $this;
    }
    /**
     * Get the value of the Error property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }
    /**
     * Set the value of the Error property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError error
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError $Error
     * @return $this
     */
    public function withError($Error)
    {
        $this->setError($Error);
        return $this;
    }
    /**
     * Get the value of the Id property.
     *
     * @return \string Id.
     */
    public function getId()
    {
        return $this->_fields['Id']['FieldValue'];
    }
    /**
     * Set the value of the Id property.
     *
     * @param string id
     * @return $this instance
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
     * @param string $Id
     * @return $this
     */
    public function withId($Id)
    {
        $this->setId($Id);
        return $this;
    }
    /**
     * Get the value of the IdType property.
     *
     * @return \string IdType.
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }
    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @return $this instance
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
     * @param string $IdType
     * @return $this
     */
    public function withIdType($IdType)
    {
        $this->setIdType($IdType);
        return $this;
    }
    /**
     * Get the value of the status property.
     *
     * @return \string status.
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }
    /**
     * Set the value of the status property.
     *
     * @param string status
     * @return $this instance
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
     * @param string $status
     * @return $this
     */
    public function withstatus($status)
    {
        $this->setstatus($status);
        return $this;
    }
}