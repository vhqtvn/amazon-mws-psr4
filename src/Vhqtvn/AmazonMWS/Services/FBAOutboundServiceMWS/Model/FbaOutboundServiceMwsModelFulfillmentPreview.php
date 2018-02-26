<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreview
 * 
 * @property	string	$ShippingSpeedCategory
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelScheduledDeliveryInfo	$ScheduledDeliveryInfo
 * @property	bool	$IsFulfillable
 * @property	bool	$IsCODCapable
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelWeight	$EstimatedShippingWeight
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFeeList	$EstimatedFees
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewShipmentList	$FulfillmentPreviewShipments
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUnfulfillablePreviewItemList	$UnfulfillablePreviewItems
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelStringList	$OrderUnfulfillableReasons
 * @property	string	$MarketplaceId
 */
class FbaOutboundServiceMwsModelFulfillmentPreview extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShippingSpeedCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'ScheduledDeliveryInfo' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelScheduledDeliveryInfo::class), 'IsFulfillable' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IsCODCapable' => array('FieldValue' => null, 'FieldType' => 'bool'), 'EstimatedShippingWeight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelWeight::class), 'EstimatedFees' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFeeList::class), 'FulfillmentPreviewShipments' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewShipmentList::class), 'UnfulfillablePreviewItems' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUnfulfillablePreviewItemList::class), 'OrderUnfulfillableReasons' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelStringList::class), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShippingSpeedCategory property.
     *
     * @return String ShippingSpeedCategory.
     */
    public function getShippingSpeedCategory()
    {
        return $this->_fields['ShippingSpeedCategory']['FieldValue'];
    }
    /**
     * Set the value of the ShippingSpeedCategory property.
     *
     * @param string shippingSpeedCategory
     * @return $this 
     */
    public function setShippingSpeedCategory($value)
    {
        $this->_fields['ShippingSpeedCategory']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingSpeedCategory is set.
     *
     * @return true if ShippingSpeedCategory is set.
     */
    public function isSetShippingSpeedCategory()
    {
        return !is_null($this->_fields['ShippingSpeedCategory']['FieldValue']);
    }
    /**
     * Set the value of ShippingSpeedCategory, return this.
     *
     * @param string $ShippingSpeedCategory
     * @return $this
     */
    public function withShippingSpeedCategory($ShippingSpeedCategory)
    {
        $this->setShippingSpeedCategory($ShippingSpeedCategory);
        return $this;
    }
    /**
     * Get the value of the ScheduledDeliveryInfo property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelScheduledDeliveryInfo ScheduledDeliveryInfo.
     */
    public function getScheduledDeliveryInfo()
    {
        return $this->_fields['ScheduledDeliveryInfo']['FieldValue'];
    }
    /**
     * Set the value of the ScheduledDeliveryInfo property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelScheduledDeliveryInfo scheduledDeliveryInfo
     * @return $this 
     */
    public function setScheduledDeliveryInfo($value)
    {
        $this->_fields['ScheduledDeliveryInfo']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ScheduledDeliveryInfo is set.
     *
     * @return true if ScheduledDeliveryInfo is set.
     */
    public function isSetScheduledDeliveryInfo()
    {
        return !is_null($this->_fields['ScheduledDeliveryInfo']['FieldValue']);
    }
    /**
     * Set the value of ScheduledDeliveryInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelScheduledDeliveryInfo $ScheduledDeliveryInfo
     * @return $this
     */
    public function withScheduledDeliveryInfo($ScheduledDeliveryInfo)
    {
        $this->setScheduledDeliveryInfo($ScheduledDeliveryInfo);
        return $this;
    }
    /**
     * Check the value of IsFulfillable.
     *
     * @return true if IsFulfillable is set to true.
     */
    public function isIsFulfillable()
    {
        return $this->_fields['IsFulfillable']['FieldValue'];
    }
    /**
     * Get the value of the IsFulfillable property.
     *
     * @return boolean IsFulfillable.
     */
    public function getIsFulfillable()
    {
        return $this->_fields['IsFulfillable']['FieldValue'];
    }
    /**
     * Set the value of the IsFulfillable property.
     *
     * @param bool isFulfillable
     * @return $this 
     */
    public function setIsFulfillable($value)
    {
        $this->_fields['IsFulfillable']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsFulfillable is set.
     *
     * @return true if IsFulfillable is set.
     */
    public function isSetIsFulfillable()
    {
        return !is_null($this->_fields['IsFulfillable']['FieldValue']);
    }
    /**
     * Set the value of IsFulfillable, return this.
     *
     * @param bool $IsFulfillable
     * @return $this
     */
    public function withIsFulfillable($IsFulfillable)
    {
        $this->setIsFulfillable($IsFulfillable);
        return $this;
    }
    /**
     * Check the value of IsCODCapable.
     *
     * @return true if IsCODCapable is set to true.
     */
    public function isIsCODCapable()
    {
        return !is_null($this->_fields['IsCODCapable']['FieldValue']) && $this->_fields['IsCODCapable']['FieldValue'];
    }
    /**
     * Get the value of the IsCODCapable property.
     *
     * @return Boolean IsCODCapable.
     */
    public function getIsCODCapable()
    {
        return $this->_fields['IsCODCapable']['FieldValue'];
    }
    /**
     * Set the value of the IsCODCapable property.
     *
     * @param bool isCODCapable
     * @return $this 
     */
    public function setIsCODCapable($value)
    {
        $this->_fields['IsCODCapable']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsCODCapable is set.
     *
     * @return true if IsCODCapable is set.
     */
    public function isSetIsCODCapable()
    {
        return !is_null($this->_fields['IsCODCapable']['FieldValue']);
    }
    /**
     * Set the value of IsCODCapable, return this.
     *
     * @param bool $IsCODCapable
     * @return $this
     */
    public function withIsCODCapable($IsCODCapable)
    {
        $this->setIsCODCapable($IsCODCapable);
        return $this;
    }
    /**
     * Get the value of the EstimatedShippingWeight property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelWeight EstimatedShippingWeight.
     */
    public function getEstimatedShippingWeight()
    {
        return $this->_fields['EstimatedShippingWeight']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedShippingWeight property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelWeight estimatedShippingWeight
     * @return $this 
     */
    public function setEstimatedShippingWeight($value)
    {
        $this->_fields['EstimatedShippingWeight']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedShippingWeight is set.
     *
     * @return true if EstimatedShippingWeight is set.
     */
    public function isSetEstimatedShippingWeight()
    {
        return !is_null($this->_fields['EstimatedShippingWeight']['FieldValue']);
    }
    /**
     * Set the value of EstimatedShippingWeight, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelWeight $EstimatedShippingWeight
     * @return $this
     */
    public function withEstimatedShippingWeight($EstimatedShippingWeight)
    {
        $this->setEstimatedShippingWeight($EstimatedShippingWeight);
        return $this;
    }
    /**
     * Get the value of the EstimatedFees property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFeeList EstimatedFees.
     */
    public function getEstimatedFees()
    {
        return $this->_fields['EstimatedFees']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedFees property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFeeList estimatedFees
     * @return $this 
     */
    public function setEstimatedFees($value)
    {
        $this->_fields['EstimatedFees']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedFees is set.
     *
     * @return true if EstimatedFees is set.
     */
    public function isSetEstimatedFees()
    {
        return !is_null($this->_fields['EstimatedFees']['FieldValue']);
    }
    /**
     * Set the value of EstimatedFees, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFeeList $EstimatedFees
     * @return $this
     */
    public function withEstimatedFees($EstimatedFees)
    {
        $this->setEstimatedFees($EstimatedFees);
        return $this;
    }
    /**
     * Get the value of the FulfillmentPreviewShipments property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewShipmentList FulfillmentPreviewShipments.
     */
    public function getFulfillmentPreviewShipments()
    {
        return $this->_fields['FulfillmentPreviewShipments']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentPreviewShipments property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewShipmentList fulfillmentPreviewShipments
     * @return $this 
     */
    public function setFulfillmentPreviewShipments($value)
    {
        $this->_fields['FulfillmentPreviewShipments']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentPreviewShipments is set.
     *
     * @return true if FulfillmentPreviewShipments is set.
     */
    public function isSetFulfillmentPreviewShipments()
    {
        return !is_null($this->_fields['FulfillmentPreviewShipments']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentPreviewShipments, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewShipmentList $FulfillmentPreviewShipments
     * @return $this
     */
    public function withFulfillmentPreviewShipments($FulfillmentPreviewShipments)
    {
        $this->setFulfillmentPreviewShipments($FulfillmentPreviewShipments);
        return $this;
    }
    /**
     * Get the value of the UnfulfillablePreviewItems property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUnfulfillablePreviewItemList UnfulfillablePreviewItems.
     */
    public function getUnfulfillablePreviewItems()
    {
        return $this->_fields['UnfulfillablePreviewItems']['FieldValue'];
    }
    /**
     * Set the value of the UnfulfillablePreviewItems property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUnfulfillablePreviewItemList unfulfillablePreviewItems
     * @return $this 
     */
    public function setUnfulfillablePreviewItems($value)
    {
        $this->_fields['UnfulfillablePreviewItems']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if UnfulfillablePreviewItems is set.
     *
     * @return true if UnfulfillablePreviewItems is set.
     */
    public function isSetUnfulfillablePreviewItems()
    {
        return !is_null($this->_fields['UnfulfillablePreviewItems']['FieldValue']);
    }
    /**
     * Set the value of UnfulfillablePreviewItems, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUnfulfillablePreviewItemList $UnfulfillablePreviewItems
     * @return $this
     */
    public function withUnfulfillablePreviewItems($UnfulfillablePreviewItems)
    {
        $this->setUnfulfillablePreviewItems($UnfulfillablePreviewItems);
        return $this;
    }
    /**
     * Get the value of the OrderUnfulfillableReasons property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelStringList OrderUnfulfillableReasons.
     */
    public function getOrderUnfulfillableReasons()
    {
        return $this->_fields['OrderUnfulfillableReasons']['FieldValue'];
    }
    /**
     * Set the value of the OrderUnfulfillableReasons property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelStringList orderUnfulfillableReasons
     * @return $this 
     */
    public function setOrderUnfulfillableReasons($value)
    {
        $this->_fields['OrderUnfulfillableReasons']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderUnfulfillableReasons is set.
     *
     * @return true if OrderUnfulfillableReasons is set.
     */
    public function isSetOrderUnfulfillableReasons()
    {
        return !is_null($this->_fields['OrderUnfulfillableReasons']['FieldValue']);
    }
    /**
     * Set the value of OrderUnfulfillableReasons, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelStringList $OrderUnfulfillableReasons
     * @return $this
     */
    public function withOrderUnfulfillableReasons($OrderUnfulfillableReasons)
    {
        $this->setOrderUnfulfillableReasons($OrderUnfulfillableReasons);
        return $this;
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
}