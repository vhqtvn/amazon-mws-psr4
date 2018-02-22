<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>NumberOfItems: int</li>
 *
 * </ul>
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
     * @return Integer NumberOfItems.
     */
    public function getNumberOfItems()
    {
        return $this->_fields['NumberOfItems']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfItems property.
     *
     * @param int numberOfItems
     * @return $this 
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
     * @param numberOfItems
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNumberOfItems($value)
    {
        $this->setNumberOfItems($value);
        return $this;
    }
}