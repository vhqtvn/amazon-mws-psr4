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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType FeeAmount.
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $FeeAmount
     * @return $this
     */
    public function withFeeAmount($FeeAmount)
    {
        $this->setFeeAmount($FeeAmount);
        return $this;
    }
    /**
     * Get the value of the FeePromotion property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType FeePromotion.
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $FeePromotion
     * @return $this
     */
    public function withFeePromotion($FeePromotion)
    {
        $this->setFeePromotion($FeePromotion);
        return $this;
    }
    /**
     * Get the value of the TaxAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType TaxAmount.
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $TaxAmount
     * @return $this
     */
    public function withTaxAmount($TaxAmount)
    {
        $this->setTaxAmount($TaxAmount);
        return $this;
    }
    /**
     * Get the value of the FinalFee property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType FinalFee.
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $FinalFee
     * @return $this
     */
    public function withFinalFee($FinalFee)
    {
        $this->setFinalFee($FinalFee);
        return $this;
    }
    /**
     * Get the value of the IncludedFeeDetailList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList IncludedFeeDetailList.
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList $IncludedFeeDetailList
     * @return $this
     */
    public function withIncludedFeeDetailList($IncludedFeeDetailList)
    {
        $this->setIncludedFeeDetailList($IncludedFeeDetailList);
        return $this;
    }
}