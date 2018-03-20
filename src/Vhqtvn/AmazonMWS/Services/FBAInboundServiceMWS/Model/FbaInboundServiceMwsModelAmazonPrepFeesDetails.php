<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmazonPrepFeesDetails
 * 
 * @property	string	$PrepInstruction
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$FeePerUnit
 */
class FbaInboundServiceMwsModelAmazonPrepFeesDetails extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PrepInstruction' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeePerUnit' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PrepInstruction property.
     *
     * @return \string PrepInstruction.
     */
    public function getPrepInstruction()
    {
        return $this->_fields['PrepInstruction']['FieldValue'];
    }
    /**
     * Set the value of the PrepInstruction property.
     *
     * @param string prepInstruction
     * @return $this instance
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
     * @param string $PrepInstruction
     * @return $this
     */
    public function withPrepInstruction($PrepInstruction)
    {
        $this->setPrepInstruction($PrepInstruction);
        return $this;
    }
    /**
     * Get the value of the FeePerUnit property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount FeePerUnit.
     */
    public function getFeePerUnit()
    {
        return $this->_fields['FeePerUnit']['FieldValue'];
    }
    /**
     * Set the value of the FeePerUnit property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount feePerUnit
     * @return $this instance
     */
    public function setFeePerUnit($value)
    {
        $this->_fields['FeePerUnit']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeePerUnit is set.
     *
     * @return true if FeePerUnit is set.
     */
    public function isSetFeePerUnit()
    {
        return !is_null($this->_fields['FeePerUnit']['FieldValue']);
    }
    /**
     * Set the value of FeePerUnit, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount $FeePerUnit
     * @return $this
     */
    public function withFeePerUnit($FeePerUnit)
    {
        $this->setFeePerUnit($FeePerUnit);
        return $this;
    }
}