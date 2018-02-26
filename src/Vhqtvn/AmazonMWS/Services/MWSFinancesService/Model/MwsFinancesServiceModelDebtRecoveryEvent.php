<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryEvent
 * 
 * @property	string	$DebtRecoveryType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$RecoveryAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$OverPaymentCredit
 * @property	array	$DebtRecoveryItemList
 * @property	array	$ChargeInstrumentList
 */
class MwsFinancesServiceModelDebtRecoveryEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DebtRecoveryType' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecoveryAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'OverPaymentCredit' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'DebtRecoveryItemList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryItem::class), 'ListMemberName' => 'DebtRecoveryItem'), 'ChargeInstrumentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeInstrument::class), 'ListMemberName' => 'ChargeInstrument'));
        parent::__construct($data);
    }
    /**
     * Get the value of the DebtRecoveryType property.
     *
     * @return String DebtRecoveryType.
     */
    public function getDebtRecoveryType()
    {
        return $this->_fields['DebtRecoveryType']['FieldValue'];
    }
    /**
     * Set the value of the DebtRecoveryType property.
     *
     * @param string debtRecoveryType
     * @return $this 
     */
    public function setDebtRecoveryType($value)
    {
        $this->_fields['DebtRecoveryType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DebtRecoveryType is set.
     *
     * @return true if DebtRecoveryType is set.
     */
    public function isSetDebtRecoveryType()
    {
        return !is_null($this->_fields['DebtRecoveryType']['FieldValue']);
    }
    /**
     * Set the value of DebtRecoveryType, return this.
     *
     * @param string $DebtRecoveryType
     * @return $this
     */
    public function withDebtRecoveryType($DebtRecoveryType)
    {
        $this->setDebtRecoveryType($DebtRecoveryType);
        return $this;
    }
    /**
     * Get the value of the RecoveryAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency RecoveryAmount.
     */
    public function getRecoveryAmount()
    {
        return $this->_fields['RecoveryAmount']['FieldValue'];
    }
    /**
     * Set the value of the RecoveryAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency recoveryAmount
     * @return $this 
     */
    public function setRecoveryAmount($value)
    {
        $this->_fields['RecoveryAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecoveryAmount is set.
     *
     * @return true if RecoveryAmount is set.
     */
    public function isSetRecoveryAmount()
    {
        return !is_null($this->_fields['RecoveryAmount']['FieldValue']);
    }
    /**
     * Set the value of RecoveryAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $RecoveryAmount
     * @return $this
     */
    public function withRecoveryAmount($RecoveryAmount)
    {
        $this->setRecoveryAmount($RecoveryAmount);
        return $this;
    }
    /**
     * Get the value of the OverPaymentCredit property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency OverPaymentCredit.
     */
    public function getOverPaymentCredit()
    {
        return $this->_fields['OverPaymentCredit']['FieldValue'];
    }
    /**
     * Set the value of the OverPaymentCredit property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency overPaymentCredit
     * @return $this 
     */
    public function setOverPaymentCredit($value)
    {
        $this->_fields['OverPaymentCredit']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OverPaymentCredit is set.
     *
     * @return true if OverPaymentCredit is set.
     */
    public function isSetOverPaymentCredit()
    {
        return !is_null($this->_fields['OverPaymentCredit']['FieldValue']);
    }
    /**
     * Set the value of OverPaymentCredit, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $OverPaymentCredit
     * @return $this
     */
    public function withOverPaymentCredit($OverPaymentCredit)
    {
        $this->setOverPaymentCredit($OverPaymentCredit);
        return $this;
    }
    /**
     * Get the value of the DebtRecoveryItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryItem[] DebtRecoveryItemList.
     */
    public function getDebtRecoveryItemList()
    {
        if ($this->_fields['DebtRecoveryItemList']['FieldValue'] == null) {
            $this->_fields['DebtRecoveryItemList']['FieldValue'] = array();
        }
        return $this->_fields['DebtRecoveryItemList']['FieldValue'];
    }
    /**
     * Set the value of the DebtRecoveryItemList property.
     *
     * @param array debtRecoveryItemList
     * @return $this 
     */
    public function setDebtRecoveryItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['DebtRecoveryItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear DebtRecoveryItemList.
     */
    public function unsetDebtRecoveryItemList()
    {
        $this->_fields['DebtRecoveryItemList']['FieldValue'] = array();
    }
    /**
     * Check to see if DebtRecoveryItemList is set.
     *
     * @return true if DebtRecoveryItemList is set.
     */
    public function isSetDebtRecoveryItemList()
    {
        return !empty($this->_fields['DebtRecoveryItemList']['FieldValue']);
    }
    /**
     * Add values for DebtRecoveryItemList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryItem $DebtRecoveryItemList_array,...
     * @return $this
     */
    public function withDebtRecoveryItemList(...$DebtRecoveryItemList_array)
    {
        foreach ($DebtRecoveryItemList_array as $DebtRecoveryItemList) {
            $this->_fields['DebtRecoveryItemList']['FieldValue'][] = $DebtRecoveryItemList;
        }
        return $this;
    }
    /**
     * Get the value of the ChargeInstrumentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeInstrument[] ChargeInstrumentList.
     */
    public function getChargeInstrumentList()
    {
        if ($this->_fields['ChargeInstrumentList']['FieldValue'] == null) {
            $this->_fields['ChargeInstrumentList']['FieldValue'] = array();
        }
        return $this->_fields['ChargeInstrumentList']['FieldValue'];
    }
    /**
     * Set the value of the ChargeInstrumentList property.
     *
     * @param array chargeInstrumentList
     * @return $this 
     */
    public function setChargeInstrumentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ChargeInstrumentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ChargeInstrumentList.
     */
    public function unsetChargeInstrumentList()
    {
        $this->_fields['ChargeInstrumentList']['FieldValue'] = array();
    }
    /**
     * Check to see if ChargeInstrumentList is set.
     *
     * @return true if ChargeInstrumentList is set.
     */
    public function isSetChargeInstrumentList()
    {
        return !empty($this->_fields['ChargeInstrumentList']['FieldValue']);
    }
    /**
     * Add values for ChargeInstrumentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeInstrument $ChargeInstrumentList_array,...
     * @return $this
     */
    public function withChargeInstrumentList(...$ChargeInstrumentList_array)
    {
        foreach ($ChargeInstrumentList_array as $ChargeInstrumentList) {
            $this->_fields['ChargeInstrumentList']['FieldValue'][] = $ChargeInstrumentList;
        }
        return $this;
    }
}