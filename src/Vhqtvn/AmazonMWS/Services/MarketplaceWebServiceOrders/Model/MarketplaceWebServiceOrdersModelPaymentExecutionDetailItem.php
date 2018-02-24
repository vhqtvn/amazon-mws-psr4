<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPaymentExecutionDetailItem
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$Payment
 * @property	string	$PaymentMethod
 */
class MarketplaceWebServiceOrdersModelPaymentExecutionDetailItem extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Payment' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'PaymentMethod' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Payment property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney Payment.
     */
    public function getPayment()
    {
        return $this->_fields['Payment']['FieldValue'];
    }
    /**
     * Set the value of the Payment property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney payment
     * @return $this 
     */
    public function setPayment($value)
    {
        $this->_fields['Payment']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Payment is set.
     *
     * @return true if Payment is set.
     */
    public function isSetPayment()
    {
        return !is_null($this->_fields['Payment']['FieldValue']);
    }
    /**
     * Set the value of Payment, return this.
     *
     * @param payment
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPayment($value)
    {
        $this->setPayment($value);
        return $this;
    }
    /**
     * Get the value of the PaymentMethod property.
     *
     * @return String PaymentMethod.
     */
    public function getPaymentMethod()
    {
        return $this->_fields['PaymentMethod']['FieldValue'];
    }
    /**
     * Set the value of the PaymentMethod property.
     *
     * @param string paymentMethod
     * @return $this 
     */
    public function setPaymentMethod($value)
    {
        $this->_fields['PaymentMethod']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PaymentMethod is set.
     *
     * @return true if PaymentMethod is set.
     */
    public function isSetPaymentMethod()
    {
        return !is_null($this->_fields['PaymentMethod']['FieldValue']);
    }
    /**
     * Set the value of PaymentMethod, return this.
     *
     * @param paymentMethod
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPaymentMethod($value)
    {
        $this->setPaymentMethod($value);
        return $this;
    }
}