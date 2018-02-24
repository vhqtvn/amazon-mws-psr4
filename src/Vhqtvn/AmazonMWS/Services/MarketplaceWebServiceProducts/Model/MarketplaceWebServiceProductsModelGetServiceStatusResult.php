<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatusResult
 * 
 * @property	string	$Status
 * @property	string	$Timestamp
 * @property	string	$MessageId
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList	$Messages
 */
class MarketplaceWebServiceProductsModelGetServiceStatusResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Status' => array('FieldValue' => null, 'FieldType' => 'string'), 'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'), 'MessageId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Messages' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Status property.
     *
     * @return ServiceStatusEnum Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }
    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return $this 
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
        return !is_null($this->_fields['Status']['FieldValue']);
    }
    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return $this .
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }
    /**
     * Get the value of the Timestamp property.
     *
     * @return XMLGregorianCalendar Timestamp.
     */
    public function getTimestamp()
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }
    /**
     * Set the value of the Timestamp property.
     *
     * @param string timestamp
     * @return $this 
     */
    public function setTimestamp($value)
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Timestamp is set.
     *
     * @return true if Timestamp is set.
     */
    public function isSetTimestamp()
    {
        return !is_null($this->_fields['Timestamp']['FieldValue']);
    }
    /**
     * Set the value of Timestamp, return this.
     *
     * @param timestamp
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);
        return $this;
    }
    /**
     * Get the value of the MessageId property.
     *
     * @return String MessageId.
     */
    public function getMessageId()
    {
        return $this->_fields['MessageId']['FieldValue'];
    }
    /**
     * Set the value of the MessageId property.
     *
     * @param string messageId
     * @return $this 
     */
    public function setMessageId($value)
    {
        $this->_fields['MessageId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MessageId is set.
     *
     * @return true if MessageId is set.
     */
    public function isSetMessageId()
    {
        return !is_null($this->_fields['MessageId']['FieldValue']);
    }
    /**
     * Set the value of MessageId, return this.
     *
     * @param messageId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMessageId($value)
    {
        $this->setMessageId($value);
        return $this;
    }
    /**
     * Get the value of the Messages property.
     *
     * @return MessageList Messages.
     */
    public function getMessages()
    {
        return $this->_fields['Messages']['FieldValue'];
    }
    /**
     * Set the value of the Messages property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList messages
     * @return $this 
     */
    public function setMessages($value)
    {
        $this->_fields['Messages']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Messages is set.
     *
     * @return true if Messages is set.
     */
    public function isSetMessages()
    {
        return !is_null($this->_fields['Messages']['FieldValue']);
    }
    /**
     * Set the value of Messages, return this.
     *
     * @param messages
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMessages($value)
    {
        $this->setMessages($value);
        return $this;
    }
}