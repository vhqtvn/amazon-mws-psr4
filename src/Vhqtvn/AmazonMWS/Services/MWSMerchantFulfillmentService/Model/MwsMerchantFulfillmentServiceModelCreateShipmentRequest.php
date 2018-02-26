<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipmentRequestDetails	$ShipmentRequestDetails
 * @property	string	$ShippingServiceId
 * @property	string	$ShippingServiceOfferId
 * @property	string	$HazmatType
 */
class MwsMerchantFulfillmentServiceModelCreateShipmentRequest extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentRequestDetails' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipmentRequestDetails::class), 'ShippingServiceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingServiceOfferId' => array('FieldValue' => null, 'FieldType' => 'string'), 'HazmatType' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this 
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param string $SellerId
     * @return $this
     */
    public function withSellerId($SellerId)
    {
        $this->setSellerId($SellerId);
        return $this;
    }
    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this 
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }
    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Get the value of the ShipmentRequestDetails property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipmentRequestDetails ShipmentRequestDetails.
     */
    public function getShipmentRequestDetails()
    {
        return $this->_fields['ShipmentRequestDetails']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentRequestDetails property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipmentRequestDetails shipmentRequestDetails
     * @return $this 
     */
    public function setShipmentRequestDetails($value)
    {
        $this->_fields['ShipmentRequestDetails']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentRequestDetails is set.
     *
     * @return true if ShipmentRequestDetails is set.
     */
    public function isSetShipmentRequestDetails()
    {
        return !is_null($this->_fields['ShipmentRequestDetails']['FieldValue']);
    }
    /**
     * Set the value of ShipmentRequestDetails, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipmentRequestDetails $ShipmentRequestDetails
     * @return $this
     */
    public function withShipmentRequestDetails($ShipmentRequestDetails)
    {
        $this->setShipmentRequestDetails($ShipmentRequestDetails);
        return $this;
    }
    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return String ShippingServiceId.
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @return $this 
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set.
     */
    public function isSetShippingServiceId()
    {
        return !is_null($this->_fields['ShippingServiceId']['FieldValue']);
    }
    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param string $ShippingServiceId
     * @return $this
     */
    public function withShippingServiceId($ShippingServiceId)
    {
        $this->setShippingServiceId($ShippingServiceId);
        return $this;
    }
    /**
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return String ShippingServiceOfferId.
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @return $this 
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set.
     */
    public function isSetShippingServiceOfferId()
    {
        return !is_null($this->_fields['ShippingServiceOfferId']['FieldValue']);
    }
    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param string $ShippingServiceOfferId
     * @return $this
     */
    public function withShippingServiceOfferId($ShippingServiceOfferId)
    {
        $this->setShippingServiceOfferId($ShippingServiceOfferId);
        return $this;
    }
    /**
     * Get the value of the HazmatType property.
     *
     * @return String HazmatType.
     */
    public function getHazmatType()
    {
        return $this->_fields['HazmatType']['FieldValue'];
    }
    /**
     * Set the value of the HazmatType property.
     *
     * @param string hazmatType
     * @return $this 
     */
    public function setHazmatType($value)
    {
        $this->_fields['HazmatType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if HazmatType is set.
     *
     * @return true if HazmatType is set.
     */
    public function isSetHazmatType()
    {
        return !is_null($this->_fields['HazmatType']['FieldValue']);
    }
    /**
     * Set the value of HazmatType, return this.
     *
     * @param string $HazmatType
     * @return $this
     */
    public function withHazmatType($HazmatType)
    {
        $this->setHazmatType($HazmatType);
        return $this;
    }
}