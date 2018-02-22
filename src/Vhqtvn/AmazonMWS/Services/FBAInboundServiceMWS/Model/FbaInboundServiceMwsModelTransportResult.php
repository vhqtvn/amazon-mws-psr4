<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>TransportStatus: string</li>
 * <li>ErrorCode: string</li>
 * <li>ErrorDescription: string</li>
 *
 * </ul>
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
     * @return String TransportStatus.
     */
    public function getTransportStatus()
    {
        return $this->_fields['TransportStatus']['FieldValue'];
    }
    /**
     * Set the value of the TransportStatus property.
     *
     * @param string transportStatus
     * @return $this 
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
     * @param transportStatus
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransportStatus($value)
    {
        $this->setTransportStatus($value);
        return $this;
    }
    /**
     * Get the value of the ErrorCode property.
     *
     * @return String ErrorCode.
     */
    public function getErrorCode()
    {
        return $this->_fields['ErrorCode']['FieldValue'];
    }
    /**
     * Set the value of the ErrorCode property.
     *
     * @param string errorCode
     * @return $this 
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
     * @param errorCode
     *             The new value to set.
     *
     * @return $this .
     */
    public function withErrorCode($value)
    {
        $this->setErrorCode($value);
        return $this;
    }
    /**
     * Get the value of the ErrorDescription property.
     *
     * @return String ErrorDescription.
     */
    public function getErrorDescription()
    {
        return $this->_fields['ErrorDescription']['FieldValue'];
    }
    /**
     * Set the value of the ErrorDescription property.
     *
     * @param string errorDescription
     * @return $this 
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
     * @param errorDescription
     *             The new value to set.
     *
     * @return $this .
     */
    public function withErrorDescription($value)
    {
        $this->setErrorDescription($value);
        return $this;
    }
}