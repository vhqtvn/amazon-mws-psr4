<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * CartonContentsRequestCarton
 *
 *
 * @prop	string	CartonId	Must match pattern [a-zA-Z0-9]+
 * @prop	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem[]	Item	
 */
class MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCarton extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "CartonId" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the CartonId property.
     * 
     * @return string CartonId
     */
    public function getCartonId()
    {
        return $this->_fields["CartonId"]["FieldValue"];
    }
    /**
     * Sets the value of the CartonId property.
     * 
     * @param string CartonId Must match pattern [a-zA-Z0-9]+
     * @return $this 
     */
    public function setCartonId($value)
    {
        $this->_fields["CartonId"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of CartonId, return this.
     *
     * @param string $CartonId Must match pattern [a-zA-Z0-9]+
     * @return $this
     */
    public function withCartonId($CartonId)
    {
        $this->setCartonId($CartonId);
        return $this;
    }
    /**
     * Checks if CartonId is set
     * 
     * @return bool true if CartonId  is set
     */
    public function isSetCartonId()
    {
        return !is_null($this->_fields["CartonId"]["FieldValue"]);
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
    public function setItem($marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem)
    {
        if (!$this->_isNumericArray($marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem)) {
            $marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem = array($marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem);
        }
        $this->_fields["Item"]["FieldValue"] = $marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem;
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
        foreach ($Item_array as $marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem) {
            $this->_fields["Item"]["FieldValue"][] = $marketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem;
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
