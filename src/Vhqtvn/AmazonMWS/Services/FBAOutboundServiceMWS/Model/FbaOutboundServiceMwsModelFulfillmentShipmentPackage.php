<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentShipmentPackage
 * 
 * @property	int	$PackageNumber
 * @property	string	$CarrierCode
 * @property	string	$TrackingNumber
 * @property	string	$EstimatedArrivalDateTime
 */
class FbaOutboundServiceMwsModelFulfillmentShipmentPackage extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PackageNumber' => array('FieldValue' => null, 'FieldType' => 'int'), 'CarrierCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'TrackingNumber' => array('FieldValue' => null, 'FieldType' => 'string'), 'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the PackageNumber property.
     *
     * @return int PackageNumber.
     */
    public function getPackageNumber()
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }
    /**
     * Set the value of the PackageNumber property.
     *
     * @param int packageNumber
     * @return $this 
     */
    public function setPackageNumber($value)
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PackageNumber is set.
     *
     * @return true if PackageNumber is set.
     */
    public function isSetPackageNumber()
    {
        return !is_null($this->_fields['PackageNumber']['FieldValue']);
    }
    /**
     * Set the value of PackageNumber, return this.
     *
     * @param int $PackageNumber
     * @return $this
     */
    public function withPackageNumber($PackageNumber)
    {
        $this->setPackageNumber($PackageNumber);
        return $this;
    }
    /**
     * Get the value of the CarrierCode property.
     *
     * @return String CarrierCode.
     */
    public function getCarrierCode()
    {
        return $this->_fields['CarrierCode']['FieldValue'];
    }
    /**
     * Set the value of the CarrierCode property.
     *
     * @param string carrierCode
     * @return $this 
     */
    public function setCarrierCode($value)
    {
        $this->_fields['CarrierCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierCode is set.
     *
     * @return true if CarrierCode is set.
     */
    public function isSetCarrierCode()
    {
        return !is_null($this->_fields['CarrierCode']['FieldValue']);
    }
    /**
     * Set the value of CarrierCode, return this.
     *
     * @param string $CarrierCode
     * @return $this
     */
    public function withCarrierCode($CarrierCode)
    {
        $this->setCarrierCode($CarrierCode);
        return $this;
    }
    /**
     * Get the value of the TrackingNumber property.
     *
     * @return String TrackingNumber.
     */
    public function getTrackingNumber()
    {
        return $this->_fields['TrackingNumber']['FieldValue'];
    }
    /**
     * Set the value of the TrackingNumber property.
     *
     * @param string trackingNumber
     * @return $this 
     */
    public function setTrackingNumber($value)
    {
        $this->_fields['TrackingNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TrackingNumber is set.
     *
     * @return true if TrackingNumber is set.
     */
    public function isSetTrackingNumber()
    {
        return !is_null($this->_fields['TrackingNumber']['FieldValue']);
    }
    /**
     * Set the value of TrackingNumber, return this.
     *
     * @param string $TrackingNumber
     * @return $this
     */
    public function withTrackingNumber($TrackingNumber)
    {
        $this->setTrackingNumber($TrackingNumber);
        return $this;
    }
    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return XMLGregorianCalendar EstimatedArrivalDateTime.
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string estimatedArrivalDateTime
     * @return $this 
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
}