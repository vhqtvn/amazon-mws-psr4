<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError
 * 
 * @property	string	$Type
 * @property	string	$Code
 * @property	string	$Message
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelObject	$Detail
 */
class MarketplaceWebServiceModelError extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Type: string</li>
     * <li>Code: string</li>
     * <li>Message: string</li>
     * <li>Detail: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelObject</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Type' => array('FieldValue' => null, 'FieldType' => 'string'), 'Code' => array('FieldValue' => null, 'FieldType' => 'string'), 'Message' => array('FieldValue' => null, 'FieldType' => 'string'), 'Detail' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Type property.
     * 
     * @return string Type
     */
    public function getType()
    {
        return $this->fields['Type']['FieldValue'];
    }
    /**
     * Sets the value of the Type property.
     * 
     * @param string Type
     * @return $this 
     */
    public function setType($value)
    {
        $this->fields['Type']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Type, return this.
     *
     * @param string $Type
     * @return $this
     */
    public function withType($Type)
    {
        $this->setType($Type);
        return $this;
    }
    /**
     * Checks if Type is set
     * 
     * @return bool true if Type  is set
     */
    public function isSetType()
    {
        return !is_null($this->fields['Type']['FieldValue']);
    }
    /**
     * Gets the value of the Code property.
     * 
     * @return string Code
     */
    public function getCode()
    {
        return $this->fields['Code']['FieldValue'];
    }
    /**
     * Sets the value of the Code property.
     * 
     * @param string Code
     * @return $this 
     */
    public function setCode($value)
    {
        $this->fields['Code']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Code, return this.
     *
     * @param string $Code
     * @return $this
     */
    public function withCode($Code)
    {
        $this->setCode($Code);
        return $this;
    }
    /**
     * Checks if Code is set
     * 
     * @return bool true if Code  is set
     */
    public function isSetCode()
    {
        return !is_null($this->fields['Code']['FieldValue']);
    }
    /**
     * Gets the value of the Message property.
     * 
     * @return string Message
     */
    public function getMessage()
    {
        return $this->fields['Message']['FieldValue'];
    }
    /**
     * Sets the value of the Message property.
     * 
     * @param string Message
     * @return $this 
     */
    public function setMessage($value)
    {
        $this->fields['Message']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Message, return this.
     *
     * @param string $Message
     * @return $this
     */
    public function withMessage($Message)
    {
        $this->setMessage($Message);
        return $this;
    }
    /**
     * Checks if Message is set
     * 
     * @return bool true if Message  is set
     */
    public function isSetMessage()
    {
        return !is_null($this->fields['Message']['FieldValue']);
    }
    /**
     * Gets the value of the Detail.
     * 
     * @return Error.Detail Detail
     */
    public function getDetail()
    {
        return $this->fields['Detail']['FieldValue'];
    }
    /**
     * Sets the value of the Detail.
     * 
     * @param Error.Detail Detail
     * @return void
     */
    public function setDetail($value)
    {
        $this->fields['Detail']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of Detail, return this.
     *
     * @param Error.Detail $Detail
     * @return $this
     */
    public function withDetail($Detail)
    {
        $this->setDetail($Detail);
        return $this;
    }
    /**
     * Checks if Detail  is set
     * 
     * @return bool true if Detail property is set
     */
    public function isSetDetail()
    {
        return !is_null($this->fields['Detail']['FieldValue']);
    }
}