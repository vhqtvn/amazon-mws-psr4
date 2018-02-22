<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>Orders: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrdersModelListOrdersResult extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'), 'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'), 'Orders' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelOrder::class), 'ListMemberName' => 'Order'));
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
     * Get the value of the CreatedBefore property.
     *
     * @return XMLGregorianCalendar CreatedBefore.
     */
    public function getCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }
    /**
     * Set the value of the CreatedBefore property.
     *
     * @param string createdBefore
     * @return $this 
     */
    public function setCreatedBefore($value)
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CreatedBefore is set.
     *
     * @return true if CreatedBefore is set.
     */
    public function isSetCreatedBefore()
    {
        return !is_null($this->_fields['CreatedBefore']['FieldValue']);
    }
    /**
     * Set the value of CreatedBefore, return this.
     *
     * @param createdBefore
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);
        return $this;
    }
    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return XMLGregorianCalendar LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string lastUpdatedBefore
     * @return $this 
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return true if LastUpdatedBefore is set.
     */
    public function isSetLastUpdatedBefore()
    {
        return !is_null($this->_fields['LastUpdatedBefore']['FieldValue']);
    }
    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param lastUpdatedBefore
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLastUpdatedBefore($value)
    {
        $this->setLastUpdatedBefore($value);
        return $this;
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