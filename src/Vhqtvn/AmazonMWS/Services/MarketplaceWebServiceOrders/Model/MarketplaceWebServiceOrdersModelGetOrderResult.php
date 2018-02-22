<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelGetOrderResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Orders: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrdersModelGetOrderResult extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Orders' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelOrder::class), 'ListMemberName' => 'Order'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Orders property.
     *
     * @return List<Order> Orders.
     */
    public function getOrders()
    {
        if ($this->_fields['Orders']['FieldValue'] == null) {
            $this->_fields['Orders']['FieldValue'] = array();
        }
        return $this->_fields['Orders']['FieldValue'];
    }
    /**
     * Set the value of the Orders property.
     *
     * @param array orders
     * @return $this 
     */
    public function setOrders($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Orders']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Orders.
     */
    public function unsetOrders()
    {
        $this->_fields['Orders']['FieldValue'] = array();
    }
    /**
     * Check to see if Orders is set.
     *
     * @return true if Orders is set.
     */
    public function isSetOrders()
    {
        return !empty($this->_fields['Orders']['FieldValue']);
    }
    /**
     * Add values for Orders, return this.
     *
     * @param orders
     *             New values to add.
     *
     * @return $this .
     */
    public function withOrders()
    {
        foreach (func_get_args() as $Orders) {
            $this->_fields['Orders']['FieldValue'][] = $Orders;
        }
        return $this;
    }
}