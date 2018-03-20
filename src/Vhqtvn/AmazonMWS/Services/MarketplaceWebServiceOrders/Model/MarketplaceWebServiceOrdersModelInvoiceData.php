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
     * @return \string InvoiceRequirement.
     */
    public function getInvoiceRequirement()
    {
        return $this->_fields['InvoiceRequirement']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceRequirement property.
     *
     * @param string invoiceRequirement
     * @return $this instance
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
     * @param string $InvoiceRequirement
     * @return $this
     */
    public function withInvoiceRequirement($InvoiceRequirement)
    {
        $this->setInvoiceRequirement($InvoiceRequirement);
        return $this;
    }
    /**
     * Get the value of the BuyerSelectedInvoiceCategory property.
     *
     * @return \string BuyerSelectedInvoiceCategory.
     */
    public function getBuyerSelectedInvoiceCategory()
    {
        return $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'];
    }
    /**
     * Set the value of the BuyerSelectedInvoiceCategory property.
     *
     * @param string buyerSelectedInvoiceCategory
     * @return $this instance
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
     * @param string $BuyerSelectedInvoiceCategory
     * @return $this
     */
    public function withBuyerSelectedInvoiceCategory($BuyerSelectedInvoiceCategory)
    {
        $this->setBuyerSelectedInvoiceCategory($BuyerSelectedInvoiceCategory);
        return $this;
    }
    /**
     * Get the value of the InvoiceTitle property.
     *
     * @return \string InvoiceTitle.
     */
    public function getInvoiceTitle()
    {
        return $this->_fields['InvoiceTitle']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceTitle property.
     *
     * @param string invoiceTitle
     * @return $this instance
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
     * @param string $InvoiceTitle
     * @return $this
     */
    public function withInvoiceTitle($InvoiceTitle)
    {
        $this->setInvoiceTitle($InvoiceTitle);
        return $this;
    }
    /**
     * Get the value of the InvoiceInformation property.
     *
     * @return \string InvoiceInformation.
     */
    public function getInvoiceInformation()
    {
        return $this->_fields['InvoiceInformation']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceInformation property.
     *
     * @param string invoiceInformation
     * @return $this instance
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
     * @param string $InvoiceInformation
     * @return $this
     */
    public function withInvoiceInformation($InvoiceInformation)
    {
        $this->setInvoiceInformation($InvoiceInformation);
        return $this;
    }
}