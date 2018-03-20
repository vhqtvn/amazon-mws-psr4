<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlanRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$Marketplace
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress	$ShipFromAddress
 * @property	string	$LabelPrepPreference
 * @property	string	$ShipToCountryCode
 * @property	string	$ShipToCountrySubdivisionCode
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanRequestItemList	$InboundShipmentPlanRequestItems
 */
class FbaInboundServiceMwsModelCreateInboundShipmentPlanRequest extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress::class), 'LabelPrepPreference' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipToCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipToCountrySubdivisionCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'InboundShipmentPlanRequestItems' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanRequestItemList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return \string SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this instance
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
     * @return \string MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this instance
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
     * Get the value of the Marketplace property.
     *
     * @return \string Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }
    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return $this instance
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
     * @param string $Marketplace
     * @return $this
     */
    public function withMarketplace($Marketplace)
    {
        $this->setMarketplace($Marketplace);
        return $this;
    }
    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress ShipFromAddress.
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress shipFromAddress
     * @return $this instance
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set.
     */
    public function isSetShipFromAddress()
    {
        return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
    }
    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress $ShipFromAddress
     * @return $this
     */
    public function withShipFromAddress($ShipFromAddress)
    {
        $this->setShipFromAddress($ShipFromAddress);
        return $this;
    }
    /**
     * Get the value of the LabelPrepPreference property.
     *
     * @return \string LabelPrepPreference.
     */
    public function getLabelPrepPreference()
    {
        return $this->_fields['LabelPrepPreference']['FieldValue'];
    }
    /**
     * Set the value of the LabelPrepPreference property.
     *
     * @param string labelPrepPreference
     * @return $this instance
     */
    public function setLabelPrepPreference($value)
    {
        $this->_fields['LabelPrepPreference']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LabelPrepPreference is set.
     *
     * @return true if LabelPrepPreference is set.
     */
    public function isSetLabelPrepPreference()
    {
        return !is_null($this->_fields['LabelPrepPreference']['FieldValue']);
    }
    /**
     * Set the value of LabelPrepPreference, return this.
     *
     * @param string $LabelPrepPreference
     * @return $this
     */
    public function withLabelPrepPreference($LabelPrepPreference)
    {
        $this->setLabelPrepPreference($LabelPrepPreference);
        return $this;
    }
    /**
     * Get the value of the ShipToCountryCode property.
     *
     * @return \string ShipToCountryCode.
     */
    public function getShipToCountryCode()
    {
        return $this->_fields['ShipToCountryCode']['FieldValue'];
    }
    /**
     * Set the value of the ShipToCountryCode property.
     *
     * @param string shipToCountryCode
     * @return $this instance
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
     * @param string $ShipToCountryCode
     * @return $this
     */
    public function withShipToCountryCode($ShipToCountryCode)
    {
        $this->setShipToCountryCode($ShipToCountryCode);
        return $this;
    }
    /**
     * Get the value of the ShipToCountrySubdivisionCode property.
     *
     * @return \string ShipToCountrySubdivisionCode.
     */
    public function getShipToCountrySubdivisionCode()
    {
        return $this->_fields['ShipToCountrySubdivisionCode']['FieldValue'];
    }
    /**
     * Set the value of the ShipToCountrySubdivisionCode property.
     *
     * @param string shipToCountrySubdivisionCode
     * @return $this instance
     */
    public function setShipToCountrySubdivisionCode($value)
    {
        $this->_fields['ShipToCountrySubdivisionCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipToCountrySubdivisionCode is set.
     *
     * @return true if ShipToCountrySubdivisionCode is set.
     */
    public function isSetShipToCountrySubdivisionCode()
    {
        return !is_null($this->_fields['ShipToCountrySubdivisionCode']['FieldValue']);
    }
    /**
     * Set the value of ShipToCountrySubdivisionCode, return this.
     *
     * @param string $ShipToCountrySubdivisionCode
     * @return $this
     */
    public function withShipToCountrySubdivisionCode($ShipToCountrySubdivisionCode)
    {
        $this->setShipToCountrySubdivisionCode($ShipToCountrySubdivisionCode);
        return $this;
    }
    /**
     * Get the value of the InboundShipmentPlanRequestItems property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanRequestItemList InboundShipmentPlanRequestItems.
     */
    public function getInboundShipmentPlanRequestItems()
    {
        return $this->_fields['InboundShipmentPlanRequestItems']['FieldValue'];
    }
    /**
     * Set the value of the InboundShipmentPlanRequestItems property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanRequestItemList inboundShipmentPlanRequestItems
     * @return $this instance
     */
    public function setInboundShipmentPlanRequestItems($value)
    {
        $this->_fields['InboundShipmentPlanRequestItems']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InboundShipmentPlanRequestItems is set.
     *
     * @return true if InboundShipmentPlanRequestItems is set.
     */
    public function isSetInboundShipmentPlanRequestItems()
    {
        return !is_null($this->_fields['InboundShipmentPlanRequestItems']['FieldValue']);
    }
    /**
     * Set the value of InboundShipmentPlanRequestItems, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanRequestItemList $InboundShipmentPlanRequestItems
     * @return $this
     */
    public function withInboundShipmentPlanRequestItems($InboundShipmentPlanRequestItems)
    {
        $this->setInboundShipmentPlanRequestItems($InboundShipmentPlanRequestItems);
        return $this;
    }
}