<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankType
 * 
 * @property	string	$ProductCategoryId
 * @property	int	$Rank
 */
class MarketplaceWebServiceProductsModelSalesRankType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ProductCategoryId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Rank' => array('FieldValue' => null, 'FieldType' => 'int'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ProductCategoryId property.
     *
     * @return \string ProductCategoryId.
     */
    public function getProductCategoryId()
    {
        return $this->_fields['ProductCategoryId']['FieldValue'];
    }
    /**
     * Set the value of the ProductCategoryId property.
     *
     * @param string productCategoryId
     * @return $this instance
     */
    public function setProductCategoryId($value)
    {
        $this->_fields['ProductCategoryId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProductCategoryId is set.
     *
     * @return true if ProductCategoryId is set.
     */
    public function isSetProductCategoryId()
    {
        return !is_null($this->_fields['ProductCategoryId']['FieldValue']);
    }
    /**
     * Set the value of ProductCategoryId, return this.
     *
     * @param string $ProductCategoryId
     * @return $this
     */
    public function withProductCategoryId($ProductCategoryId)
    {
        $this->setProductCategoryId($ProductCategoryId);
        return $this;
    }
    /**
     * Get the value of the Rank property.
     *
     * @return int Rank.
     */
    public function getRank()
    {
        return $this->_fields['Rank']['FieldValue'];
    }
    /**
     * Set the value of the Rank property.
     *
     * @param int rank
     * @return $this instance
     */
    public function setRank($value)
    {
        $this->_fields['Rank']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Rank is set.
     *
     * @return true if Rank is set.
     */
    public function isSetRank()
    {
        return !is_null($this->_fields['Rank']['FieldValue']);
    }
    /**
     * Set the value of Rank, return this.
     *
     * @param int $Rank
     * @return $this
     */
    public function withRank($Rank)
    {
        $this->setRank($Rank);
        return $this;
    }
}