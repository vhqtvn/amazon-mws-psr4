<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrderItemsByNextTokenResult
 * 
 * @property	string	$NextToken
 * @property	string	$AmazonOrderId
 * @property	array	$OrderItems
 */
class MarketplaceWebServiceOrdersModelListOrderItemsByNextTokenResult extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderItems' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelOrderItem::class), 'ListMemberName' => 'OrderItem'));
        parent::__construct($data);
    }
    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this 
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }
    /**
     * Get the value of the OrderItems property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelOrderItem[] OrderItems.
     */
    public function getOrderItems()
    {
        if ($this->_fields['OrderItems']['FieldValue'] == null) {
            $this->_fields['OrderItems']['FieldValue'] = array();
        }
        return $this->_fields['OrderItems']['FieldValue'];
    }
    /**
     * Set the value of the OrderItems property.
     *
     * @param array orderItems
     * @return $this 
     */
    public function setOrderItems($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderItems']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OrderItems.
     */
    public function unsetOrderItems()
    {
        $this->_fields['OrderItems']['FieldValue'] = array();
    }
    /**
     * Check to see if OrderItems is set.
     *
     * @return true if OrderItems is set.
     */
    public function isSetOrderItems()
    {
        return !empty($this->_fields['OrderItems']['FieldValue']);
    }
    /**
     * Add values for OrderItems, return this.
     *
     * @param orderItems
     *             New values to add.
     *
     * @return $this .
     */
    public function withOrderItems()
    {
        foreach (func_get_args() as $OrderItems) {
            $this->_fields['OrderItems']['FieldValue'][] = $OrderItems;
        }
        return $this;
    }
}