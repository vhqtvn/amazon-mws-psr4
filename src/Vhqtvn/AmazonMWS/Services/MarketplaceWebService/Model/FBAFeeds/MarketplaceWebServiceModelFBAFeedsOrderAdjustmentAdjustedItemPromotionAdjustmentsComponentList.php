<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponent[]	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponent	
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList extends MarketplaceWebServiceModel{
    /**
     * Construct new MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList
     *
     * @param mixed $data DOMElement or Associative Array to construct from. 
     *
     * Valid properties:
     * <ul>
     *
     * <li> Component: MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList</li>
     *
     * </ul>
     */
    public function __construct($data = null){
        $this->_fields = array(
            "Component" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Component .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList[] Component.
     */
    public function getComponent()
    {
        return $this->_fields["Component"]["FieldValue"];
    }
    /**
     * Sets the value of the Component.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList|MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList[] Component
     * @return $this 
     */
    public function setComponent($component)
    {
        if (!$this->_isNumericArray($component)) {
            $component = array($component);
        }
        $this->_fields["Component"]["FieldValue"] = $component;
        return $this;
    }
    /**
     * Add values for Component, return this.
     *
     * @param \string[] $Component_array,...
     * @return $this
     */
    public function withComponent(...$Component_array)
    {
        foreach ($Component_array as $component) {
            $this->_fields["Component"]["FieldValue"][] = $component;
        }
        return $this;
    }
    /**
     * Checks if Component list is non-empty
     * 
     * @return bool true if Component list is non-empty
     */
    public function isSetComponent()
    {
        return count($this->_fields["Component"]["FieldValue"]) > 0;
    }

}
