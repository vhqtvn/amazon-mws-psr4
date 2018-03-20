<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail
 * 
 * @property	int	$NumberOfItems
 */
class MarketplaceWebServiceOrdersModelProductInfoDetail extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NumberOfItems' => array('FieldValue' => null, 'FieldType' => 'int'));
        parent::__construct($data);
    }
    /**
     * Get the value of the NumberOfItems property.
     *
     * @return \int NumberOfItems.
     */
    public function getNumberOfItems()
    {
        return $this->_fields['NumberOfItems']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfItems property.
     *
     * @param int numberOfItems
     * @return $this instance
     */
    public function setNumberOfItems($value)
    {
        $this->_fields['NumberOfItems']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfItems is set.
     *
     * @return true if NumberOfItems is set.
     */
    public function isSetNumberOfItems()
    {
        return !is_null($this->_fields['NumberOfItems']['FieldValue']);
    }
    /**
     * Set the value of NumberOfItems, return this.
     *
     * @param int $NumberOfItems
     * @return $this
     */
    public function withNumberOfItems($NumberOfItems)
    {
        $this->setNumberOfItems($NumberOfItems);
        return $this;
    }
}