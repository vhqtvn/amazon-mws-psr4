<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentOrderCancellationRequest
 *
 *
 * @prop	string	MerchantFulfillmentOrderID	1-40 chars, required
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList	Item	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequest extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "MerchantFulfillmentOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Item" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList::class),
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
     * Gets the value of the Item property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList Item
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList Item 
     * @return $this 
     */
    public function setItem($value)
    {
        $this->_fields["Item"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Item, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList $Item 
     * @return $this
     */
    public function withItem($Item)
    {
        $this->setItem($Item);
        return $this;
    }
    /**
     * Checks if Item is set
     * 
     * @return bool true if Item  is set
     */
    public function isSetItem()
    {
        return !is_null($this->_fields["Item"]["FieldValue"]);
    }
}
