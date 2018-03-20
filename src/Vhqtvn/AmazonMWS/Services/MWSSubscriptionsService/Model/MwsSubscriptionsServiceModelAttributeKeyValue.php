<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelAttributeKeyValue
 * 
 * @property	string	$Key
 * @property	string	$Value
 */
class MwsSubscriptionsServiceModelAttributeKeyValue extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Key' => array('FieldValue' => null, 'FieldType' => 'string'), 'Value' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Key property.
     *
     * @return \string Key.
     */
    public function getKey()
    {
        return $this->_fields['Key']['FieldValue'];
    }
    /**
     * Set the value of the Key property.
     *
     * @param string key
     * @return $this instance
     */
    public function setKey($value)
    {
        $this->_fields['Key']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Key is set.
     *
     * @return true if Key is set.
     */
    public function isSetKey()
    {
        return !is_null($this->_fields['Key']['FieldValue']);
    }
    /**
     * Set the value of Key, return this.
     *
     * @param string $Key
     * @return $this
     */
    public function withKey($Key)
    {
        $this->setKey($Key);
        return $this;
    }
    /**
     * Get the value of the Value property.
     *
     * @return \string Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }
    /**
     * Set the value of the Value property.
     *
     * @param string value
     * @return $this instance
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
     * @param string $Value
     * @return $this
     */
    public function withValue($Value)
    {
        $this->setValue($Value);
        return $this;
    }
}