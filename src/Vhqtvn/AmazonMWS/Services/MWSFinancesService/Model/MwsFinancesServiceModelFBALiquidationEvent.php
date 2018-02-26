<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFBALiquidationEvent
 * 
 * @property	string	$PostedDate
 * @property	string	$OriginalRemovalOrderId
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$LiquidationProceedsAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$LiquidationFeeAmount
 */
class MwsFinancesServiceModelFBALiquidationEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'OriginalRemovalOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'LiquidationProceedsAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'LiquidationFeeAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this 
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
     * Get the value of the OriginalRemovalOrderId property.
     *
     * @return String OriginalRemovalOrderId.
     */
    public function getOriginalRemovalOrderId()
    {
        return $this->_fields['OriginalRemovalOrderId']['FieldValue'];
    }
    /**
     * Set the value of the OriginalRemovalOrderId property.
     *
     * @param string originalRemovalOrderId
     * @return $this 
     */
    public function setOriginalRemovalOrderId($value)
    {
        $this->_fields['OriginalRemovalOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OriginalRemovalOrderId is set.
     *
     * @return true if OriginalRemovalOrderId is set.
     */
    public function isSetOriginalRemovalOrderId()
    {
        return !is_null($this->_fields['OriginalRemovalOrderId']['FieldValue']);
    }
    /**
     * Set the value of OriginalRemovalOrderId, return this.
     *
     * @param string $OriginalRemovalOrderId
     * @return $this
     */
    public function withOriginalRemovalOrderId($OriginalRemovalOrderId)
    {
        $this->setOriginalRemovalOrderId($OriginalRemovalOrderId);
        return $this;
    }
    /**
     * Get the value of the LiquidationProceedsAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency LiquidationProceedsAmount.
     */
    public function getLiquidationProceedsAmount()
    {
        return $this->_fields['LiquidationProceedsAmount']['FieldValue'];
    }
    /**
     * Set the value of the LiquidationProceedsAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency liquidationProceedsAmount
     * @return $this 
     */
    public function setLiquidationProceedsAmount($value)
    {
        $this->_fields['LiquidationProceedsAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LiquidationProceedsAmount is set.
     *
     * @return true if LiquidationProceedsAmount is set.
     */
    public function isSetLiquidationProceedsAmount()
    {
        return !is_null($this->_fields['LiquidationProceedsAmount']['FieldValue']);
    }
    /**
     * Set the value of LiquidationProceedsAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $LiquidationProceedsAmount
     * @return $this
     */
    public function withLiquidationProceedsAmount($LiquidationProceedsAmount)
    {
        $this->setLiquidationProceedsAmount($LiquidationProceedsAmount);
        return $this;
    }
    /**
     * Get the value of the LiquidationFeeAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency LiquidationFeeAmount.
     */
    public function getLiquidationFeeAmount()
    {
        return $this->_fields['LiquidationFeeAmount']['FieldValue'];
    }
    /**
     * Set the value of the LiquidationFeeAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency liquidationFeeAmount
     * @return $this 
     */
    public function setLiquidationFeeAmount($value)
    {
        $this->_fields['LiquidationFeeAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LiquidationFeeAmount is set.
     *
     * @return true if LiquidationFeeAmount is set.
     */
    public function isSetLiquidationFeeAmount()
    {
        return !is_null($this->_fields['LiquidationFeeAmount']['FieldValue']);
    }
    /**
     * Set the value of LiquidationFeeAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $LiquidationFeeAmount
     * @return $this
     */
    public function withLiquidationFeeAmount($LiquidationFeeAmount)
    {
        $this->setLiquidationFeeAmount($LiquidationFeeAmount);
        return $this;
    }
}