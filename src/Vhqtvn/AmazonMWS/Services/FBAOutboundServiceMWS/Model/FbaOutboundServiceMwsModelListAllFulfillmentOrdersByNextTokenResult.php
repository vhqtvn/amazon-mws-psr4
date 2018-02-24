<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelListAllFulfillmentOrdersByNextTokenResult
 * 
 * @property	string	$NextToken
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderList	$FulfillmentOrders
 */
class FbaOutboundServiceMwsModelListAllFulfillmentOrdersByNextTokenResult extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentOrders' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderList::class));
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
     * Get the value of the FulfillmentOrders property.
     *
     * @return FulfillmentOrderList FulfillmentOrders.
     */
    public function getFulfillmentOrders()
    {
        return $this->_fields['FulfillmentOrders']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentOrders property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderList fulfillmentOrders
     * @return $this 
     */
    public function setFulfillmentOrders($value)
    {
        $this->_fields['FulfillmentOrders']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentOrders is set.
     *
     * @return true if FulfillmentOrders is set.
     */
    public function isSetFulfillmentOrders()
    {
        return !is_null($this->_fields['FulfillmentOrders']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentOrders, return this.
     *
     * @param fulfillmentOrders
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentOrders($value)
    {
        $this->setFulfillmentOrders($value);
        return $this;
    }
}