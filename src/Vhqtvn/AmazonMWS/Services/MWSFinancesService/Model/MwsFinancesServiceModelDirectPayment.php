<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDirectPayment
 * 
 * @property	string	$DirectPaymentType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$DirectPaymentAmount
 */
class MwsFinancesServiceModelDirectPayment extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DirectPaymentType' => array('FieldValue' => null, 'FieldType' => 'string'), 'DirectPaymentAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the DirectPaymentType property.
     *
     * @return \string DirectPaymentType.
     */
    public function getDirectPaymentType()
    {
        return $this->_fields['DirectPaymentType']['FieldValue'];
    }
    /**
     * Set the value of the DirectPaymentType property.
     *
     * @param string directPaymentType
     * @return $this instance
     */
    public function setDirectPaymentType($value)
    {
        $this->_fields['DirectPaymentType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DirectPaymentType is set.
     *
     * @return true if DirectPaymentType is set.
     */
    public function isSetDirectPaymentType()
    {
        return !is_null($this->_fields['DirectPaymentType']['FieldValue']);
    }
    /**
     * Set the value of DirectPaymentType, return this.
     *
     * @param string $DirectPaymentType
     * @return $this
     */
    public function withDirectPaymentType($DirectPaymentType)
    {
        $this->setDirectPaymentType($DirectPaymentType);
        return $this;
    }
    /**
     * Get the value of the DirectPaymentAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency DirectPaymentAmount.
     */
    public function getDirectPaymentAmount()
    {
        return $this->_fields['DirectPaymentAmount']['FieldValue'];
    }
    /**
     * Set the value of the DirectPaymentAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency directPaymentAmount
     * @return $this instance
     */
    public function setDirectPaymentAmount($value)
    {
        $this->_fields['DirectPaymentAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DirectPaymentAmount is set.
     *
     * @return true if DirectPaymentAmount is set.
     */
    public function isSetDirectPaymentAmount()
    {
        return !is_null($this->_fields['DirectPaymentAmount']['FieldValue']);
    }
    /**
     * Set the value of DirectPaymentAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $DirectPaymentAmount
     * @return $this
     */
    public function withDirectPaymentAmount($DirectPaymentAmount)
    {
        $this->setDirectPaymentAmount($DirectPaymentAmount);
        return $this;
    }
}