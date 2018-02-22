<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateResultList
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeesEstimateResult: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelFeesEstimateResultList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FeesEstimateResult' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateResult::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the FeesEstimateResult property.
     *
     * @return List<FeesEstimateResult> FeesEstimateResult.
     */
    public function getFeesEstimateResult()
    {
        if ($this->_fields['FeesEstimateResult']['FieldValue'] == null) {
            $this->_fields['FeesEstimateResult']['FieldValue'] = array();
        }
        return $this->_fields['FeesEstimateResult']['FieldValue'];
    }
    /**
     * Set the value of the FeesEstimateResult property.
     *
     * @param array feesEstimateResult
     * @return $this 
     */
    public function setFeesEstimateResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FeesEstimateResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FeesEstimateResult.
     */
    public function unsetFeesEstimateResult()
    {
        $this->_fields['FeesEstimateResult']['FieldValue'] = array();
    }
    /**
     * Check to see if FeesEstimateResult is set.
     *
     * @return true if FeesEstimateResult is set.
     */
    public function isSetFeesEstimateResult()
    {
        return !empty($this->_fields['FeesEstimateResult']['FieldValue']);
    }
    /**
     * Add values for FeesEstimateResult, return this.
     *
     * @param feesEstimateResult
     *             New values to add.
     *
     * @return $this .
     */
    public function withFeesEstimateResult()
    {
        foreach (func_get_args() as $FeesEstimateResult) {
            $this->_fields['FeesEstimateResult']['FieldValue'][] = $FeesEstimateResult;
        }
        return $this;
    }
}