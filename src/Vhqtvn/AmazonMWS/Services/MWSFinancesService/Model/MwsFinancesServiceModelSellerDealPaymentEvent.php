<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerDealPaymentEvent
 * 
 * @property	string	$postedDate
 * @property	string	$dealId
 * @property	string	$dealDescription
 * @property	string	$eventType
 * @property	string	$feeType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$feeAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$taxAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$totalAmount
 */
class MwsFinancesServiceModelSellerDealPaymentEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('postedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'dealId' => array('FieldValue' => null, 'FieldType' => 'string'), 'dealDescription' => array('FieldValue' => null, 'FieldType' => 'string'), 'eventType' => array('FieldValue' => null, 'FieldType' => 'string'), 'feeType' => array('FieldValue' => null, 'FieldType' => 'string'), 'feeAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'taxAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'totalAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the postedDate property.
     *
     * @return \DateTime postedDate.
     */
    public function getpostedDate()
    {
        return $this->_fields['postedDate']['FieldValue'];
    }
    /**
     * Set the value of the postedDate property.
     *
     * @param string postedDate
     * @return $this instance
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
     * Get the value of the dealId property.
     *
     * @return \string dealId.
     */
    public function getdealId()
    {
        return $this->_fields['dealId']['FieldValue'];
    }
    /**
     * Set the value of the dealId property.
     *
     * @param string dealId
     * @return $this instance
     */
    public function setdealId($value)
    {
        $this->_fields['dealId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if dealId is set.
     *
     * @return true if dealId is set.
     */
    public function isSetdealId()
    {
        return !is_null($this->_fields['dealId']['FieldValue']);
    }
    /**
     * Set the value of dealId, return this.
     *
     * @param string $dealId
     * @return $this
     */
    public function withdealId($dealId)
    {
        $this->setdealId($dealId);
        return $this;
    }
    /**
     * Get the value of the dealDescription property.
     *
     * @return \string dealDescription.
     */
    public function getdealDescription()
    {
        return $this->_fields['dealDescription']['FieldValue'];
    }
    /**
     * Set the value of the dealDescription property.
     *
     * @param string dealDescription
     * @return $this instance
     */
    public function setdealDescription($value)
    {
        $this->_fields['dealDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if dealDescription is set.
     *
     * @return true if dealDescription is set.
     */
    public function isSetdealDescription()
    {
        return !is_null($this->_fields['dealDescription']['FieldValue']);
    }
    /**
     * Set the value of dealDescription, return this.
     *
     * @param string $dealDescription
     * @return $this
     */
    public function withdealDescription($dealDescription)
    {
        $this->setdealDescription($dealDescription);
        return $this;
    }
    /**
     * Get the value of the eventType property.
     *
     * @return \string eventType.
     */
    public function geteventType()
    {
        return $this->_fields['eventType']['FieldValue'];
    }
    /**
     * Set the value of the eventType property.
     *
     * @param string eventType
     * @return $this instance
     */
    public function seteventType($value)
    {
        $this->_fields['eventType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if eventType is set.
     *
     * @return true if eventType is set.
     */
    public function isSeteventType()
    {
        return !is_null($this->_fields['eventType']['FieldValue']);
    }
    /**
     * Set the value of eventType, return this.
     *
     * @param string $eventType
     * @return $this
     */
    public function witheventType($eventType)
    {
        $this->seteventType($eventType);
        return $this;
    }
    /**
     * Get the value of the feeType property.
     *
     * @return \string feeType.
     */
    public function getfeeType()
    {
        return $this->_fields['feeType']['FieldValue'];
    }
    /**
     * Set the value of the feeType property.
     *
     * @param string feeType
     * @return $this instance
     */
    public function setfeeType($value)
    {
        $this->_fields['feeType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if feeType is set.
     *
     * @return true if feeType is set.
     */
    public function isSetfeeType()
    {
        return !is_null($this->_fields['feeType']['FieldValue']);
    }
    /**
     * Set the value of feeType, return this.
     *
     * @param string $feeType
     * @return $this
     */
    public function withfeeType($feeType)
    {
        $this->setfeeType($feeType);
        return $this;
    }
    /**
     * Get the value of the feeAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency feeAmount.
     */
    public function getfeeAmount()
    {
        return $this->_fields['feeAmount']['FieldValue'];
    }
    /**
     * Set the value of the feeAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency feeAmount
     * @return $this instance
     */
    public function setfeeAmount($value)
    {
        $this->_fields['feeAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if feeAmount is set.
     *
     * @return true if feeAmount is set.
     */
    public function isSetfeeAmount()
    {
        return !is_null($this->_fields['feeAmount']['FieldValue']);
    }
    /**
     * Set the value of feeAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $feeAmount
     * @return $this
     */
    public function withfeeAmount($feeAmount)
    {
        $this->setfeeAmount($feeAmount);
        return $this;
    }
    /**
     * Get the value of the taxAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency taxAmount.
     */
    public function gettaxAmount()
    {
        return $this->_fields['taxAmount']['FieldValue'];
    }
    /**
     * Set the value of the taxAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency taxAmount
     * @return $this instance
     */
    public function settaxAmount($value)
    {
        $this->_fields['taxAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if taxAmount is set.
     *
     * @return true if taxAmount is set.
     */
    public function isSettaxAmount()
    {
        return !is_null($this->_fields['taxAmount']['FieldValue']);
    }
    /**
     * Set the value of taxAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $taxAmount
     * @return $this
     */
    public function withtaxAmount($taxAmount)
    {
        $this->settaxAmount($taxAmount);
        return $this;
    }
    /**
     * Get the value of the totalAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency totalAmount.
     */
    public function gettotalAmount()
    {
        return $this->_fields['totalAmount']['FieldValue'];
    }
    /**
     * Set the value of the totalAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency totalAmount
     * @return $this instance
     */
    public function settotalAmount($value)
    {
        $this->_fields['totalAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if totalAmount is set.
     *
     * @return true if totalAmount is set.
     */
    public function isSettotalAmount()
    {
        return !is_null($this->_fields['totalAmount']['FieldValue']);
    }
    /**
     * Set the value of totalAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $totalAmount
     * @return $this
     */
    public function withtotalAmount($totalAmount)
    {
        $this->settotalAmount($totalAmount);
        return $this;
    }
}