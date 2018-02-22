<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelLoanServicingEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoanAmount: \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency</li>
 * <li>SourceBusinessEventType: string</li>
 *
 * </ul>
 */
class MwsFinancesServiceModelLoanServicingEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('LoanAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'SourceBusinessEventType' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the LoanAmount property.
     *
     * @return Currency LoanAmount.
     */
    public function getLoanAmount()
    {
        return $this->_fields['LoanAmount']['FieldValue'];
    }
    /**
     * Set the value of the LoanAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency loanAmount
     * @return $this 
     */
    public function setLoanAmount($value)
    {
        $this->_fields['LoanAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LoanAmount is set.
     *
     * @return true if LoanAmount is set.
     */
    public function isSetLoanAmount()
    {
        return !is_null($this->_fields['LoanAmount']['FieldValue']);
    }
    /**
     * Set the value of LoanAmount, return this.
     *
     * @param loanAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLoanAmount($value)
    {
        $this->setLoanAmount($value);
        return $this;
    }
    /**
     * Get the value of the SourceBusinessEventType property.
     *
     * @return String SourceBusinessEventType.
     */
    public function getSourceBusinessEventType()
    {
        return $this->_fields['SourceBusinessEventType']['FieldValue'];
    }
    /**
     * Set the value of the SourceBusinessEventType property.
     *
     * @param string sourceBusinessEventType
     * @return $this 
     */
    public function setSourceBusinessEventType($value)
    {
        $this->_fields['SourceBusinessEventType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SourceBusinessEventType is set.
     *
     * @return true if SourceBusinessEventType is set.
     */
    public function isSetSourceBusinessEventType()
    {
        return !is_null($this->_fields['SourceBusinessEventType']['FieldValue']);
    }
    /**
     * Set the value of SourceBusinessEventType, return this.
     *
     * @param sourceBusinessEventType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSourceBusinessEventType($value)
    {
        $this->setSourceBusinessEventType($value);
        return $this;
    }
}