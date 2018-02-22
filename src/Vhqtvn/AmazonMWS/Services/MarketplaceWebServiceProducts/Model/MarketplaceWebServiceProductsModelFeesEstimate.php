<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate
 * 
 * Properties:
 * <ul>
 * 
 * <li>TimeOfFeesEstimation: string</li>
 * <li>TotalFeesEstimate: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 * <li>FeeDetailList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList</li>
 *
 * </ul>
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
     * @param timeOfFeesEstimation
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTimeOfFeesEstimation($value)
    {
        $this->setTimeOfFeesEstimation($value);
        return $this;
    }
    /**
     * Get the value of the TotalFeesEstimate property.
     *
     * @return MoneyType TotalFeesEstimate.
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
     * @param totalFeesEstimate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTotalFeesEstimate($value)
    {
        $this->setTotalFeesEstimate($value);
        return $this;
    }
    /**
     * Get the value of the FeeDetailList property.
     *
     * @return FeeDetailList FeeDetailList.
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
     * @param feeDetailList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeeDetailList($value)
    {
        $this->setFeeDetailList($value);
        return $this;
    }
}