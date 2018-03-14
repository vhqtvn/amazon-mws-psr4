<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderFulfillmentItem
 *
 *
 * @prop	string	AmazonOrderItemCode	
 * @prop	string	MerchantOrderItemID	
 * @prop	int	MerchantFulfillmentItemID	ID Number
 * @prop	int	Quantity	positive number
 */
class MarketplaceWebServiceModelFBAFeedsOrderFulfillmentItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderItemCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantOrderItemID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantFulfillmentItemID" => array('FieldValue' => null, 'FieldType' => 'int'),
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
     * Gets the value of the MerchantFulfillmentItemID property.
     * 
     * @return int MerchantFulfillmentItemID
     */
    public function getMerchantFulfillmentItemID()
    {
        return $this->_fields["MerchantFulfillmentItemID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantFulfillmentItemID property.
     * 
     * @param int MerchantFulfillmentItemID ID Number
     * @return $this 
     */
    public function setMerchantFulfillmentItemID($value)
    {
        $this->_fields["MerchantFulfillmentItemID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantFulfillmentItemID, return this.
     *
     * @param int $MerchantFulfillmentItemID ID Number
     * @return $this
     */
    public function withMerchantFulfillmentItemID($MerchantFulfillmentItemID)
    {
        $this->setMerchantFulfillmentItemID($MerchantFulfillmentItemID);
        return $this;
    }
    /**
     * Checks if MerchantFulfillmentItemID is set
     * 
     * @return bool true if MerchantFulfillmentItemID  is set
     */
    public function isSetMerchantFulfillmentItemID()
    {
        return !is_null($this->_fields["MerchantFulfillmentItemID"]["FieldValue"]);
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
