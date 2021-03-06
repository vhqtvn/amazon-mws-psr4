<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidReturnItem
 * 
 * @property	string	$SellerReturnItemId
 * @property	string	$SellerFulfillmentOrderItemId
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidItemReason	$InvalidItemReason
 */
class FbaOutboundServiceMwsModelInvalidReturnItem extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerReturnItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'InvalidItemReason' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidItemReason::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerReturnItemId property.
     *
     * @return \string SellerReturnItemId.
     */
    public function getSellerReturnItemId()
    {
        return $this->_fields['SellerReturnItemId']['FieldValue'];
    }
    /**
     * Set the value of the SellerReturnItemId property.
     *
     * @param string sellerReturnItemId
     * @return $this instance
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
     * @return \string SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return $this instance
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
     * Get the value of the InvalidItemReason property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidItemReason InvalidItemReason.
     */
    public function getInvalidItemReason()
    {
        return $this->_fields['InvalidItemReason']['FieldValue'];
    }
    /**
     * Set the value of the InvalidItemReason property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidItemReason invalidItemReason
     * @return $this instance
     */
    public function setInvalidItemReason($value)
    {
        $this->_fields['InvalidItemReason']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvalidItemReason is set.
     *
     * @return true if InvalidItemReason is set.
     */
    public function isSetInvalidItemReason()
    {
        return !is_null($this->_fields['InvalidItemReason']['FieldValue']);
    }
    /**
     * Set the value of InvalidItemReason, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidItemReason $InvalidItemReason
     * @return $this
     */
    public function withInvalidItemReason($InvalidItemReason)
    {
        $this->setInvalidItemReason($InvalidItemReason);
        return $this;
    }
}