<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetServiceStatusResult
 * 
 * @property	string	$Status
 * @property	string	$Timestamp
 */
class FbaInboundServiceMwsModelGetServiceStatusResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Status' => array('FieldValue' => null, 'FieldType' => 'string'), 'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'));
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
}