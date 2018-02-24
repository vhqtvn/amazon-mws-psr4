<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelOrder
 * 
 * @property	string	$AmazonOrderId
 * @property	string	$SellerOrderId
 * @property	string	$PurchaseDate
 * @property	string	$LastUpdateDate
 * @property	string	$OrderStatus
 * @property	string	$FulfillmentChannel
 * @property	string	$SalesChannel
 * @property	string	$OrderChannel
 * @property	string	$ShipServiceLevel
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress	$ShippingAddress
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$OrderTotal
 * @property	int	$NumberOfItemsShipped
 * @property	int	$NumberOfItemsUnshipped
 * @property	array	$PaymentExecutionDetail
 * @property	string	$PaymentMethod
 * @property	array	$PaymentMethodDetails
 * @property	string	$MarketplaceId
 * @property	string	$BuyerEmail
 * @property	string	$BuyerName
 * @property	string	$BuyerCounty
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo	$BuyerTaxInfo
 * @property	string	$ShipmentServiceLevelCategory
 * @property	bool	$ShippedByAmazonTFM
 * @property	string	$TFMShipmentStatus
 * @property	string	$CbaDisplayableShippingLabel
 * @property	string	$OrderType
 * @property	string	$EarliestShipDate
 * @property	string	$LatestShipDate
 * @property	string	$EarliestDeliveryDate
 * @property	string	$LatestDeliveryDate
 * @property	bool	$IsBusinessOrder
 * @property	string	$PurchaseOrderNumber
 * @property	bool	$IsPrime
 * @property	bool	$IsPremiumOrder
 * @property	string	$ReplacedOrderId
 * @property	bool	$IsReplacementOrder
 */
