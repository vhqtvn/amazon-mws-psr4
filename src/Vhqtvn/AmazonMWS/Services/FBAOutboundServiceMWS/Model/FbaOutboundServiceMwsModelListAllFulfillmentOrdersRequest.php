<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelListAllFulfillmentOrdersRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$Marketplace
 * @property	string	$QueryStartDateTime
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentMethodList	$FulfillmentMethod
 */
class FbaOutboundServiceMwsModelListAllFulfillmentOrdersRequest extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'QueryStartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentMethod' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentMethodList::class));
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
     * @param sellerId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
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
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }
    /**
     * Get the value of the Marketplace property.
     *
     * @return String Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }
    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return $this 
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }
    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }
    /**
     * Get the value of the QueryStartDateTime property.
     *
     * @return XMLGregorianCalendar QueryStartDateTime.
     */
    public function getQueryStartDateTime()
    {
        return $this->_fields['QueryStartDateTime']['FieldValue'];
    }
    /**
     * Set the value of the QueryStartDateTime property.
     *
     * @param string queryStartDateTime
     * @return $this 
     */
    public function setQueryStartDateTime($value)
    {
        $this->_fields['QueryStartDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QueryStartDateTime is set.
     *
     * @return true if QueryStartDateTime is set.
     */
    public function isSetQueryStartDateTime()
    {
        return !is_null($this->_fields['QueryStartDateTime']['FieldValue']);
    }
    /**
     * Set the value of QueryStartDateTime, return this.
     *
     * @param queryStartDateTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQueryStartDateTime($value)
    {
        $this->setQueryStartDateTime($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentMethod property.
     *
     * @return FulfillmentMethodList FulfillmentMethod.
     */
    public function getFulfillmentMethod()
    {
        return $this->_fields['FulfillmentMethod']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentMethod property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentMethodList fulfillmentMethod
     * @return $this 
     */
    public function setFulfillmentMethod($value)
    {
        $this->_fields['FulfillmentMethod']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentMethod is set.
     *
     * @return true if FulfillmentMethod is set.
     */
    public function isSetFulfillmentMethod()
    {
        return !is_null($this->_fields['FulfillmentMethod']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentMethod, return this.
     *
     * @param fulfillmentMethod
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentMethod($value)
    {
        $this->setFulfillmentMethod($value);
        return $this;
    }
}