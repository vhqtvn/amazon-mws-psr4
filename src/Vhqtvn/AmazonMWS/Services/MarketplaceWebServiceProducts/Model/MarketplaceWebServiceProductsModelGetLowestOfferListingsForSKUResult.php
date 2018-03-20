<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKUResult
 * 
 * @property	bool	$AllOfferListingsConsidered
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct	$Product
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError	$Error
 * @property	string	$SellerSKU
 * @property	string	$status
 */
class MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKUResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AllOfferListingsConsidered' => array('FieldValue' => null, 'FieldType' => 'bool'), 'Product' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct::class), 'Error' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError::class), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => '@string'), 'status' => array('FieldValue' => null, 'FieldType' => '@string'));
        parent::__construct($data);
    }
    /**
     * Check the value of AllOfferListingsConsidered.
     *
     * @return true if AllOfferListingsConsidered is set to true.
     */
    public function isAllOfferListingsConsidered()
    {
        return !is_null($this->_fields['AllOfferListingsConsidered']['FieldValue']) && $this->_fields['AllOfferListingsConsidered']['FieldValue'];
    }
    /**
     * Get the value of the AllOfferListingsConsidered property.
     *
     * @return \bool AllOfferListingsConsidered.
     */
    public function getAllOfferListingsConsidered()
    {
        return $this->_fields['AllOfferListingsConsidered']['FieldValue'];
    }
    /**
     * Set the value of the AllOfferListingsConsidered property.
     *
     * @param bool allOfferListingsConsidered
     * @return $this instance
     */
    public function setAllOfferListingsConsidered($value)
    {
        $this->_fields['AllOfferListingsConsidered']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AllOfferListingsConsidered is set.
     *
     * @return true if AllOfferListingsConsidered is set.
     */
    public function isSetAllOfferListingsConsidered()
    {
        return !is_null($this->_fields['AllOfferListingsConsidered']['FieldValue']);
    }
    /**
     * Set the value of AllOfferListingsConsidered, return this.
     *
     * @param bool $AllOfferListingsConsidered
     * @return $this
     */
    public function withAllOfferListingsConsidered($AllOfferListingsConsidered)
    {
        $this->setAllOfferListingsConsidered($AllOfferListingsConsidered);
        return $this;
    }
    /**
     * Get the value of the Product property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct Product.
     */
    public function getProduct()
    {
        return $this->_fields['Product']['FieldValue'];
    }
    /**
     * Set the value of the Product property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct product
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct $Product
     * @return $this
     */
    public function withProduct($Product)
    {
        $this->setProduct($Product);
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
     * Get the value of the SellerSKU property.
     *
     * @return \string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param string $SellerSKU
     * @return $this
     */
    public function withSellerSKU($SellerSKU)
    {
        $this->setSellerSKU($SellerSKU);
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