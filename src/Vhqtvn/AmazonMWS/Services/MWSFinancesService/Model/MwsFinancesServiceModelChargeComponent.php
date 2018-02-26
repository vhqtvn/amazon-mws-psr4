<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent
 * 
 * @property	string	$ChargeType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$ChargeAmount
 */
class MwsFinancesServiceModelChargeComponent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ChargeType' => array('FieldValue' => null, 'FieldType' => 'string'), 'ChargeAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ChargeType property.
     *
     * @return String ChargeType.
     */
    public function getChargeType()
    {
        return $this->_fields['ChargeType']['FieldValue'];
    }
    /**
     * Set the value of the ChargeType property.
     *
     * @param string chargeType
     * @return $this 
     */
    public function setChargeType($value)
    {
        $this->_fields['ChargeType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ChargeType is set.
     *
     * @return true if ChargeType is set.
     */
    public function isSetChargeType()
    {
        return !is_null($this->_fields['ChargeType']['FieldValue']);
    }
    /**
     * Set the value of ChargeType, return this.
     *
     * @param string $ChargeType
     * @return $this
     */
    public function withChargeType($ChargeType)
    {
        $this->setChargeType($ChargeType);
        return $this;
    }
    /**
     * Get the value of the ChargeAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency ChargeAmount.
     */
    public function getChargeAmount()
    {
        return $this->_fields['ChargeAmount']['FieldValue'];
    }
    /**
     * Set the value of the ChargeAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency chargeAmount
     * @return $this 
     */
    public function setChargeAmount($value)
    {
        $this->_fields['ChargeAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ChargeAmount is set.
     *
     * @return true if ChargeAmount is set.
     */
    public function isSetChargeAmount()
    {
        return !is_null($this->_fields['ChargeAmount']['FieldValue']);
    }
    /**
     * Set the value of ChargeAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $ChargeAmount
     * @return $this
     */
    public function withChargeAmount($ChargeAmount)
    {
        $this->setChargeAmount($ChargeAmount);
        return $this;
    }
}