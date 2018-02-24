<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlan
 * 
 * @property	string	$ShipmentId
 * @property	string	$DestinationFulfillmentCenterId
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress	$ShipToAddress
 * @property	string	$LabelPrepType
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList	$Items
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails	$EstimatedBoxContentsFee
 */
class FbaInboundServiceMwsModelInboundShipmentPlan extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'DestinationFulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipToAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress::class), 'LabelPrepType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Items' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList::class), 'EstimatedBoxContentsFee' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentId property.
     *
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this 
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }
    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }
    /**
     * Get the value of the DestinationFulfillmentCenterId property.
     *
     * @return String DestinationFulfillmentCenterId.
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->_fields['DestinationFulfillmentCenterId']['FieldValue'];
    }
    /**
     * Set the value of the DestinationFulfillmentCenterId property.
     *
     * @param string destinationFulfillmentCenterId
     * @return $this 
     */
    public function setDestinationFulfillmentCenterId($value)
    {
        $this->_fields['DestinationFulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DestinationFulfillmentCenterId is set.
     *
     * @return true if DestinationFulfillmentCenterId is set.
     */
    public function isSetDestinationFulfillmentCenterId()
    {
        return !is_null($this->_fields['DestinationFulfillmentCenterId']['FieldValue']);
    }
    /**
     * Set the value of DestinationFulfillmentCenterId, return this.
     *
     * @param destinationFulfillmentCenterId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDestinationFulfillmentCenterId($value)
    {
        $this->setDestinationFulfillmentCenterId($value);
        return $this;
    }
    /**
     * Get the value of the ShipToAddress property.
     *
     * @return Address ShipToAddress.
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipToAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress shipToAddress
     * @return $this 
     */
    public function setShipToAddress($value)
    {
        $this->_fields['ShipToAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipToAddress is set.
     *
     * @return true if ShipToAddress is set.
     */
    public function isSetShipToAddress()
    {
        return !is_null($this->_fields['ShipToAddress']['FieldValue']);
    }
    /**
     * Set the value of ShipToAddress, return this.
     *
     * @param shipToAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipToAddress($value)
    {
        $this->setShipToAddress($value);
        return $this;
    }
    /**
     * Get the value of the LabelPrepType property.
     *
     * @return String LabelPrepType.
     */
    public function getLabelPrepType()
    {
        return $this->_fields['LabelPrepType']['FieldValue'];
    }
    /**
     * Set the value of the LabelPrepType property.
     *
     * @param string labelPrepType
     * @return $this 
     */
    public function setLabelPrepType($value)
    {
        $this->_fields['LabelPrepType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LabelPrepType is set.
     *
     * @return true if LabelPrepType is set.
     */
    public function isSetLabelPrepType()
    {
        return !is_null($this->_fields['LabelPrepType']['FieldValue']);
    }
    /**
     * Set the value of LabelPrepType, return this.
     *
     * @param labelPrepType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLabelPrepType($value)
    {
        $this->setLabelPrepType($value);
        return $this;
    }
    /**
     * Get the value of the Items property.
     *
     * @return InboundShipmentPlanItemList Items.
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }
    /**
     * Set the value of the Items property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList items
     * @return $this 
     */
    public function setItems($value)
    {
        $this->_fields['Items']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Items is set.
     *
     * @return true if Items is set.
     */
    public function isSetItems()
    {
        return !is_null($this->_fields['Items']['FieldValue']);
    }
    /**
     * Set the value of Items, return this.
     *
     * @param items
     *             The new value to set.
     *
     * @return $this .
     */
    public function withItems($value)
    {
        $this->setItems($value);
        return $this;
    }
    /**
     * Get the value of the EstimatedBoxContentsFee property.
     *
     * @return BoxContentsFeeDetails EstimatedBoxContentsFee.
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->_fields['EstimatedBoxContentsFee']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedBoxContentsFee property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails estimatedBoxContentsFee
     * @return $this 
     */
    public function setEstimatedBoxContentsFee($value)
    {
        $this->_fields['EstimatedBoxContentsFee']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedBoxContentsFee is set.
     *
     * @return true if EstimatedBoxContentsFee is set.
     */
    public function isSetEstimatedBoxContentsFee()
    {
        return !is_null($this->_fields['EstimatedBoxContentsFee']['FieldValue']);
    }
    /**
     * Set the value of EstimatedBoxContentsFee, return this.
     *
     * @param estimatedBoxContentsFee
     *             The new value to set.
     *
     * @return $this .
     */
    public function withEstimatedBoxContentsFee($value)
    {
        $this->setEstimatedBoxContentsFee($value);
        return $this;
    }
}