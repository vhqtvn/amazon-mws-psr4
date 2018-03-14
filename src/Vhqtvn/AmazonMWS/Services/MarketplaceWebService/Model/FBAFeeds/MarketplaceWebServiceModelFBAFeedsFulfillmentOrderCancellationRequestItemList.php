<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem[]	MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList extends MarketplaceWebServiceModel{
    /**
     * Construct new MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList
     *
     * @param mixed $data DOMElement or Associative Array to construct from. 
     *
     * Valid properties:
     * <ul>
     *
     * <li> Item: MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList</li>
     *
     * </ul>
     */
    public function __construct($data = null){
        $this->_fields = array(
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Item .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList[] Item.
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList|MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItemList[] Item
     * @return $this 
     */
    public function setItem($item)
    {
        if (!$this->_isNumericArray($item)) {
            $item = array($item);
        }
        $this->_fields["Item"]["FieldValue"] = $item;
        return $this;
    }
    /**
     * Add values for Item, return this.
     *
     * @param \string[] $Item_array,...
     * @return $this
     */
    public function withItem(...$Item_array)
    {
        foreach ($Item_array as $item) {
            $this->_fields["Item"]["FieldValue"][] = $item;
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

}
