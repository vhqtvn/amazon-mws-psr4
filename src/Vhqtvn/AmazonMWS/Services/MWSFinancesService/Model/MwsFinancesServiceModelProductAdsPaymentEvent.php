<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelProductAdsPaymentEvent
 * 
 * @property	string	$postedDate
 * @property	string	$transactionType
 * @property	string	$invoiceId
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$baseValue
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$taxValue
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$transactionValue
 */
class MwsFinancesServiceModelProductAdsPaymentEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('postedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'transactionType' => array('FieldValue' => null, 'FieldType' => 'string'), 'invoiceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'baseValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'taxValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'transactionValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the postedDate property.
     *
     * @return XMLGregorianCalendar postedDate.
     */
    public function getpostedDate()
    {
        return $this->_fields['postedDate']['FieldValue'];
    }
    /**
     * Set the value of the postedDate property.
     *
     * @param string postedDate
     * @return $this 
     */
    public function setpostedDate($value)
    {
        $this->_fields['postedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if postedDate is set.
     *
     * @return true if postedDate is set.
     */
    public function isSetpostedDate()
    {
        return !is_null($this->_fields['postedDate']['FieldValue']);
    }
    /**
     * Set the value of postedDate, return this.
     *
     * @param string $postedDate
     * @return $this
     */
    public function withpostedDate($postedDate)
    {
        $this->setpostedDate($postedDate);
        return $this;
    }
    /**
     * Get the value of the transactionType property.
     *
     * @return String transactionType.
     */
    public function gettransactionType()
    {
        return $this->_fields['transactionType']['FieldValue'];
    }
    /**
     * Set the value of the transactionType property.
     *
     * @param string transactionType
     * @return $this 
     */
    public function settransactionType($value)
    {
        $this->_fields['transactionType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if transactionType is set.
     *
     * @return true if transactionType is set.
     */
    public function isSettransactionType()
    {
        return !is_null($this->_fields['transactionType']['FieldValue']);
    }
    /**
     * Set the value of transactionType, return this.
     *
     * @param string $transactionType
     * @return $this
     */
    public function withtransactionType($transactionType)
    {
        $this->settransactionType($transactionType);
        return $this;
    }
    /**
     * Get the value of the invoiceId property.
     *
     * @return String invoiceId.
     */
    public function getinvoiceId()
    {
        return $this->_fields['invoiceId']['FieldValue'];
    }
    /**
     * Set the value of the invoiceId property.
     *
     * @param string invoiceId
     * @return $this 
     */
    public function setinvoiceId($value)
    {
        $this->_fields['invoiceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if invoiceId is set.
     *
     * @return true if invoiceId is set.
     */
    public function isSetinvoiceId()
    {
        return !is_null($this->_fields['invoiceId']['FieldValue']);
    }
    /**
     * Set the value of invoiceId, return this.
     *
     * @param string $invoiceId
     * @return $this
     */
    public function withinvoiceId($invoiceId)
    {
        $this->setinvoiceId($invoiceId);
        return $this;
    }
    /**
     * Get the value of the baseValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency baseValue.
     */
    public function getbaseValue()
    {
        return $this->_fields['baseValue']['FieldValue'];
    }
    /**
     * Set the value of the baseValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency baseValue
     * @return $this 
     */
    public function setbaseValue($value)
    {
        $this->_fields['baseValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if baseValue is set.
     *
     * @return true if baseValue is set.
     */
    public function isSetbaseValue()
    {
        return !is_null($this->_fields['baseValue']['FieldValue']);
    }
    /**
     * Set the value of baseValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $baseValue
     * @return $this
     */
    public function withbaseValue($baseValue)
    {
        $this->setbaseValue($baseValue);
        return $this;
    }
    /**
     * Get the value of the taxValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency taxValue.
     */
    public function gettaxValue()
    {
        return $this->_fields['taxValue']['FieldValue'];
    }
    /**
     * Set the value of the taxValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency taxValue
     * @return $this 
     */
    public function settaxValue($value)
    {
        $this->_fields['taxValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if taxValue is set.
     *
     * @return true if taxValue is set.
     */
    public function isSettaxValue()
    {
        return !is_null($this->_fields['taxValue']['FieldValue']);
    }
    /**
     * Set the value of taxValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $taxValue
     * @return $this
     */
    public function withtaxValue($taxValue)
    {
        $this->settaxValue($taxValue);
        return $this;
    }
    /**
     * Get the value of the transactionValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency transactionValue.
     */
    public function gettransactionValue()
    {
        return $this->_fields['transactionValue']['FieldValue'];
    }
    /**
     * Set the value of the transactionValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency transactionValue
     * @return $this 
     */
    public function settransactionValue($value)
    {
        $this->_fields['transactionValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if transactionValue is set.
     *
     * @return true if transactionValue is set.
     */
    public function isSettransactionValue()
    {
        return !is_null($this->_fields['transactionValue']['FieldValue']);
    }
    /**
     * Set the value of transactionValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $transactionValue
     * @return $this
     */
    public function withtransactionValue($transactionValue)
    {
        $this->settransactionValue($transactionValue);
        return $this;
    }
}