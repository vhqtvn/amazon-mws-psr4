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
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPaymentExecutionDetailItem[]	$PaymentExecutionDetail
 * @property	string	$PaymentMethod
 * @property	\string[]	$PaymentMethodDetails
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
     * @return \string AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this instance
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
     * @param string $AmazonOrderId
     * @return $this
     */
    public function withAmazonOrderId($AmazonOrderId)
    {
        $this->setAmazonOrderId($AmazonOrderId);
        return $this;
    }
    /**
     * Get the value of the SellerOrderId property.
     *
     * @return \string SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this instance
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
     * @param string $SellerOrderId
     * @return $this
     */
    public function withSellerOrderId($SellerOrderId)
    {
        $this->setSellerOrderId($SellerOrderId);
        return $this;
    }
    /**
     * Get the value of the PurchaseDate property.
     *
     * @return \DateTime PurchaseDate.
     */
    public function getPurchaseDate()
    {
        return $this->_fields['PurchaseDate']['FieldValue'];
    }
    /**
     * Set the value of the PurchaseDate property.
     *
     * @param string purchaseDate
     * @return $this instance
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
     * @param string $PurchaseDate
     * @return $this
     */
    public function withPurchaseDate($PurchaseDate)
    {
        $this->setPurchaseDate($PurchaseDate);
        return $this;
    }
    /**
     * Get the value of the LastUpdateDate property.
     *
     * @return \DateTime LastUpdateDate.
     */
    public function getLastUpdateDate()
    {
        return $this->_fields['LastUpdateDate']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdateDate property.
     *
     * @param string lastUpdateDate
     * @return $this instance
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
     * @param string $LastUpdateDate
     * @return $this
     */
    public function withLastUpdateDate($LastUpdateDate)
    {
        $this->setLastUpdateDate($LastUpdateDate);
        return $this;
    }
    /**
     * Get the value of the OrderStatus property.
     *
     * @return \string OrderStatus.
     */
    public function getOrderStatus()
    {
        return $this->_fields['OrderStatus']['FieldValue'];
    }
    /**
     * Set the value of the OrderStatus property.
     *
     * @param string orderStatus
     * @return $this instance
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
     * @param string $OrderStatus
     * @return $this
     */
    public function withOrderStatus($OrderStatus)
    {
        $this->setOrderStatus($OrderStatus);
        return $this;
    }
    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return \string FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this instance
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
     * @param string $FulfillmentChannel
     * @return $this
     */
    public function withFulfillmentChannel($FulfillmentChannel)
    {
        $this->setFulfillmentChannel($FulfillmentChannel);
        return $this;
    }
    /**
     * Get the value of the SalesChannel property.
     *
     * @return \string SalesChannel.
     */
    public function getSalesChannel()
    {
        return $this->_fields['SalesChannel']['FieldValue'];
    }
    /**
     * Set the value of the SalesChannel property.
     *
     * @param string salesChannel
     * @return $this instance
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
     * @param string $SalesChannel
     * @return $this
     */
    public function withSalesChannel($SalesChannel)
    {
        $this->setSalesChannel($SalesChannel);
        return $this;
    }
    /**
     * Get the value of the OrderChannel property.
     *
     * @return \string OrderChannel.
     */
    public function getOrderChannel()
    {
        return $this->_fields['OrderChannel']['FieldValue'];
    }
    /**
     * Set the value of the OrderChannel property.
     *
     * @param string orderChannel
     * @return $this instance
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
     * @param string $OrderChannel
     * @return $this
     */
    public function withOrderChannel($OrderChannel)
    {
        $this->setOrderChannel($OrderChannel);
        return $this;
    }
    /**
     * Get the value of the ShipServiceLevel property.
     *
     * @return \string ShipServiceLevel.
     */
    public function getShipServiceLevel()
    {
        return $this->_fields['ShipServiceLevel']['FieldValue'];
    }
    /**
     * Set the value of the ShipServiceLevel property.
     *
     * @param string shipServiceLevel
     * @return $this instance
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
     * @param string $ShipServiceLevel
     * @return $this
     */
    public function withShipServiceLevel($ShipServiceLevel)
    {
        $this->setShipServiceLevel($ShipServiceLevel);
        return $this;
    }
    /**
     * Get the value of the ShippingAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress ShippingAddress.
     */
    public function getShippingAddress()
    {
        return $this->_fields['ShippingAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShippingAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress shippingAddress
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress $ShippingAddress
     * @return $this
     */
    public function withShippingAddress($ShippingAddress)
    {
        $this->setShippingAddress($ShippingAddress);
        return $this;
    }
    /**
     * Get the value of the OrderTotal property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney OrderTotal.
     */
    public function getOrderTotal()
    {
        return $this->_fields['OrderTotal']['FieldValue'];
    }
    /**
     * Set the value of the OrderTotal property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney orderTotal
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $OrderTotal
     * @return $this
     */
    public function withOrderTotal($OrderTotal)
    {
        $this->setOrderTotal($OrderTotal);
        return $this;
    }
    /**
     * Get the value of the NumberOfItemsShipped property.
     *
     * @return \int NumberOfItemsShipped.
     */
    public function getNumberOfItemsShipped()
    {
        return $this->_fields['NumberOfItemsShipped']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfItemsShipped property.
     *
     * @param int numberOfItemsShipped
     * @return $this instance
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
     * @param int $NumberOfItemsShipped
     * @return $this
     */
    public function withNumberOfItemsShipped($NumberOfItemsShipped)
    {
        $this->setNumberOfItemsShipped($NumberOfItemsShipped);
        return $this;
    }
    /**
     * Get the value of the NumberOfItemsUnshipped property.
     *
     * @return \int NumberOfItemsUnshipped.
     */
    public function getNumberOfItemsUnshipped()
    {
        return $this->_fields['NumberOfItemsUnshipped']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfItemsUnshipped property.
     *
     * @param int numberOfItemsUnshipped
     * @return $this instance
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
     * @param int $NumberOfItemsUnshipped
     * @return $this
     */
    public function withNumberOfItemsUnshipped($NumberOfItemsUnshipped)
    {
        $this->setNumberOfItemsUnshipped($NumberOfItemsUnshipped);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPaymentExecutionDetailItem[] $PaymentExecutionDetail_array,...
     * @return $this
     */
    public function withPaymentExecutionDetail(...$PaymentExecutionDetail_array)
    {
        foreach ($PaymentExecutionDetail_array as $PaymentExecutionDetail) {
            $this->_fields['PaymentExecutionDetail']['FieldValue'][] = $PaymentExecutionDetail;
        }
        return $this;
    }
    /**
     * Get the value of the PaymentMethod property.
     *
     * @return \string PaymentMethod.
     */
    public function getPaymentMethod()
    {
        return $this->_fields['PaymentMethod']['FieldValue'];
    }
    /**
     * Set the value of the PaymentMethod property.
     *
     * @param string paymentMethod
     * @return $this instance
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
     * @param string $PaymentMethod
     * @return $this
     */
    public function withPaymentMethod($PaymentMethod)
    {
        $this->setPaymentMethod($PaymentMethod);
        return $this;
    }
    /**
     * Get the value of the PaymentMethodDetails property.
     *
     * @return \string[] PaymentMethodDetails.
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
     * @return $this instance
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
     * @param \string[] $PaymentMethodDetails_array,...
     * @return $this
     */
    public function withPaymentMethodDetails(...$PaymentMethodDetails_array)
    {
        foreach ($PaymentMethodDetails_array as $PaymentMethodDetails) {
            $this->_fields['PaymentMethodDetails']['FieldValue'][] = $PaymentMethodDetails;
        }
        return $this;
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return \string MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this instance
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
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
    /**
     * Get the value of the BuyerEmail property.
     *
     * @return \string BuyerEmail.
     */
    public function getBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'];
    }
    /**
     * Set the value of the BuyerEmail property.
     *
     * @param string buyerEmail
     * @return $this instance
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
     * @param string $BuyerEmail
     * @return $this
     */
    public function withBuyerEmail($BuyerEmail)
    {
        $this->setBuyerEmail($BuyerEmail);
        return $this;
    }
    /**
     * Get the value of the BuyerName property.
     *
     * @return \string BuyerName.
     */
    public function getBuyerName()
    {
        return $this->_fields['BuyerName']['FieldValue'];
    }
    /**
     * Set the value of the BuyerName property.
     *
     * @param string buyerName
     * @return $this instance
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
     * @param string $BuyerName
     * @return $this
     */
    public function withBuyerName($BuyerName)
    {
        $this->setBuyerName($BuyerName);
        return $this;
    }
    /**
     * Get the value of the BuyerCounty property.
     *
     * @return \string BuyerCounty.
     */
    public function getBuyerCounty()
    {
        return $this->_fields['BuyerCounty']['FieldValue'];
    }
    /**
     * Set the value of the BuyerCounty property.
     *
     * @param string buyerCounty
     * @return $this instance
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
     * @param string $BuyerCounty
     * @return $this
     */
    public function withBuyerCounty($BuyerCounty)
    {
        $this->setBuyerCounty($BuyerCounty);
        return $this;
    }
    /**
     * Get the value of the BuyerTaxInfo property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo BuyerTaxInfo.
     */
    public function getBuyerTaxInfo()
    {
        return $this->_fields['BuyerTaxInfo']['FieldValue'];
    }
    /**
     * Set the value of the BuyerTaxInfo property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo buyerTaxInfo
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo $BuyerTaxInfo
     * @return $this
     */
    public function withBuyerTaxInfo($BuyerTaxInfo)
    {
        $this->setBuyerTaxInfo($BuyerTaxInfo);
        return $this;
    }
    /**
     * Get the value of the ShipmentServiceLevelCategory property.
     *
     * @return \string ShipmentServiceLevelCategory.
     */
    public function getShipmentServiceLevelCategory()
    {
        return $this->_fields['ShipmentServiceLevelCategory']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentServiceLevelCategory property.
     *
     * @param string shipmentServiceLevelCategory
     * @return $this instance
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
     * @param string $ShipmentServiceLevelCategory
     * @return $this
     */
    public function withShipmentServiceLevelCategory($ShipmentServiceLevelCategory)
    {
        $this->setShipmentServiceLevelCategory($ShipmentServiceLevelCategory);
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
     * @return \bool ShippedByAmazonTFM.
     */
    public function getShippedByAmazonTFM()
    {
        return $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }
    /**
     * Set the value of the ShippedByAmazonTFM property.
     *
     * @param bool shippedByAmazonTFM
     * @return $this instance
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
     * @param bool $ShippedByAmazonTFM
     * @return $this
     */
    public function withShippedByAmazonTFM($ShippedByAmazonTFM)
    {
        $this->setShippedByAmazonTFM($ShippedByAmazonTFM);
        return $this;
    }
    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return \string TFMShipmentStatus.
     */
    public function getTFMShipmentStatus()
    {
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }
    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param string tfmShipmentStatus
     * @return $this instance
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
     * @param string $TFMShipmentStatus
     * @return $this
     */
    public function withTFMShipmentStatus($TFMShipmentStatus)
    {
        $this->setTFMShipmentStatus($TFMShipmentStatus);
        return $this;
    }
    /**
     * Get the value of the CbaDisplayableShippingLabel property.
     *
     * @return \string CbaDisplayableShippingLabel.
     */
    public function getCbaDisplayableShippingLabel()
    {
        return $this->_fields['CbaDisplayableShippingLabel']['FieldValue'];
    }
    /**
     * Set the value of the CbaDisplayableShippingLabel property.
     *
     * @param string cbaDisplayableShippingLabel
     * @return $this instance
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
     * @param string $CbaDisplayableShippingLabel
     * @return $this
     */
    public function withCbaDisplayableShippingLabel($CbaDisplayableShippingLabel)
    {
        $this->setCbaDisplayableShippingLabel($CbaDisplayableShippingLabel);
        return $this;
    }
    /**
     * Get the value of the OrderType property.
     *
     * @return \string OrderType.
     */
    public function getOrderType()
    {
        return $this->_fields['OrderType']['FieldValue'];
    }
    /**
     * Set the value of the OrderType property.
     *
     * @param string orderType
     * @return $this instance
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
     * @param string $OrderType
     * @return $this
     */
    public function withOrderType($OrderType)
    {
        $this->setOrderType($OrderType);
        return $this;
    }
    /**
     * Get the value of the EarliestShipDate property.
     *
     * @return \DateTime EarliestShipDate.
     */
    public function getEarliestShipDate()
    {
        return $this->_fields['EarliestShipDate']['FieldValue'];
    }
    /**
     * Set the value of the EarliestShipDate property.
     *
     * @param string earliestShipDate
     * @return $this instance
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
     * @param string $EarliestShipDate
     * @return $this
     */
    public function withEarliestShipDate($EarliestShipDate)
    {
        $this->setEarliestShipDate($EarliestShipDate);
        return $this;
    }
    /**
     * Get the value of the LatestShipDate property.
     *
     * @return \DateTime LatestShipDate.
     */
    public function getLatestShipDate()
    {
        return $this->_fields['LatestShipDate']['FieldValue'];
    }
    /**
     * Set the value of the LatestShipDate property.
     *
     * @param string latestShipDate
     * @return $this instance
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
     * @param string $LatestShipDate
     * @return $this
     */
    public function withLatestShipDate($LatestShipDate)
    {
        $this->setLatestShipDate($LatestShipDate);
        return $this;
    }
    /**
     * Get the value of the EarliestDeliveryDate property.
     *
     * @return \DateTime EarliestDeliveryDate.
     */
    public function getEarliestDeliveryDate()
    {
        return $this->_fields['EarliestDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the EarliestDeliveryDate property.
     *
     * @param string earliestDeliveryDate
     * @return $this instance
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
     * @param string $EarliestDeliveryDate
     * @return $this
     */
    public function withEarliestDeliveryDate($EarliestDeliveryDate)
    {
        $this->setEarliestDeliveryDate($EarliestDeliveryDate);
        return $this;
    }
    /**
     * Get the value of the LatestDeliveryDate property.
     *
     * @return \DateTime LatestDeliveryDate.
     */
    public function getLatestDeliveryDate()
    {
        return $this->_fields['LatestDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the LatestDeliveryDate property.
     *
     * @param string latestDeliveryDate
     * @return $this instance
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
     * @param string $LatestDeliveryDate
     * @return $this
     */
    public function withLatestDeliveryDate($LatestDeliveryDate)
    {
        $this->setLatestDeliveryDate($LatestDeliveryDate);
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
     * @return \bool IsBusinessOrder.
     */
    public function getIsBusinessOrder()
    {
        return $this->_fields['IsBusinessOrder']['FieldValue'];
    }
    /**
     * Set the value of the IsBusinessOrder property.
     *
     * @param bool isBusinessOrder
     * @return $this instance
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
     * @param bool $IsBusinessOrder
     * @return $this
     */
    public function withIsBusinessOrder($IsBusinessOrder)
    {
        $this->setIsBusinessOrder($IsBusinessOrder);
        return $this;
    }
    /**
     * Get the value of the PurchaseOrderNumber property.
     *
     * @return \string PurchaseOrderNumber.
     */
    public function getPurchaseOrderNumber()
    {
        return $this->_fields['PurchaseOrderNumber']['FieldValue'];
    }
    /**
     * Set the value of the PurchaseOrderNumber property.
     *
     * @param string purchaseOrderNumber
     * @return $this instance
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
     * @param string $PurchaseOrderNumber
     * @return $this
     */
    public function withPurchaseOrderNumber($PurchaseOrderNumber)
    {
        $this->setPurchaseOrderNumber($PurchaseOrderNumber);
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
     * @return \bool IsPrime.
     */
    public function getIsPrime()
    {
        return $this->_fields['IsPrime']['FieldValue'];
    }
    /**
     * Set the value of the IsPrime property.
     *
     * @param bool isPrime
     * @return $this instance
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
     * @param bool $IsPrime
     * @return $this
     */
    public function withIsPrime($IsPrime)
    {
        $this->setIsPrime($IsPrime);
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
     * @return \bool IsPremiumOrder.
     */
    public function getIsPremiumOrder()
    {
        return $this->_fields['IsPremiumOrder']['FieldValue'];
    }
    /**
     * Set the value of the IsPremiumOrder property.
     *
     * @param bool isPremiumOrder
     * @return $this instance
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
     * @param bool $IsPremiumOrder
     * @return $this
     */
    public function withIsPremiumOrder($IsPremiumOrder)
    {
        $this->setIsPremiumOrder($IsPremiumOrder);
        return $this;
    }
    /**
     * Get the value of the ReplacedOrderId property.
     *
     * @return \string ReplacedOrderId.
     */
    public function getReplacedOrderId()
    {
        return $this->_fields['ReplacedOrderId']['FieldValue'];
    }
    /**
     * Set the value of the ReplacedOrderId property.
     *
     * @param string replacedOrderId
     * @return $this instance
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
     * @param string $ReplacedOrderId
     * @return $this
     */
    public function withReplacedOrderId($ReplacedOrderId)
    {
        $this->setReplacedOrderId($ReplacedOrderId);
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
     * @return \bool IsReplacementOrder.
     */
    public function getIsReplacementOrder()
    {
        return $this->_fields['IsReplacementOrder']['FieldValue'];
    }
    /**
     * Set the value of the IsReplacementOrder property.
     *
     * @param bool isReplacementOrder
     * @return $this instance
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
     * @param bool $IsReplacementOrder
     * @return $this
     */
    public function withIsReplacementOrder($IsReplacementOrder)
    {
        $this->setIsReplacementOrder($IsReplacementOrder);
        return $this;
    }
}