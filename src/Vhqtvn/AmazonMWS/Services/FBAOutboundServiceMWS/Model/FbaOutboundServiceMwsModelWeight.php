<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelWeight
 * 
 * @property	string	$Unit
 * @property	string	$Value
 */
class FbaOutboundServiceMwsModelWeight extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Unit' => array('FieldValue' => null, 'FieldType' => 'string'), 'Value' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
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
    /**
     * Get the value of the Value property.
     *
     * @return String Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }
    /**
     * Set the value of the Value property.
     *
     * @param string value
     * @return $this 
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Value is set.
     *
     * @return true if Value is set.
     */
    public function isSetValue()
    {
        return !is_null($this->_fields['Value']['FieldValue']);
    }
    /**
     * Set the value of Value, return this.
     *
     * @param value
     *             The new value to set.
     *
     * @return $this .
     */
    public function withValue($value)
    {
        $this->setValue($value);
        return $this;
    }
}