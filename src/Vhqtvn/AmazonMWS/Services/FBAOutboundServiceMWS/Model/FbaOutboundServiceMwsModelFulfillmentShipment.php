<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipment
 * 
 * @property	string	$AmazonShipmentId
 * @property	string	$FulfillmentCenterId
 * @property	string	$FulfillmentShipmentStatus
 * @property	string	$ShippingDateTime
 * @property	string	$EstimatedArrivalDateTime
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentItemList	$FulfillmentShipmentItem
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentPackageList	$FulfillmentShipmentPackage
 */
class FbaOutboundServiceMwsModelFulfillmentShipment extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AmazonShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentShipmentItem' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentItemList::class), 'FulfillmentShipmentPackage' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentPackageList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the AmazonShipmentId property.
     *
     * @return \string AmazonShipmentId.
     */
    public function getAmazonShipmentId()
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonShipmentId property.
     *
     * @param string amazonShipmentId
     * @return $this instance
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
     * Get the value of the FulfillmentCenterId property.
     *
     * @return \string FulfillmentCenterId.
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @return $this instance
     */
    public function setFulfillmentCenterId($value)
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentCenterId is set.
     *
     * @return true if FulfillmentCenterId is set.
     */
    public function isSetFulfillmentCenterId()
    {
        return !is_null($this->_fields['FulfillmentCenterId']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentCenterId, return this.
     *
     * @param string $FulfillmentCenterId
     * @return $this
     */
    public function withFulfillmentCenterId($FulfillmentCenterId)
    {
        $this->setFulfillmentCenterId($FulfillmentCenterId);
        return $this;
    }
    /**
     * Get the value of the FulfillmentShipmentStatus property.
     *
     * @return \string FulfillmentShipmentStatus.
     */
    public function getFulfillmentShipmentStatus()
    {
        return $this->_fields['FulfillmentShipmentStatus']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentShipmentStatus property.
     *
     * @param string fulfillmentShipmentStatus
     * @return $this instance
     */
    public function setFulfillmentShipmentStatus($value)
    {
        $this->_fields['FulfillmentShipmentStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentShipmentStatus is set.
     *
     * @return true if FulfillmentShipmentStatus is set.
     */
    public function isSetFulfillmentShipmentStatus()
    {
        return !is_null($this->_fields['FulfillmentShipmentStatus']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentShipmentStatus, return this.
     *
     * @param string $FulfillmentShipmentStatus
     * @return $this
     */
    public function withFulfillmentShipmentStatus($FulfillmentShipmentStatus)
    {
        $this->setFulfillmentShipmentStatus($FulfillmentShipmentStatus);
        return $this;
    }
    /**
     * Get the value of the ShippingDateTime property.
     *
     * @return \DateTime ShippingDateTime.
     */
    public function getShippingDateTime()
    {
        return $this->_fields['ShippingDateTime']['FieldValue'];
    }
    /**
     * Set the value of the ShippingDateTime property.
     *
     * @param string shippingDateTime
     * @return $this instance
     */
    public function setShippingDateTime($value)
    {
        $this->_fields['ShippingDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingDateTime is set.
     *
     * @return true if ShippingDateTime is set.
     */
    public function isSetShippingDateTime()
    {
        return !is_null($this->_fields['ShippingDateTime']['FieldValue']);
    }
    /**
     * Set the value of ShippingDateTime, return this.
     *
     * @param string $ShippingDateTime
     * @return $this
     */
    public function withShippingDateTime($ShippingDateTime)
    {
        $this->setShippingDateTime($ShippingDateTime);
        return $this;
    }
    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return \DateTime EstimatedArrivalDateTime.
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string estimatedArrivalDateTime
     * @return $this instance
     */
    public function setEstimatedArrivalDateTime($value)
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedArrivalDateTime is set.
     *
     * @return true if EstimatedArrivalDateTime is set.
     */
    public function isSetEstimatedArrivalDateTime()
    {
        return !is_null($this->_fields['EstimatedArrivalDateTime']['FieldValue']);
    }
    /**
     * Set the value of EstimatedArrivalDateTime, return this.
     *
     * @param string $EstimatedArrivalDateTime
     * @return $this
     */
    public function withEstimatedArrivalDateTime($EstimatedArrivalDateTime)
    {
        $this->setEstimatedArrivalDateTime($EstimatedArrivalDateTime);
        return $this;
    }
    /**
     * Get the value of the FulfillmentShipmentItem property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentItemList FulfillmentShipmentItem.
     */
    public function getFulfillmentShipmentItem()
    {
        return $this->_fields['FulfillmentShipmentItem']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentShipmentItem property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentItemList fulfillmentShipmentItem
     * @return $this instance
     */
    public function setFulfillmentShipmentItem($value)
    {
        $this->_fields['FulfillmentShipmentItem']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentShipmentItem is set.
     *
     * @return true if FulfillmentShipmentItem is set.
     */
    public function isSetFulfillmentShipmentItem()
    {
        return !is_null($this->_fields['FulfillmentShipmentItem']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentShipmentItem, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentItemList $FulfillmentShipmentItem
     * @return $this
     */
    public function withFulfillmentShipmentItem($FulfillmentShipmentItem)
    {
        $this->setFulfillmentShipmentItem($FulfillmentShipmentItem);
        return $this;
    }
    /**
     * Get the value of the FulfillmentShipmentPackage property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentPackageList FulfillmentShipmentPackage.
     */
    public function getFulfillmentShipmentPackage()
    {
        return $this->_fields['FulfillmentShipmentPackage']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentShipmentPackage property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentPackageList fulfillmentShipmentPackage
     * @return $this instance
     */
    public function setFulfillmentShipmentPackage($value)
    {
        $this->_fields['FulfillmentShipmentPackage']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentShipmentPackage is set.
     *
     * @return true if FulfillmentShipmentPackage is set.
     */
    public function isSetFulfillmentShipmentPackage()
    {
        return !is_null($this->_fields['FulfillmentShipmentPackage']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentShipmentPackage, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentPackageList $FulfillmentShipmentPackage
     * @return $this
     */
    public function withFulfillmentShipmentPackage($FulfillmentShipmentPackage)
    {
        $this->setFulfillmentShipmentPackage($FulfillmentShipmentPackage);
        return $this;
    }
}