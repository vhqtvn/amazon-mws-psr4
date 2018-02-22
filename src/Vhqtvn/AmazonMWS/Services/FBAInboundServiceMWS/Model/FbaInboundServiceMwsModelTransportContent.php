<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent
 * 
 * Properties:
 * <ul>
 * 
 * <li>TransportHeader: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportHeader</li>
 * <li>TransportDetails: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDetailOutput</li>
 * <li>TransportResult: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportResult</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelTransportContent extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TransportHeader' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportHeader::class), 'TransportDetails' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDetailOutput::class), 'TransportResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportResult::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the TransportHeader property.
     *
     * @return TransportHeader TransportHeader.
     */
    public function getTransportHeader()
    {
        return $this->_fields['TransportHeader']['FieldValue'];
    }
    /**
     * Set the value of the TransportHeader property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportHeader transportHeader
     * @return $this 
     */
    public function setTransportHeader($value)
    {
        $this->_fields['TransportHeader']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportHeader is set.
     *
     * @return true if TransportHeader is set.
     */
    public function isSetTransportHeader()
    {
        return !is_null($this->_fields['TransportHeader']['FieldValue']);
    }
    /**
     * Set the value of TransportHeader, return this.
     *
     * @param transportHeader
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransportHeader($value)
    {
        $this->setTransportHeader($value);
        return $this;
    }
    /**
     * Get the value of the TransportDetails property.
     *
     * @return TransportDetailOutput TransportDetails.
     */
    public function getTransportDetails()
    {
        return $this->_fields['TransportDetails']['FieldValue'];
    }
    /**
     * Set the value of the TransportDetails property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDetailOutput transportDetails
     * @return $this 
     */
    public function setTransportDetails($value)
    {
        $this->_fields['TransportDetails']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportDetails is set.
     *
     * @return true if TransportDetails is set.
     */
    public function isSetTransportDetails()
    {
        return !is_null($this->_fields['TransportDetails']['FieldValue']);
    }
    /**
     * Set the value of TransportDetails, return this.
     *
     * @param transportDetails
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransportDetails($value)
    {
        $this->setTransportDetails($value);
        return $this;
    }
    /**
     * Get the value of the TransportResult property.
     *
     * @return TransportResult TransportResult.
     */
    public function getTransportResult()
    {
        return $this->_fields['TransportResult']['FieldValue'];
    }
    /**
     * Set the value of the TransportResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportResult transportResult
     * @return $this 
     */
    public function setTransportResult($value)
    {
        $this->_fields['TransportResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportResult is set.
     *
     * @return true if TransportResult is set.
     */
    public function isSetTransportResult()
    {
        return !is_null($this->_fields['TransportResult']['FieldValue']);
    }
    /**
     * Set the value of TransportResult, return this.
     *
     * @param transportResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransportResult($value)
    {
        $this->setTransportResult($value);
        return $this;
    }
}