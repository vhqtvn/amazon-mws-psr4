<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASINRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAsinList	$AsinList
 * @property	string	$ShipToCountryCode
 */
class FbaInboundServiceMwsModelGetPrepInstructionsForASINRequest extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'AsinList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAsinList::class), 'ShipToCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the AsinList property.
     *
     * @return AsinList AsinList.
     */
    public function getAsinList()
    {
        return $this->_fields['AsinList']['FieldValue'];
    }
    /**
     * Set the value of the AsinList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAsinList asinList
     * @return $this 
     */
    public function setAsinList($value)
    {
        $this->_fields['AsinList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AsinList is set.
     *
     * @return true if AsinList is set.
     */
    public function isSetAsinList()
    {
        return !is_null($this->_fields['AsinList']['FieldValue']);
    }
    /**
     * Set the value of AsinList, return this.
     *
     * @param asinList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAsinList($value)
    {
        $this->setAsinList($value);
        return $this;
    }
    /**
     * Get the value of the ShipToCountryCode property.
     *
     * @return String ShipToCountryCode.
     */
    public function getShipToCountryCode()
    {
        return $this->_fields['ShipToCountryCode']['FieldValue'];
    }
    /**
     * Set the value of the ShipToCountryCode property.
     *
     * @param string shipToCountryCode
     * @return $this 
     */
    public function setShipToCountryCode($value)
    {
        $this->_fields['ShipToCountryCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipToCountryCode is set.
     *
     * @return true if ShipToCountryCode is set.
     */
    public function isSetShipToCountryCode()
    {
        return !is_null($this->_fields['ShipToCountryCode']['FieldValue']);
    }
    /**
     * Set the value of ShipToCountryCode, return this.
     *
     * @param shipToCountryCode
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipToCountryCode($value)
    {
        $this->setShipToCountryCode($value);
        return $this;
    }
}