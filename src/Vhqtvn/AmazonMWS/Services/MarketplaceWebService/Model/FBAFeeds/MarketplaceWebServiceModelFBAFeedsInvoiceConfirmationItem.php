<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * InvoiceConfirmationItem
 *
 *
 * @prop	string	AmazonOrderItemCode	
 * @prop	int	QuantityConfirmed	positive number
 */
class MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderItemCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "QuantityConfirmed" => array('FieldValue' => null, 'FieldType' => 'int'),
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
     * Gets the value of the QuantityConfirmed property.
     * 
     * @return int QuantityConfirmed
     */
    public function getQuantityConfirmed()
    {
        return $this->_fields["QuantityConfirmed"]["FieldValue"];
    }
    /**
     * Sets the value of the QuantityConfirmed property.
     * 
     * @param int QuantityConfirmed positive number
     * @return $this 
     */
    public function setQuantityConfirmed($value)
    {
        $this->_fields["QuantityConfirmed"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of QuantityConfirmed, return this.
     *
     * @param int $QuantityConfirmed positive number
     * @return $this
     */
    public function withQuantityConfirmed($QuantityConfirmed)
    {
        $this->setQuantityConfirmed($QuantityConfirmed);
        return $this;
    }
    /**
     * Checks if QuantityConfirmed is set
     * 
     * @return bool true if QuantityConfirmed  is set
     */
    public function isSetQuantityConfirmed()
    {
        return !is_null($this->_fields["QuantityConfirmed"]["FieldValue"]);
    }
}
