<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequestList
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeesEstimateRequest: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelFeesEstimateRequestList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FeesEstimateRequest' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequest::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the FeesEstimateRequest property.
     *
     * @return List<FeesEstimateRequest> FeesEstimateRequest.
     */
    public function getFeesEstimateRequest()
    {
        if ($this->_fields['FeesEstimateRequest']['FieldValue'] == null) {
            $this->_fields['FeesEstimateRequest']['FieldValue'] = array();
        }
        return $this->_fields['FeesEstimateRequest']['FieldValue'];
    }
    /**
     * Set the value of the FeesEstimateRequest property.
     *
     * @param array feesEstimateRequest
     * @return $this 
     */
    public function setFeesEstimateRequest($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FeesEstimateRequest']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FeesEstimateRequest.
     */
    public function unsetFeesEstimateRequest()
    {
        $this->_fields['FeesEstimateRequest']['FieldValue'] = array();
    }
    /**
     * Check to see if FeesEstimateRequest is set.
     *
     * @return true if FeesEstimateRequest is set.
     */
    public function isSetFeesEstimateRequest()
    {
        return !empty($this->_fields['FeesEstimateRequest']['FieldValue']);
    }
    /**
     * Add values for FeesEstimateRequest, return this.
     *
     * @param feesEstimateRequest
     *             New values to add.
     *
     * @return $this .
     */
    public function withFeesEstimateRequest()
    {
        foreach (func_get_args() as $FeesEstimateRequest) {
            $this->_fields['FeesEstimateRequest']['FieldValue'][] = $FeesEstimateRequest;
        }
        return $this;
    }
}