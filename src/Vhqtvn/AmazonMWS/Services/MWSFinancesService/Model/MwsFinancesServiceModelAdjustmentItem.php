<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelAdjustmentItem
 * 
 * @property	string	$Quantity
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$PerUnitAmount
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$TotalAmount
 * @property	string	$SellerSKU
 * @property	string	$FnSKU
 * @property	string	$ProductDescription
 * @property	string	$ASIN
 */
class MwsFinancesServiceModelAdjustmentItem extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Quantity' => array('FieldValue' => null, 'FieldType' => 'string'), 'PerUnitAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'TotalAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'FnSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Quantity property.
     *
     * @return \string Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }
    /**
     * Set the value of the Quantity property.
     *
     * @param string quantity
     * @return $this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param string $Quantity
     * @return $this
     */
    public function withQuantity($Quantity)
    {
        $this->setQuantity($Quantity);
        return $this;
    }
    /**
     * Get the value of the PerUnitAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency PerUnitAmount.
     */
    public function getPerUnitAmount()
    {
        return $this->_fields['PerUnitAmount']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency perUnitAmount
     * @return $this instance
     */
    public function setPerUnitAmount($value)
    {
        $this->_fields['PerUnitAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PerUnitAmount is set.
     *
     * @return true if PerUnitAmount is set.
     */
    public function isSetPerUnitAmount()
    {
        return !is_null($this->_fields['PerUnitAmount']['FieldValue']);
    }
    /**
     * Set the value of PerUnitAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $PerUnitAmount
     * @return $this
     */
    public function withPerUnitAmount($PerUnitAmount)
    {
        $this->setPerUnitAmount($PerUnitAmount);
        return $this;
    }
    /**
     * Get the value of the TotalAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency TotalAmount.
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }
    /**
     * Set the value of the TotalAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency totalAmount
     * @return $this instance
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set.
     */
    public function isSetTotalAmount()
    {
        return !is_null($this->_fields['TotalAmount']['FieldValue']);
    }
    /**
     * Set the value of TotalAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $TotalAmount
     * @return $this
     */
    public function withTotalAmount($TotalAmount)
    {
        $this->setTotalAmount($TotalAmount);
        return $this;
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return \string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param string $SellerSKU
     * @return $this
     */
    public function withSellerSKU($SellerSKU)
    {
        $this->setSellerSKU($SellerSKU);
        return $this;
    }
    /**
     * Get the value of the FnSKU property.
     *
     * @return \string FnSKU.
     */
    public function getFnSKU()
    {
        return $this->_fields['FnSKU']['FieldValue'];
    }
    /**
     * Set the value of the FnSKU property.
     *
     * @param string fnSKU
     * @return $this instance
     */
    public function setFnSKU($value)
    {
        $this->_fields['FnSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FnSKU is set.
     *
     * @return true if FnSKU is set.
     */
    public function isSetFnSKU()
    {
        return !is_null($this->_fields['FnSKU']['FieldValue']);
    }
    /**
     * Set the value of FnSKU, return this.
     *
     * @param string $FnSKU
     * @return $this
     */
    public function withFnSKU($FnSKU)
    {
        $this->setFnSKU($FnSKU);
        return $this;
    }
    /**
     * Get the value of the ProductDescription property.
     *
     * @return \string ProductDescription.
     */
    public function getProductDescription()
    {
        return $this->_fields['ProductDescription']['FieldValue'];
    }
    /**
     * Set the value of the ProductDescription property.
     *
     * @param string productDescription
     * @return $this instance
     */
    public function setProductDescription($value)
    {
        $this->_fields['ProductDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProductDescription is set.
     *
     * @return true if ProductDescription is set.
     */
    public function isSetProductDescription()
    {
        return !is_null($this->_fields['ProductDescription']['FieldValue']);
    }
    /**
     * Set the value of ProductDescription, return this.
     *
     * @param string $ProductDescription
     * @return $this
     */
    public function withProductDescription($ProductDescription)
    {
        $this->setProductDescription($ProductDescription);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return \string ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param string $ASIN
     * @return $this
     */
    public function withASIN($ASIN)
    {
        $this->setASIN($ASIN);
        return $this;
    }
}