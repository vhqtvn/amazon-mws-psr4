<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelServiceFeeEvent
 * 
 * @property	string	$AmazonOrderId
 * @property	string	$FeeReason
 * @property	array	$FeeList
 * @property	string	$SellerSKU
 * @property	string	$FnSKU
 * @property	string	$FeeDescription
 * @property	string	$ASIN
 */
class MwsFinancesServiceModelServiceFeeEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeReason' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'FnSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeDescription' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this 
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }
    /**
     * Get the value of the FeeReason property.
     *
     * @return String FeeReason.
     */
    public function getFeeReason()
    {
        return $this->_fields['FeeReason']['FieldValue'];
    }
    /**
     * Set the value of the FeeReason property.
     *
     * @param string feeReason
     * @return $this 
     */
    public function setFeeReason($value)
    {
        $this->_fields['FeeReason']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeReason is set.
     *
     * @return true if FeeReason is set.
     */
    public function isSetFeeReason()
    {
        return !is_null($this->_fields['FeeReason']['FieldValue']);
    }
    /**
     * Set the value of FeeReason, return this.
     *
     * @param feeReason
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeeReason($value)
    {
        $this->setFeeReason($value);
        return $this;
    }
    /**
     * Get the value of the FeeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] FeeList.
     */
    public function getFeeList()
    {
        if ($this->_fields['FeeList']['FieldValue'] == null) {
            $this->_fields['FeeList']['FieldValue'] = array();
        }
        return $this->_fields['FeeList']['FieldValue'];
    }
    /**
     * Set the value of the FeeList property.
     *
     * @param array feeList
     * @return $this 
     */
    public function setFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FeeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FeeList.
     */
    public function unsetFeeList()
    {
        $this->_fields['FeeList']['FieldValue'] = array();
    }
    /**
     * Check to see if FeeList is set.
     *
     * @return true if FeeList is set.
     */
    public function isSetFeeList()
    {
        return !empty($this->_fields['FeeList']['FieldValue']);
    }
    /**
     * Add values for FeeList, return this.
     *
     * @param feeList
     *             New values to add.
     *
     * @return $this .
     */
    public function withFeeList()
    {
        foreach (func_get_args() as $FeeList) {
            $this->_fields['FeeList']['FieldValue'][] = $FeeList;
        }
        return $this;
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this 
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
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }
    /**
     * Get the value of the FnSKU property.
     *
     * @return String FnSKU.
     */
    public function getFnSKU()
    {
        return $this->_fields['FnSKU']['FieldValue'];
    }
    /**
     * Set the value of the FnSKU property.
     *
     * @param string fnSKU
     * @return $this 
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
     * @param fnSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFnSKU($value)
    {
        $this->setFnSKU($value);
        return $this;
    }
    /**
     * Get the value of the FeeDescription property.
     *
     * @return String FeeDescription.
     */
    public function getFeeDescription()
    {
        return $this->_fields['FeeDescription']['FieldValue'];
    }
    /**
     * Set the value of the FeeDescription property.
     *
     * @param string feeDescription
     * @return $this 
     */
    public function setFeeDescription($value)
    {
        $this->_fields['FeeDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeDescription is set.
     *
     * @return true if FeeDescription is set.
     */
    public function isSetFeeDescription()
    {
        return !is_null($this->_fields['FeeDescription']['FieldValue']);
    }
    /**
     * Set the value of FeeDescription, return this.
     *
     * @param feeDescription
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeeDescription($value)
    {
        $this->setFeeDescription($value);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
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
     * @param asin
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }
}