<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimateResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateResultList	$FeesEstimateResultList
 */
class MarketplaceWebServiceProductsModelGetMyFeesEstimateResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FeesEstimateResultList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateResultList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the FeesEstimateResultList property.
     *
     * @return FeesEstimateResultList FeesEstimateResultList.
     */
    public function getFeesEstimateResultList()
    {
        return $this->_fields['FeesEstimateResultList']['FieldValue'];
    }
    /**
     * Set the value of the FeesEstimateResultList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateResultList feesEstimateResultList
     * @return $this 
     */
    public function setFeesEstimateResultList($value)
    {
        $this->_fields['FeesEstimateResultList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeesEstimateResultList is set.
     *
     * @return true if FeesEstimateResultList is set.
     */
    public function isSetFeesEstimateResultList()
    {
        return !is_null($this->_fields['FeesEstimateResultList']['FieldValue']);
    }
    /**
     * Set the value of FeesEstimateResultList, return this.
     *
     * @param feesEstimateResultList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeesEstimateResultList($value)
    {
        $this->setFeesEstimateResultList($value);
        return $this;
    }
}