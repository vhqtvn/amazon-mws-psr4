<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewItem
 * 
 * @property	string	$SellerSKU
 * @property	int	$Quantity
 * @property	string	$SellerFulfillmentOrderItemId
 */
class FbaOutboundServiceMwsModelGetFulfillmentPreviewItem extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this 
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
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }
    /**
     * Get the value of the Quantity property.
     *
     * @return int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }
    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return $this 
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }
    /**
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return String SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return $this 
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set.
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
        return !is_null($this->_fields['SellerFulfillmentOrderItemId']['FieldValue']);
    }
    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param sellerFulfillmentOrderItemId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);
        return $this;
    }
}