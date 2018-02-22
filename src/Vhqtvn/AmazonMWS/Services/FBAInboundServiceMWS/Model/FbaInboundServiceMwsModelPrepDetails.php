<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetails
 * 
 * Properties:
 * <ul>
 * 
 * <li>PrepInstruction: string</li>
 * <li>PrepOwner: string</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelPrepDetails extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PrepInstruction' => array('FieldValue' => null, 'FieldType' => 'string'), 'PrepOwner' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the PrepInstruction property.
     *
     * @return String PrepInstruction.
     */
    public function getPrepInstruction()
    {
        return $this->_fields['PrepInstruction']['FieldValue'];
    }
    /**
     * Set the value of the PrepInstruction property.
     *
     * @param string prepInstruction
     * @return $this 
     */
    public function setPrepInstruction($value)
    {
        $this->_fields['PrepInstruction']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set.
     */
    public function isSetPrepInstruction()
    {
        return !is_null($this->_fields['PrepInstruction']['FieldValue']);
    }
    /**
     * Set the value of PrepInstruction, return this.
     *
     * @param prepInstruction
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPrepInstruction($value)
    {
        $this->setPrepInstruction($value);
        return $this;
    }
    /**
     * Get the value of the PrepOwner property.
     *
     * @return String PrepOwner.
     */
    public function getPrepOwner()
    {
        return $this->_fields['PrepOwner']['FieldValue'];
    }
    /**
     * Set the value of the PrepOwner property.
     *
     * @param string prepOwner
     * @return $this 
     */
    public function setPrepOwner($value)
    {
        $this->_fields['PrepOwner']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PrepOwner is set.
     *
     * @return true if PrepOwner is set.
     */
    public function isSetPrepOwner()
    {
        return !is_null($this->_fields['PrepOwner']['FieldValue']);
    }
    /**
     * Set the value of PrepOwner, return this.
     *
     * @param prepOwner
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPrepOwner($value)
    {
        $this->setPrepOwner($value);
        return $this;
    }
}