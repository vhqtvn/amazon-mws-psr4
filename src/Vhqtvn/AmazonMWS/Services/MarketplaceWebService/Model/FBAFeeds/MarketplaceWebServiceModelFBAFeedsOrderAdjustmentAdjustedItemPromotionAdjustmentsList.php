<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustments[]	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustments	
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList extends MarketplaceWebServiceModel{
    /**
     * Construct new MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList
     *
     * @param mixed $data DOMElement or Associative Array to construct from. 
     *
     * Valid properties:
     * <ul>
     *
     * <li> PromotionAdjustments: MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList</li>
     *
     * </ul>
     */
    public function __construct($data = null){
        $this->_fields = array(
            "PromotionAdjustments" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the PromotionAdjustments .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList[] PromotionAdjustments.
     */
    public function getPromotionAdjustments()
    {
        return $this->_fields["PromotionAdjustments"]["FieldValue"];
    }
    /**
     * Sets the value of the PromotionAdjustments.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList|MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList[] PromotionAdjustments
     * @return $this 
     */
    public function setPromotionAdjustments($promotionAdjustments)
    {
        if (!$this->_isNumericArray($promotionAdjustments)) {
            $promotionAdjustments = array($promotionAdjustments);
        }
        $this->_fields["PromotionAdjustments"]["FieldValue"] = $promotionAdjustments;
        return $this;
    }
    /**
     * Add values for PromotionAdjustments, return this.
     *
     * @param \string[] $PromotionAdjustments_array,...
     * @return $this
     */
    public function withPromotionAdjustments(...$PromotionAdjustments_array)
    {
        foreach ($PromotionAdjustments_array as $promotionAdjustments) {
            $this->_fields["PromotionAdjustments"]["FieldValue"][] = $promotionAdjustments;
        }
        return $this;
    }
    /**
     * Checks if PromotionAdjustments list is non-empty
     * 
     * @return bool true if PromotionAdjustments list is non-empty
     */
    public function isSetPromotionAdjustments()
    {
        return count($this->_fields["PromotionAdjustments"]["FieldValue"]) > 0;
    }

}
