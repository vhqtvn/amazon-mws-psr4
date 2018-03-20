<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementEvent
 * 
 * @property	string	$PostedDate
 * @property	string	$SAFETClaimId
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$ReimbursedAmount
 * @property	string	$ReasonCode
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementItem[]	$SAFETReimbursementItemList
 */
class MwsFinancesServiceModelSAFETReimbursementEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'SAFETClaimId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReimbursedAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'ReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'SAFETReimbursementItemList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementItem::class), 'ListMemberName' => 'SAFETReimbursementItem'));
        parent::__construct($data);
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return \DateTime PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
        return !is_null($this->_fields['PostedDate']['FieldValue']);
    }
    /**
     * Set the value of PostedDate, return this.
     *
     * @param string $PostedDate
     * @return $this
     */
    public function withPostedDate($PostedDate)
    {
        $this->setPostedDate($PostedDate);
        return $this;
    }
    /**
     * Get the value of the SAFETClaimId property.
     *
     * @return \string SAFETClaimId.
     */
    public function getSAFETClaimId()
    {
        return $this->_fields['SAFETClaimId']['FieldValue'];
    }
    /**
     * Set the value of the SAFETClaimId property.
     *
     * @param string safetClaimId
     * @return $this instance
     */
    public function setSAFETClaimId($value)
    {
        $this->_fields['SAFETClaimId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SAFETClaimId is set.
     *
     * @return true if SAFETClaimId is set.
     */
    public function isSetSAFETClaimId()
    {
        return !is_null($this->_fields['SAFETClaimId']['FieldValue']);
    }
    /**
     * Set the value of SAFETClaimId, return this.
     *
     * @param string $SAFETClaimId
     * @return $this
     */
    public function withSAFETClaimId($SAFETClaimId)
    {
        $this->setSAFETClaimId($SAFETClaimId);
        return $this;
    }
    /**
     * Get the value of the ReimbursedAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency ReimbursedAmount.
     */
    public function getReimbursedAmount()
    {
        return $this->_fields['ReimbursedAmount']['FieldValue'];
    }
    /**
     * Set the value of the ReimbursedAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency reimbursedAmount
     * @return $this instance
     */
    public function setReimbursedAmount($value)
    {
        $this->_fields['ReimbursedAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReimbursedAmount is set.
     *
     * @return true if ReimbursedAmount is set.
     */
    public function isSetReimbursedAmount()
    {
        return !is_null($this->_fields['ReimbursedAmount']['FieldValue']);
    }
    /**
     * Set the value of ReimbursedAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $ReimbursedAmount
     * @return $this
     */
    public function withReimbursedAmount($ReimbursedAmount)
    {
        $this->setReimbursedAmount($ReimbursedAmount);
        return $this;
    }
    /**
     * Get the value of the ReasonCode property.
     *
     * @return \string ReasonCode.
     */
    public function getReasonCode()
    {
        return $this->_fields['ReasonCode']['FieldValue'];
    }
    /**
     * Set the value of the ReasonCode property.
     *
     * @param string reasonCode
     * @return $this instance
     */
    public function setReasonCode($value)
    {
        $this->_fields['ReasonCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReasonCode is set.
     *
     * @return true if ReasonCode is set.
     */
    public function isSetReasonCode()
    {
        return !is_null($this->_fields['ReasonCode']['FieldValue']);
    }
    /**
     * Set the value of ReasonCode, return this.
     *
     * @param string $ReasonCode
     * @return $this
     */
    public function withReasonCode($ReasonCode)
    {
        $this->setReasonCode($ReasonCode);
        return $this;
    }
    /**
     * Get the value of the SAFETReimbursementItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementItem[] SAFETReimbursementItemList.
     */
    public function getSAFETReimbursementItemList()
    {
        if ($this->_fields['SAFETReimbursementItemList']['FieldValue'] == null) {
            $this->_fields['SAFETReimbursementItemList']['FieldValue'] = array();
        }
        return $this->_fields['SAFETReimbursementItemList']['FieldValue'];
    }
    /**
     * Set the value of the SAFETReimbursementItemList property.
     *
     * @param array safetReimbursementItemList
     * @return $this instance
     */
    public function setSAFETReimbursementItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SAFETReimbursementItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SAFETReimbursementItemList.
     */
    public function unsetSAFETReimbursementItemList()
    {
        $this->_fields['SAFETReimbursementItemList']['FieldValue'] = array();
    }
    /**
     * Check to see if SAFETReimbursementItemList is set.
     *
     * @return true if SAFETReimbursementItemList is set.
     */
    public function isSetSAFETReimbursementItemList()
    {
        return !empty($this->_fields['SAFETReimbursementItemList']['FieldValue']);
    }
    /**
     * Add values for SAFETReimbursementItemList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementItem[] $SAFETReimbursementItemList_array,...
     * @return $this
     */
    public function withSAFETReimbursementItemList(...$SAFETReimbursementItemList_array)
    {
        foreach ($SAFETReimbursementItemList_array as $SAFETReimbursementItemList) {
            $this->_fields['SAFETReimbursementItemList']['FieldValue'][] = $SAFETReimbursementItemList;
        }
        return $this;
    }
}