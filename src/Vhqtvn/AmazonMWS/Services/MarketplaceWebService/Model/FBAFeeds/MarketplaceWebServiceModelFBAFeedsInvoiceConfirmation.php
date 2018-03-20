<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * InvoiceConfirmation
 *
 *
 * @prop	string	AmazonOrderID	
 * @prop	string	InvoiceSentDate	DateTime
 * @prop	MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem[]	Item	
 */
class MarketplaceWebServiceModelFBAFeedsInvoiceConfirmation extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "AmazonOrderID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "InvoiceSentDate" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Item" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem::class)),
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
     * Gets the value of the InvoiceSentDate property.
     * 
     * @return string InvoiceSentDate
     */
    public function getInvoiceSentDate()
    {
        return $this->_fields["InvoiceSentDate"]["FieldValue"];
    }
    /**
     * Sets the value of the InvoiceSentDate property.
     * 
     * @param string InvoiceSentDate DateTime
     * @return $this 
     */
    public function setInvoiceSentDate($value)
    {
        $this->_fields["InvoiceSentDate"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of InvoiceSentDate, return this.
     *
     * @param string $InvoiceSentDate DateTime
     * @return $this
     */
    public function withInvoiceSentDate($InvoiceSentDate)
    {
        $this->setInvoiceSentDate($InvoiceSentDate);
        return $this;
    }
    /**
     * Checks if InvoiceSentDate is set
     * 
     * @return bool true if InvoiceSentDate  is set
     */
    public function isSetInvoiceSentDate()
    {
        return !is_null($this->_fields["InvoiceSentDate"]["FieldValue"]);
    }
    /**
     * Gets the value of the Item .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem[] Item.
     */
    public function getItem()
    {
        return $this->_fields["Item"]["FieldValue"];
    }
    /**
     * Sets the value of the Item.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem|MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem[] Item
     * @return $this 
     */
    public function setItem($marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem)
    {
        if (!$this->_isNumericArray($marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem)) {
            $marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem = array($marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem);
        }
        $this->_fields["Item"]["FieldValue"] = $marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem;
        return $this;
    }
    /**
     * Add values for Item, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem[] $Item_array,...
     * @return $this
     */
    public function withItem(...$Item_array)
    {
        foreach ($Item_array as $marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem) {
            $this->_fields["Item"]["FieldValue"][] = $marketplaceWebServiceModelFBAFeedsInvoiceConfirmationItem;
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
