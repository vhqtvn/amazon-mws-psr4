<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReasonCodeDetails
 * 
 * @property	string	$ReturnReasonCode
 * @property	string	$Description
 * @property	string	$TranslatedDescription
 */
class FbaOutboundServiceMwsModelReasonCodeDetails extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ReturnReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'Description' => array('FieldValue' => null, 'FieldType' => 'string'), 'TranslatedDescription' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ReturnReasonCode property.
     *
     * @return String ReturnReasonCode.
     */
    public function getReturnReasonCode()
    {
        return $this->_fields['ReturnReasonCode']['FieldValue'];
    }
    /**
     * Set the value of the ReturnReasonCode property.
     *
     * @param string returnReasonCode
     * @return $this 
     */
    public function setReturnReasonCode($value)
    {
        $this->_fields['ReturnReasonCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnReasonCode is set.
     *
     * @return true if ReturnReasonCode is set.
     */
    public function isSetReturnReasonCode()
    {
        return !is_null($this->_fields['ReturnReasonCode']['FieldValue']);
    }
    /**
     * Set the value of ReturnReasonCode, return this.
     *
     * @param string $ReturnReasonCode
     * @return $this
     */
    public function withReturnReasonCode($ReturnReasonCode)
    {
        $this->setReturnReasonCode($ReturnReasonCode);
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
    /**
     * Get the value of the TranslatedDescription property.
     *
     * @return String TranslatedDescription.
     */
    public function getTranslatedDescription()
    {
        return $this->_fields['TranslatedDescription']['FieldValue'];
    }
    /**
     * Set the value of the TranslatedDescription property.
     *
     * @param string translatedDescription
     * @return $this 
     */
    public function setTranslatedDescription($value)
    {
        $this->_fields['TranslatedDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TranslatedDescription is set.
     *
     * @return true if TranslatedDescription is set.
     */
    public function isSetTranslatedDescription()
    {
        return !is_null($this->_fields['TranslatedDescription']['FieldValue']);
    }
    /**
     * Set the value of TranslatedDescription, return this.
     *
     * @param string $TranslatedDescription
     * @return $this
     */
    public function withTranslatedDescription($TranslatedDescription)
    {
        $this->setTranslatedDescription($TranslatedDescription);
        return $this;
    }
}