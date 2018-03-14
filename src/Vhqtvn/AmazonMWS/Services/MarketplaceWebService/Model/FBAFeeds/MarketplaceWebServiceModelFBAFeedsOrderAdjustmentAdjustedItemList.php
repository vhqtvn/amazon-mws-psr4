<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItem[]	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItem	
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList extends MarketplaceWebServiceModel{
    /**
     * Construct new MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList
     *
     * @param mixed $data DOMElement or Associative Array to construct from. 
     *
     * Valid properties:
     * <ul>
     *
     * <li> AdjustedItem: MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList</li>
     *
     * </ul>
     */
    public function __construct($data = null){
        $this->_fields = array(
            "AdjustedItem" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the AdjustedItem .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList[] AdjustedItem.
     */
    public function getAdjustedItem()
    {
        return $this->_fields["AdjustedItem"]["FieldValue"];
    }
    /**
     * Sets the value of the AdjustedItem.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList|MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList[] AdjustedItem
     * @return $this 
     */
    public function setAdjustedItem($adjustedItem)
    {
        if (!$this->_isNumericArray($adjustedItem)) {
            $adjustedItem = array($adjustedItem);
        }
        $this->_fields["AdjustedItem"]["FieldValue"] = $adjustedItem;
        return $this;
    }
    /**
     * Add values for AdjustedItem, return this.
     *
     * @param \string[] $AdjustedItem_array,...
     * @return $this
     */
    public function withAdjustedItem(...$AdjustedItem_array)
    {
        foreach ($AdjustedItem_array as $adjustedItem) {
            $this->_fields["AdjustedItem"]["FieldValue"][] = $adjustedItem;
        }
        return $this;
    }
    /**
     * Checks if AdjustedItem list is non-empty
     * 
     * @return bool true if AdjustedItem list is non-empty
     */
    public function isSetAdjustedItem()
    {
        return count($this->_fields["AdjustedItem"]["FieldValue"]) > 0;
    }

}
