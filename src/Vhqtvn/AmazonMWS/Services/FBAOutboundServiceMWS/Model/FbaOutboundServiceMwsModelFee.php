<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFee
 * 
 * @property	string	$Name
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$Amount
 */
class FbaOutboundServiceMwsModelFee extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Name' => array('FieldValue' => null, 'FieldType' => 'string'), 'Amount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Name property.
     *
     * @return String Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }
    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @return $this 
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set.
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
    }
    /**
     * Set the value of Name, return this.
     *
     * @param name
     *             The new value to set.
     *
     * @return $this .
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }
    /**
     * Get the value of the Amount property.
     *
     * @return Currency Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }
    /**
     * Set the value of the Amount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency amount
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
}