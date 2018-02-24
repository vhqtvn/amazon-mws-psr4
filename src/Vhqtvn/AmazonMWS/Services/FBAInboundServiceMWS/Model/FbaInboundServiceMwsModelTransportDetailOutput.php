<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDetailOutput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataOutput	$PartneredSmallParcelData
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataOutput	$NonPartneredSmallParcelData
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataOutput	$PartneredLtlData
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataOutput	$NonPartneredLtlData
 */
class FbaInboundServiceMwsModelTransportDetailOutput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataOutput::class), 'NonPartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataOutput::class), 'PartneredLtlData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataOutput::class), 'NonPartneredLtlData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataOutput::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PartneredSmallParcelData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataOutput PartneredSmallParcelData.
     */
    public function getPartneredSmallParcelData()
    {
        return $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }
    /**
     * Set the value of the PartneredSmallParcelData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataOutput partneredSmallParcelData
     * @return $this 
     */
    public function setPartneredSmallParcelData($value)
    {
        $this->_fields['PartneredSmallParcelData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PartneredSmallParcelData is set.
     *
     * @return true if PartneredSmallParcelData is set.
     */
    public function isSetPartneredSmallParcelData()
    {
        return !is_null($this->_fields['PartneredSmallParcelData']['FieldValue']);
    }
    /**
     * Set the value of PartneredSmallParcelData, return this.
     *
     * @param partneredSmallParcelData
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPartneredSmallParcelData($value)
    {
        $this->setPartneredSmallParcelData($value);
        return $this;
    }
    /**
     * Get the value of the NonPartneredSmallParcelData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataOutput NonPartneredSmallParcelData.
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }
    /**
     * Set the value of the NonPartneredSmallParcelData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataOutput nonPartneredSmallParcelData
     * @return $this 
     */
    public function setNonPartneredSmallParcelData($value)
    {
        $this->_fields['NonPartneredSmallParcelData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NonPartneredSmallParcelData is set.
     *
     * @return true if NonPartneredSmallParcelData is set.
     */
    public function isSetNonPartneredSmallParcelData()
    {
        return !is_null($this->_fields['NonPartneredSmallParcelData']['FieldValue']);
    }
    /**
     * Set the value of NonPartneredSmallParcelData, return this.
     *
     * @param nonPartneredSmallParcelData
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNonPartneredSmallParcelData($value)
    {
        $this->setNonPartneredSmallParcelData($value);
        return $this;
    }
    /**
     * Get the value of the PartneredLtlData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataOutput PartneredLtlData.
     */
    public function getPartneredLtlData()
    {
        return $this->_fields['PartneredLtlData']['FieldValue'];
    }
    /**
     * Set the value of the PartneredLtlData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataOutput partneredLtlData
     * @return $this 
     */
    public function setPartneredLtlData($value)
    {
        $this->_fields['PartneredLtlData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PartneredLtlData is set.
     *
     * @return true if PartneredLtlData is set.
     */
    public function isSetPartneredLtlData()
    {
        return !is_null($this->_fields['PartneredLtlData']['FieldValue']);
    }
    /**
     * Set the value of PartneredLtlData, return this.
     *
     * @param partneredLtlData
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPartneredLtlData($value)
    {
        $this->setPartneredLtlData($value);
        return $this;
    }
    /**
     * Get the value of the NonPartneredLtlData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataOutput NonPartneredLtlData.
     */
    public function getNonPartneredLtlData()
    {
        return $this->_fields['NonPartneredLtlData']['FieldValue'];
    }
    /**
     * Set the value of the NonPartneredLtlData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataOutput nonPartneredLtlData
     * @return $this 
     */
    public function setNonPartneredLtlData($value)
    {
        $this->_fields['NonPartneredLtlData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NonPartneredLtlData is set.
     *
     * @return true if NonPartneredLtlData is set.
     */
    public function isSetNonPartneredLtlData()
    {
        return !is_null($this->_fields['NonPartneredLtlData']['FieldValue']);
    }
    /**
     * Set the value of NonPartneredLtlData, return this.
     *
     * @param nonPartneredLtlData
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNonPartneredLtlData($value)
    {
        $this->setNonPartneredLtlData($value);
        return $this;
    }
}