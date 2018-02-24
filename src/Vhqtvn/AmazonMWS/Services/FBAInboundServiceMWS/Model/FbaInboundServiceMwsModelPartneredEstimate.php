<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$Amount
 * @property	string	$ConfirmDeadline
 * @property	string	$VoidDeadline
 */
class FbaInboundServiceMwsModelPartneredEstimate extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Amount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class), 'ConfirmDeadline' => array('FieldValue' => null, 'FieldType' => 'string'), 'VoidDeadline' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Amount property.
     *
     * @return Amount Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }
    /**
     * Set the value of the Amount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount amount
     * @return $this 
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }
    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }
    /**
     * Get the value of the ConfirmDeadline property.
     *
     * @return String ConfirmDeadline.
     */
    public function getConfirmDeadline()
    {
        return $this->_fields['ConfirmDeadline']['FieldValue'];
    }
    /**
     * Set the value of the ConfirmDeadline property.
     *
     * @param string confirmDeadline
     * @return $this 
     */
    public function setConfirmDeadline($value)
    {
        $this->_fields['ConfirmDeadline']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConfirmDeadline is set.
     *
     * @return true if ConfirmDeadline is set.
     */
    public function isSetConfirmDeadline()
    {
        return !is_null($this->_fields['ConfirmDeadline']['FieldValue']);
    }
    /**
     * Set the value of ConfirmDeadline, return this.
     *
     * @param confirmDeadline
     *             The new value to set.
     *
     * @return $this .
     */
    public function withConfirmDeadline($value)
    {
        $this->setConfirmDeadline($value);
        return $this;
    }
    /**
     * Get the value of the VoidDeadline property.
     *
     * @return String VoidDeadline.
     */
    public function getVoidDeadline()
    {
        return $this->_fields['VoidDeadline']['FieldValue'];
    }
    /**
     * Set the value of the VoidDeadline property.
     *
     * @param string voidDeadline
     * @return $this 
     */
    public function setVoidDeadline($value)
    {
        $this->_fields['VoidDeadline']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if VoidDeadline is set.
     *
     * @return true if VoidDeadline is set.
     */
    public function isSetVoidDeadline()
    {
        return !is_null($this->_fields['VoidDeadline']['FieldValue']);
    }
    /**
     * Set the value of VoidDeadline, return this.
     *
     * @param voidDeadline
     *             The new value to set.
     *
     * @return $this .
     */
    public function withVoidDeadline($value)
    {
        $this->setVoidDeadline($value);
        return $this;
    }
}