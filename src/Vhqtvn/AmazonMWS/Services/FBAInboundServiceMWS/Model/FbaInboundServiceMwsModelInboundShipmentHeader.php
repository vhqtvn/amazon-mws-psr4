<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentHeader
 * 
 * @property	string	$ShipmentName
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress	$ShipFromAddress
 * @property	string	$DestinationFulfillmentCenterId
 * @property	bool	$AreCasesRequired
 * @property	string	$ShipmentStatus
 * @property	string	$LabelPrepPreference
 * @property	string	$IntendedBoxContentsSource
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
     * @param string $ShipmentName
     * @return $this
     */
    public function withShipmentName($ShipmentName)
    {
        $this->setShipmentName($ShipmentName);
        return $this;
    }
    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress ShipFromAddress.
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress $ShipFromAddress
     * @return $this
     */
    public function withShipFromAddress($ShipFromAddress)
    {
        $this->setShipFromAddress($ShipFromAddress);
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
     * @param string $DestinationFulfillmentCenterId
     * @return $this
     */
    public function withDestinationFulfillmentCenterId($DestinationFulfillmentCenterId)
    {
        $this->setDestinationFulfillmentCenterId($DestinationFulfillmentCenterId);
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
     * @param bool $AreCasesRequired
     * @return $this
     */
    public function withAreCasesRequired($AreCasesRequired)
    {
        $this->setAreCasesRequired($AreCasesRequired);
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
     * @param string $ShipmentStatus
     * @return $this
     */
    public function withShipmentStatus($ShipmentStatus)
    {
        $this->setShipmentStatus($ShipmentStatus);
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
     * @param string $LabelPrepPreference
     * @return $this
     */
    public function withLabelPrepPreference($LabelPrepPreference)
    {
        $this->setLabelPrepPreference($LabelPrepPreference);
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
     * @param string $IntendedBoxContentsSource
     * @return $this
     */
    public function withIntendedBoxContentsSource($IntendedBoxContentsSource)
    {
        $this->setIntendedBoxContentsSource($IntendedBoxContentsSource);
        return $this;
    }
}