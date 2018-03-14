<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderAdjustment
 *
 *
 * @prop	string	AmazonOrderID	
 * @prop	string	MerchantOrderID	
 * @prop	string	ActionType	one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentActionTypeEnum::K_*
 * @prop	string	CODCollectionMethod	one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentCODCollectionMethodEnum::K_*
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList	AdjustedItem	
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustment extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "ActionType" => array('FieldValue' => null, 'FieldType' => 'string'),
            "CODCollectionMethod" => array('FieldValue' => null, 'FieldType' => 'string'),
            "AdjustedItem" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList::class),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the AmazonOrderID property.
     * 
     * @return string AmazonOrderID
     */
    public function getAmazonOrderID()
    {
        return $this->_fields["AmazonOrderID"]["FieldValue"];
    }
    /**
     * Sets the value of the AmazonOrderID property.
     * 
     * @param string AmazonOrderID 
     * @return $this 
     */
    public function setAmazonOrderID($value)
    {
        $this->_fields["AmazonOrderID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AmazonOrderID, return this.
     *
     * @param string $AmazonOrderID 
     * @return $this
     */
    public function withAmazonOrderID($AmazonOrderID)
    {
        $this->setAmazonOrderID($AmazonOrderID);
        return $this;
    }
    /**
     * Checks if AmazonOrderID is set
     * 
     * @return bool true if AmazonOrderID  is set
     */
    public function isSetAmazonOrderID()
    {
        return !is_null($this->_fields["AmazonOrderID"]["FieldValue"]);
    }
    /**
     * Gets the value of the MerchantOrderID property.
     * 
     * @return string MerchantOrderID
     */
    public function getMerchantOrderID()
    {
        return $this->_fields["MerchantOrderID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantOrderID property.
     * 
     * @param string MerchantOrderID 
     * @return $this 
     */
    public function setMerchantOrderID($value)
    {
        $this->_fields["MerchantOrderID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantOrderID, return this.
     *
     * @param string $MerchantOrderID 
     * @return $this
     */
    public function withMerchantOrderID($MerchantOrderID)
    {
        $this->setMerchantOrderID($MerchantOrderID);
        return $this;
    }
    /**
     * Checks if MerchantOrderID is set
     * 
     * @return bool true if MerchantOrderID  is set
     */
    public function isSetMerchantOrderID()
    {
        return !is_null($this->_fields["MerchantOrderID"]["FieldValue"]);
    }
    /**
     * Gets the value of the ActionType property.
     * 
     * @return string ActionType
     */
    public function getActionType()
    {
        return $this->_fields["ActionType"]["FieldValue"];
    }
    /**
     * Sets the value of the ActionType property.
     * 
     * @param string ActionType one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentActionTypeEnum::K_*
     * @return $this 
     */
    public function setActionType($value)
    {
        $this->_fields["ActionType"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of ActionType, return this.
     *
     * @param string $ActionType one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentActionTypeEnum::K_*
     * @return $this
     */
    public function withActionType($ActionType)
    {
        $this->setActionType($ActionType);
        return $this;
    }
    /**
     * Checks if ActionType is set
     * 
     * @return bool true if ActionType  is set
     */
    public function isSetActionType()
    {
        return !is_null($this->_fields["ActionType"]["FieldValue"]);
    }
    /**
     * Gets the value of the CODCollectionMethod property.
     * 
     * @return string CODCollectionMethod
     */
    public function getCODCollectionMethod()
    {
        return $this->_fields["CODCollectionMethod"]["FieldValue"];
    }
    /**
     * Sets the value of the CODCollectionMethod property.
     * 
     * @param string CODCollectionMethod one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentCODCollectionMethodEnum::K_*
     * @return $this 
     */
    public function setCODCollectionMethod($value)
    {
        $this->_fields["CODCollectionMethod"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of CODCollectionMethod, return this.
     *
     * @param string $CODCollectionMethod one of MarketplaceWebServiceModelFBAFeedsOrderAdjustmentCODCollectionMethodEnum::K_*
     * @return $this
     */
    public function withCODCollectionMethod($CODCollectionMethod)
    {
        $this->setCODCollectionMethod($CODCollectionMethod);
        return $this;
    }
    /**
     * Checks if CODCollectionMethod is set
     * 
     * @return bool true if CODCollectionMethod  is set
     */
    public function isSetCODCollectionMethod()
    {
        return !is_null($this->_fields["CODCollectionMethod"]["FieldValue"]);
    }
    /**
     * Gets the value of the AdjustedItem property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList AdjustedItem
     */
    public function getAdjustedItem()
    {
        return $this->_fields["AdjustedItem"]["FieldValue"];
    }
    /**
     * Sets the value of the AdjustedItem property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList AdjustedItem 
     * @return $this 
     */
    public function setAdjustedItem($value)
    {
        $this->_fields["AdjustedItem"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AdjustedItem, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemList $AdjustedItem 
     * @return $this
     */
    public function withAdjustedItem($AdjustedItem)
    {
        $this->setAdjustedItem($AdjustedItem);
        return $this;
    }
    /**
     * Checks if AdjustedItem is set
     * 
     * @return bool true if AdjustedItem  is set
     */
    public function isSetAdjustedItem()
    {
        return !is_null($this->_fields["AdjustedItem"]["FieldValue"]);
    }
}
