<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetail
 * 
 * @property	string	$FeeType
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$FeeAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$FeePromotion
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$TaxAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$FinalFee
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList	$IncludedFeeDetailList
 */
class MarketplaceWebServiceProductsModelFeeDetail extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FeeType' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'FeePromotion' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'TaxAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'FinalFee' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'IncludedFeeDetailList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the FeeType property.
     *
     * @return String FeeType.
     */
    public function getFeeType()
    {
        return $this->_fields['FeeType']['FieldValue'];
    }
    /**
     * Set the value of the FeeType property.
     *
     * @param string feeType
     * @return $this 
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
     * @param feeType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeeType($value)
    {
        $this->setFeeType($value);
        return $this;
    }
    /**
     * Get the value of the FeeAmount property.
     *
     * @return MoneyType FeeAmount.
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }
    /**
     * Set the value of the FeeAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType feeAmount
     * @return $this 
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
     * @param feeAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeeAmount($value)
    {
        $this->setFeeAmount($value);
        return $this;
    }
    /**
     * Get the value of the FeePromotion property.
     *
     * @return MoneyType FeePromotion.
     */
    public function getFeePromotion()
    {
        return $this->_fields['FeePromotion']['FieldValue'];
    }
    /**
     * Set the value of the FeePromotion property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType feePromotion
     * @return $this 
     */
    public function setFeePromotion($value)
    {
        $this->_fields['FeePromotion']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeePromotion is set.
     *
     * @return true if FeePromotion is set.
     */
    public function isSetFeePromotion()
    {
        return !is_null($this->_fields['FeePromotion']['FieldValue']);
    }
    /**
     * Set the value of FeePromotion, return this.
     *
     * @param feePromotion
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeePromotion($value)
    {
        $this->setFeePromotion($value);
        return $this;
    }
    /**
     * Get the value of the TaxAmount property.
     *
     * @return MoneyType TaxAmount.
     */
    public function getTaxAmount()
    {
        return $this->_fields['TaxAmount']['FieldValue'];
    }
    /**
     * Set the value of the TaxAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType taxAmount
     * @return $this 
     */
    public function setTaxAmount($value)
    {
        $this->_fields['TaxAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TaxAmount is set.
     *
     * @return true if TaxAmount is set.
     */
    public function isSetTaxAmount()
    {
        return !is_null($this->_fields['TaxAmount']['FieldValue']);
    }
    /**
     * Set the value of TaxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTaxAmount($value)
    {
        $this->setTaxAmount($value);
        return $this;
    }
    /**
     * Get the value of the FinalFee property.
     *
     * @return MoneyType FinalFee.
     */
    public function getFinalFee()
    {
        return $this->_fields['FinalFee']['FieldValue'];
    }
    /**
     * Set the value of the FinalFee property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType finalFee
     * @return $this 
     */
    public function setFinalFee($value)
    {
        $this->_fields['FinalFee']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinalFee is set.
     *
     * @return true if FinalFee is set.
     */
    public function isSetFinalFee()
    {
        return !is_null($this->_fields['FinalFee']['FieldValue']);
    }
    /**
     * Set the value of FinalFee, return this.
     *
     * @param finalFee
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFinalFee($value)
    {
        $this->setFinalFee($value);
        return $this;
    }
    /**
     * Get the value of the IncludedFeeDetailList property.
     *
     * @return FeeDetailList IncludedFeeDetailList.
     */
    public function getIncludedFeeDetailList()
    {
        return $this->_fields['IncludedFeeDetailList']['FieldValue'];
    }
    /**
     * Set the value of the IncludedFeeDetailList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList includedFeeDetailList
     * @return $this 
     */
    public function setIncludedFeeDetailList($value)
    {
        $this->_fields['IncludedFeeDetailList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IncludedFeeDetailList is set.
     *
     * @return true if IncludedFeeDetailList is set.
     */
    public function isSetIncludedFeeDetailList()
    {
        return !is_null($this->_fields['IncludedFeeDetailList']['FieldValue']);
    }
    /**
     * Set the value of IncludedFeeDetailList, return this.
     *
     * @param includedFeeDetailList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIncludedFeeDetailList($value)
    {
        $this->setIncludedFeeDetailList($value);
        return $this;
    }
}