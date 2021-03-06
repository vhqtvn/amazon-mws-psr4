<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorization
 * 
 * @property	string	$ReturnAuthorizationId
 * @property	string	$FulfillmentCenterId
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress	$ReturnToAddress
 * @property	string	$AmazonRmaId
 * @property	string	$RmaPageURL
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
     * @return \string ReturnAuthorizationId.
     */
    public function getReturnAuthorizationId()
    {
        return $this->_fields['ReturnAuthorizationId']['FieldValue'];
    }
    /**
     * Set the value of the ReturnAuthorizationId property.
     *
     * @param string returnAuthorizationId
     * @return $this instance
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
     * @param string $ReturnAuthorizationId
     * @return $this
     */
    public function withReturnAuthorizationId($ReturnAuthorizationId)
    {
        $this->setReturnAuthorizationId($ReturnAuthorizationId);
        return $this;
    }
    /**
     * Get the value of the FulfillmentCenterId property.
     *
     * @return \string FulfillmentCenterId.
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @return $this instance
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
     * @param string $FulfillmentCenterId
     * @return $this
     */
    public function withFulfillmentCenterId($FulfillmentCenterId)
    {
        $this->setFulfillmentCenterId($FulfillmentCenterId);
        return $this;
    }
    /**
     * Get the value of the ReturnToAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress ReturnToAddress.
     */
    public function getReturnToAddress()
    {
        return $this->_fields['ReturnToAddress']['FieldValue'];
    }
    /**
     * Set the value of the ReturnToAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress returnToAddress
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress $ReturnToAddress
     * @return $this
     */
    public function withReturnToAddress($ReturnToAddress)
    {
        $this->setReturnToAddress($ReturnToAddress);
        return $this;
    }
    /**
     * Get the value of the AmazonRmaId property.
     *
     * @return \string AmazonRmaId.
     */
    public function getAmazonRmaId()
    {
        return $this->_fields['AmazonRmaId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonRmaId property.
     *
     * @param string amazonRmaId
     * @return $this instance
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
     * @param string $AmazonRmaId
     * @return $this
     */
    public function withAmazonRmaId($AmazonRmaId)
    {
        $this->setAmazonRmaId($AmazonRmaId);
        return $this;
    }
    /**
     * Get the value of the RmaPageURL property.
     *
     * @return \string RmaPageURL.
     */
    public function getRmaPageURL()
    {
        return $this->_fields['RmaPageURL']['FieldValue'];
    }
    /**
     * Set the value of the RmaPageURL property.
     *
     * @param string rmaPageURL
     * @return $this instance
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
     * @param string $RmaPageURL
     * @return $this
     */
    public function withRmaPageURL($RmaPageURL)
    {
        $this->setRmaPageURL($RmaPageURL);
        return $this;
    }
}