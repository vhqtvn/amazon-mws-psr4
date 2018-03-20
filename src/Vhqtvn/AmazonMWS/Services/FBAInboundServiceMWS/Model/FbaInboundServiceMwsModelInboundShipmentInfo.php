<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentInfo
 * 
 * @property	string	$ShipmentId
 * @property	string	$ShipmentName
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress	$ShipFromAddress
 * @property	string	$DestinationFulfillmentCenterId
 * @property	string	$ShipmentStatus
 * @property	string	$LabelPrepType
 * @property	bool	$AreCasesRequired
 * @property	string	$ConfirmedNeedByDate
 * @property	string	$BoxContentsSource
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails	$EstimatedBoxContentsFee
 */
class FbaInboundServiceMwsModelInboundShipmentInfo extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress::class), 'DestinationFulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'LabelPrepType' => array('FieldValue' => null, 'FieldType' => 'string'), 'AreCasesRequired' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ConfirmedNeedByDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'BoxContentsSource' => array('FieldValue' => null, 'FieldType' => 'string'), 'EstimatedBoxContentsFee' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentId property.
     *
     * @return \string ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this instance
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
     * @param string $ShipmentId
     * @return $this
     */
    public function withShipmentId($ShipmentId)
    {
        $this->setShipmentId($ShipmentId);
        return $this;
    }
    /**
     * Get the value of the ShipmentName property.
     *
     * @return \string ShipmentName.
     */
    public function getShipmentName()
    {
        return $this->_fields['ShipmentName']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentName property.
     *
     * @param string shipmentName
     * @return $this instance
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
     * @return $this instance
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
     * @return \string DestinationFulfillmentCenterId.
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->_fields['DestinationFulfillmentCenterId']['FieldValue'];
    }
    /**
     * Set the value of the DestinationFulfillmentCenterId property.
     *
     * @param string destinationFulfillmentCenterId
     * @return $this instance
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
     * Get the value of the ShipmentStatus property.
     *
     * @return \string ShipmentStatus.
     */
    public function getShipmentStatus()
    {
        return $this->_fields['ShipmentStatus']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentStatus property.
     *
     * @param string shipmentStatus
     * @return $this instance
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
     * Get the value of the LabelPrepType property.
     *
     * @return \string LabelPrepType.
     */
    public function getLabelPrepType()
    {
        return $this->_fields['LabelPrepType']['FieldValue'];
    }
    /**
     * Set the value of the LabelPrepType property.
     *
     * @param string labelPrepType
     * @return $this instance
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
     * @param string $LabelPrepType
     * @return $this
     */
    public function withLabelPrepType($LabelPrepType)
    {
        $this->setLabelPrepType($LabelPrepType);
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
     * @return \bool AreCasesRequired.
     */
    public function getAreCasesRequired()
    {
        return $this->_fields['AreCasesRequired']['FieldValue'];
    }
    /**
     * Set the value of the AreCasesRequired property.
     *
     * @param bool areCasesRequired
     * @return $this instance
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
     * Get the value of the ConfirmedNeedByDate property.
     *
     * @return \string ConfirmedNeedByDate.
     */
    public function getConfirmedNeedByDate()
    {
        return $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }
    /**
     * Set the value of the ConfirmedNeedByDate property.
     *
     * @param string confirmedNeedByDate
     * @return $this instance
     */
    public function setConfirmedNeedByDate($value)
    {
        $this->_fields['ConfirmedNeedByDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConfirmedNeedByDate is set.
     *
     * @return true if ConfirmedNeedByDate is set.
     */
    public function isSetConfirmedNeedByDate()
    {
        return !is_null($this->_fields['ConfirmedNeedByDate']['FieldValue']);
    }
    /**
     * Set the value of ConfirmedNeedByDate, return this.
     *
     * @param string $ConfirmedNeedByDate
     * @return $this
     */
    public function withConfirmedNeedByDate($ConfirmedNeedByDate)
    {
        $this->setConfirmedNeedByDate($ConfirmedNeedByDate);
        return $this;
    }
    /**
     * Get the value of the BoxContentsSource property.
     *
     * @return \string BoxContentsSource.
     */
    public function getBoxContentsSource()
    {
        return $this->_fields['BoxContentsSource']['FieldValue'];
    }
    /**
     * Set the value of the BoxContentsSource property.
     *
     * @param string boxContentsSource
     * @return $this instance
     */
    public function setBoxContentsSource($value)
    {
        $this->_fields['BoxContentsSource']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BoxContentsSource is set.
     *
     * @return true if BoxContentsSource is set.
     */
    public function isSetBoxContentsSource()
    {
        return !is_null($this->_fields['BoxContentsSource']['FieldValue']);
    }
    /**
     * Set the value of BoxContentsSource, return this.
     *
     * @param string $BoxContentsSource
     * @return $this
     */
    public function withBoxContentsSource($BoxContentsSource)
    {
        $this->setBoxContentsSource($BoxContentsSource);
        return $this;
    }
    /**
     * Get the value of the EstimatedBoxContentsFee property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails EstimatedBoxContentsFee.
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->_fields['EstimatedBoxContentsFee']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedBoxContentsFee property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails estimatedBoxContentsFee
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails $EstimatedBoxContentsFee
     * @return $this
     */
    public function withEstimatedBoxContentsFee($EstimatedBoxContentsFee)
    {
        $this->setEstimatedBoxContentsFee($EstimatedBoxContentsFee);
        return $this;
    }
}