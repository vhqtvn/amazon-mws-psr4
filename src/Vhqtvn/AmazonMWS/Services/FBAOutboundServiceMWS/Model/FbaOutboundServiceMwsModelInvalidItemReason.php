<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidItemReason
 * 
 * @property	string	$InvalidItemReasonCode
 * @property	string	$Description
 */
class FbaOutboundServiceMwsModelInvalidItemReason extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InvalidItemReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'Description' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the InvalidItemReasonCode property.
     *
     * @return String InvalidItemReasonCode.
     */
    public function getInvalidItemReasonCode()
    {
        return $this->_fields['InvalidItemReasonCode']['FieldValue'];
    }
    /**
     * Set the value of the InvalidItemReasonCode property.
     *
     * @param string invalidItemReasonCode
     * @return $this 
     */
    public function setInvalidItemReasonCode($value)
    {
        $this->_fields['InvalidItemReasonCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvalidItemReasonCode is set.
     *
     * @return true if InvalidItemReasonCode is set.
     */
    public function isSetInvalidItemReasonCode()
    {
        return !is_null($this->_fields['InvalidItemReasonCode']['FieldValue']);
    }
    /**
     * Set the value of InvalidItemReasonCode, return this.
     *
     * @param string $InvalidItemReasonCode
     * @return $this
     */
    public function withInvalidItemReasonCode($InvalidItemReasonCode)
    {
        $this->setInvalidItemReasonCode($InvalidItemReasonCode);
        return $this;
    }
    /**
     * Get the value of the Description property.
     *
     * @return String Description.
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }
    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @return $this 
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set.
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }
    /**
     * Set the value of Description, return this.
     *
     * @param string $Description
     * @return $this
     */
    public function withDescription($Description)
    {
        $this->setDescription($Description);
        return $this;
    }
}