<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentHeader
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentName: string</li>
 * <li>ShipFromAddress: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress</li>
 * <li>DestinationFulfillmentCenterId: string</li>
 * <li>AreCasesRequired: bool</li>
 * <li>ShipmentStatus: string</li>
 * <li>LabelPrepPreference: string</li>
 * <li>IntendedBoxContentsSource: string</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelInboundShipmentHeader extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress::class), 'DestinationFulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'), 'AreCasesRequired' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'LabelPrepPreference' => array('FieldValue' => null, 'FieldType' => 'string'), 'IntendedBoxContentsSource' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentName property.
     *
     * @return String ShipmentName.
     */
    public function getShipmentName()
    {
        return $this->_fields['ShipmentName']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentName property.
     *
     * @param string shipmentName
     * @return $this 
     */
    public function setShipmentName($value)
    {
        $this->_fields['ShipmentName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentName is set.
     *
     * @return true if ShipmentName is set.
     */
    public function isSetShipmentName()
    {
        return !is_null($this->_fields['ShipmentName']['FieldValue']);
    }
    /**
     * Set the value of ShipmentName, return this.
     *
     * @param shipmentName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentName($value)
    {
        $this->setShipmentName($value);
        return $this;
    }
    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return Address ShipFromAddress.
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress shipFromAddress
     * @return $this 
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set.
     */
    public function isSetShipFromAddress()
    {
        return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
    }
    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);
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
     * Check the value of AreCasesRequired.
     *
     * @return true if AreCasesRequired is set to true.
     */
    public function isAreCasesRequired()
    {
        return !is_null($this->_fields['AreCasesRequired']['FieldValue']) && $this->_fields['AreCasesRequired']['FieldValue'];
    }
    /**
     * Get the value of the AreCasesRequired property.
     *
     * @return Boolean AreCasesRequired.
     */
    public function getAreCasesRequired()
    {
        return $this->_fields['AreCasesRequired']['FieldValue'];
    }
    /**
     * Set the value of the AreCasesRequired property.
     *
     * @param bool areCasesRequired
     * @return $this 
     */
    public function setAreCasesRequired($value)
    {
        $this->_fields['AreCasesRequired']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AreCasesRequired is set.
     *
     * @return true if AreCasesRequired is set.
     */
    public function isSetAreCasesRequired()
    {
        return !is_null($this->_fields['AreCasesRequired']['FieldValue']);
    }
    /**
     * Set the value of AreCasesRequired, return this.
     *
     * @param areCasesRequired
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAreCasesRequired($value)
    {
        $this->setAreCasesRequired($value);
        return $this;
    }
    /**
     * Get the value of the ShipmentStatus property.
     *
     * @return String ShipmentStatus.
     */
    public function getShipmentStatus()
    {
        return $this->_fields['ShipmentStatus']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentStatus property.
     *
     * @param string shipmentStatus
     * @return $this 
     */
    public function setShipmentStatus($value)
    {
        $this->_fields['ShipmentStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentStatus is set.
     *
     * @return true if ShipmentStatus is set.
     */
    public function isSetShipmentStatus()
    {
        return !is_null($this->_fields['ShipmentStatus']['FieldValue']);
    }
    /**
     * Set the value of ShipmentStatus, return this.
     *
     * @param shipmentStatus
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentStatus($value)
    {
        $this->setShipmentStatus($value);
        return $this;
    }
    /**
     * Get the value of the LabelPrepPreference property.
     *
     * @return String LabelPrepPreference.
     */
    public function getLabelPrepPreference()
    {
        return $this->_fields['LabelPrepPreference']['FieldValue'];
    }
    /**
     * Set the value of the LabelPrepPreference property.
     *
     * @param string labelPrepPreference
     * @return $this 
     */
    public function setLabelPrepPreference($value)
    {
        $this->_fields['LabelPrepPreference']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LabelPrepPreference is set.
     *
     * @return true if LabelPrepPreference is set.
     */
    public function isSetLabelPrepPreference()
    {
        return !is_null($this->_fields['LabelPrepPreference']['FieldValue']);
    }
    /**
     * Set the value of LabelPrepPreference, return this.
     *
     * @param labelPrepPreference
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLabelPrepPreference($value)
    {
        $this->setLabelPrepPreference($value);
        return $this;
    }
    /**
     * Get the value of the IntendedBoxContentsSource property.
     *
     * @return String IntendedBoxContentsSource.
     */
    public function getIntendedBoxContentsSource()
    {
        return $this->_fields['IntendedBoxContentsSource']['FieldValue'];
    }
    /**
     * Set the value of the IntendedBoxContentsSource property.
     *
     * @param string intendedBoxContentsSource
     * @return $this 
     */
    public function setIntendedBoxContentsSource($value)
    {
        $this->_fields['IntendedBoxContentsSource']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IntendedBoxContentsSource is set.
     *
     * @return true if IntendedBoxContentsSource is set.
     */
    public function isSetIntendedBoxContentsSource()
    {
        return !is_null($this->_fields['IntendedBoxContentsSource']['FieldValue']);
    }
    /**
     * Set the value of IntendedBoxContentsSource, return this.
     *
     * @param intendedBoxContentsSource
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIntendedBoxContentsSource($value)
    {
        $this->setIntendedBoxContentsSource($value);
        return $this;
    }
}