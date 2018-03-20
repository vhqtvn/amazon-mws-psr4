<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindow
 * 
 * @property	string	$StartDateTime
 * @property	string	$EndDateTime
 */
class FbaOutboundServiceMwsModelDeliveryWindow extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('StartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'EndDateTime' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the StartDateTime property.
     *
     * @return \DateTime StartDateTime.
     */
    public function getStartDateTime()
    {
        return $this->_fields['StartDateTime']['FieldValue'];
    }
    /**
     * Set the value of the StartDateTime property.
     *
     * @param string startDateTime
     * @return $this instance
     */
    public function setStartDateTime($value)
    {
        $this->_fields['StartDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if StartDateTime is set.
     *
     * @return true if StartDateTime is set.
     */
    public function isSetStartDateTime()
    {
        return !is_null($this->_fields['StartDateTime']['FieldValue']);
    }
    /**
     * Set the value of StartDateTime, return this.
     *
     * @param string $StartDateTime
     * @return $this
     */
    public function withStartDateTime($StartDateTime)
    {
        $this->setStartDateTime($StartDateTime);
        return $this;
    }
    /**
     * Get the value of the EndDateTime property.
     *
     * @return \DateTime EndDateTime.
     */
    public function getEndDateTime()
    {
        return $this->_fields['EndDateTime']['FieldValue'];
    }
    /**
     * Set the value of the EndDateTime property.
     *
     * @param string endDateTime
     * @return $this instance
     */
    public function setEndDateTime($value)
    {
        $this->_fields['EndDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EndDateTime is set.
     *
     * @return true if EndDateTime is set.
     */
    public function isSetEndDateTime()
    {
        return !is_null($this->_fields['EndDateTime']['FieldValue']);
    }
    /**
     * Set the value of EndDateTime, return this.
     *
     * @param string $EndDateTime
     * @return $this
     */
    public function withEndDateTime($EndDateTime)
    {
        $this->setEndDateTime($EndDateTime);
        return $this;
    }
}