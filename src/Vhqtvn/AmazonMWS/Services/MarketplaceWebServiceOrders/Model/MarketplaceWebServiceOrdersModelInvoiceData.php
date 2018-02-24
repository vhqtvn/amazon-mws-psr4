<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelInvoiceData
 * 
 * @property	string	$InvoiceRequirement
 * @property	string	$BuyerSelectedInvoiceCategory
 * @property	string	$InvoiceTitle
 * @property	string	$InvoiceInformation
 */
class MarketplaceWebServiceOrdersModelInvoiceData extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InvoiceRequirement' => array('FieldValue' => null, 'FieldType' => 'string'), 'BuyerSelectedInvoiceCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'InvoiceTitle' => array('FieldValue' => null, 'FieldType' => 'string'), 'InvoiceInformation' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the InvoiceRequirement property.
     *
     * @return String InvoiceRequirement.
     */
    public function getInvoiceRequirement()
    {
        return $this->_fields['InvoiceRequirement']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceRequirement property.
     *
     * @param string invoiceRequirement
     * @return $this 
     */
    public function setInvoiceRequirement($value)
    {
        $this->_fields['InvoiceRequirement']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvoiceRequirement is set.
     *
     * @return true if InvoiceRequirement is set.
     */
    public function isSetInvoiceRequirement()
    {
        return !is_null($this->_fields['InvoiceRequirement']['FieldValue']);
    }
    /**
     * Set the value of InvoiceRequirement, return this.
     *
     * @param invoiceRequirement
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInvoiceRequirement($value)
    {
        $this->setInvoiceRequirement($value);
        return $this;
    }
    /**
     * Get the value of the BuyerSelectedInvoiceCategory property.
     *
     * @return String BuyerSelectedInvoiceCategory.
     */
    public function getBuyerSelectedInvoiceCategory()
    {
        return $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'];
    }
    /**
     * Set the value of the BuyerSelectedInvoiceCategory property.
     *
     * @param string buyerSelectedInvoiceCategory
     * @return $this 
     */
    public function setBuyerSelectedInvoiceCategory($value)
    {
        $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerSelectedInvoiceCategory is set.
     *
     * @return true if BuyerSelectedInvoiceCategory is set.
     */
    public function isSetBuyerSelectedInvoiceCategory()
    {
        return !is_null($this->_fields['BuyerSelectedInvoiceCategory']['FieldValue']);
    }
    /**
     * Set the value of BuyerSelectedInvoiceCategory, return this.
     *
     * @param buyerSelectedInvoiceCategory
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyerSelectedInvoiceCategory($value)
    {
        $this->setBuyerSelectedInvoiceCategory($value);
        return $this;
    }
    /**
     * Get the value of the InvoiceTitle property.
     *
     * @return String InvoiceTitle.
     */
    public function getInvoiceTitle()
    {
        return $this->_fields['InvoiceTitle']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceTitle property.
     *
     * @param string invoiceTitle
     * @return $this 
     */
    public function setInvoiceTitle($value)
    {
        $this->_fields['InvoiceTitle']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvoiceTitle is set.
     *
     * @return true if InvoiceTitle is set.
     */
    public function isSetInvoiceTitle()
    {
        return !is_null($this->_fields['InvoiceTitle']['FieldValue']);
    }
    /**
     * Set the value of InvoiceTitle, return this.
     *
     * @param invoiceTitle
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInvoiceTitle($value)
    {
        $this->setInvoiceTitle($value);
        return $this;
    }
    /**
     * Get the value of the InvoiceInformation property.
     *
     * @return String InvoiceInformation.
     */
    public function getInvoiceInformation()
    {
        return $this->_fields['InvoiceInformation']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceInformation property.
     *
     * @param string invoiceInformation
     * @return $this 
     */
    public function setInvoiceInformation($value)
    {
        $this->_fields['InvoiceInformation']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvoiceInformation is set.
     *
     * @return true if InvoiceInformation is set.
     */
    public function isSetInvoiceInformation()
    {
        return !is_null($this->_fields['InvoiceInformation']['FieldValue']);
    }
    /**
     * Set the value of InvoiceInformation, return this.
     *
     * @param invoiceInformation
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInvoiceInformation($value)
    {
        $this->setInvoiceInformation($value);
        return $this;
    }
}