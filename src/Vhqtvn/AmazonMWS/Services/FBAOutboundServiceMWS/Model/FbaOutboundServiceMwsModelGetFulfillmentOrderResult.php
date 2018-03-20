<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentOrderResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrder	$FulfillmentOrder
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderItemList	$FulfillmentOrderItem
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentList	$FulfillmentShipment
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList	$ReturnItemList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList	$ReturnAuthorizationList
 */
class FbaOutboundServiceMwsModelGetFulfillmentOrderResult extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FulfillmentOrder' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrder::class), 'FulfillmentOrderItem' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderItemList::class), 'FulfillmentShipment' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentList::class), 'ReturnItemList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList::class), 'ReturnAuthorizationList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the FulfillmentOrder property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrder FulfillmentOrder.
     */
    public function getFulfillmentOrder()
    {
        return $this->_fields['FulfillmentOrder']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentOrder property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrder fulfillmentOrder
     * @return $this instance
     */
    public function setFulfillmentOrder($value)
    {
        $this->_fields['FulfillmentOrder']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentOrder is set.
     *
     * @return true if FulfillmentOrder is set.
     */
    public function isSetFulfillmentOrder()
    {
        return !is_null($this->_fields['FulfillmentOrder']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentOrder, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrder $FulfillmentOrder
     * @return $this
     */
    public function withFulfillmentOrder($FulfillmentOrder)
    {
        $this->setFulfillmentOrder($FulfillmentOrder);
        return $this;
    }
    /**
     * Get the value of the FulfillmentOrderItem property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderItemList FulfillmentOrderItem.
     */
    public function getFulfillmentOrderItem()
    {
        return $this->_fields['FulfillmentOrderItem']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentOrderItem property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderItemList fulfillmentOrderItem
     * @return $this instance
     */
    public function setFulfillmentOrderItem($value)
    {
        $this->_fields['FulfillmentOrderItem']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentOrderItem is set.
     *
     * @return true if FulfillmentOrderItem is set.
     */
    public function isSetFulfillmentOrderItem()
    {
        return !is_null($this->_fields['FulfillmentOrderItem']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentOrderItem, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderItemList $FulfillmentOrderItem
     * @return $this
     */
    public function withFulfillmentOrderItem($FulfillmentOrderItem)
    {
        $this->setFulfillmentOrderItem($FulfillmentOrderItem);
        return $this;
    }
    /**
     * Get the value of the FulfillmentShipment property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentList FulfillmentShipment.
     */
    public function getFulfillmentShipment()
    {
        return $this->_fields['FulfillmentShipment']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentShipment property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentList fulfillmentShipment
     * @return $this instance
     */
    public function setFulfillmentShipment($value)
    {
        $this->_fields['FulfillmentShipment']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentShipment is set.
     *
     * @return true if FulfillmentShipment is set.
     */
    public function isSetFulfillmentShipment()
    {
        return !is_null($this->_fields['FulfillmentShipment']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentShipment, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentList $FulfillmentShipment
     * @return $this
     */
    public function withFulfillmentShipment($FulfillmentShipment)
    {
        $this->setFulfillmentShipment($FulfillmentShipment);
        return $this;
    }
    /**
     * Get the value of the ReturnItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList ReturnItemList.
     */
    public function getReturnItemList()
    {
        return $this->_fields['ReturnItemList']['FieldValue'];
    }
    /**
     * Set the value of the ReturnItemList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList returnItemList
     * @return $this instance
     */
    public function setReturnItemList($value)
    {
        $this->_fields['ReturnItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnItemList is set.
     *
     * @return true if ReturnItemList is set.
     */
    public function isSetReturnItemList()
    {
        return !is_null($this->_fields['ReturnItemList']['FieldValue']);
    }
    /**
     * Set the value of ReturnItemList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList $ReturnItemList
     * @return $this
     */
    public function withReturnItemList($ReturnItemList)
    {
        $this->setReturnItemList($ReturnItemList);
        return $this;
    }
    /**
     * Get the value of the ReturnAuthorizationList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList ReturnAuthorizationList.
     */
    public function getReturnAuthorizationList()
    {
        return $this->_fields['ReturnAuthorizationList']['FieldValue'];
    }
    /**
     * Set the value of the ReturnAuthorizationList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList returnAuthorizationList
     * @return $this instance
     */
    public function setReturnAuthorizationList($value)
    {
        $this->_fields['ReturnAuthorizationList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnAuthorizationList is set.
     *
     * @return true if ReturnAuthorizationList is set.
     */
    public function isSetReturnAuthorizationList()
    {
        return !is_null($this->_fields['ReturnAuthorizationList']['FieldValue']);
    }
    /**
     * Set the value of ReturnAuthorizationList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList $ReturnAuthorizationList
     * @return $this
     */
    public function withReturnAuthorizationList($ReturnAuthorizationList)
    {
        $this->setReturnAuthorizationList($ReturnAuthorizationList);
        return $this;
    }
}