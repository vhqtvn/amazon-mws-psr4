<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorization
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReturnAuthorizationId: string</li>
 * <li>FulfillmentCenterId: string</li>
 * <li>ReturnToAddress: \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress</li>
 * <li>AmazonRmaId: string</li>
 * <li>RmaPageURL: string</li>
 *
 * </ul>
 */
class FbaOutboundServiceMwsModelReturnAuthorization extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ReturnAuthorizationId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReturnToAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress::class), 'AmazonRmaId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RmaPageURL' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ReturnAuthorizationId property.
     *
     * @return String ReturnAuthorizationId.
     */
    public function getReturnAuthorizationId()
    {
        return $this->_fields['ReturnAuthorizationId']['FieldValue'];
    }
    /**
     * Set the value of the ReturnAuthorizationId property.
     *
     * @param string returnAuthorizationId
     * @return $this 
     */
    public function setReturnAuthorizationId($value)
    {
        $this->_fields['ReturnAuthorizationId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnAuthorizationId is set.
     *
     * @return true if ReturnAuthorizationId is set.
     */
    public function isSetReturnAuthorizationId()
    {
        return !is_null($this->_fields['ReturnAuthorizationId']['FieldValue']);
    }
    /**
     * Set the value of ReturnAuthorizationId, return this.
     *
     * @param returnAuthorizationId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withReturnAuthorizationId($value)
    {
        $this->setReturnAuthorizationId($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentCenterId property.
     *
     * @return String FulfillmentCenterId.
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @return $this 
     */
    public function setFulfillmentCenterId($value)
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentCenterId is set.
     *
     * @return true if FulfillmentCenterId is set.
     */
    public function isSetFulfillmentCenterId()
    {
        return !is_null($this->_fields['FulfillmentCenterId']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentCenterId, return this.
     *
     * @param fulfillmentCenterId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentCenterId($value)
    {
        $this->setFulfillmentCenterId($value);
        return $this;
    }
    /**
     * Get the value of the ReturnToAddress property.
     *
     * @return Address ReturnToAddress.
     */
    public function getReturnToAddress()
    {
        return $this->_fields['ReturnToAddress']['FieldValue'];
    }
    /**
     * Set the value of the ReturnToAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress returnToAddress
     * @return $this 
     */
    public function setReturnToAddress($value)
    {
        $this->_fields['ReturnToAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnToAddress is set.
     *
     * @return true if ReturnToAddress is set.
     */
    public function isSetReturnToAddress()
    {
        return !is_null($this->_fields['ReturnToAddress']['FieldValue']);
    }
    /**
     * Set the value of ReturnToAddress, return this.
     *
     * @param returnToAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withReturnToAddress($value)
    {
        $this->setReturnToAddress($value);
        return $this;
    }
    /**
     * Get the value of the AmazonRmaId property.
     *
     * @return String AmazonRmaId.
     */
    public function getAmazonRmaId()
    {
        return $this->_fields['AmazonRmaId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonRmaId property.
     *
     * @param string amazonRmaId
     * @return $this 
     */
    public function setAmazonRmaId($value)
    {
        $this->_fields['AmazonRmaId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonRmaId is set.
     *
     * @return true if AmazonRmaId is set.
     */
    public function isSetAmazonRmaId()
    {
        return !is_null($this->_fields['AmazonRmaId']['FieldValue']);
    }
    /**
     * Set the value of AmazonRmaId, return this.
     *
     * @param amazonRmaId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmazonRmaId($value)
    {
        $this->setAmazonRmaId($value);
        return $this;
    }
    /**
     * Get the value of the RmaPageURL property.
     *
     * @return String RmaPageURL.
     */
    public function getRmaPageURL()
    {
        return $this->_fields['RmaPageURL']['FieldValue'];
    }
    /**
     * Set the value of the RmaPageURL property.
     *
     * @param string rmaPageURL
     * @return $this 
     */
    public function setRmaPageURL($value)
    {
        $this->_fields['RmaPageURL']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RmaPageURL is set.
     *
     * @return true if RmaPageURL is set.
     */
    public function isSetRmaPageURL()
    {
        return !is_null($this->_fields['RmaPageURL']['FieldValue']);
    }
    /**
     * Set the value of RmaPageURL, return this.
     *
     * @param rmaPageURL
     *             The new value to set.
     *
     * @return $this .
     */
    public function withRmaPageURL($value)
    {
        $this->setRmaPageURL($value);
        return $this;
    }
}