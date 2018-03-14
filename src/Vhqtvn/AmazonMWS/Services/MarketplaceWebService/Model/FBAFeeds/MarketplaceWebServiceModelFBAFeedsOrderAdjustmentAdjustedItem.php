<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderAdjustmentAdjustedItem
 *
 *
 * @prop	string	AmazonOrderItemCode	
 * @prop	string	MerchantOrderItemID	
 * @prop	string	MerchantAdjustmentItemID	required
 * @prop	string	AdjustmentReason	one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemAdjustmentReasonEnum::K_*
 * @prop	MarketplaceWebServiceModelFBAFeedsAdjustmentBuyerPrice	ItemPriceAdjustments	
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList	PromotionAdjustments	
 * @prop	MarketplaceWebServiceModelFBAFeedsAdjustmentDirectPaymentType	DirectPaymentAdjustments	
 * @prop	int	QuantityCancelled	positive number
 * @prop	int	Quantity	positive number
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderItemCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantOrderItemID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantAdjustmentItemID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "AdjustmentReason" => array('FieldValue' => null, 'FieldType' => 'string'),
            "ItemPriceAdjustments" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsAdjustmentBuyerPrice'),
            "PromotionAdjustments" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList::class),
            "DirectPaymentAdjustments" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsAdjustmentDirectPaymentType'),
            "QuantityCancelled" => array('FieldValue' => null, 'FieldType' => 'int'),
            "Quantity" => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the AmazonOrderItemCode property.
     * 
     * @return string AmazonOrderItemCode
     */
    public function getAmazonOrderItemCode()
    {
        return $this->_fields["AmazonOrderItemCode"]["FieldValue"];
    }
    /**
     * Sets the value of the AmazonOrderItemCode property.
     * 
     * @param string AmazonOrderItemCode 
     * @return $this 
     */
    public function setAmazonOrderItemCode($value)
    {
        $this->_fields["AmazonOrderItemCode"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AmazonOrderItemCode, return this.
     *
     * @param string $AmazonOrderItemCode 
     * @return $this
     */
    public function withAmazonOrderItemCode($AmazonOrderItemCode)
    {
        $this->setAmazonOrderItemCode($AmazonOrderItemCode);
        return $this;
    }
    /**
     * Checks if AmazonOrderItemCode is set
     * 
     * @return bool true if AmazonOrderItemCode  is set
     */
    public function isSetAmazonOrderItemCode()
    {
        return !is_null($this->_fields["AmazonOrderItemCode"]["FieldValue"]);
    }
    /**
     * Gets the value of the MerchantOrderItemID property.
     * 
     * @return string MerchantOrderItemID
     */
    public function getMerchantOrderItemID()
    {
        return $this->_fields["MerchantOrderItemID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantOrderItemID property.
     * 
     * @param string MerchantOrderItemID 
     * @return $this 
     */
    public function setMerchantOrderItemID($value)
    {
        $this->_fields["MerchantOrderItemID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantOrderItemID, return this.
     *
     * @param string $MerchantOrderItemID 
     * @return $this
     */
    public function withMerchantOrderItemID($MerchantOrderItemID)
    {
        $this->setMerchantOrderItemID($MerchantOrderItemID);
        return $this;
    }
    /**
     * Checks if MerchantOrderItemID is set
     * 
     * @return bool true if MerchantOrderItemID  is set
     */
    public function isSetMerchantOrderItemID()
    {
        return !is_null($this->_fields["MerchantOrderItemID"]["FieldValue"]);
    }
    /**
     * Gets the value of the MerchantAdjustmentItemID property.
     * 
     * @return string MerchantAdjustmentItemID
     */
    public function getMerchantAdjustmentItemID()
    {
        return $this->_fields["MerchantAdjustmentItemID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantAdjustmentItemID property.
     * 
     * @param string MerchantAdjustmentItemID required
     * @return $this 
     */
    public function setMerchantAdjustmentItemID($value)
    {
        $this->_fields["MerchantAdjustmentItemID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantAdjustmentItemID, return this.
     *
     * @param string $MerchantAdjustmentItemID required
     * @return $this
     */
    public function withMerchantAdjustmentItemID($MerchantAdjustmentItemID)
    {
        $this->setMerchantAdjustmentItemID($MerchantAdjustmentItemID);
        return $this;
    }
    /**
     * Checks if MerchantAdjustmentItemID is set
     * 
     * @return bool true if MerchantAdjustmentItemID  is set
     */
    public function isSetMerchantAdjustmentItemID()
    {
        return !is_null($this->_fields["MerchantAdjustmentItemID"]["FieldValue"]);
    }
    /**
     * Gets the value of the AdjustmentReason property.
     * 
     * @return string AdjustmentReason
     */
    public function getAdjustmentReason()
    {
        return $this->_fields["AdjustmentReason"]["FieldValue"];
    }
    /**
     * Sets the value of the AdjustmentReason property.
     * 
     * @param string AdjustmentReason one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemAdjustmentReasonEnum::K_*
     * @return $this 
     */
    public function setAdjustmentReason($value)
    {
        $this->_fields["AdjustmentReason"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AdjustmentReason, return this.
     *
     * @param string $AdjustmentReason one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemAdjustmentReasonEnum::K_*
     * @return $this
     */
    public function withAdjustmentReason($AdjustmentReason)
    {
        $this->setAdjustmentReason($AdjustmentReason);
        return $this;
    }
    /**
     * Checks if AdjustmentReason is set
     * 
     * @return bool true if AdjustmentReason  is set
     */
    public function isSetAdjustmentReason()
    {
        return !is_null($this->_fields["AdjustmentReason"]["FieldValue"]);
    }
    /**
     * Gets the value of the ItemPriceAdjustments property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsAdjustmentBuyerPrice ItemPriceAdjustments
     */
    public function getItemPriceAdjustments()
    {
        return $this->_fields["ItemPriceAdjustments"]["FieldValue"];
    }
    /**
     * Sets the value of the ItemPriceAdjustments property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsAdjustmentBuyerPrice ItemPriceAdjustments 
     * @return $this 
     */
    public function setItemPriceAdjustments($value)
    {
        $this->_fields["ItemPriceAdjustments"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of ItemPriceAdjustments, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsAdjustmentBuyerPrice $ItemPriceAdjustments 
     * @return $this
     */
    public function withItemPriceAdjustments($ItemPriceAdjustments)
    {
        $this->setItemPriceAdjustments($ItemPriceAdjustments);
        return $this;
    }
    /**
     * Checks if ItemPriceAdjustments is set
     * 
     * @return bool true if ItemPriceAdjustments  is set
     */
    public function isSetItemPriceAdjustments()
    {
        return !is_null($this->_fields["ItemPriceAdjustments"]["FieldValue"]);
    }
    /**
     * Gets the value of the PromotionAdjustments property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList PromotionAdjustments
     */
    public function getPromotionAdjustments()
    {
        return $this->_fields["PromotionAdjustments"]["FieldValue"];
    }
    /**
     * Sets the value of the PromotionAdjustments property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList PromotionAdjustments 
     * @return $this 
     */
    public function setPromotionAdjustments($value)
    {
        $this->_fields["PromotionAdjustments"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of PromotionAdjustments, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsList $PromotionAdjustments 
     * @return $this
     */
    public function withPromotionAdjustments($PromotionAdjustments)
    {
        $this->setPromotionAdjustments($PromotionAdjustments);
        return $this;
    }
    /**
     * Checks if PromotionAdjustments is set
     * 
     * @return bool true if PromotionAdjustments  is set
     */
    public function isSetPromotionAdjustments()
    {
        return !is_null($this->_fields["PromotionAdjustments"]["FieldValue"]);
    }
    /**
     * Gets the value of the DirectPaymentAdjustments property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsAdjustmentDirectPaymentType DirectPaymentAdjustments
     */
    public function getDirectPaymentAdjustments()
    {
        return $this->_fields["DirectPaymentAdjustments"]["FieldValue"];
    }
    /**
     * Sets the value of the DirectPaymentAdjustments property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsAdjustmentDirectPaymentType DirectPaymentAdjustments 
     * @return $this 
     */
    public function setDirectPaymentAdjustments($value)
    {
        $this->_fields["DirectPaymentAdjustments"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DirectPaymentAdjustments, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsAdjustmentDirectPaymentType $DirectPaymentAdjustments 
     * @return $this
     */
    public function withDirectPaymentAdjustments($DirectPaymentAdjustments)
    {
        $this->setDirectPaymentAdjustments($DirectPaymentAdjustments);
        return $this;
    }
    /**
     * Checks if DirectPaymentAdjustments is set
     * 
     * @return bool true if DirectPaymentAdjustments  is set
     */
    public function isSetDirectPaymentAdjustments()
    {
        return !is_null($this->_fields["DirectPaymentAdjustments"]["FieldValue"]);
    }
    /**
     * Gets the value of the QuantityCancelled property.
     * 
     * @return int QuantityCancelled
     */
    public function getQuantityCancelled()
    {
        return $this->_fields["QuantityCancelled"]["FieldValue"];
    }
    /**
     * Sets the value of the QuantityCancelled property.
     * 
     * @param int QuantityCancelled positive number
     * @return $this 
     */
    public function setQuantityCancelled($value)
    {
        $this->_fields["QuantityCancelled"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of QuantityCancelled, return this.
     *
     * @param int $QuantityCancelled positive number
     * @return $this
     */
    public function withQuantityCancelled($QuantityCancelled)
    {
        $this->setQuantityCancelled($QuantityCancelled);
        return $this;
    }
    /**
     * Checks if QuantityCancelled is set
     * 
     * @return bool true if QuantityCancelled  is set
     */
    public function isSetQuantityCancelled()
    {
        return !is_null($this->_fields["QuantityCancelled"]["FieldValue"]);
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
     * @param int Quantity positive number
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
     * @param int $Quantity positive number
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
}
