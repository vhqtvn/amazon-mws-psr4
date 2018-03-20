<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetPackageTrackingDetailsResult
 * 
 * @property	int	$PackageNumber
 * @property	string	$TrackingNumber
 * @property	string	$CarrierCode
 * @property	string	$CarrierPhoneNumber
 * @property	string	$CarrierURL
 * @property	string	$ShipDate
 * @property	string	$EstimatedArrivalDate
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress	$ShipToAddress
 * @property	string	$CurrentStatus
 * @property	string	$SignedForBy
 * @property	string	$AdditionalLocationInfo
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingEventList	$TrackingEvents
 */
class FbaOutboundServiceMwsModelGetPackageTrackingDetailsResult extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PackageNumber' => array('FieldValue' => null, 'FieldType' => 'int'), 'TrackingNumber' => array('FieldValue' => null, 'FieldType' => 'string'), 'CarrierCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'CarrierPhoneNumber' => array('FieldValue' => null, 'FieldType' => 'string'), 'CarrierURL' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'EstimatedArrivalDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipToAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress::class), 'CurrentStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'SignedForBy' => array('FieldValue' => null, 'FieldType' => 'string'), 'AdditionalLocationInfo' => array('FieldValue' => null, 'FieldType' => 'string'), 'TrackingEvents' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingEventList::class));
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
     * @return $this instance
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
     * Get the value of the TrackingNumber property.
     *
     * @return \string TrackingNumber.
     */
    public function getTrackingNumber()
    {
        return $this->_fields['TrackingNumber']['FieldValue'];
    }
    /**
     * Set the value of the TrackingNumber property.
     *
     * @param string trackingNumber
     * @return $this instance
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
     * Get the value of the CarrierCode property.
     *
     * @return \string CarrierCode.
     */
    public function getCarrierCode()
    {
        return $this->_fields['CarrierCode']['FieldValue'];
    }
    /**
     * Set the value of the CarrierCode property.
     *
     * @param string carrierCode
     * @return $this instance
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
     * Get the value of the CarrierPhoneNumber property.
     *
     * @return \string CarrierPhoneNumber.
     */
    public function getCarrierPhoneNumber()
    {
        return $this->_fields['CarrierPhoneNumber']['FieldValue'];
    }
    /**
     * Set the value of the CarrierPhoneNumber property.
     *
     * @param string carrierPhoneNumber
     * @return $this instance
     */
    public function setCarrierPhoneNumber($value)
    {
        $this->_fields['CarrierPhoneNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierPhoneNumber is set.
     *
     * @return true if CarrierPhoneNumber is set.
     */
    public function isSetCarrierPhoneNumber()
    {
        return !is_null($this->_fields['CarrierPhoneNumber']['FieldValue']);
    }
    /**
     * Set the value of CarrierPhoneNumber, return this.
     *
     * @param string $CarrierPhoneNumber
     * @return $this
     */
    public function withCarrierPhoneNumber($CarrierPhoneNumber)
    {
        $this->setCarrierPhoneNumber($CarrierPhoneNumber);
        return $this;
    }
    /**
     * Get the value of the CarrierURL property.
     *
     * @return \string CarrierURL.
     */
    public function getCarrierURL()
    {
        return $this->_fields['CarrierURL']['FieldValue'];
    }
    /**
     * Set the value of the CarrierURL property.
     *
     * @param string carrierURL
     * @return $this instance
     */
    public function setCarrierURL($value)
    {
        $this->_fields['CarrierURL']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierURL is set.
     *
     * @return true if CarrierURL is set.
     */
    public function isSetCarrierURL()
    {
        return !is_null($this->_fields['CarrierURL']['FieldValue']);
    }
    /**
     * Set the value of CarrierURL, return this.
     *
     * @param string $CarrierURL
     * @return $this
     */
    public function withCarrierURL($CarrierURL)
    {
        $this->setCarrierURL($CarrierURL);
        return $this;
    }
    /**
     * Get the value of the ShipDate property.
     *
     * @return \DateTime ShipDate.
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }
    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @return $this instance
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set.
     */
    public function isSetShipDate()
    {
        return !is_null($this->_fields['ShipDate']['FieldValue']);
    }
    /**
     * Set the value of ShipDate, return this.
     *
     * @param string $ShipDate
     * @return $this
     */
    public function withShipDate($ShipDate)
    {
        $this->setShipDate($ShipDate);
        return $this;
    }
    /**
     * Get the value of the EstimatedArrivalDate property.
     *
     * @return \DateTime EstimatedArrivalDate.
     */
    public function getEstimatedArrivalDate()
    {
        return $this->_fields['EstimatedArrivalDate']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedArrivalDate property.
     *
     * @param string estimatedArrivalDate
     * @return $this instance
     */
    public function setEstimatedArrivalDate($value)
    {
        $this->_fields['EstimatedArrivalDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedArrivalDate is set.
     *
     * @return true if EstimatedArrivalDate is set.
     */
    public function isSetEstimatedArrivalDate()
    {
        return !is_null($this->_fields['EstimatedArrivalDate']['FieldValue']);
    }
    /**
     * Set the value of EstimatedArrivalDate, return this.
     *
     * @param string $EstimatedArrivalDate
     * @return $this
     */
    public function withEstimatedArrivalDate($EstimatedArrivalDate)
    {
        $this->setEstimatedArrivalDate($EstimatedArrivalDate);
        return $this;
    }
    /**
     * Get the value of the ShipToAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress ShipToAddress.
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipToAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress shipToAddress
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress $ShipToAddress
     * @return $this
     */
    public function withShipToAddress($ShipToAddress)
    {
        $this->setShipToAddress($ShipToAddress);
        return $this;
    }
    /**
     * Get the value of the CurrentStatus property.
     *
     * @return \string CurrentStatus.
     */
    public function getCurrentStatus()
    {
        return $this->_fields['CurrentStatus']['FieldValue'];
    }
    /**
     * Set the value of the CurrentStatus property.
     *
     * @param string currentStatus
     * @return $this instance
     */
    public function setCurrentStatus($value)
    {
        $this->_fields['CurrentStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CurrentStatus is set.
     *
     * @return true if CurrentStatus is set.
     */
    public function isSetCurrentStatus()
    {
        return !is_null($this->_fields['CurrentStatus']['FieldValue']);
    }
    /**
     * Set the value of CurrentStatus, return this.
     *
     * @param string $CurrentStatus
     * @return $this
     */
    public function withCurrentStatus($CurrentStatus)
    {
        $this->setCurrentStatus($CurrentStatus);
        return $this;
    }
    /**
     * Get the value of the SignedForBy property.
     *
     * @return \string SignedForBy.
     */
    public function getSignedForBy()
    {
        return $this->_fields['SignedForBy']['FieldValue'];
    }
    /**
     * Set the value of the SignedForBy property.
     *
     * @param string signedForBy
     * @return $this instance
     */
    public function setSignedForBy($value)
    {
        $this->_fields['SignedForBy']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SignedForBy is set.
     *
     * @return true if SignedForBy is set.
     */
    public function isSetSignedForBy()
    {
        return !is_null($this->_fields['SignedForBy']['FieldValue']);
    }
    /**
     * Set the value of SignedForBy, return this.
     *
     * @param string $SignedForBy
     * @return $this
     */
    public function withSignedForBy($SignedForBy)
    {
        $this->setSignedForBy($SignedForBy);
        return $this;
    }
    /**
     * Get the value of the AdditionalLocationInfo property.
     *
     * @return \string AdditionalLocationInfo.
     */
    public function getAdditionalLocationInfo()
    {
        return $this->_fields['AdditionalLocationInfo']['FieldValue'];
    }
    /**
     * Set the value of the AdditionalLocationInfo property.
     *
     * @param string additionalLocationInfo
     * @return $this instance
     */
    public function setAdditionalLocationInfo($value)
    {
        $this->_fields['AdditionalLocationInfo']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AdditionalLocationInfo is set.
     *
     * @return true if AdditionalLocationInfo is set.
     */
    public function isSetAdditionalLocationInfo()
    {
        return !is_null($this->_fields['AdditionalLocationInfo']['FieldValue']);
    }
    /**
     * Set the value of AdditionalLocationInfo, return this.
     *
     * @param string $AdditionalLocationInfo
     * @return $this
     */
    public function withAdditionalLocationInfo($AdditionalLocationInfo)
    {
        $this->setAdditionalLocationInfo($AdditionalLocationInfo);
        return $this;
    }
    /**
     * Get the value of the TrackingEvents property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingEventList TrackingEvents.
     */
    public function getTrackingEvents()
    {
        return $this->_fields['TrackingEvents']['FieldValue'];
    }
    /**
     * Set the value of the TrackingEvents property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingEventList trackingEvents
     * @return $this instance
     */
    public function setTrackingEvents($value)
    {
        $this->_fields['TrackingEvents']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TrackingEvents is set.
     *
     * @return true if TrackingEvents is set.
     */
    public function isSetTrackingEvents()
    {
        return !is_null($this->_fields['TrackingEvents']['FieldValue']);
    }
    /**
     * Set the value of TrackingEvents, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingEventList $TrackingEvents
     * @return $this
     */
    public function withTrackingEvents($TrackingEvents)
    {
        $this->setTrackingEvents($TrackingEvents);
        return $this;
    }
}