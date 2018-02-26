<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCreateReturnItem
 * 
 * @property	string	$SellerReturnItemId
 * @property	string	$SellerFulfillmentOrderItemId
 * @property	string	$AmazonShipmentId
 * @property	string	$ReturnReasonCode
 * @property	string	$ReturnComment
 */
class FbaOutboundServiceMwsModelCreateReturnItem extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerReturnItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmazonShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReturnReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReturnComment' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerReturnItemId property.
     *
     * @return String SellerReturnItemId.
     */
    public function getSellerReturnItemId()
    {
        return $this->_fields['SellerReturnItemId']['FieldValue'];
    }
    /**
     * Set the value of the SellerReturnItemId property.
     *
     * @param string sellerReturnItemId
     * @return $this 
     */
    public function setSellerReturnItemId($value)
    {
        $this->_fields['SellerReturnItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerReturnItemId is set.
     *
     * @return true if SellerReturnItemId is set.
     */
    public function isSetSellerReturnItemId()
    {
        return !is_null($this->_fields['SellerReturnItemId']['FieldValue']);
    }
    /**
     * Set the value of SellerReturnItemId, return this.
     *
     * @param string $SellerReturnItemId
     * @return $this
     */
    public function withSellerReturnItemId($SellerReturnItemId)
    {
        $this->setSellerReturnItemId($SellerReturnItemId);
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
     * @param string $SellerFulfillmentOrderItemId
     * @return $this
     */
    public function withSellerFulfillmentOrderItemId($SellerFulfillmentOrderItemId)
    {
        $this->setSellerFulfillmentOrderItemId($SellerFulfillmentOrderItemId);
        return $this;
    }
    /**
     * Get the value of the AmazonShipmentId property.
     *
     * @return String AmazonShipmentId.
     */
    public function getAmazonShipmentId()
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonShipmentId property.
     *
     * @param string amazonShipmentId
     * @return $this 
     */
    public function setAmazonShipmentId($value)
    {
        $this->_fields['AmazonShipmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonShipmentId is set.
     *
     * @return true if AmazonShipmentId is set.
     */
    public function isSetAmazonShipmentId()
    {
        return !is_null($this->_fields['AmazonShipmentId']['FieldValue']);
    }
    /**
     * Set the value of AmazonShipmentId, return this.
     *
     * @param string $AmazonShipmentId
     * @return $this
     */
    public function withAmazonShipmentId($AmazonShipmentId)
    {
        $this->setAmazonShipmentId($AmazonShipmentId);
        return $this;
    }
    /**
     * Get the value of the ReturnReasonCode property.
     *
     * @return String ReturnReasonCode.
     */
    public function getReturnReasonCode()
    {
        return $this->_fields['ReturnReasonCode']['FieldValue'];
    }
    /**
     * Set the value of the ReturnReasonCode property.
     *
     * @param string returnReasonCode
     * @return $this 
     */
    public function setReturnReasonCode($value)
    {
        $this->_fields['ReturnReasonCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnReasonCode is set.
     *
     * @return true if ReturnReasonCode is set.
     */
    public function isSetReturnReasonCode()
    {
        return !is_null($this->_fields['ReturnReasonCode']['FieldValue']);
    }
    /**
     * Set the value of ReturnReasonCode, return this.
     *
     * @param string $ReturnReasonCode
     * @return $this
     */
    public function withReturnReasonCode($ReturnReasonCode)
    {
        $this->setReturnReasonCode($ReturnReasonCode);
        return $this;
    }
    /**
     * Get the value of the ReturnComment property.
     *
     * @return String ReturnComment.
     */
    public function getReturnComment()
    {
        return $this->_fields['ReturnComment']['FieldValue'];
    }
    /**
     * Set the value of the ReturnComment property.
     *
     * @param string returnComment
     * @return $this 
     */
    public function setReturnComment($value)
    {
        $this->_fields['ReturnComment']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnComment is set.
     *
     * @return true if ReturnComment is set.
     */
    public function isSetReturnComment()
    {
        return !is_null($this->_fields['ReturnComment']['FieldValue']);
    }
    /**
     * Set the value of ReturnComment, return this.
     *
     * @param string $ReturnComment
     * @return $this
     */
    public function withReturnComment($ReturnComment)
    {
        $this->setReturnComment($ReturnComment);
        return $this;
    }
}