<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPallet
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions	$Dimensions
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight	$Weight
 * @property	bool	$IsStacked
 */
class FbaInboundServiceMwsModelPallet extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Dimensions' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions::class), 'Weight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight::class), 'IsStacked' => array('FieldValue' => null, 'FieldType' => 'bool'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Dimensions property.
     *
     * @return Dimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }
    /**
     * Set the value of the Dimensions property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions dimensions
     * @return $this 
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
     * @param dimensions
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);
        return $this;
    }
    /**
     * Get the value of the Weight property.
     *
     * @return Weight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }
    /**
     * Set the value of the Weight property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight weight
     * @return $this 
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
     * @param weight
     *             The new value to set.
     *
     * @return $this .
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }
    /**
     * Check the value of IsStacked.
     *
     * @return true if IsStacked is set to true.
     */
    public function isIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }
    /**
     * Get the value of the IsStacked property.
     *
     * @return boolean IsStacked.
     */
    public function getIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }
    /**
     * Set the value of the IsStacked property.
     *
     * @param bool isStacked
     * @return $this 
     */
    public function setIsStacked($value)
    {
        $this->_fields['IsStacked']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsStacked is set.
     *
     * @return true if IsStacked is set.
     */
    public function isSetIsStacked()
    {
        return !is_null($this->_fields['IsStacked']['FieldValue']);
    }
    /**
     * Set the value of IsStacked, return this.
     *
     * @param isStacked
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsStacked($value)
    {
        $this->setIsStacked($value);
        return $this;
    }
}