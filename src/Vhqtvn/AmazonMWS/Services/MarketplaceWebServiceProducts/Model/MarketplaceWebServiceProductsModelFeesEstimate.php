<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate
 * 
 * @property	string	$TimeOfFeesEstimation
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$TotalFeesEstimate
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList	$FeeDetailList
 */
class MarketplaceWebServiceProductsModelFeesEstimate extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TimeOfFeesEstimation' => array('FieldValue' => null, 'FieldType' => 'string'), 'TotalFeesEstimate' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'FeeDetailList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the TimeOfFeesEstimation property.
     *
     * @return XMLGregorianCalendar TimeOfFeesEstimation.
     */
    public function getTimeOfFeesEstimation()
    {
        return $this->_fields['TimeOfFeesEstimation']['FieldValue'];
    }
    /**
     * Set the value of the TimeOfFeesEstimation property.
     *
     * @param string timeOfFeesEstimation
     * @return $this 
     */
    public function setTimeOfFeesEstimation($value)
    {
        $this->_fields['TimeOfFeesEstimation']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TimeOfFeesEstimation is set.
     *
     * @return true if TimeOfFeesEstimation is set.
     */
    public function isSetTimeOfFeesEstimation()
    {
        return !is_null($this->_fields['TimeOfFeesEstimation']['FieldValue']);
    }
    /**
     * Set the value of TimeOfFeesEstimation, return this.
     *
     * @param string $TimeOfFeesEstimation
     * @return $this
     */
    public function withTimeOfFeesEstimation($TimeOfFeesEstimation)
    {
        $this->setTimeOfFeesEstimation($TimeOfFeesEstimation);
        return $this;
    }
    /**
     * Get the value of the TotalFeesEstimate property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType TotalFeesEstimate.
     */
    public function getTotalFeesEstimate()
    {
        return $this->_fields['TotalFeesEstimate']['FieldValue'];
    }
    /**
     * Set the value of the TotalFeesEstimate property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType totalFeesEstimate
     * @return $this 
     */
    public function setTotalFeesEstimate($value)
    {
        $this->_fields['TotalFeesEstimate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalFeesEstimate is set.
     *
     * @return true if TotalFeesEstimate is set.
     */
    public function isSetTotalFeesEstimate()
    {
        return !is_null($this->_fields['TotalFeesEstimate']['FieldValue']);
    }
    /**
     * Set the value of TotalFeesEstimate, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $TotalFeesEstimate
     * @return $this
     */
    public function withTotalFeesEstimate($TotalFeesEstimate)
    {
        $this->setTotalFeesEstimate($TotalFeesEstimate);
        return $this;
    }
    /**
     * Get the value of the FeeDetailList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList FeeDetailList.
     */
    public function getFeeDetailList()
    {
        return $this->_fields['FeeDetailList']['FieldValue'];
    }
    /**
     * Set the value of the FeeDetailList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList feeDetailList
     * @return $this 
     */
    public function setFeeDetailList($value)
    {
        $this->_fields['FeeDetailList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeDetailList is set.
     *
     * @return true if FeeDetailList is set.
     */
    public function isSetFeeDetailList()
    {
        return !is_null($this->_fields['FeeDetailList']['FieldValue']);
    }
    /**
     * Set the value of FeeDetailList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList $FeeDetailList
     * @return $this
     */
    public function withFeeDetailList($FeeDetailList)
    {
        $this->setFeeDetailList($FeeDetailList);
        return $this;
    }
}