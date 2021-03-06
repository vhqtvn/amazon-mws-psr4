<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportResult
 * 
 * @property	string	$TransportStatus
 * @property	string	$ErrorCode
 * @property	string	$ErrorDescription
 */
class FbaInboundServiceMwsModelTransportResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TransportStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'ErrorCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'ErrorDescription' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the TransportStatus property.
     *
     * @return \string TransportStatus.
     */
    public function getTransportStatus()
    {
        return $this->_fields['TransportStatus']['FieldValue'];
    }
    /**
     * Set the value of the TransportStatus property.
     *
     * @param string transportStatus
     * @return $this instance
     */
    public function setTransportStatus($value)
    {
        $this->_fields['TransportStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportStatus is set.
     *
     * @return true if TransportStatus is set.
     */
    public function isSetTransportStatus()
    {
        return !is_null($this->_fields['TransportStatus']['FieldValue']);
    }
    /**
     * Set the value of TransportStatus, return this.
     *
     * @param string $TransportStatus
     * @return $this
     */
    public function withTransportStatus($TransportStatus)
    {
        $this->setTransportStatus($TransportStatus);
        return $this;
    }
    /**
     * Get the value of the ErrorCode property.
     *
     * @return \string ErrorCode.
     */
    public function getErrorCode()
    {
        return $this->_fields['ErrorCode']['FieldValue'];
    }
    /**
     * Set the value of the ErrorCode property.
     *
     * @param string errorCode
     * @return $this instance
     */
    public function setErrorCode($value)
    {
        $this->_fields['ErrorCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ErrorCode is set.
     *
     * @return true if ErrorCode is set.
     */
    public function isSetErrorCode()
    {
        return !is_null($this->_fields['ErrorCode']['FieldValue']);
    }
    /**
     * Set the value of ErrorCode, return this.
     *
     * @param string $ErrorCode
     * @return $this
     */
    public function withErrorCode($ErrorCode)
    {
        $this->setErrorCode($ErrorCode);
        return $this;
    }
    /**
     * Get the value of the ErrorDescription property.
     *
     * @return \string ErrorDescription.
     */
    public function getErrorDescription()
    {
        return $this->_fields['ErrorDescription']['FieldValue'];
    }
    /**
     * Set the value of the ErrorDescription property.
     *
     * @param string errorDescription
     * @return $this instance
     */
    public function setErrorDescription($value)
    {
        $this->_fields['ErrorDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ErrorDescription is set.
     *
     * @return true if ErrorDescription is set.
     */
    public function isSetErrorDescription()
    {
        return !is_null($this->_fields['ErrorDescription']['FieldValue']);
    }
    /**
     * Set the value of ErrorDescription, return this.
     *
     * @param string $ErrorDescription
     * @return $this
     */
    public function withErrorDescription($ErrorDescription)
    {
        $this->setErrorDescription($ErrorDescription);
        return $this;
    }
}