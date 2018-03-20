<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice
 * 
 * @property	string	$CurrencyCode
 * @property	float	$Amount
 */
class MwsRecommendationsSectionServiceModelPrice extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'Amount' => array('FieldValue' => null, 'FieldType' => 'float'));
        parent::__construct($data);
    }
    /**
     * Get the value of the CurrencyCode property.
     *
     * @return \string CurrencyCode.
     */
    public function getCurrencyCode()
    {
        return $this->_fields['CurrencyCode']['FieldValue'];
    }
    /**
     * Set the value of the CurrencyCode property.
     *
     * @param string currencyCode
     * @return $this instance
     */
    public function setCurrencyCode($value)
    {
        $this->_fields['CurrencyCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CurrencyCode is set.
     *
     * @return true if CurrencyCode is set.
     */
    public function isSetCurrencyCode()
    {
        return !is_null($this->_fields['CurrencyCode']['FieldValue']);
    }
    /**
     * Set the value of CurrencyCode, return this.
     *
     * @param string $CurrencyCode
     * @return $this
     */
    public function withCurrencyCode($CurrencyCode)
    {
        $this->setCurrencyCode($CurrencyCode);
        return $this;
    }
    /**
     * Get the value of the Amount property.
     *
     * @return \float Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }
    /**
     * Set the value of the Amount property.
     *
     * @param float amount
     * @return $this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }
    /**
     * Set the value of Amount, return this.
     *
     * @param float $Amount
     * @return $this
     */
    public function withAmount($Amount)
    {
        $this->setAmount($Amount);
        return $this;
    }
}