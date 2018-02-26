<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFinancialEventGroup
 * 
 * @property	string	$FinancialEventGroupId
 * @property	string	$ProcessingStatus
 * @property	string	$FundTransferStatus
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$OriginalTotal
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$ConvertedTotal
 * @property	string	$FundTransferDate
 * @property	string	$TraceId
 * @property	string	$AccountTail
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$BeginningBalance
 * @property	string	$FinancialEventGroupStart
 * @property	string	$FinancialEventGroupEnd
 */
class MwsFinancesServiceModelFinancialEventGroup extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FinancialEventGroupId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProcessingStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'FundTransferStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'OriginalTotal' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'ConvertedTotal' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'FundTransferDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'TraceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'AccountTail' => array('FieldValue' => null, 'FieldType' => 'string'), 'BeginningBalance' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'FinancialEventGroupStart' => array('FieldValue' => null, 'FieldType' => 'string'), 'FinancialEventGroupEnd' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the FinancialEventGroupId property.
     *
     * @return String FinancialEventGroupId.
     */
    public function getFinancialEventGroupId()
    {
        return $this->_fields['FinancialEventGroupId']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupId property.
     *
     * @param string financialEventGroupId
     * @return $this 
     */
    public function setFinancialEventGroupId($value)
    {
        $this->_fields['FinancialEventGroupId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinancialEventGroupId is set.
     *
     * @return true if FinancialEventGroupId is set.
     */
    public function isSetFinancialEventGroupId()
    {
        return !is_null($this->_fields['FinancialEventGroupId']['FieldValue']);
    }
    /**
     * Set the value of FinancialEventGroupId, return this.
     *
     * @param string $FinancialEventGroupId
     * @return $this
     */
    public function withFinancialEventGroupId($FinancialEventGroupId)
    {
        $this->setFinancialEventGroupId($FinancialEventGroupId);
        return $this;
    }
    /**
     * Get the value of the ProcessingStatus property.
     *
     * @return String ProcessingStatus.
     */
    public function getProcessingStatus()
    {
        return $this->_fields['ProcessingStatus']['FieldValue'];
    }
    /**
     * Set the value of the ProcessingStatus property.
     *
     * @param string processingStatus
     * @return $this 
     */
    public function setProcessingStatus($value)
    {
        $this->_fields['ProcessingStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProcessingStatus is set.
     *
     * @return true if ProcessingStatus is set.
     */
    public function isSetProcessingStatus()
    {
        return !is_null($this->_fields['ProcessingStatus']['FieldValue']);
    }
    /**
     * Set the value of ProcessingStatus, return this.
     *
     * @param string $ProcessingStatus
     * @return $this
     */
    public function withProcessingStatus($ProcessingStatus)
    {
        $this->setProcessingStatus($ProcessingStatus);
        return $this;
    }
    /**
     * Get the value of the FundTransferStatus property.
     *
     * @return String FundTransferStatus.
     */
    public function getFundTransferStatus()
    {
        return $this->_fields['FundTransferStatus']['FieldValue'];
    }
    /**
     * Set the value of the FundTransferStatus property.
     *
     * @param string fundTransferStatus
     * @return $this 
     */
    public function setFundTransferStatus($value)
    {
        $this->_fields['FundTransferStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FundTransferStatus is set.
     *
     * @return true if FundTransferStatus is set.
     */
    public function isSetFundTransferStatus()
    {
        return !is_null($this->_fields['FundTransferStatus']['FieldValue']);
    }
    /**
     * Set the value of FundTransferStatus, return this.
     *
     * @param string $FundTransferStatus
     * @return $this
     */
    public function withFundTransferStatus($FundTransferStatus)
    {
        $this->setFundTransferStatus($FundTransferStatus);
        return $this;
    }
    /**
     * Get the value of the OriginalTotal property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency OriginalTotal.
     */
    public function getOriginalTotal()
    {
        return $this->_fields['OriginalTotal']['FieldValue'];
    }
    /**
     * Set the value of the OriginalTotal property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency originalTotal
     * @return $this 
     */
    public function setOriginalTotal($value)
    {
        $this->_fields['OriginalTotal']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OriginalTotal is set.
     *
     * @return true if OriginalTotal is set.
     */
    public function isSetOriginalTotal()
    {
        return !is_null($this->_fields['OriginalTotal']['FieldValue']);
    }
    /**
     * Set the value of OriginalTotal, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $OriginalTotal
     * @return $this
     */
    public function withOriginalTotal($OriginalTotal)
    {
        $this->setOriginalTotal($OriginalTotal);
        return $this;
    }
    /**
     * Get the value of the ConvertedTotal property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency ConvertedTotal.
     */
    public function getConvertedTotal()
    {
        return $this->_fields['ConvertedTotal']['FieldValue'];
    }
    /**
     * Set the value of the ConvertedTotal property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency convertedTotal
     * @return $this 
     */
    public function setConvertedTotal($value)
    {
        $this->_fields['ConvertedTotal']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConvertedTotal is set.
     *
     * @return true if ConvertedTotal is set.
     */
    public function isSetConvertedTotal()
    {
        return !is_null($this->_fields['ConvertedTotal']['FieldValue']);
    }
    /**
     * Set the value of ConvertedTotal, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $ConvertedTotal
     * @return $this
     */
    public function withConvertedTotal($ConvertedTotal)
    {
        $this->setConvertedTotal($ConvertedTotal);
        return $this;
    }
    /**
     * Get the value of the FundTransferDate property.
     *
     * @return XMLGregorianCalendar FundTransferDate.
     */
    public function getFundTransferDate()
    {
        return $this->_fields['FundTransferDate']['FieldValue'];
    }
    /**
     * Set the value of the FundTransferDate property.
     *
     * @param string fundTransferDate
     * @return $this 
     */
    public function setFundTransferDate($value)
    {
        $this->_fields['FundTransferDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FundTransferDate is set.
     *
     * @return true if FundTransferDate is set.
     */
    public function isSetFundTransferDate()
    {
        return !is_null($this->_fields['FundTransferDate']['FieldValue']);
    }
    /**
     * Set the value of FundTransferDate, return this.
     *
     * @param string $FundTransferDate
     * @return $this
     */
    public function withFundTransferDate($FundTransferDate)
    {
        $this->setFundTransferDate($FundTransferDate);
        return $this;
    }
    /**
     * Get the value of the TraceId property.
     *
     * @return String TraceId.
     */
    public function getTraceId()
    {
        return $this->_fields['TraceId']['FieldValue'];
    }
    /**
     * Set the value of the TraceId property.
     *
     * @param string traceId
     * @return $this 
     */
    public function setTraceId($value)
    {
        $this->_fields['TraceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TraceId is set.
     *
     * @return true if TraceId is set.
     */
    public function isSetTraceId()
    {
        return !is_null($this->_fields['TraceId']['FieldValue']);
    }
    /**
     * Set the value of TraceId, return this.
     *
     * @param string $TraceId
     * @return $this
     */
    public function withTraceId($TraceId)
    {
        $this->setTraceId($TraceId);
        return $this;
    }
    /**
     * Get the value of the AccountTail property.
     *
     * @return String AccountTail.
     */
    public function getAccountTail()
    {
        return $this->_fields['AccountTail']['FieldValue'];
    }
    /**
     * Set the value of the AccountTail property.
     *
     * @param string accountTail
     * @return $this 
     */
    public function setAccountTail($value)
    {
        $this->_fields['AccountTail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AccountTail is set.
     *
     * @return true if AccountTail is set.
     */
    public function isSetAccountTail()
    {
        return !is_null($this->_fields['AccountTail']['FieldValue']);
    }
    /**
     * Set the value of AccountTail, return this.
     *
     * @param string $AccountTail
     * @return $this
     */
    public function withAccountTail($AccountTail)
    {
        $this->setAccountTail($AccountTail);
        return $this;
    }
    /**
     * Get the value of the BeginningBalance property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency BeginningBalance.
     */
    public function getBeginningBalance()
    {
        return $this->_fields['BeginningBalance']['FieldValue'];
    }
    /**
     * Set the value of the BeginningBalance property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency beginningBalance
     * @return $this 
     */
    public function setBeginningBalance($value)
    {
        $this->_fields['BeginningBalance']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BeginningBalance is set.
     *
     * @return true if BeginningBalance is set.
     */
    public function isSetBeginningBalance()
    {
        return !is_null($this->_fields['BeginningBalance']['FieldValue']);
    }
    /**
     * Set the value of BeginningBalance, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $BeginningBalance
     * @return $this
     */
    public function withBeginningBalance($BeginningBalance)
    {
        $this->setBeginningBalance($BeginningBalance);
        return $this;
    }
    /**
     * Get the value of the FinancialEventGroupStart property.
     *
     * @return XMLGregorianCalendar FinancialEventGroupStart.
     */
    public function getFinancialEventGroupStart()
    {
        return $this->_fields['FinancialEventGroupStart']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupStart property.
     *
     * @param string financialEventGroupStart
     * @return $this 
     */
    public function setFinancialEventGroupStart($value)
    {
        $this->_fields['FinancialEventGroupStart']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinancialEventGroupStart is set.
     *
     * @return true if FinancialEventGroupStart is set.
     */
    public function isSetFinancialEventGroupStart()
    {
        return !is_null($this->_fields['FinancialEventGroupStart']['FieldValue']);
    }
    /**
     * Set the value of FinancialEventGroupStart, return this.
     *
     * @param string $FinancialEventGroupStart
     * @return $this
     */
    public function withFinancialEventGroupStart($FinancialEventGroupStart)
    {
        $this->setFinancialEventGroupStart($FinancialEventGroupStart);
        return $this;
    }
    /**
     * Get the value of the FinancialEventGroupEnd property.
     *
     * @return XMLGregorianCalendar FinancialEventGroupEnd.
     */
    public function getFinancialEventGroupEnd()
    {
        return $this->_fields['FinancialEventGroupEnd']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupEnd property.
     *
     * @param string financialEventGroupEnd
     * @return $this 
     */
    public function setFinancialEventGroupEnd($value)
    {
        $this->_fields['FinancialEventGroupEnd']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinancialEventGroupEnd is set.
     *
     * @return true if FinancialEventGroupEnd is set.
     */
    public function isSetFinancialEventGroupEnd()
    {
        return !is_null($this->_fields['FinancialEventGroupEnd']['FieldValue']);
    }
    /**
     * Set the value of FinancialEventGroupEnd, return this.
     *
     * @param string $FinancialEventGroupEnd
     * @return $this
     */
    public function withFinancialEventGroupEnd($FinancialEventGroupEnd)
    {
        $this->setFinancialEventGroupEnd($FinancialEventGroupEnd);
        return $this;
    }
}