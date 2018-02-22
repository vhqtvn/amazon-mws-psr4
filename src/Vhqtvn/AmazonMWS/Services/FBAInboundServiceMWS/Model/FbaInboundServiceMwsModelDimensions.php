<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelDimensions
 * 
 * Properties:
 * <ul>
 * 
 * <li>Length: float</li>
 * <li>Width: float</li>
 * <li>Height: float</li>
 * <li>Unit: string</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelDimensions extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Length' => array('FieldValue' => null, 'FieldType' => 'float'), 'Width' => array('FieldValue' => null, 'FieldType' => 'float'), 'Height' => array('FieldValue' => null, 'FieldType' => 'float'), 'Unit' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Length property.
     *
     * @return BigDecimal Length.
     */
    public function getLength()
    {
        return $this->_fields['Length']['FieldValue'];
    }
    /**
     * Set the value of the Length property.
     *
     * @param float length
     * @return $this 
     */
    public function setLength($value)
    {
        $this->_fields['Length']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Length is set.
     *
     * @return true if Length is set.
     */
    public function isSetLength()
    {
        return !is_null($this->_fields['Length']['FieldValue']);
    }
    /**
     * Set the value of Length, return this.
     *
     * @param length
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLength($value)
    {
        $this->setLength($value);
        return $this;
    }
    /**
     * Get the value of the Width property.
     *
     * @return BigDecimal Width.
     */
    public function getWidth()
    {
        return $this->_fields['Width']['FieldValue'];
    }
    /**
     * Set the value of the Width property.
     *
     * @param float width
     * @return $this 
     */
    public function setWidth($value)
    {
        $this->_fields['Width']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Width is set.
     *
     * @return true if Width is set.
     */
    public function isSetWidth()
    {
        return !is_null($this->_fields['Width']['FieldValue']);
    }
    /**
     * Set the value of Width, return this.
     *
     * @param width
     *             The new value to set.
     *
     * @return $this .
     */
    public function withWidth($value)
    {
        $this->setWidth($value);
        return $this;
    }
    /**
     * Get the value of the Height property.
     *
     * @return BigDecimal Height.
     */
    public function getHeight()
    {
        return $this->_fields['Height']['FieldValue'];
    }
    /**
     * Set the value of the Height property.
     *
     * @param float height
     * @return $this 
     */
    public function setHeight($value)
    {
        $this->_fields['Height']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Height is set.
     *
     * @return true if Height is set.
     */
    public function isSetHeight()
    {
        return !is_null($this->_fields['Height']['FieldValue']);
    }
    /**
     * Set the value of Height, return this.
     *
     * @param height
     *             The new value to set.
     *
     * @return $this .
     */
    public function withHeight($value)
    {
        $this->setHeight($value);
        return $this;
    }
    /**
     * Get the value of the Unit property.
     *
     * @return String Unit.
     */
    public function getUnit()
    {
        return $this->_fields['Unit']['FieldValue'];
    }
    /**
     * Set the value of the Unit property.
     *
     * @param string unit
     * @return $this 
     */
    public function setUnit($value)
    {
        $this->_fields['Unit']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Unit is set.
     *
     * @return true if Unit is set.
     */
    public function isSetUnit()
    {
        return !is_null($this->_fields['Unit']['FieldValue']);
    }
    /**
     * Set the value of Unit, return this.
     *
     * @param unit
     *             The new value to set.
     *
     * @return $this .
     */
    public function withUnit($value)
    {
        $this->setUnit($value);
        return $this;
    }
}