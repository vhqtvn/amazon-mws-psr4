<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$Marketplace
 * @property	string	$MarketplaceId
 * @property	string	$SellerFulfillmentOrderId
 * @property	string	$DisplayableOrderId
 * @property	string	$DisplayableOrderDateTime
 * @property	string	$DisplayableOrderComment
 * @property	string	$ShippingSpeedCategory
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress	$DestinationAddress
 * @property	string	$FulfillmentAction
 * @property	string	$FulfillmentPolicy
 * @property	string	$FulfillmentMethod
 * @property	string	$ShipFromCountryCode
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList	$NotificationEmailList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderItemList	$Items
 */
class FbaOutboundServiceMwsModelUpdateFulfillmentOrderRequest extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFulfillmentOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableOrderDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableOrderComment' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingSpeedCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'DestinationAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress::class), 'FulfillmentAction' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentPolicy' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentMethod' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipFromCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'NotificationEmailList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList::class), 'Items' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderItemList::class));
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
     * Get the value of the MarketplaceId property.
     *
     * @return \string MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
    /**
     * Get the value of the SellerFulfillmentOrderId property.
     *
     * @return \string SellerFulfillmentOrderId.
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->_fields['SellerFulfillmentOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerFulfillmentOrderId property.
     *
     * @param string sellerFulfillmentOrderId
     * @return $this instance
     */
    public function setSellerFulfillmentOrderId($value)
    {
        $this->_fields['SellerFulfillmentOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFulfillmentOrderId is set.
     *
     * @return true if SellerFulfillmentOrderId is set.
     */
    public function isSetSellerFulfillmentOrderId()
    {
        return !is_null($this->_fields['SellerFulfillmentOrderId']['FieldValue']);
    }
    /**
     * Set the value of SellerFulfillmentOrderId, return this.
     *
     * @param string $SellerFulfillmentOrderId
     * @return $this
     */
    public function withSellerFulfillmentOrderId($SellerFulfillmentOrderId)
    {
        $this->setSellerFulfillmentOrderId($SellerFulfillmentOrderId);
        return $this;
    }
    /**
     * Get the value of the DisplayableOrderId property.
     *
     * @return \string DisplayableOrderId.
     */
    public function getDisplayableOrderId()
    {
        return $this->_fields['DisplayableOrderId']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableOrderId property.
     *
     * @param string displayableOrderId
     * @return $this instance
     */
    public function setDisplayableOrderId($value)
    {
        $this->_fields['DisplayableOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DisplayableOrderId is set.
     *
     * @return true if DisplayableOrderId is set.
     */
    public function isSetDisplayableOrderId()
    {
        return !is_null($this->_fields['DisplayableOrderId']['FieldValue']);
    }
    /**
     * Set the value of DisplayableOrderId, return this.
     *
     * @param string $DisplayableOrderId
     * @return $this
     */
    public function withDisplayableOrderId($DisplayableOrderId)
    {
        $this->setDisplayableOrderId($DisplayableOrderId);
        return $this;
    }
    /**
     * Get the value of the DisplayableOrderDateTime property.
     *
     * @return \DateTime DisplayableOrderDateTime.
     */
    public function getDisplayableOrderDateTime()
    {
        return $this->_fields['DisplayableOrderDateTime']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableOrderDateTime property.
     *
     * @param string displayableOrderDateTime
     * @return $this instance
     */
    public function setDisplayableOrderDateTime($value)
    {
        $this->_fields['DisplayableOrderDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DisplayableOrderDateTime is set.
     *
     * @return true if DisplayableOrderDateTime is set.
     */
    public function isSetDisplayableOrderDateTime()
    {
        return !is_null($this->_fields['DisplayableOrderDateTime']['FieldValue']);
    }
    /**
     * Set the value of DisplayableOrderDateTime, return this.
     *
     * @param string $DisplayableOrderDateTime
     * @return $this
     */
    public function withDisplayableOrderDateTime($DisplayableOrderDateTime)
    {
        $this->setDisplayableOrderDateTime($DisplayableOrderDateTime);
        return $this;
    }
    /**
     * Get the value of the DisplayableOrderComment property.
     *
     * @return \string DisplayableOrderComment.
     */
    public function getDisplayableOrderComment()
    {
        return $this->_fields['DisplayableOrderComment']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableOrderComment property.
     *
     * @param string displayableOrderComment
     * @return $this instance
     */
    public function setDisplayableOrderComment($value)
    {
        $this->_fields['DisplayableOrderComment']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DisplayableOrderComment is set.
     *
     * @return true if DisplayableOrderComment is set.
     */
    public function isSetDisplayableOrderComment()
    {
        return !is_null($this->_fields['DisplayableOrderComment']['FieldValue']);
    }
    /**
     * Set the value of DisplayableOrderComment, return this.
     *
     * @param string $DisplayableOrderComment
     * @return $this
     */
    public function withDisplayableOrderComment($DisplayableOrderComment)
    {
        $this->setDisplayableOrderComment($DisplayableOrderComment);
        return $this;
    }
    /**
     * Get the value of the ShippingSpeedCategory property.
     *
     * @return \string ShippingSpeedCategory.
     */
    public function getShippingSpeedCategory()
    {
        return $this->_fields['ShippingSpeedCategory']['FieldValue'];
    }
    /**
     * Set the value of the ShippingSpeedCategory property.
     *
     * @param string shippingSpeedCategory
     * @return $this instance
     */
    public function setShippingSpeedCategory($value)
    {
        $this->_fields['ShippingSpeedCategory']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingSpeedCategory is set.
     *
     * @return true if ShippingSpeedCategory is set.
     */
    public function isSetShippingSpeedCategory()
    {
        return !is_null($this->_fields['ShippingSpeedCategory']['FieldValue']);
    }
    /**
     * Set the value of ShippingSpeedCategory, return this.
     *
     * @param string $ShippingSpeedCategory
     * @return $this
     */
    public function withShippingSpeedCategory($ShippingSpeedCategory)
    {
        $this->setShippingSpeedCategory($ShippingSpeedCategory);
        return $this;
    }
    /**
     * Get the value of the DestinationAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress DestinationAddress.
     */
    public function getDestinationAddress()
    {
        return $this->_fields['DestinationAddress']['FieldValue'];
    }
    /**
     * Set the value of the DestinationAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress destinationAddress
     * @return $this instance
     */
    public function setDestinationAddress($value)
    {
        $this->_fields['DestinationAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DestinationAddress is set.
     *
     * @return true if DestinationAddress is set.
     */
    public function isSetDestinationAddress()
    {
        return !is_null($this->_fields['DestinationAddress']['FieldValue']);
    }
    /**
     * Set the value of DestinationAddress, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress $DestinationAddress
     * @return $this
     */
    public function withDestinationAddress($DestinationAddress)
    {
        $this->setDestinationAddress($DestinationAddress);
        return $this;
    }
    /**
     * Get the value of the FulfillmentAction property.
     *
     * @return \string FulfillmentAction.
     */
    public function getFulfillmentAction()
    {
        return $this->_fields['FulfillmentAction']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentAction property.
     *
     * @param string fulfillmentAction
     * @return $this instance
     */
    public function setFulfillmentAction($value)
    {
        $this->_fields['FulfillmentAction']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentAction is set.
     *
     * @return true if FulfillmentAction is set.
     */
    public function isSetFulfillmentAction()
    {
        return !is_null($this->_fields['FulfillmentAction']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentAction, return this.
     *
     * @param string $FulfillmentAction
     * @return $this
     */
    public function withFulfillmentAction($FulfillmentAction)
    {
        $this->setFulfillmentAction($FulfillmentAction);
        return $this;
    }
    /**
     * Get the value of the FulfillmentPolicy property.
     *
     * @return \string FulfillmentPolicy.
     */
    public function getFulfillmentPolicy()
    {
        return $this->_fields['FulfillmentPolicy']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentPolicy property.
     *
     * @param string fulfillmentPolicy
     * @return $this instance
     */
    public function setFulfillmentPolicy($value)
    {
        $this->_fields['FulfillmentPolicy']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentPolicy is set.
     *
     * @return true if FulfillmentPolicy is set.
     */
    public function isSetFulfillmentPolicy()
    {
        return !is_null($this->_fields['FulfillmentPolicy']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentPolicy, return this.
     *
     * @param string $FulfillmentPolicy
     * @return $this
     */
    public function withFulfillmentPolicy($FulfillmentPolicy)
    {
        $this->setFulfillmentPolicy($FulfillmentPolicy);
        return $this;
    }
    /**
     * Get the value of the FulfillmentMethod property.
     *
     * @return \string FulfillmentMethod.
     */
    public function getFulfillmentMethod()
    {
        return $this->_fields['FulfillmentMethod']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentMethod property.
     *
     * @param string fulfillmentMethod
     * @return $this instance
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
     * @param string $FulfillmentMethod
     * @return $this
     */
    public function withFulfillmentMethod($FulfillmentMethod)
    {
        $this->setFulfillmentMethod($FulfillmentMethod);
        return $this;
    }
    /**
     * Get the value of the ShipFromCountryCode property.
     *
     * @return \string ShipFromCountryCode.
     */
    public function getShipFromCountryCode()
    {
        return $this->_fields['ShipFromCountryCode']['FieldValue'];
    }
    /**
     * Set the value of the ShipFromCountryCode property.
     *
     * @param string shipFromCountryCode
     * @return $this instance
     */
    public function setShipFromCountryCode($value)
    {
        $this->_fields['ShipFromCountryCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipFromCountryCode is set.
     *
     * @return true if ShipFromCountryCode is set.
     */
    public function isSetShipFromCountryCode()
    {
        return !is_null($this->_fields['ShipFromCountryCode']['FieldValue']);
    }
    /**
     * Set the value of ShipFromCountryCode, return this.
     *
     * @param string $ShipFromCountryCode
     * @return $this
     */
    public function withShipFromCountryCode($ShipFromCountryCode)
    {
        $this->setShipFromCountryCode($ShipFromCountryCode);
        return $this;
    }
    /**
     * Get the value of the NotificationEmailList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList NotificationEmailList.
     */
    public function getNotificationEmailList()
    {
        return $this->_fields['NotificationEmailList']['FieldValue'];
    }
    /**
     * Set the value of the NotificationEmailList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList notificationEmailList
     * @return $this instance
     */
    public function setNotificationEmailList($value)
    {
        $this->_fields['NotificationEmailList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NotificationEmailList is set.
     *
     * @return true if NotificationEmailList is set.
     */
    public function isSetNotificationEmailList()
    {
        return !is_null($this->_fields['NotificationEmailList']['FieldValue']);
    }
    /**
     * Set the value of NotificationEmailList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList $NotificationEmailList
     * @return $this
     */
    public function withNotificationEmailList($NotificationEmailList)
    {
        $this->setNotificationEmailList($NotificationEmailList);
        return $this;
    }
    /**
     * Get the value of the Items property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderItemList Items.
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }
    /**
     * Set the value of the Items property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderItemList items
     * @return $this instance
     */
    public function setItems($value)
    {
        $this->_fields['Items']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Items is set.
     *
     * @return true if Items is set.
     */
    public function isSetItems()
    {
        return !is_null($this->_fields['Items']['FieldValue']);
    }
    /**
     * Set the value of Items, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderItemList $Items
     * @return $this
     */
    public function withItems($Items)
    {
        $this->setItems($Items);
        return $this;
    }
}