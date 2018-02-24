<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrder
 * 
 * @property	string	$SellerFulfillmentOrderId
 * @property	string	$MarketplaceId
 * @property	string	$DisplayableOrderId
 * @property	string	$DisplayableOrderDateTime
 * @property	string	$DisplayableOrderComment
 * @property	string	$ShippingSpeedCategory
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindow	$DeliveryWindow
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress	$DestinationAddress
 * @property	string	$FulfillmentAction
 * @property	string	$FulfillmentPolicy
 * @property	string	$FulfillmentMethod
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCODSettings	$CODSettings
 * @property	string	$ReceivedDateTime
 * @property	string	$FulfillmentOrderStatus
 * @property	string	$StatusUpdatedDateTime
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList	$NotificationEmailList
 */
class FbaOutboundServiceMwsModelFulfillmentOrder extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerFulfillmentOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableOrderDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableOrderComment' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingSpeedCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'DeliveryWindow' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindow::class), 'DestinationAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress::class), 'FulfillmentAction' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentPolicy' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentMethod' => array('FieldValue' => null, 'FieldType' => 'string'), 'CODSettings' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCODSettings::class), 'ReceivedDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentOrderStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'StatusUpdatedDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'NotificationEmailList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerFulfillmentOrderId property.
     *
     * @return String SellerFulfillmentOrderId.
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->_fields['SellerFulfillmentOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerFulfillmentOrderId property.
     *
     * @param string sellerFulfillmentOrderId
     * @return $this 
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
     * @param sellerFulfillmentOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerFulfillmentOrderId($value)
    {
        $this->setSellerFulfillmentOrderId($value);
        return $this;
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
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
     * @param marketplaceId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }
    /**
     * Get the value of the DisplayableOrderId property.
     *
     * @return String DisplayableOrderId.
     */
    public function getDisplayableOrderId()
    {
        return $this->_fields['DisplayableOrderId']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableOrderId property.
     *
     * @param string displayableOrderId
     * @return $this 
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
     * @param displayableOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDisplayableOrderId($value)
    {
        $this->setDisplayableOrderId($value);
        return $this;
    }
    /**
     * Get the value of the DisplayableOrderDateTime property.
     *
     * @return XMLGregorianCalendar DisplayableOrderDateTime.
     */
    public function getDisplayableOrderDateTime()
    {
        return $this->_fields['DisplayableOrderDateTime']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableOrderDateTime property.
     *
     * @param string displayableOrderDateTime
     * @return $this 
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
     * @param displayableOrderDateTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDisplayableOrderDateTime($value)
    {
        $this->setDisplayableOrderDateTime($value);
        return $this;
    }
    /**
     * Get the value of the DisplayableOrderComment property.
     *
     * @return String DisplayableOrderComment.
     */
    public function getDisplayableOrderComment()
    {
        return $this->_fields['DisplayableOrderComment']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableOrderComment property.
     *
     * @param string displayableOrderComment
     * @return $this 
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
     * @param displayableOrderComment
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDisplayableOrderComment($value)
    {
        $this->setDisplayableOrderComment($value);
        return $this;
    }
    /**
     * Get the value of the ShippingSpeedCategory property.
     *
     * @return String ShippingSpeedCategory.
     */
    public function getShippingSpeedCategory()
    {
        return $this->_fields['ShippingSpeedCategory']['FieldValue'];
    }
    /**
     * Set the value of the ShippingSpeedCategory property.
     *
     * @param string shippingSpeedCategory
     * @return $this 
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
     * @param shippingSpeedCategory
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShippingSpeedCategory($value)
    {
        $this->setShippingSpeedCategory($value);
        return $this;
    }
    /**
     * Get the value of the DeliveryWindow property.
     *
     * @return DeliveryWindow DeliveryWindow.
     */
    public function getDeliveryWindow()
    {
        return $this->_fields['DeliveryWindow']['FieldValue'];
    }
    /**
     * Set the value of the DeliveryWindow property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindow deliveryWindow
     * @return $this 
     */
    public function setDeliveryWindow($value)
    {
        $this->_fields['DeliveryWindow']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DeliveryWindow is set.
     *
     * @return true if DeliveryWindow is set.
     */
    public function isSetDeliveryWindow()
    {
        return !is_null($this->_fields['DeliveryWindow']['FieldValue']);
    }
    /**
     * Set the value of DeliveryWindow, return this.
     *
     * @param deliveryWindow
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDeliveryWindow($value)
    {
        $this->setDeliveryWindow($value);
        return $this;
    }
    /**
     * Get the value of the DestinationAddress property.
     *
     * @return Address DestinationAddress.
     */
    public function getDestinationAddress()
    {
        return $this->_fields['DestinationAddress']['FieldValue'];
    }
    /**
     * Set the value of the DestinationAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress destinationAddress
     * @return $this 
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
     * @param destinationAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDestinationAddress($value)
    {
        $this->setDestinationAddress($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentAction property.
     *
     * @return String FulfillmentAction.
     */
    public function getFulfillmentAction()
    {
        return $this->_fields['FulfillmentAction']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentAction property.
     *
     * @param string fulfillmentAction
     * @return $this 
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
     * @param fulfillmentAction
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentAction($value)
    {
        $this->setFulfillmentAction($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentPolicy property.
     *
     * @return String FulfillmentPolicy.
     */
    public function getFulfillmentPolicy()
    {
        return $this->_fields['FulfillmentPolicy']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentPolicy property.
     *
     * @param string fulfillmentPolicy
     * @return $this 
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
     * @param fulfillmentPolicy
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentPolicy($value)
    {
        $this->setFulfillmentPolicy($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentMethod property.
     *
     * @return String FulfillmentMethod.
     */
    public function getFulfillmentMethod()
    {
        return $this->_fields['FulfillmentMethod']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentMethod property.
     *
     * @param string fulfillmentMethod
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
    /**
     * Get the value of the CODSettings property.
     *
     * @return CODSettings CODSettings.
     */
    public function getCODSettings()
    {
        return $this->_fields['CODSettings']['FieldValue'];
    }
    /**
     * Set the value of the CODSettings property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCODSettings codSettings
     * @return $this 
     */
    public function setCODSettings($value)
    {
        $this->_fields['CODSettings']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CODSettings is set.
     *
     * @return true if CODSettings is set.
     */
    public function isSetCODSettings()
    {
        return !is_null($this->_fields['CODSettings']['FieldValue']);
    }
    /**
     * Set the value of CODSettings, return this.
     *
     * @param codSettings
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCODSettings($value)
    {
        $this->setCODSettings($value);
        return $this;
    }
    /**
     * Get the value of the ReceivedDateTime property.
     *
     * @return XMLGregorianCalendar ReceivedDateTime.
     */
    public function getReceivedDateTime()
    {
        return $this->_fields['ReceivedDateTime']['FieldValue'];
    }
    /**
     * Set the value of the ReceivedDateTime property.
     *
     * @param string receivedDateTime
     * @return $this 
     */
    public function setReceivedDateTime($value)
    {
        $this->_fields['ReceivedDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReceivedDateTime is set.
     *
     * @return true if ReceivedDateTime is set.
     */
    public function isSetReceivedDateTime()
    {
        return !is_null($this->_fields['ReceivedDateTime']['FieldValue']);
    }
    /**
     * Set the value of ReceivedDateTime, return this.
     *
     * @param receivedDateTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withReceivedDateTime($value)
    {
        $this->setReceivedDateTime($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentOrderStatus property.
     *
     * @return String FulfillmentOrderStatus.
     */
    public function getFulfillmentOrderStatus()
    {
        return $this->_fields['FulfillmentOrderStatus']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentOrderStatus property.
     *
     * @param string fulfillmentOrderStatus
     * @return $this 
     */
    public function setFulfillmentOrderStatus($value)
    {
        $this->_fields['FulfillmentOrderStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentOrderStatus is set.
     *
     * @return true if FulfillmentOrderStatus is set.
     */
    public function isSetFulfillmentOrderStatus()
    {
        return !is_null($this->_fields['FulfillmentOrderStatus']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentOrderStatus, return this.
     *
     * @param fulfillmentOrderStatus
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentOrderStatus($value)
    {
        $this->setFulfillmentOrderStatus($value);
        return $this;
    }
    /**
     * Get the value of the StatusUpdatedDateTime property.
     *
     * @return XMLGregorianCalendar StatusUpdatedDateTime.
     */
    public function getStatusUpdatedDateTime()
    {
        return $this->_fields['StatusUpdatedDateTime']['FieldValue'];
    }
    /**
     * Set the value of the StatusUpdatedDateTime property.
     *
     * @param string statusUpdatedDateTime
     * @return $this 
     */
    public function setStatusUpdatedDateTime($value)
    {
        $this->_fields['StatusUpdatedDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if StatusUpdatedDateTime is set.
     *
     * @return true if StatusUpdatedDateTime is set.
     */
    public function isSetStatusUpdatedDateTime()
    {
        return !is_null($this->_fields['StatusUpdatedDateTime']['FieldValue']);
    }
    /**
     * Set the value of StatusUpdatedDateTime, return this.
     *
     * @param statusUpdatedDateTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withStatusUpdatedDateTime($value)
    {
        $this->setStatusUpdatedDateTime($value);
        return $this;
    }
    /**
     * Get the value of the NotificationEmailList property.
     *
     * @return NotificationEmailList NotificationEmailList.
     */
    public function getNotificationEmailList()
    {
        return $this->_fields['NotificationEmailList']['FieldValue'];
    }
    /**
     * Set the value of the NotificationEmailList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelNotificationEmailList notificationEmailList
     * @return $this 
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
     * @param notificationEmailList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNotificationEmailList($value)
    {
        $this->setNotificationEmailList($value);
        return $this;
    }
}