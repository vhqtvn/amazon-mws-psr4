<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderAcknowledgementItem
 *
 *
 * @prop	string	AmazonOrderItemCode	
 * @prop	string	MerchantOrderItemID	
 * @prop	string	CancelReason	one of MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItemCancelReasonEnum::K_*
 */
class MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderItemCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantOrderItemID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "CancelReason" => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Gets the value of the CancelReason property.
     * 
     * @return string CancelReason
     */
    public function getCancelReason()
    {
        return $this->_fields["CancelReason"]["FieldValue"];
    }
    /**
     * Sets the value of the CancelReason property.
     * 
     * @param string CancelReason one of MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItemCancelReasonEnum::K_*
     * @return $this 
     */
    public function setCancelReason($value)
    {
        $this->_fields["CancelReason"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of CancelReason, return this.
     *
     * @param string $CancelReason one of MarketplaceWebServiceModelFBAFeedsOrderAcknowledgementItemCancelReasonEnum::K_*
     * @return $this
     */
    public function withCancelReason($CancelReason)
    {
        $this->setCancelReason($CancelReason);
        return $this;
    }
    /**
     * Checks if CancelReason is set
     * 
     * @return bool true if CancelReason  is set
     */
    public function isSetCancelReason()
    {
        return !is_null($this->_fields["CancelReason"]["FieldValue"]);
    }
}
