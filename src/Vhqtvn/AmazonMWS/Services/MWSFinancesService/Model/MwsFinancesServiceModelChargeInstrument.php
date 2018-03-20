<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeInstrument
 * 
 * @property	string	$Description
 * @property	string	$Tail
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$Amount
 */
class MwsFinancesServiceModelChargeInstrument extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Description' => array('FieldValue' => null, 'FieldType' => 'string'), 'Tail' => array('FieldValue' => null, 'FieldType' => 'string'), 'Amount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Description property.
     *
     * @return \string Description.
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }
    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @return $this instance
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set.
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }
    /**
     * Set the value of Description, return this.
     *
     * @param string $Description
     * @return $this
     */
    public function withDescription($Description)
    {
        $this->setDescription($Description);
        return $this;
    }
    /**
     * Get the value of the Tail property.
     *
     * @return \string Tail.
     */
    public function getTail()
    {
        return $this->_fields['Tail']['FieldValue'];
    }
    /**
     * Set the value of the Tail property.
     *
     * @param string tail
     * @return $this instance
     */
    public function setTail($value)
    {
        $this->_fields['Tail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Tail is set.
     *
     * @return true if Tail is set.
     */
    public function isSetTail()
    {
        return !is_null($this->_fields['Tail']['FieldValue']);
    }
    /**
     * Set the value of Tail, return this.
     *
     * @param string $Tail
     * @return $this
     */
    public function withTail($Tail)
    {
        $this->setTail($Tail);
        return $this;
    }
    /**
     * Get the value of the Amount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }
    /**
     * Set the value of the Amount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency amount
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $Amount
     * @return $this
     */
    public function withAmount($Amount)
    {
        $this->setAmount($Amount);
        return $this;
    }
}