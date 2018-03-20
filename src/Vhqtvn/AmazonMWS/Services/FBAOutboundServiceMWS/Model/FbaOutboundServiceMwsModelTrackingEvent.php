<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingEvent
 * 
 * @property	string	$EventDate
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress	$EventAddress
 * @property	string	$EventCode
 */
class FbaOutboundServiceMwsModelTrackingEvent extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('EventDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'EventAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress::class), 'EventCode' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the EventDate property.
     *
     * @return \DateTime EventDate.
     */
    public function getEventDate()
    {
        return $this->_fields['EventDate']['FieldValue'];
    }
    /**
     * Set the value of the EventDate property.
     *
     * @param string eventDate
     * @return $this instance
     */
    public function setEventDate($value)
    {
        $this->_fields['EventDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EventDate is set.
     *
     * @return true if EventDate is set.
     */
    public function isSetEventDate()
    {
        return !is_null($this->_fields['EventDate']['FieldValue']);
    }
    /**
     * Set the value of EventDate, return this.
     *
     * @param string $EventDate
     * @return $this
     */
    public function withEventDate($EventDate)
    {
        $this->setEventDate($EventDate);
        return $this;
    }
    /**
     * Get the value of the EventAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress EventAddress.
     */
    public function getEventAddress()
    {
        return $this->_fields['EventAddress']['FieldValue'];
    }
    /**
     * Set the value of the EventAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress eventAddress
     * @return $this instance
     */
    public function setEventAddress($value)
    {
        $this->_fields['EventAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EventAddress is set.
     *
     * @return true if EventAddress is set.
     */
    public function isSetEventAddress()
    {
        return !is_null($this->_fields['EventAddress']['FieldValue']);
    }
    /**
     * Set the value of EventAddress, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress $EventAddress
     * @return $this
     */
    public function withEventAddress($EventAddress)
    {
        $this->setEventAddress($EventAddress);
        return $this;
    }
    /**
     * Get the value of the EventCode property.
     *
     * @return \string EventCode.
     */
    public function getEventCode()
    {
        return $this->_fields['EventCode']['FieldValue'];
    }
    /**
     * Set the value of the EventCode property.
     *
     * @param string eventCode
     * @return $this instance
     */
    public function setEventCode($value)
    {
        $this->_fields['EventCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EventCode is set.
     *
     * @return true if EventCode is set.
     */
    public function isSetEventCode()
    {
        return !is_null($this->_fields['EventCode']['FieldValue']);
    }
    /**
     * Set the value of EventCode, return this.
     *
     * @param string $EventCode
     * @return $this
     */
    public function withEventCode($EventCode)
    {
        $this->setEventCode($EventCode);
        return $this;
    }
}