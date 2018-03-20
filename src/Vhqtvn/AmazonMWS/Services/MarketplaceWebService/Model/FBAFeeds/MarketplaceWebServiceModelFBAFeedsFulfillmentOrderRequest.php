<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentOrderRequest
 *
 *
 * @prop	string	MerchantFulfillmentOrderID	1-40 chars, required
 * @prop	string	DisplayableOrderID	
 * @prop	string	DisplayableOrderDate	DateTime
 * @prop	string	DisplayableOrderComment	
 * @prop	string	DeliverySLA	
 * @prop	string	FulfillmentPolicy	
 * @prop	string	FulfillmentMethod	
 * @prop	string	FulfillmentAction	
 * @prop	string	NotificationEmail	Must match pattern [\w\._\-\+]+@([\w_\-]+\.)+\w+
 * @prop	MarketplaceWebServiceModelFBAFeedsAddressTypeSupportNonCity	DestinationAddress	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem[]	Item	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequest extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "MerchantFulfillmentOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DisplayableOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DisplayableOrderDate" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DisplayableOrderComment" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DeliverySLA" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentPolicy" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentMethod" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentAction" => array('FieldValue' => null, 'FieldType' => 'string'),
            "NotificationEmail" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DestinationAddress" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsAddressTypeSupportNonCity'),
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the MerchantFulfillmentOrderID property.
     * 
     * @return string MerchantFulfillmentOrderID
     */
    public function getMerchantFulfillmentOrderID()
    {
        return $this->_fields["MerchantFulfillmentOrderID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantFulfillmentOrderID property.
     * 
     * @param string MerchantFulfillmentOrderID 1-40 chars, required
     * @return $this 
     */
    public function setMerchantFulfillmentOrderID($value)
    {
        $this->_fields["MerchantFulfillmentOrderID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantFulfillmentOrderID, return this.
     *
     * @param string $MerchantFulfillmentOrderID 1-40 chars, required
     * @return $this
     */
    public function withMerchantFulfillmentOrderID($MerchantFulfillmentOrderID)
    {
        $this->setMerchantFulfillmentOrderID($MerchantFulfillmentOrderID);
        return $this;
    }
    /**
     * Checks if MerchantFulfillmentOrderID is set
     * 
     * @return bool true if MerchantFulfillmentOrderID  is set
     */
    public function isSetMerchantFulfillmentOrderID()
    {
        return !is_null($this->_fields["MerchantFulfillmentOrderID"]["FieldValue"]);
    }
    /**
     * Gets the value of the DisplayableOrderID property.
     * 
     * @return string DisplayableOrderID
     */
    public function getDisplayableOrderID()
    {
        return $this->_fields["DisplayableOrderID"]["FieldValue"];
    }
    /**
     * Sets the value of the DisplayableOrderID property.
     * 
     * @param string DisplayableOrderID 
     * @return $this 
     */
    public function setDisplayableOrderID($value)
    {
        $this->_fields["DisplayableOrderID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DisplayableOrderID, return this.
     *
     * @param string $DisplayableOrderID 
     * @return $this
     */
    public function withDisplayableOrderID($DisplayableOrderID)
    {
        $this->setDisplayableOrderID($DisplayableOrderID);
        return $this;
    }
    /**
     * Checks if DisplayableOrderID is set
     * 
     * @return bool true if DisplayableOrderID  is set
     */
    public function isSetDisplayableOrderID()
    {
        return !is_null($this->_fields["DisplayableOrderID"]["FieldValue"]);
    }
    /**
     * Gets the value of the DisplayableOrderDate property.
     * 
     * @return string DisplayableOrderDate
     */
    public function getDisplayableOrderDate()
    {
        return $this->_fields["DisplayableOrderDate"]["FieldValue"];
    }
    /**
     * Sets the value of the DisplayableOrderDate property.
     * 
     * @param string DisplayableOrderDate DateTime
     * @return $this 
     */
    public function setDisplayableOrderDate($value)
    {
        $this->_fields["DisplayableOrderDate"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DisplayableOrderDate, return this.
     *
     * @param string $DisplayableOrderDate DateTime
     * @return $this
     */
    public function withDisplayableOrderDate($DisplayableOrderDate)
    {
        $this->setDisplayableOrderDate($DisplayableOrderDate);
        return $this;
    }
    /**
     * Checks if DisplayableOrderDate is set
     * 
     * @return bool true if DisplayableOrderDate  is set
     */
    public function isSetDisplayableOrderDate()
    {
        return !is_null($this->_fields["DisplayableOrderDate"]["FieldValue"]);
    }
    /**
     * Gets the value of the DisplayableOrderComment property.
     * 
     * @return string DisplayableOrderComment
     */
    public function getDisplayableOrderComment()
    {
        return $this->_fields["DisplayableOrderComment"]["FieldValue"];
    }
    /**
     * Sets the value of the DisplayableOrderComment property.
     * 
     * @param string DisplayableOrderComment 
     * @return $this 
     */
    public function setDisplayableOrderComment($value)
    {
        $this->_fields["DisplayableOrderComment"]["FieldValue"] = $value;
        return $this;
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
     * Checks if DisplayableOrderComment is set
     * 
     * @return bool true if DisplayableOrderComment  is set
     */
    public function isSetDisplayableOrderComment()
    {
        return !is_null($this->_fields["DisplayableOrderComment"]["FieldValue"]);
    }
    /**
     * Gets the value of the DeliverySLA property.
     * 
     * @return string DeliverySLA
     */
    public function getDeliverySLA()
    {
        return $this->_fields["DeliverySLA"]["FieldValue"];
    }
    /**
     * Sets the value of the DeliverySLA property.
     * 
     * @param string DeliverySLA 
     * @return $this 
     */
    public function setDeliverySLA($value)
    {
        $this->_fields["DeliverySLA"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DeliverySLA, return this.
     *
     * @param string $DeliverySLA 
     * @return $this
     */
    public function withDeliverySLA($DeliverySLA)
    {
        $this->setDeliverySLA($DeliverySLA);
        return $this;
    }
    /**
     * Checks if DeliverySLA is set
     * 
     * @return bool true if DeliverySLA  is set
     */
    public function isSetDeliverySLA()
    {
        return !is_null($this->_fields["DeliverySLA"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentPolicy property.
     * 
     * @return string FulfillmentPolicy
     */
    public function getFulfillmentPolicy()
    {
        return $this->_fields["FulfillmentPolicy"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentPolicy property.
     * 
     * @param string FulfillmentPolicy 
     * @return $this 
     */
    public function setFulfillmentPolicy($value)
    {
        $this->_fields["FulfillmentPolicy"]["FieldValue"] = $value;
        return $this;
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
     * Checks if FulfillmentPolicy is set
     * 
     * @return bool true if FulfillmentPolicy  is set
     */
    public function isSetFulfillmentPolicy()
    {
        return !is_null($this->_fields["FulfillmentPolicy"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentMethod property.
     * 
     * @return string FulfillmentMethod
     */
    public function getFulfillmentMethod()
    {
        return $this->_fields["FulfillmentMethod"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentMethod property.
     * 
     * @param string FulfillmentMethod 
     * @return $this 
     */
    public function setFulfillmentMethod($value)
    {
        $this->_fields["FulfillmentMethod"]["FieldValue"] = $value;
        return $this;
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
     * Checks if FulfillmentMethod is set
     * 
     * @return bool true if FulfillmentMethod  is set
     */
    public function isSetFulfillmentMethod()
    {
        return !is_null($this->_fields["FulfillmentMethod"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentAction property.
     * 
     * @return string FulfillmentAction
     */
    public function getFulfillmentAction()
    {
        return $this->_fields["FulfillmentAction"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentAction property.
     * 
     * @param string FulfillmentAction 
     * @return $this 
     */
    public function setFulfillmentAction($value)
    {
        $this->_fields["FulfillmentAction"]["FieldValue"] = $value;
        return $this;
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
     * Checks if FulfillmentAction is set
     * 
     * @return bool true if FulfillmentAction  is set
     */
    public function isSetFulfillmentAction()
    {
        return !is_null($this->_fields["FulfillmentAction"]["FieldValue"]);
    }
    /**
     * Gets the value of the NotificationEmail property.
     * 
     * @return string NotificationEmail
     */
    public function getNotificationEmail()
    {
        return $this->_fields["NotificationEmail"]["FieldValue"];
    }
    /**
     * Sets the value of the NotificationEmail property.
     * 
     * @param string NotificationEmail Must match pattern [\w\._\-\+]+@([\w_\-]+\.)+\w+
     * @return $this 
     */
    public function setNotificationEmail($value)
    {
        $this->_fields["NotificationEmail"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of NotificationEmail, return this.
     *
     * @param string $NotificationEmail Must match pattern [\w\._\-\+]+@([\w_\-]+\.)+\w+
     * @return $this
     */
    public function withNotificationEmail($NotificationEmail)
    {
        $this->setNotificationEmail($NotificationEmail);
        return $this;
    }
    /**
     * Checks if NotificationEmail is set
     * 
     * @return bool true if NotificationEmail  is set
     */
    public function isSetNotificationEmail()
    {
        return !is_null($this->_fields["NotificationEmail"]["FieldValue"]);
    }
    /**
     * Gets the value of the DestinationAddress property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsAddressTypeSupportNonCity DestinationAddress
     */
    public function getDestinationAddress()
    {
        return $this->_fields["DestinationAddress"]["FieldValue"];
    }
    /**
     * Sets the value of the DestinationAddress property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsAddressTypeSupportNonCity DestinationAddress 
     * @return $this 
     */
    public function setDestinationAddress($value)
    {
        $this->_fields["DestinationAddress"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DestinationAddress, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsAddressTypeSupportNonCity $DestinationAddress 
     * @return $this
     */
    public function withDestinationAddress($DestinationAddress)
    {
        $this->setDestinationAddress($DestinationAddress);
        return $this;
    }
    /**
     * Checks if DestinationAddress is set
     * 
     * @return bool true if DestinationAddress  is set
     */
    public function isSetDestinationAddress()
    {
        return !is_null($this->_fields["DestinationAddress"]["FieldValue"]);
    }
    /**
     * Gets the value of the Item .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem[] Item.
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem|MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem[] Item
     * @return $this 
     */
    public function setItem($marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem)
    {
        if (!$this->_isNumericArray($marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem)) {
            $marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem = array($marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem);
        }
        $this->_fields["Item"]["FieldValue"] = $marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem;
        return $this;
    }
    /**
     * Add values for Item, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem[] $Item_array,...
     * @return $this
     */
    public function withItem(...$Item_array)
    {
        foreach ($Item_array as $marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem) {
            $this->_fields["Item"]["FieldValue"][] = $marketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem;
        }
        return $this;
    }
    /**
     * Checks if Item list is non-empty
     * 
     * @return bool true if Item list is non-empty
     */
    public function isSetItem()
    {
        return count($this->_fields["Item"]["FieldValue"]) > 0;
    }
    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<FulfillmentOrderRequest xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</FulfillmentOrderRequest>";
        return $xml;
    }
}
