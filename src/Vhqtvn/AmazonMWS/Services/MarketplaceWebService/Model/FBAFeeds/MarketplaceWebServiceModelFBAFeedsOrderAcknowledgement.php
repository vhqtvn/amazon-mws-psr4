<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderAcknowledgement
 *
 *
 * @prop	string	AmazonOrderID	
 * @prop	string	MerchantOrderID	
 * @prop	string	StatusCode	one of MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementStatusCodeEnum::K_*
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem[]	Item	
 */
class MarketplaceWebServiceModelFBAFeedsOrderAcknowledgement extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "StatusCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem::class)),
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
     * Gets the value of the StatusCode property.
     * 
     * @return string StatusCode
     */
    public function getStatusCode()
    {
        return $this->_fields["StatusCode"]["FieldValue"];
    }
    /**
     * Sets the value of the StatusCode property.
     * 
     * @param string StatusCode one of MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementStatusCodeEnum::K_*
     * @return $this 
     */
    public function setStatusCode($value)
    {
        $this->_fields["StatusCode"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of StatusCode, return this.
     *
     * @param string $StatusCode one of MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementStatusCodeEnum::K_*
     * @return $this
     */
    public function withStatusCode($StatusCode)
    {
        $this->setStatusCode($StatusCode);
        return $this;
    }
    /**
     * Checks if StatusCode is set
     * 
     * @return bool true if StatusCode  is set
     */
    public function isSetStatusCode()
    {
        return !is_null($this->_fields["StatusCode"]["FieldValue"]);
    }
    /**
     * Gets the value of the Item .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem[] Item.
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem|MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem[] Item
     * @return $this 
     */
    public function setItem($marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem)
    {
        if (!$this->_isNumericArray($marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem)) {
            $marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem = array($marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem);
        }
        $this->_fields["Item"]["FieldValue"] = $marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem;
        return $this;
    }
    /**
     * Add values for Item, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem[] $Item_array,...
     * @return $this
     */
    public function withItem(...$Item_array)
    {
        foreach ($Item_array as $marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem) {
            $this->_fields["Item"]["FieldValue"][] = $marketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem;
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