class MarketplaceWebServiceOrdersModelOrder extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PurchaseDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'LastUpdateDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'SalesChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipServiceLevel' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress::class), 'OrderTotal' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'NumberOfItemsShipped' => array('FieldValue' => null, 'FieldType' => 'int'), 'NumberOfItemsUnshipped' => array('FieldValue' => null, 'FieldType' => 'int'), 'PaymentExecutionDetail' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPaymentExecutionDetailItem::class), 'ListMemberName' => 'PaymentExecutionDetailItem'), 'PaymentMethod' => array('FieldValue' => null, 'FieldType' => 'string'), 'PaymentMethodDetails' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'PaymentMethodDetail'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'BuyerEmail' => array('FieldValue' => null, 'FieldType' => 'string'), 'BuyerName' => array('FieldValue' => null, 'FieldType' => 'string'), 'BuyerCounty' => array('FieldValue' => null, 'FieldType' => 'string'), 'BuyerTaxInfo' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo::class), 'ShipmentServiceLevelCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippedByAmazonTFM' => array('FieldValue' => null, 'FieldType' => 'bool'), 'TFMShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'CbaDisplayableShippingLabel' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderType' => array('FieldValue' => null, 'FieldType' => 'string'), 'EarliestShipDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'LatestShipDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'EarliestDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'LatestDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsBusinessOrder' => array('FieldValue' => null, 'FieldType' => 'bool'), 'PurchaseOrderNumber' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsPrime' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IsPremiumOrder' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ReplacedOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsReplacementOrder' => array('FieldValue' => null, 'FieldType' => 'bool'));
        parent::__construct($data);
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
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this 
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
        return !is_null($this->_fields['SellerOrderId']['FieldValue']);
    }
    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }
    /**
     * Get the value of the PurchaseDate property.
     *
     * @return XMLGregorianCalendar PurchaseDate.
     */
    public function getPurchaseDate()
    {
        return $this->_fields['PurchaseDate']['FieldValue'];
    }
    /**
     * Set the value of the PurchaseDate property.
     *
     * @param string purchaseDate
     * @return $this 
     */
    public function setPurchaseDate($value)
    {
        $this->_fields['PurchaseDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PurchaseDate is set.
     *
     * @return true if PurchaseDate is set.
     */
    public function isSetPurchaseDate()
    {
        return !is_null($this->_fields['PurchaseDate']['FieldValue']);
    }
    /**
     * Set the value of PurchaseDate, return this.
     *
     * @param purchaseDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPurchaseDate($value)
    {
        $this->setPurchaseDate($value);
        return $this;
    }
    /**
     * Get the value of the LastUpdateDate property.
     *
     * @return XMLGregorianCalendar LastUpdateDate.
     */
    public function getLastUpdateDate()
    {
        return $this->_fields['LastUpdateDate']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdateDate property.
     *
     * @param string lastUpdateDate
     * @return $this 
     */
    public function setLastUpdateDate($value)
    {
        $this->_fields['LastUpdateDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdateDate is set.
     *
     * @return true if LastUpdateDate is set.
     */
    public function isSetLastUpdateDate()
    {
        return !is_null($this->_fields['LastUpdateDate']['FieldValue']);
    }
    /**
     * Set the value of LastUpdateDate, return this.
     *
     * @param lastUpdateDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLastUpdateDate($value)
    {
        $this->setLastUpdateDate($value);
        return $this;
    }
    /**
     * Get the value of the OrderStatus property.
     *
     * @return String OrderStatus.
     */
    public function getOrderStatus()
    {
        return $this->_fields['OrderStatus']['FieldValue'];
    }
    /**
     * Set the value of the OrderStatus property.
     *
     * @param string orderStatus
     * @return $this 
     */
    public function setOrderStatus($value)
    {
        $this->_fields['OrderStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderStatus is set.
     *
     * @return true if OrderStatus is set.
     */
    public function isSetOrderStatus()
    {
        return !is_null($this->_fields['OrderStatus']['FieldValue']);
    }
    /**
     * Set the value of OrderStatus, return this.
     *
     * @param orderStatus
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOrderStatus($value)
    {
        $this->setOrderStatus($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return String FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this 
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
        return $this;
    }
    /**
     * Get the value of the SalesChannel property.
     *
     * @return String SalesChannel.
     */
    public function getSalesChannel()
    {
        return $this->_fields['SalesChannel']['FieldValue'];
    }
    /**
     * Set the value of the SalesChannel property.
     *
     * @param string salesChannel
     * @return $this 
     */
    public function setSalesChannel($value)
    {
        $this->_fields['SalesChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesChannel is set.
     *
     * @return true if SalesChannel is set.
     */
    public function isSetSalesChannel()
    {
        return !is_null($this->_fields['SalesChannel']['FieldValue']);
    }
    /**
     * Set the value of SalesChannel, return this.
     *
     * @param salesChannel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSalesChannel($value)
    {
        $this->setSalesChannel($value);
        return $this;
    }
    /**
     * Get the value of the OrderChannel property.
     *
     * @return String OrderChannel.
     */
    public function getOrderChannel()
    {
        return $this->_fields['OrderChannel']['FieldValue'];
    }
    /**
     * Set the value of the OrderChannel property.
     *
     * @param string orderChannel
     * @return $this 
     */
    public function setOrderChannel($value)
    {
        $this->_fields['OrderChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderChannel is set.
     *
     * @return true if OrderChannel is set.
     */
    public function isSetOrderChannel()
    {
        return !is_null($this->_fields['OrderChannel']['FieldValue']);
    }
    /**
     * Set the value of OrderChannel, return this.
     *
     * @param orderChannel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOrderChannel($value)
    {
        $this->setOrderChannel($value);
        return $this;
    }
    /**
     * Get the value of the ShipServiceLevel property.
     *
     * @return String ShipServiceLevel.
     */
    public function getShipServiceLevel()
    {
        return $this->_fields['ShipServiceLevel']['FieldValue'];
    }
    /**
     * Set the value of the ShipServiceLevel property.
     *
     * @param string shipServiceLevel
     * @return $this 
     */
    public function setShipServiceLevel($value)
    {
        $this->_fields['ShipServiceLevel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipServiceLevel is set.
     *
     * @return true if ShipServiceLevel is set.
     */
    public function isSetShipServiceLevel()
    {
        return !is_null($this->_fields['ShipServiceLevel']['FieldValue']);
    }
    /**
     * Set the value of ShipServiceLevel, return this.
     *
     * @param shipServiceLevel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipServiceLevel($value)
    {
        $this->setShipServiceLevel($value);
        return $this;
    }
    /**
     * Get the value of the ShippingAddress property.
     *
     * @return Address ShippingAddress.
     */
    public function getShippingAddress()
    {
        return $this->_fields['ShippingAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShippingAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress shippingAddress
     * @return $this 
     */
    public function setShippingAddress($value)
    {
        $this->_fields['ShippingAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingAddress is set.
     *
     * @return true if ShippingAddress is set.
     */
    public function isSetShippingAddress()
    {
        return !is_null($this->_fields['ShippingAddress']['FieldValue']);
    }
    /**
     * Set the value of ShippingAddress, return this.
     *
     * @param shippingAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShippingAddress($value)
    {
        $this->setShippingAddress($value);
        return $this;
    }
    /**
     * Get the value of the OrderTotal property.
     *
     * @return Money OrderTotal.
     */
    public function getOrderTotal()
    {
        return $this->_fields['OrderTotal']['FieldValue'];
    }
    /**
     * Set the value of the OrderTotal property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney orderTotal
     * @return $this 
     */
    public function setOrderTotal($value)
    {
        $this->_fields['OrderTotal']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderTotal is set.
     *
     * @return true if OrderTotal is set.
     */
    public function isSetOrderTotal()
    {
        return !is_null($this->_fields['OrderTotal']['FieldValue']);
    }
    /**
     * Set the value of OrderTotal, return this.
     *
     * @param orderTotal
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOrderTotal($value)
    {
        $this->setOrderTotal($value);
        return $this;
    }
    /**
     * Get the value of the NumberOfItemsShipped property.
     *
     * @return Integer NumberOfItemsShipped.
     */
    public function getNumberOfItemsShipped()
    {
        return $this->_fields['NumberOfItemsShipped']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfItemsShipped property.
     *
     * @param int numberOfItemsShipped
     * @return $this 
     */
    public function setNumberOfItemsShipped($value)
    {
        $this->_fields['NumberOfItemsShipped']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfItemsShipped is set.
     *
     * @return true if NumberOfItemsShipped is set.
     */
    public function isSetNumberOfItemsShipped()
    {
        return !is_null($this->_fields['NumberOfItemsShipped']['FieldValue']);
    }
    /**
     * Set the value of NumberOfItemsShipped, return this.
     *
     * @param numberOfItemsShipped
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNumberOfItemsShipped($value)
    {
        $this->setNumberOfItemsShipped($value);
        return $this;
    }
    /**
     * Get the value of the NumberOfItemsUnshipped property.
     *
     * @return Integer NumberOfItemsUnshipped.
     */
    public function getNumberOfItemsUnshipped()
    {
        return $this->_fields['NumberOfItemsUnshipped']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfItemsUnshipped property.
     *
     * @param int numberOfItemsUnshipped
     * @return $this 
     */
    public function setNumberOfItemsUnshipped($value)
    {
        $this->_fields['NumberOfItemsUnshipped']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfItemsUnshipped is set.
     *
     * @return true if NumberOfItemsUnshipped is set.
     */
    public function isSetNumberOfItemsUnshipped()
    {
        return !is_null($this->_fields['NumberOfItemsUnshipped']['FieldValue']);
    }
    /**
     * Set the value of NumberOfItemsUnshipped, return this.
     *
     * @param numberOfItemsUnshipped
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNumberOfItemsUnshipped($value)
    {
        $this->setNumberOfItemsUnshipped($value);
        return $this;
    }
    /**
     * Get the value of the PaymentExecutionDetail property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPaymentExecutionDetailItem[] PaymentExecutionDetail.
     */
    public function getPaymentExecutionDetail()
    {
        if ($this->_fields['PaymentExecutionDetail']['FieldValue'] == null) {
            $this->_fields['PaymentExecutionDetail']['FieldValue'] = array();
        }
        return $this->_fields['PaymentExecutionDetail']['FieldValue'];
    }
    /**
     * Set the value of the PaymentExecutionDetail property.
     *
     * @param array paymentExecutionDetail
     * @return $this 
     */
    public function setPaymentExecutionDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PaymentExecutionDetail.
     */
    public function unsetPaymentExecutionDetail()
    {
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = array();
    }
    /**
     * Check to see if PaymentExecutionDetail is set.
     *
     * @return true if PaymentExecutionDetail is set.
     */
    public function isSetPaymentExecutionDetail()
    {
        return !empty($this->_fields['PaymentExecutionDetail']['FieldValue']);
    }
    /**
     * Add values for PaymentExecutionDetail, return this.
     *
     * @param paymentExecutionDetail
     *             New values to add.
     *
     * @return $this .
     */
    public function withPaymentExecutionDetail()
    {
        foreach (func_get_args() as $PaymentExecutionDetail) {
            $this->_fields['PaymentExecutionDetail']['FieldValue'][] = $PaymentExecutionDetail;
        }
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
    /**
     * Get the value of the PaymentMethodDetails property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] PaymentMethodDetails.
     */
    public function getPaymentMethodDetails()
    {
        if ($this->_fields['PaymentMethodDetails']['FieldValue'] == null) {
            $this->_fields['PaymentMethodDetails']['FieldValue'] = array();
        }
        return $this->_fields['PaymentMethodDetails']['FieldValue'];
    }
    /**
     * Set the value of the PaymentMethodDetails property.
     *
     * @param array paymentMethodDetails
     * @return $this 
     */
    public function setPaymentMethodDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PaymentMethodDetails']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PaymentMethodDetails.
     */
    public function unsetPaymentMethodDetails()
    {
        $this->_fields['PaymentMethodDetails']['FieldValue'] = array();
    }
    /**
     * Check to see if PaymentMethodDetails is set.
     *
     * @return true if PaymentMethodDetails is set.
     */
    public function isSetPaymentMethodDetails()
    {
        return !empty($this->_fields['PaymentMethodDetails']['FieldValue']);
    }
    /**
     * Add values for PaymentMethodDetails, return this.
     *
     * @param paymentMethodDetails
     *             New values to add.
     *
     * @return $this .
     */
    public function withPaymentMethodDetails()
    {
        foreach (func_get_args() as $PaymentMethodDetails) {
            $this->_fields['PaymentMethodDetails']['FieldValue'][] = $PaymentMethodDetails;
        }
        return $this;
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }
    /**
     * Get the value of the BuyerEmail property.
     *
     * @return String BuyerEmail.
     */
    public function getBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'];
    }
    /**
     * Set the value of the BuyerEmail property.
     *
     * @param string buyerEmail
     * @return $this 
     */
    public function setBuyerEmail($value)
    {
        $this->_fields['BuyerEmail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerEmail is set.
     *
     * @return true if BuyerEmail is set.
     */
    public function isSetBuyerEmail()
    {
        return !is_null($this->_fields['BuyerEmail']['FieldValue']);
    }
    /**
     * Set the value of BuyerEmail, return this.
     *
     * @param buyerEmail
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyerEmail($value)
    {
        $this->setBuyerEmail($value);
        return $this;
    }
    /**
     * Get the value of the BuyerName property.
     *
     * @return String BuyerName.
     */
    public function getBuyerName()
    {
        return $this->_fields['BuyerName']['FieldValue'];
    }
    /**
     * Set the value of the BuyerName property.
     *
     * @param string buyerName
     * @return $this 
     */
    public function setBuyerName($value)
    {
        $this->_fields['BuyerName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerName is set.
     *
     * @return true if BuyerName is set.
     */
    public function isSetBuyerName()
    {
        return !is_null($this->_fields['BuyerName']['FieldValue']);
    }
    /**
     * Set the value of BuyerName, return this.
     *
     * @param buyerName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyerName($value)
    {
        $this->setBuyerName($value);
        return $this;
    }
    /**
     * Get the value of the BuyerCounty property.
     *
     * @return String BuyerCounty.
     */
    public function getBuyerCounty()
    {
        return $this->_fields['BuyerCounty']['FieldValue'];
    }
    /**
     * Set the value of the BuyerCounty property.
     *
     * @param string buyerCounty
     * @return $this 
     */
    public function setBuyerCounty($value)
    {
        $this->_fields['BuyerCounty']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerCounty is set.
     *
     * @return true if BuyerCounty is set.
     */
    public function isSetBuyerCounty()
    {
        return !is_null($this->_fields['BuyerCounty']['FieldValue']);
    }
    /**
     * Set the value of BuyerCounty, return this.
     *
     * @param buyerCounty
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyerCounty($value)
    {
        $this->setBuyerCounty($value);
        return $this;
    }
    /**
     * Get the value of the BuyerTaxInfo property.
     *
     * @return BuyerTaxInfo BuyerTaxInfo.
     */
    public function getBuyerTaxInfo()
    {
        return $this->_fields['BuyerTaxInfo']['FieldValue'];
    }
    /**
     * Set the value of the BuyerTaxInfo property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo buyerTaxInfo
     * @return $this 
     */
    public function setBuyerTaxInfo($value)
    {
        $this->_fields['BuyerTaxInfo']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerTaxInfo is set.
     *
     * @return true if BuyerTaxInfo is set.
     */
    public function isSetBuyerTaxInfo()
    {
        return !is_null($this->_fields['BuyerTaxInfo']['FieldValue']);
    }
    /**
     * Set the value of BuyerTaxInfo, return this.
     *
     * @param buyerTaxInfo
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyerTaxInfo($value)
    {
        $this->setBuyerTaxInfo($value);
        return $this;
    }
    /**
     * Get the value of the ShipmentServiceLevelCategory property.
     *
     * @return String ShipmentServiceLevelCategory.
     */
    public function getShipmentServiceLevelCategory()
    {
        return $this->_fields['ShipmentServiceLevelCategory']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentServiceLevelCategory property.
     *
     * @param string shipmentServiceLevelCategory
     * @return $this 
     */
    public function setShipmentServiceLevelCategory($value)
    {
        $this->_fields['ShipmentServiceLevelCategory']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentServiceLevelCategory is set.
     *
     * @return true if ShipmentServiceLevelCategory is set.
     */
    public function isSetShipmentServiceLevelCategory()
    {
        return !is_null($this->_fields['ShipmentServiceLevelCategory']['FieldValue']);
    }
    /**
     * Set the value of ShipmentServiceLevelCategory, return this.
     *
     * @param shipmentServiceLevelCategory
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentServiceLevelCategory($value)
    {
        $this->setShipmentServiceLevelCategory($value);
        return $this;
    }
    /**
     * Check the value of ShippedByAmazonTFM.
     *
     * @return true if ShippedByAmazonTFM is set to true.
     */
    public function isShippedByAmazonTFM()
    {
        return !is_null($this->_fields['ShippedByAmazonTFM']['FieldValue']) && $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }
    /**
     * Get the value of the ShippedByAmazonTFM property.
     *
     * @return Boolean ShippedByAmazonTFM.
     */
    public function getShippedByAmazonTFM()
    {
        return $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }
    /**
     * Set the value of the ShippedByAmazonTFM property.
     *
     * @param bool shippedByAmazonTFM
     * @return $this 
     */
    public function setShippedByAmazonTFM($value)
    {
        $this->_fields['ShippedByAmazonTFM']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippedByAmazonTFM is set.
     *
     * @return true if ShippedByAmazonTFM is set.
     */
    public function isSetShippedByAmazonTFM()
    {
        return !is_null($this->_fields['ShippedByAmazonTFM']['FieldValue']);
    }
    /**
     * Set the value of ShippedByAmazonTFM, return this.
     *
     * @param shippedByAmazonTFM
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShippedByAmazonTFM($value)
    {
        $this->setShippedByAmazonTFM($value);
        return $this;
    }
    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return String TFMShipmentStatus.
     */
    public function getTFMShipmentStatus()
    {
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }
    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param string tfmShipmentStatus
     * @return $this 
     */
    public function setTFMShipmentStatus($value)
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return true if TFMShipmentStatus is set.
     */
    public function isSetTFMShipmentStatus()
    {
        return !is_null($this->_fields['TFMShipmentStatus']['FieldValue']);
    }
    /**
     * Set the value of TFMShipmentStatus, return this.
     *
     * @param tfmShipmentStatus
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTFMShipmentStatus($value)
    {
        $this->setTFMShipmentStatus($value);
        return $this;
    }
    /**
     * Get the value of the CbaDisplayableShippingLabel property.
     *
     * @return String CbaDisplayableShippingLabel.
     */
    public function getCbaDisplayableShippingLabel()
    {
        return $this->_fields['CbaDisplayableShippingLabel']['FieldValue'];
    }
    /**
     * Set the value of the CbaDisplayableShippingLabel property.
     *
     * @param string cbaDisplayableShippingLabel
     * @return $this 
     */
    public function setCbaDisplayableShippingLabel($value)
    {
        $this->_fields['CbaDisplayableShippingLabel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CbaDisplayableShippingLabel is set.
     *
     * @return true if CbaDisplayableShippingLabel is set.
     */
    public function isSetCbaDisplayableShippingLabel()
    {
        return !is_null($this->_fields['CbaDisplayableShippingLabel']['FieldValue']);
    }
    /**
     * Set the value of CbaDisplayableShippingLabel, return this.
     *
     * @param cbaDisplayableShippingLabel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCbaDisplayableShippingLabel($value)
    {
        $this->setCbaDisplayableShippingLabel($value);
        return $this;
    }
    /**
     * Get the value of the OrderType property.
     *
     * @return String OrderType.
     */
    public function getOrderType()
    {
        return $this->_fields['OrderType']['FieldValue'];
    }
    /**
     * Set the value of the OrderType property.
     *
     * @param string orderType
     * @return $this 
     */
    public function setOrderType($value)
    {
        $this->_fields['OrderType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderType is set.
     *
     * @return true if OrderType is set.
     */
    public function isSetOrderType()
    {
        return !is_null($this->_fields['OrderType']['FieldValue']);
    }
    /**
     * Set the value of OrderType, return this.
     *
     * @param orderType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOrderType($value)
    {
        $this->setOrderType($value);
        return $this;
    }
    /**
     * Get the value of the EarliestShipDate property.
     *
     * @return XMLGregorianCalendar EarliestShipDate.
     */
    public function getEarliestShipDate()
    {
        return $this->_fields['EarliestShipDate']['FieldValue'];
    }
    /**
     * Set the value of the EarliestShipDate property.
     *
     * @param string earliestShipDate
     * @return $this 
     */
    public function setEarliestShipDate($value)
    {
        $this->_fields['EarliestShipDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EarliestShipDate is set.
     *
     * @return true if EarliestShipDate is set.
     */
    public function isSetEarliestShipDate()
    {
        return !is_null($this->_fields['EarliestShipDate']['FieldValue']);
    }
    /**
     * Set the value of EarliestShipDate, return this.
     *
     * @param earliestShipDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withEarliestShipDate($value)
    {
        $this->setEarliestShipDate($value);
        return $this;
    }
    /**
     * Get the value of the LatestShipDate property.
     *
     * @return XMLGregorianCalendar LatestShipDate.
     */
    public function getLatestShipDate()
    {
        return $this->_fields['LatestShipDate']['FieldValue'];
    }
    /**
     * Set the value of the LatestShipDate property.
     *
     * @param string latestShipDate
     * @return $this 
     */
    public function setLatestShipDate($value)
    {
        $this->_fields['LatestShipDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LatestShipDate is set.
     *
     * @return true if LatestShipDate is set.
     */
    public function isSetLatestShipDate()
    {
        return !is_null($this->_fields['LatestShipDate']['FieldValue']);
    }
    /**
     * Set the value of LatestShipDate, return this.
     *
     * @param latestShipDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLatestShipDate($value)
    {
        $this->setLatestShipDate($value);
        return $this;
    }
    /**
     * Get the value of the EarliestDeliveryDate property.
     *
     * @return XMLGregorianCalendar EarliestDeliveryDate.
     */
    public function getEarliestDeliveryDate()
    {
        return $this->_fields['EarliestDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the EarliestDeliveryDate property.
     *
     * @param string earliestDeliveryDate
     * @return $this 
     */
    public function setEarliestDeliveryDate($value)
    {
        $this->_fields['EarliestDeliveryDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EarliestDeliveryDate is set.
     *
     * @return true if EarliestDeliveryDate is set.
     */
    public function isSetEarliestDeliveryDate()
    {
        return !is_null($this->_fields['EarliestDeliveryDate']['FieldValue']);
    }
    /**
     * Set the value of EarliestDeliveryDate, return this.
     *
     * @param earliestDeliveryDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withEarliestDeliveryDate($value)
    {
        $this->setEarliestDeliveryDate($value);
        return $this;
    }
    /**
     * Get the value of the LatestDeliveryDate property.
     *
     * @return XMLGregorianCalendar LatestDeliveryDate.
     */
    public function getLatestDeliveryDate()
    {
        return $this->_fields['LatestDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the LatestDeliveryDate property.
     *
     * @param string latestDeliveryDate
     * @return $this 
     */
    public function setLatestDeliveryDate($value)
    {
        $this->_fields['LatestDeliveryDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LatestDeliveryDate is set.
     *
     * @return true if LatestDeliveryDate is set.
     */
    public function isSetLatestDeliveryDate()
    {
        return !is_null($this->_fields['LatestDeliveryDate']['FieldValue']);
    }
    /**
     * Set the value of LatestDeliveryDate, return this.
     *
     * @param latestDeliveryDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLatestDeliveryDate($value)
    {
        $this->setLatestDeliveryDate($value);
        return $this;
    }
    /**
     * Check the value of IsBusinessOrder.
     *
     * @return true if IsBusinessOrder is set to true.
     */
    public function isIsBusinessOrder()
    {
        return !is_null($this->_fields['IsBusinessOrder']['FieldValue']) && $this->_fields['IsBusinessOrder']['FieldValue'];
    }
    /**
     * Get the value of the IsBusinessOrder property.
     *
     * @return Boolean IsBusinessOrder.
     */
    public function getIsBusinessOrder()
    {
        return $this->_fields['IsBusinessOrder']['FieldValue'];
    }
    /**
     * Set the value of the IsBusinessOrder property.
     *
     * @param bool isBusinessOrder
     * @return $this 
     */
    public function setIsBusinessOrder($value)
    {
        $this->_fields['IsBusinessOrder']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsBusinessOrder is set.
     *
     * @return true if IsBusinessOrder is set.
     */
    public function isSetIsBusinessOrder()
    {
        return !is_null($this->_fields['IsBusinessOrder']['FieldValue']);
    }
    /**
     * Set the value of IsBusinessOrder, return this.
     *
     * @param isBusinessOrder
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsBusinessOrder($value)
    {
        $this->setIsBusinessOrder($value);
        return $this;
    }
    /**
     * Get the value of the PurchaseOrderNumber property.
     *
     * @return String PurchaseOrderNumber.
     */
    public function getPurchaseOrderNumber()
    {
        return $this->_fields['PurchaseOrderNumber']['FieldValue'];
    }
    /**
     * Set the value of the PurchaseOrderNumber property.
     *
     * @param string purchaseOrderNumber
     * @return $this 
     */
    public function setPurchaseOrderNumber($value)
    {
        $this->_fields['PurchaseOrderNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PurchaseOrderNumber is set.
     *
     * @return true if PurchaseOrderNumber is set.
     */
    public function isSetPurchaseOrderNumber()
    {
        return !is_null($this->_fields['PurchaseOrderNumber']['FieldValue']);
    }
    /**
     * Set the value of PurchaseOrderNumber, return this.
     *
     * @param purchaseOrderNumber
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPurchaseOrderNumber($value)
    {
        $this->setPurchaseOrderNumber($value);
        return $this;
    }
    /**
     * Check the value of IsPrime.
     *
     * @return true if IsPrime is set to true.
     */
    public function isIsPrime()
    {
        return !is_null($this->_fields['IsPrime']['FieldValue']) && $this->_fields['IsPrime']['FieldValue'];
    }
    /**
     * Get the value of the IsPrime property.
     *
     * @return Boolean IsPrime.
     */
    public function getIsPrime()
    {
        return $this->_fields['IsPrime']['FieldValue'];
    }
    /**
     * Set the value of the IsPrime property.
     *
     * @param bool isPrime
     * @return $this 
     */
    public function setIsPrime($value)
    {
        $this->_fields['IsPrime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsPrime is set.
     *
     * @return true if IsPrime is set.
     */
    public function isSetIsPrime()
    {
        return !is_null($this->_fields['IsPrime']['FieldValue']);
    }
    /**
     * Set the value of IsPrime, return this.
     *
     * @param isPrime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsPrime($value)
    {
        $this->setIsPrime($value);
        return $this;
    }
    /**
     * Check the value of IsPremiumOrder.
     *
     * @return true if IsPremiumOrder is set to true.
     */
    public function isIsPremiumOrder()
    {
        return !is_null($this->_fields['IsPremiumOrder']['FieldValue']) && $this->_fields['IsPremiumOrder']['FieldValue'];
    }
    /**
     * Get the value of the IsPremiumOrder property.
     *
     * @return Boolean IsPremiumOrder.
     */
    public function getIsPremiumOrder()
    {
        return $this->_fields['IsPremiumOrder']['FieldValue'];
    }
    /**
     * Set the value of the IsPremiumOrder property.
     *
     * @param bool isPremiumOrder
     * @return $this 
     */
    public function setIsPremiumOrder($value)
    {
        $this->_fields['IsPremiumOrder']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsPremiumOrder is set.
     *
     * @return true if IsPremiumOrder is set.
     */
    public function isSetIsPremiumOrder()
    {
        return !is_null($this->_fields['IsPremiumOrder']['FieldValue']);
    }
    /**
     * Set the value of IsPremiumOrder, return this.
     *
     * @param isPremiumOrder
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsPremiumOrder($value)
    {
        $this->setIsPremiumOrder($value);
        return $this;
    }
    /**
     * Get the value of the ReplacedOrderId property.
     *
     * @return String ReplacedOrderId.
     */
    public function getReplacedOrderId()
    {
        return $this->_fields['ReplacedOrderId']['FieldValue'];
    }
    /**
     * Set the value of the ReplacedOrderId property.
     *
     * @param string replacedOrderId
     * @return $this 
     */
    public function setReplacedOrderId($value)
    {
        $this->_fields['ReplacedOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReplacedOrderId is set.
     *
     * @return true if ReplacedOrderId is set.
     */
    public function isSetReplacedOrderId()
    {
        return !is_null($this->_fields['ReplacedOrderId']['FieldValue']);
    }
    /**
     * Set the value of ReplacedOrderId, return this.
     *
     * @param replacedOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withReplacedOrderId($value)
    {
        $this->setReplacedOrderId($value);
        return $this;
    }
    /**
     * Check the value of IsReplacementOrder.
     *
     * @return true if IsReplacementOrder is set to true.
     */
    public function isIsReplacementOrder()
    {
        return !is_null($this->_fields['IsReplacementOrder']['FieldValue']) && $this->_fields['IsReplacementOrder']['FieldValue'];
    }
    /**
     * Get the value of the IsReplacementOrder property.
     *
     * @return Boolean IsReplacementOrder.
     */
    public function getIsReplacementOrder()
    {
        return $this->_fields['IsReplacementOrder']['FieldValue'];
    }
    /**
     * Set the value of the IsReplacementOrder property.
     *
     * @param bool isReplacementOrder
     * @return $this 
     */
    public function setIsReplacementOrder($value)
    {
        $this->_fields['IsReplacementOrder']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsReplacementOrder is set.
     *
     * @return true if IsReplacementOrder is set.
     */
    public function isSetIsReplacementOrder()
    {
        return !is_null($this->_fields['IsReplacementOrder']['FieldValue']);
    }
    /**
     * Set the value of IsReplacementOrder, return this.
     *
     * @param isReplacementOrder
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsReplacementOrder($value)
    {
        $this->setIsReplacementOrder($value);
        return $this;
    }
}