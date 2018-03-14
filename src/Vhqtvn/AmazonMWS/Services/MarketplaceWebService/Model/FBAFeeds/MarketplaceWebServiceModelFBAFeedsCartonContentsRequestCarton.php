<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * CartonContentsRequestCarton
 *
 *
 * @prop	string	CartonId	Must match pattern [a-zA-Z0-9]+
 * @prop	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList	Item	
 */
class MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCarton extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "CartonId" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Item" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList::class),
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
     * Gets the value of the Item property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList Item
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList Item 
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
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItemList $Item 
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
