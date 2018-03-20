<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent
 * 
 * @property	string	$FeeType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$FeeAmount
 */
class MwsFinancesServiceModelFeeComponent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FeeType' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the FeeType property.
     *
     * @return \string FeeType.
     */
    public function getFeeType()
    {
        return $this->_fields['FeeType']['FieldValue'];
    }
    /**
     * Set the value of the FeeType property.
     *
     * @param string feeType
     * @return $this instance
     */
    public function setFeeType($value)
    {
        $this->_fields['FeeType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeType is set.
     *
     * @return true if FeeType is set.
     */
    public function isSetFeeType()
    {
        return !is_null($this->_fields['FeeType']['FieldValue']);
    }
    /**
     * Set the value of FeeType, return this.
     *
     * @param string $FeeType
     * @return $this
     */
    public function withFeeType($FeeType)
    {
        $this->setFeeType($FeeType);
        return $this;
    }
    /**
     * Get the value of the FeeAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency FeeAmount.
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }
    /**
     * Set the value of the FeeAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency feeAmount
     * @return $this instance
     */
    public function setFeeAmount($value)
    {
        $this->_fields['FeeAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeAmount is set.
     *
     * @return true if FeeAmount is set.
     */
    public function isSetFeeAmount()
    {
        return !is_null($this->_fields['FeeAmount']['FieldValue']);
    }
    /**
     * Set the value of FeeAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $FeeAmount
     * @return $this
     */
    public function withFeeAmount($FeeAmount)
    {
        $this->setFeeAmount($FeeAmount);
        return $this;
    }
}