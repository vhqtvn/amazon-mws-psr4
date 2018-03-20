<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem[]	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem	Max 200 elements
 */
class MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList extends MarketplaceWebServiceModel{
    /**
     * Construct new MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList
     *
     * @param mixed $data DOMElement or Associative Array to construct from. 
     *
     * Valid properties:
     * <ul>
     *
     * <li> Item: MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList</li>
     *
     * </ul>
     */
    public function __construct($data = null){
        $this->_fields = array(
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Item .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem[] Item.
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem|MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem[] Item
     * @return $this 
     */
    public function setItem($item)
    {
        if (!$this->_isNumericArray($item)) {
            $item = array($item);
        }
        if(count($item) > 200) throw new \InvalidArgumentException("Maximum number of Item is 200");
        $this->_fields["Item"]["FieldValue"] = $item;
        return $this;
    }
    /**
     * Add values for Item, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem[] $Item_array,...
     * @return $this
     */
    public function withItem(...$Item_array)
    {
        foreach ($Item_array as $item) {
            $this->_fields["Item"]["FieldValue"][] = $item;
        }
        if(count($Item_array) > 200) throw new \InvalidArgumentException("Maximum number of Item is 200");
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
