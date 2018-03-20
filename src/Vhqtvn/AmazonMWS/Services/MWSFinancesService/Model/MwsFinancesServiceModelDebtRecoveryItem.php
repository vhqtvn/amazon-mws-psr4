<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryItem
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$RecoveryAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$OriginalAmount
 * @property	string	$GroupBeginDate
 * @property	string	$GroupEndDate
 */
class MwsFinancesServiceModelDebtRecoveryItem extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('RecoveryAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'OriginalAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'GroupBeginDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'GroupEndDate' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
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
     * @return $this instance
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
     * Get the value of the OriginalAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency OriginalAmount.
     */
    public function getOriginalAmount()
    {
        return $this->_fields['OriginalAmount']['FieldValue'];
    }
    /**
     * Set the value of the OriginalAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency originalAmount
     * @return $this instance
     */
    public function setOriginalAmount($value)
    {
        $this->_fields['OriginalAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OriginalAmount is set.
     *
     * @return true if OriginalAmount is set.
     */
    public function isSetOriginalAmount()
    {
        return !is_null($this->_fields['OriginalAmount']['FieldValue']);
    }
    /**
     * Set the value of OriginalAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $OriginalAmount
     * @return $this
     */
    public function withOriginalAmount($OriginalAmount)
    {
        $this->setOriginalAmount($OriginalAmount);
        return $this;
    }
    /**
     * Get the value of the GroupBeginDate property.
     *
     * @return \DateTime GroupBeginDate.
     */
    public function getGroupBeginDate()
    {
        return $this->_fields['GroupBeginDate']['FieldValue'];
    }
    /**
     * Set the value of the GroupBeginDate property.
     *
     * @param string groupBeginDate
     * @return $this instance
     */
    public function setGroupBeginDate($value)
    {
        $this->_fields['GroupBeginDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GroupBeginDate is set.
     *
     * @return true if GroupBeginDate is set.
     */
    public function isSetGroupBeginDate()
    {
        return !is_null($this->_fields['GroupBeginDate']['FieldValue']);
    }
    /**
     * Set the value of GroupBeginDate, return this.
     *
     * @param string $GroupBeginDate
     * @return $this
     */
    public function withGroupBeginDate($GroupBeginDate)
    {
        $this->setGroupBeginDate($GroupBeginDate);
        return $this;
    }
    /**
     * Get the value of the GroupEndDate property.
     *
     * @return \DateTime GroupEndDate.
     */
    public function getGroupEndDate()
    {
        return $this->_fields['GroupEndDate']['FieldValue'];
    }
    /**
     * Set the value of the GroupEndDate property.
     *
     * @param string groupEndDate
     * @return $this instance
     */
    public function setGroupEndDate($value)
    {
        $this->_fields['GroupEndDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GroupEndDate is set.
     *
     * @return true if GroupEndDate is set.
     */
    public function isSetGroupEndDate()
    {
        return !is_null($this->_fields['GroupEndDate']['FieldValue']);
    }
    /**
     * Set the value of GroupEndDate, return this.
     *
     * @param string $GroupEndDate
     * @return $this
     */
    public function withGroupEndDate($GroupEndDate)
    {
        $this->setGroupEndDate($GroupEndDate);
        return $this;
    }
}