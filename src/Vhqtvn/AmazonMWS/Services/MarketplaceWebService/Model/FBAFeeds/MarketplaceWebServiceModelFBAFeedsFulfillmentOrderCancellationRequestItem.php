<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentOrderCancellationRequestItem
 *
 *
 * @prop	string	MerchantFulfillmentOrderItemID	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentOrderCancellationRequestItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "MerchantFulfillmentOrderItemID" => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the MerchantFulfillmentOrderItemID property.
     * 
     * @return string MerchantFulfillmentOrderItemID
     */
    public function getMerchantFulfillmentOrderItemID()
    {
        return $this->_fields["MerchantFulfillmentOrderItemID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantFulfillmentOrderItemID property.
     * 
     * @param string MerchantFulfillmentOrderItemID 
     * @return $this 
     */
    public function setMerchantFulfillmentOrderItemID($value)
    {
        $this->_fields["MerchantFulfillmentOrderItemID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantFulfillmentOrderItemID, return this.
     *
     * @param string $MerchantFulfillmentOrderItemID 
     * @return $this
     */
    public function withMerchantFulfillmentOrderItemID($MerchantFulfillmentOrderItemID)
    {
        $this->setMerchantFulfillmentOrderItemID($MerchantFulfillmentOrderItemID);
        return $this;
    }
    /**
     * Checks if MerchantFulfillmentOrderItemID is set
     * 
     * @return bool true if MerchantFulfillmentOrderItemID  is set
     */
    public function isSetMerchantFulfillmentOrderItemID()
    {
        return !is_null($this->_fields["MerchantFulfillmentOrderItemID"]["FieldValue"]);
    }
}
