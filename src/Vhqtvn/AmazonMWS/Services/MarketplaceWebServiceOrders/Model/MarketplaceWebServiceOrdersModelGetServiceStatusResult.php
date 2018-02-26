<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelGetServiceStatusResult
 * 
 * @property	string	$Status
 * @property	string	$Timestamp
 * @property	string	$MessageId
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMessage[]	$Messages
 */
class MarketplaceWebServiceOrdersModelGetServiceStatusResult extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Status' => array('FieldValue' => null, 'FieldType' => 'string'), 'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'), 'MessageId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Messages' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMessage::class), 'ListMemberName' => 'Message'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Status property.
     *
     * @return String Status.
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMessage[] Messages.
     */
    public function getMessages()
    {
        if ($this->_fields['Messages']['FieldValue'] == null) {
            $this->_fields['Messages']['FieldValue'] = array();
        }
        return $this->_fields['Messages']['FieldValue'];
    }
    /**
     * Set the value of the Messages property.
     *
     * @param array messages
     * @return $this 
     */
    public function setMessages($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Messages']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Messages.
     */
    public function unsetMessages()
    {
        $this->_fields['Messages']['FieldValue'] = array();
    }
    /**
     * Check to see if Messages is set.
     *
     * @return true if Messages is set.
     */
    public function isSetMessages()
    {
        return !empty($this->_fields['Messages']['FieldValue']);
    }
    /**
     * Add values for Messages, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMessage[] $Messages_array,...
     * @return $this
     */
    public function withMessages(...$Messages_array)
    {
        foreach ($Messages_array as $Messages) {
            $this->_fields['Messages']['FieldValue'][] = $Messages;
        }
        return $this;
    }
}