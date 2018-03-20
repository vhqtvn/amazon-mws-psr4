<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDetailInput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataInput	$PartneredSmallParcelData
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataInput	$NonPartneredSmallParcelData
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataInput	$PartneredLtlData
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataInput	$NonPartneredLtlData
 */
class FbaInboundServiceMwsModelTransportDetailInput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataInput::class), 'NonPartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataInput::class), 'PartneredLtlData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataInput::class), 'NonPartneredLtlData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataInput::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PartneredSmallParcelData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataInput PartneredSmallParcelData.
     */
    public function getPartneredSmallParcelData()
    {
        return $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }
    /**
     * Set the value of the PartneredSmallParcelData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataInput partneredSmallParcelData
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataInput $PartneredSmallParcelData
     * @return $this
     */
    public function withPartneredSmallParcelData($PartneredSmallParcelData)
    {
        $this->setPartneredSmallParcelData($PartneredSmallParcelData);
        return $this;
    }
    /**
     * Get the value of the NonPartneredSmallParcelData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataInput NonPartneredSmallParcelData.
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }
    /**
     * Set the value of the NonPartneredSmallParcelData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataInput nonPartneredSmallParcelData
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelDataInput $NonPartneredSmallParcelData
     * @return $this
     */
    public function withNonPartneredSmallParcelData($NonPartneredSmallParcelData)
    {
        $this->setNonPartneredSmallParcelData($NonPartneredSmallParcelData);
        return $this;
    }
    /**
     * Get the value of the PartneredLtlData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataInput PartneredLtlData.
     */
    public function getPartneredLtlData()
    {
        return $this->_fields['PartneredLtlData']['FieldValue'];
    }
    /**
     * Set the value of the PartneredLtlData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataInput partneredLtlData
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataInput $PartneredLtlData
     * @return $this
     */
    public function withPartneredLtlData($PartneredLtlData)
    {
        $this->setPartneredLtlData($PartneredLtlData);
        return $this;
    }
    /**
     * Get the value of the NonPartneredLtlData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataInput NonPartneredLtlData.
     */
    public function getNonPartneredLtlData()
    {
        return $this->_fields['NonPartneredLtlData']['FieldValue'];
    }
    /**
     * Set the value of the NonPartneredLtlData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataInput nonPartneredLtlData
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataInput $NonPartneredLtlData
     * @return $this
     */
    public function withNonPartneredLtlData($NonPartneredLtlData)
    {
        $this->setNonPartneredLtlData($NonPartneredLtlData);
        return $this;
    }
}