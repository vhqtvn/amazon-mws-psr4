<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageOutput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions	$Dimensions
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight	$Weight
 * @property	string	$CarrierName
 * @property	string	$TrackingId
 * @property	string	$PackageStatus
 */
class FbaInboundServiceMwsModelPartneredSmallParcelPackageOutput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Dimensions' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions::class), 'Weight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight::class), 'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'), 'TrackingId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PackageStatus' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Dimensions property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }
    /**
     * Set the value of the Dimensions property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions dimensions
     * @return $this instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set.
     */
    public function isSetDimensions()
    {
        return !is_null($this->_fields['Dimensions']['FieldValue']);
    }
    /**
     * Set the value of Dimensions, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions $Dimensions
     * @return $this
     */
    public function withDimensions($Dimensions)
    {
        $this->setDimensions($Dimensions);
        return $this;
    }
    /**
     * Get the value of the Weight property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }
    /**
     * Set the value of the Weight property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight weight
     * @return $this instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set.
     */
    public function isSetWeight()
    {
        return !is_null($this->_fields['Weight']['FieldValue']);
    }
    /**
     * Set the value of Weight, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight $Weight
     * @return $this
     */
    public function withWeight($Weight)
    {
        $this->setWeight($Weight);
        return $this;
    }
    /**
     * Get the value of the CarrierName property.
     *
     * @return \string CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }
    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return $this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }
    /**
     * Set the value of CarrierName, return this.
     *
     * @param string $CarrierName
     * @return $this
     */
    public function withCarrierName($CarrierName)
    {
        $this->setCarrierName($CarrierName);
        return $this;
    }
    /**
     * Get the value of the TrackingId property.
     *
     * @return \string TrackingId.
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }
    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @return $this instance
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set.
     */
    public function isSetTrackingId()
    {
        return !is_null($this->_fields['TrackingId']['FieldValue']);
    }
    /**
     * Set the value of TrackingId, return this.
     *
     * @param string $TrackingId
     * @return $this
     */
    public function withTrackingId($TrackingId)
    {
        $this->setTrackingId($TrackingId);
        return $this;
    }
    /**
     * Get the value of the PackageStatus property.
     *
     * @return \string PackageStatus.
     */
    public function getPackageStatus()
    {
        return $this->_fields['PackageStatus']['FieldValue'];
    }
    /**
     * Set the value of the PackageStatus property.
     *
     * @param string packageStatus
     * @return $this instance
     */
    public function setPackageStatus($value)
    {
        $this->_fields['PackageStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PackageStatus is set.
     *
     * @return true if PackageStatus is set.
     */
    public function isSetPackageStatus()
    {
        return !is_null($this->_fields['PackageStatus']['FieldValue']);
    }
    /**
     * Set the value of PackageStatus, return this.
     *
     * @param string $PackageStatus
     * @return $this
     */
    public function withPackageStatus($PackageStatus)
    {
        $this->setPackageStatus($PackageStatus);
        return $this;
    }
}