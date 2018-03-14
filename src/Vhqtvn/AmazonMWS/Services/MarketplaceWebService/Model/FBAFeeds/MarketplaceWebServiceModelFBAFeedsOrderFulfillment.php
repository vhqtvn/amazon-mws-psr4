<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderFulfillment
 *
 *
 * @prop	string	AmazonOrderID	
 * @prop	string	MerchantOrderID	
 * @prop	int	MerchantFulfillmentID	ID Number
 * @prop	string	FulfillmentDate	DateTime
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderFulfillmentFulfillmentData	FulfillmentData	
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderFulfillmentItemList	Item	
 */
class MarketplaceWebServiceModelFBAFeedsOrderFulfillment extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantFulfillmentID" => array('FieldValue' => null, 'FieldType' => 'int'),
            "FulfillmentDate" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentData" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsOrderFulfillmentFulfillmentData::class),
            "Item" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsOrderFulfillmentItemList::class),
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
     * Gets the value of the MerchantFulfillmentID property.
     * 
     * @return int MerchantFulfillmentID
     */
    public function getMerchantFulfillmentID()
    {
        return $this->_fields["MerchantFulfillmentID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantFulfillmentID property.
     * 
     * @param int MerchantFulfillmentID ID Number
     * @return $this 
     */
    public function setMerchantFulfillmentID($value)
    {
        $this->_fields["MerchantFulfillmentID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantFulfillmentID, return this.
     *
     * @param int $MerchantFulfillmentID ID Number
     * @return $this
     */
    public function withMerchantFulfillmentID($MerchantFulfillmentID)
    {
        $this->setMerchantFulfillmentID($MerchantFulfillmentID);
        return $this;
    }
    /**
     * Checks if MerchantFulfillmentID is set
     * 
     * @return bool true if MerchantFulfillmentID  is set
     */
    public function isSetMerchantFulfillmentID()
    {
        return !is_null($this->_fields["MerchantFulfillmentID"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentDate property.
     * 
     * @return string FulfillmentDate
     */
    public function getFulfillmentDate()
    {
        return $this->_fields["FulfillmentDate"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentDate property.
     * 
     * @param string FulfillmentDate DateTime
     * @return $this 
     */
    public function setFulfillmentDate($value)
    {
        $this->_fields["FulfillmentDate"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of FulfillmentDate, return this.
     *
     * @param string $FulfillmentDate DateTime
     * @return $this
     */
    public function withFulfillmentDate($FulfillmentDate)
    {
        $this->setFulfillmentDate($FulfillmentDate);
        return $this;
    }
    /**
     * Checks if FulfillmentDate is set
     * 
     * @return bool true if FulfillmentDate  is set
     */
    public function isSetFulfillmentDate()
    {
        return !is_null($this->_fields["FulfillmentDate"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentData property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderFulfillmentFulfillmentData FulfillmentData
     */
    public function getFulfillmentData()
    {
        return $this->_fields["FulfillmentData"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentData property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderFulfillmentFulfillmentData FulfillmentData 
     * @return $this 
     */
    public function setFulfillmentData($value)
    {
        $this->_fields["FulfillmentData"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of FulfillmentData, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsOrderFulfillmentFulfillmentData $FulfillmentData 
     * @return $this
     */
    public function withFulfillmentData($FulfillmentData)
    {
        $this->setFulfillmentData($FulfillmentData);
        return $this;
    }
    /**
     * Checks if FulfillmentData is set
     * 
     * @return bool true if FulfillmentData  is set
     */
    public function isSetFulfillmentData()
    {
        return !is_null($this->_fields["FulfillmentData"]["FieldValue"]);
    }
    /**
     * Gets the value of the Item property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderFulfillmentItemList Item
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderFulfillmentItemList Item 
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
     * @param MarketplaceWebServiceModelFBAFeedsOrderFulfillmentItemList $Item 
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
