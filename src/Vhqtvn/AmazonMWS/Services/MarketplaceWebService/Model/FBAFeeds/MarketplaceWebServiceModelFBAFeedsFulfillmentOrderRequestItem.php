<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentOrderRequestItem
 *
 *
 * @prop	string	MerchantSKU	1-40 chars
 * @prop	int	Quantity	non-negative number
 * @prop	string	MerchantFulfillmentOrderItemID	
 * @prop	string	GiftMessage	
 * @prop	string	DisplayableComment	
 * @prop	string	FulfillmentNetworkSKU	
 * @prop	string	OrderItemDisposition	
 * @prop	float	PerUnitDeclaredValue	Positive Currency Amount
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentOrderRequestItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "MerchantSKU" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Quantity" => array('FieldValue' => null, 'FieldType' => 'int'),
            "MerchantFulfillmentOrderItemID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "GiftMessage" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DisplayableComment" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentNetworkSKU" => array('FieldValue' => null, 'FieldType' => 'string'),
            "OrderItemDisposition" => array('FieldValue' => null, 'FieldType' => 'string'),
            "PerUnitDeclaredValue" => array('FieldValue' => null, 'FieldType' => 'float'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the MerchantSKU property.
     * 
     * @return string MerchantSKU
     */
    public function getMerchantSKU()
    {
        return $this->_fields["MerchantSKU"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantSKU property.
     * 
     * @param string MerchantSKU 1-40 chars
     * @return $this 
     */
    public function setMerchantSKU($value)
    {
        $this->_fields["MerchantSKU"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantSKU, return this.
     *
     * @param string $MerchantSKU 1-40 chars
     * @return $this
     */
    public function withMerchantSKU($MerchantSKU)
    {
        $this->setMerchantSKU($MerchantSKU);
        return $this;
    }
    /**
     * Checks if MerchantSKU is set
     * 
     * @return bool true if MerchantSKU  is set
     */
    public function isSetMerchantSKU()
    {
        return !is_null($this->_fields["MerchantSKU"]["FieldValue"]);
    }
    /**
     * Gets the value of the Quantity property.
     * 
     * @return int Quantity
     */
    public function getQuantity()
    {
        return $this->_fields["Quantity"]["FieldValue"];
    }
    /**
     * Sets the value of the Quantity property.
     * 
     * @param int Quantity non-negative number
     * @return $this 
     */
    public function setQuantity($value)
    {
        $this->_fields["Quantity"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param int $Quantity non-negative number
     * @return $this
     */
    public function withQuantity($Quantity)
    {
        $this->setQuantity($Quantity);
        return $this;
    }
    /**
     * Checks if Quantity is set
     * 
     * @return bool true if Quantity  is set
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields["Quantity"]["FieldValue"]);
    }
    /**
     * Gets the value of the MerchantFulfillmentOrderItemID property.
     * 
     * @return string MerchantFulfillmentOrderItemID
     */
    public function getMerchantFulfillmentOrderItemID()
    {
        return $this->_fields["MerchantFulfillmentOrderItemID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantFulfillmentOrderItemID property.
     * 
     * @param string MerchantFulfillmentOrderItemID 
     * @return $this 
     */
    public function setMerchantFulfillmentOrderItemID($value)
    {
        $this->_fields["MerchantFulfillmentOrderItemID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantFulfillmentOrderItemID, return this.
     *
     * @param string $MerchantFulfillmentOrderItemID 
     * @return $this
     */
    public function withMerchantFulfillmentOrderItemID($MerchantFulfillmentOrderItemID)
    {
        $this->setMerchantFulfillmentOrderItemID($MerchantFulfillmentOrderItemID);
        return $this;
    }
    /**
     * Checks if MerchantFulfillmentOrderItemID is set
     * 
     * @return bool true if MerchantFulfillmentOrderItemID  is set
     */
    public function isSetMerchantFulfillmentOrderItemID()
    {
        return !is_null($this->_fields["MerchantFulfillmentOrderItemID"]["FieldValue"]);
    }
    /**
     * Gets the value of the GiftMessage property.
     * 
     * @return string GiftMessage
     */
    public function getGiftMessage()
    {
        return $this->_fields["GiftMessage"]["FieldValue"];
    }
    /**
     * Sets the value of the GiftMessage property.
     * 
     * @param string GiftMessage 
     * @return $this 
     */
    public function setGiftMessage($value)
    {
        $this->_fields["GiftMessage"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of GiftMessage, return this.
     *
     * @param string $GiftMessage 
     * @return $this
     */
    public function withGiftMessage($GiftMessage)
    {
        $this->setGiftMessage($GiftMessage);
        return $this;
    }
    /**
     * Checks if GiftMessage is set
     * 
     * @return bool true if GiftMessage  is set
     */
    public function isSetGiftMessage()
    {
        return !is_null($this->_fields["GiftMessage"]["FieldValue"]);
    }
    /**
     * Gets the value of the DisplayableComment property.
     * 
     * @return string DisplayableComment
     */
    public function getDisplayableComment()
    {
        return $this->_fields["DisplayableComment"]["FieldValue"];
    }
    /**
     * Sets the value of the DisplayableComment property.
     * 
     * @param string DisplayableComment 
     * @return $this 
     */
    public function setDisplayableComment($value)
    {
        $this->_fields["DisplayableComment"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DisplayableComment, return this.
     *
     * @param string $DisplayableComment 
     * @return $this
     */
    public function withDisplayableComment($DisplayableComment)
    {
        $this->setDisplayableComment($DisplayableComment);
        return $this;
    }
    /**
     * Checks if DisplayableComment is set
     * 
     * @return bool true if DisplayableComment  is set
     */
    public function isSetDisplayableComment()
    {
        return !is_null($this->_fields["DisplayableComment"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentNetworkSKU property.
     * 
     * @return string FulfillmentNetworkSKU
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields["FulfillmentNetworkSKU"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentNetworkSKU property.
     * 
     * @param string FulfillmentNetworkSKU 
     * @return $this 
     */
    public function setFulfillmentNetworkSKU($value)
    {
        $this->_fields["FulfillmentNetworkSKU"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of FulfillmentNetworkSKU, return this.
     *
     * @param string $FulfillmentNetworkSKU 
     * @return $this
     */
    public function withFulfillmentNetworkSKU($FulfillmentNetworkSKU)
    {
        $this->setFulfillmentNetworkSKU($FulfillmentNetworkSKU);
        return $this;
    }
    /**
     * Checks if FulfillmentNetworkSKU is set
     * 
     * @return bool true if FulfillmentNetworkSKU  is set
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return !is_null($this->_fields["FulfillmentNetworkSKU"]["FieldValue"]);
    }
    /**
     * Gets the value of the OrderItemDisposition property.
     * 
     * @return string OrderItemDisposition
     */
    public function getOrderItemDisposition()
    {
        return $this->_fields["OrderItemDisposition"]["FieldValue"];
    }
    /**
     * Sets the value of the OrderItemDisposition property.
     * 
     * @param string OrderItemDisposition 
     * @return $this 
     */
    public function setOrderItemDisposition($value)
    {
        $this->_fields["OrderItemDisposition"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of OrderItemDisposition, return this.
     *
     * @param string $OrderItemDisposition 
     * @return $this
     */
    public function withOrderItemDisposition($OrderItemDisposition)
    {
        $this->setOrderItemDisposition($OrderItemDisposition);
        return $this;
    }
    /**
     * Checks if OrderItemDisposition is set
     * 
     * @return bool true if OrderItemDisposition  is set
     */
    public function isSetOrderItemDisposition()
    {
        return !is_null($this->_fields["OrderItemDisposition"]["FieldValue"]);
    }
    /**
     * Gets the value of the PerUnitDeclaredValue property.
     * 
     * @return float PerUnitDeclaredValue
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->_fields["PerUnitDeclaredValue"]["FieldValue"];
    }
    /**
     * Sets the value of the PerUnitDeclaredValue property.
     * 
     * @param float PerUnitDeclaredValue Positive Currency Amount
     * @return $this 
     */
    public function setPerUnitDeclaredValue($value)
    {
        $this->_fields["PerUnitDeclaredValue"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of PerUnitDeclaredValue, return this.
     *
     * @param float $PerUnitDeclaredValue Positive Currency Amount
     * @return $this
     */
    public function withPerUnitDeclaredValue($PerUnitDeclaredValue)
    {
        $this->setPerUnitDeclaredValue($PerUnitDeclaredValue);
        return $this;
    }
    /**
     * Checks if PerUnitDeclaredValue is set
     * 
     * @return bool true if PerUnitDeclaredValue  is set
     */
    public function isSetPerUnitDeclaredValue()
    {
        return !is_null($this->_fields["PerUnitDeclaredValue"]["FieldValue"]);
    }
}
