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
     * @return \string Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }
    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return $this instance
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
     * @param string $Status
     * @return $this
     */
    public function withStatus($Status)
    {
        $this->setStatus($Status);
        return $this;
    }
    /**
     * Get the value of the Timestamp property.
     *
     * @return \DateTime Timestamp.
     */
    public function getTimestamp()
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }
    /**
     * Set the value of the Timestamp property.
     *
     * @param string timestamp
     * @return $this instance
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
     * @param string $Timestamp
     * @return $this
     */
    public function withTimestamp($Timestamp)
    {
        $this->setTimestamp($Timestamp);
        return $this;
    }
    /**
     * Get the value of the MessageId property.
     *
     * @return \string MessageId.
     */
    public function getMessageId()
    {
        return $this->_fields['MessageId']['FieldValue'];
    }
    /**
     * Set the value of the MessageId property.
     *
     * @param string messageId
     * @return $this instance
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
     * @param string $MessageId
     * @return $this
     */
    public function withMessageId($MessageId)
    {
        $this->setMessageId($MessageId);
        return $this;
    }
    /**
     * Get the value of the Messages property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList Messages.
     */
    public function getMessages()
    {
        return $this->_fields['Messages']['FieldValue'];
    }
    /**
     * Set the value of the Messages property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList messages
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList $Messages
     * @return $this
     */
    public function withMessages($Messages)
    {
        $this->setMessages($Messages);
        return $this;
    }
}