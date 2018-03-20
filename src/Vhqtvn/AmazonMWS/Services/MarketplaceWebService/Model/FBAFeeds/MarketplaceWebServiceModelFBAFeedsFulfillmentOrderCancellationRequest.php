<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentOrderCancellationRequest
 *
 *
 * @prop	string	MerchantFulfillmentOrderID	1-40 chars, required
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem[]	Item	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequest extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "MerchantFulfillmentOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem::class)),
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
     * Gets the value of the Item .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem[] Item.
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem|MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem[] Item
     * @return $this 
     */
    public function setItem($marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem)
    {
        if (!$this->_isNumericArray($marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem)) {
            $marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem = array($marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem);
        }
        $this->_fields["Item"]["FieldValue"] = $marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem;
        return $this;
    }
    /**
     * Add values for Item, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem[] $Item_array,...
     * @return $this
     */
    public function withItem(...$Item_array)
    {
        foreach ($Item_array as $marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem) {
            $this->_fields["Item"]["FieldValue"][] = $marketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem;
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
        $xml .= "<FulfillmentOrderCancellationRequest xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</FulfillmentOrderCancellationRequest>";
        return $xml;
    }
}
