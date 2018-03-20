<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankType[]	$SalesRank
 */
class MarketplaceWebServiceProductsModelSalesRankList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SalesRank' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the SalesRank property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankType[] SalesRank.
     */
    public function getSalesRank()
    {
        if ($this->_fields['SalesRank']['FieldValue'] == null) {
            $this->_fields['SalesRank']['FieldValue'] = array();
        }
        return $this->_fields['SalesRank']['FieldValue'];
    }
    /**
     * Set the value of the SalesRank property.
     *
     * @param array salesRank
     * @return $this instance
     */
    public function setSalesRank($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SalesRank']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SalesRank.
     */
    public function unsetSalesRank()
    {
        $this->_fields['SalesRank']['FieldValue'] = array();
    }
    /**
     * Check to see if SalesRank is set.
     *
     * @return true if SalesRank is set.
     */
    public function isSetSalesRank()
    {
        return !empty($this->_fields['SalesRank']['FieldValue']);
    }
    /**
     * Add values for SalesRank, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankType[] $SalesRank_array,...
     * @return $this
     */
    public function withSalesRank(...$SalesRank_array)
    {
        foreach ($SalesRank_array as $SalesRank) {
            $this->_fields['SalesRank']['FieldValue'][] = $SalesRank;
        }
        return $this;
    }
}