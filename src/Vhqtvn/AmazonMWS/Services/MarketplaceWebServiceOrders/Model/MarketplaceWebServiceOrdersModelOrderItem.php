<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelOrderItem
 * 
 * @property	string	$ASIN
 * @property	string	$SellerSKU
 * @property	string	$OrderItemId
 * @property	string	$Title
 * @property	int	$QuantityOrdered
 * @property	int	$QuantityShipped
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail	$ProductInfo
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPointsGrantedDetail	$PointsGranted
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$ItemPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$ShippingPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$GiftWrapPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$ItemTax
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$ShippingTax
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$GiftWrapTax
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$ShippingDiscount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$PromotionDiscount
 * @property	\[]	$PromotionIds
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$CODFee
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$CODFeeDiscount
 * @property	bool	$IsGift
 * @property	string	$GiftMessageText
 * @property	string	$GiftWrapLevel
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelInvoiceData	$InvoiceData
 * @property	string	$ConditionNote
 * @property	string	$ConditionId
 * @property	string	$ConditionSubtypeId
 * @property	string	$ScheduledDeliveryStartDate
 * @property	string	$ScheduledDeliveryEndDate
 * @property	string	$PriceDesignation
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail	$BuyerCustomizedInfo
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxCollection	$TaxCollection
 */
class MarketplaceWebServiceOrdersModelOrderItem extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Title' => array('FieldValue' => null, 'FieldType' => 'string'), 'QuantityOrdered' => array('FieldValue' => null, 'FieldType' => 'int'), 'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'), 'ProductInfo' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail::class), 'PointsGranted' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPointsGrantedDetail::class), 'ItemPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'ShippingPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'GiftWrapPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'ItemTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'ShippingTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'GiftWrapTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'ShippingDiscount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'PromotionDiscount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'PromotionIds' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'PromotionId'), 'CODFee' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'CODFeeDiscount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class), 'IsGift' => array('FieldValue' => null, 'FieldType' => 'bool'), 'GiftMessageText' => array('FieldValue' => null, 'FieldType' => 'string'), 'GiftWrapLevel' => array('FieldValue' => null, 'FieldType' => 'string'), 'InvoiceData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelInvoiceData::class), 'ConditionNote' => array('FieldValue' => null, 'FieldType' => 'string'), 'ConditionId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ConditionSubtypeId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ScheduledDeliveryStartDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'ScheduledDeliveryEndDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'PriceDesignation' => array('FieldValue' => null, 'FieldType' => 'string'), 'BuyerCustomizedInfo' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail::class), 'TaxCollection' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxCollection::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param string $ASIN
     * @return $this
     */
    public function withASIN($ASIN)
    {
        $this->setASIN($ASIN);
        return $this;
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this 
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param string $SellerSKU
     * @return $this
     */
    public function withSellerSKU($SellerSKU)
    {
        $this->setSellerSKU($SellerSKU);
        return $this;
    }
    /**
     * Get the value of the OrderItemId property.
     *
     * @return String OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return $this 
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
        return !is_null($this->_fields['OrderItemId']['FieldValue']);
    }
    /**
     * Set the value of OrderItemId, return this.
     *
     * @param string $OrderItemId
     * @return $this
     */
    public function withOrderItemId($OrderItemId)
    {
        $this->setOrderItemId($OrderItemId);
        return $this;
    }
    /**
     * Get the value of the Title property.
     *
     * @return String Title.
     */
    public function getTitle()
    {
        return $this->_fields['Title']['FieldValue'];
    }
    /**
     * Set the value of the Title property.
     *
     * @param string title
     * @return $this 
     */
    public function setTitle($value)
    {
        $this->_fields['Title']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Title is set.
     *
     * @return true if Title is set.
     */
    public function isSetTitle()
    {
        return !is_null($this->_fields['Title']['FieldValue']);
    }
    /**
     * Set the value of Title, return this.
     *
     * @param string $Title
     * @return $this
     */
    public function withTitle($Title)
    {
        $this->setTitle($Title);
        return $this;
    }
    /**
     * Get the value of the QuantityOrdered property.
     *
     * @return int QuantityOrdered.
     */
    public function getQuantityOrdered()
    {
        return $this->_fields['QuantityOrdered']['FieldValue'];
    }
    /**
     * Set the value of the QuantityOrdered property.
     *
     * @param int quantityOrdered
     * @return $this 
     */
    public function setQuantityOrdered($value)
    {
        $this->_fields['QuantityOrdered']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityOrdered is set.
     *
     * @return true if QuantityOrdered is set.
     */
    public function isSetQuantityOrdered()
    {
        return !is_null($this->_fields['QuantityOrdered']['FieldValue']);
    }
    /**
     * Set the value of QuantityOrdered, return this.
     *
     * @param int $QuantityOrdered
     * @return $this
     */
    public function withQuantityOrdered($QuantityOrdered)
    {
        $this->setQuantityOrdered($QuantityOrdered);
        return $this;
    }
    /**
     * Get the value of the QuantityShipped property.
     *
     * @return Integer QuantityShipped.
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }
    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @return $this 
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set.
     */
    public function isSetQuantityShipped()
    {
        return !is_null($this->_fields['QuantityShipped']['FieldValue']);
    }
    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param int $QuantityShipped
     * @return $this
     */
    public function withQuantityShipped($QuantityShipped)
    {
        $this->setQuantityShipped($QuantityShipped);
        return $this;
    }
    /**
     * Get the value of the ProductInfo property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail ProductInfo.
     */
    public function getProductInfo()
    {
        return $this->_fields['ProductInfo']['FieldValue'];
    }
    /**
     * Set the value of the ProductInfo property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail productInfo
     * @return $this 
     */
    public function setProductInfo($value)
    {
        $this->_fields['ProductInfo']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProductInfo is set.
     *
     * @return true if ProductInfo is set.
     */
    public function isSetProductInfo()
    {
        return !is_null($this->_fields['ProductInfo']['FieldValue']);
    }
    /**
     * Set the value of ProductInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelProductInfoDetail $ProductInfo
     * @return $this
     */
    public function withProductInfo($ProductInfo)
    {
        $this->setProductInfo($ProductInfo);
        return $this;
    }
    /**
     * Get the value of the PointsGranted property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPointsGrantedDetail PointsGranted.
     */
    public function getPointsGranted()
    {
        return $this->_fields['PointsGranted']['FieldValue'];
    }
    /**
     * Set the value of the PointsGranted property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPointsGrantedDetail pointsGranted
     * @return $this 
     */
    public function setPointsGranted($value)
    {
        $this->_fields['PointsGranted']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PointsGranted is set.
     *
     * @return true if PointsGranted is set.
     */
    public function isSetPointsGranted()
    {
        return !is_null($this->_fields['PointsGranted']['FieldValue']);
    }
    /**
     * Set the value of PointsGranted, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPointsGrantedDetail $PointsGranted
     * @return $this
     */
    public function withPointsGranted($PointsGranted)
    {
        $this->setPointsGranted($PointsGranted);
        return $this;
    }
    /**
     * Get the value of the ItemPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney ItemPrice.
     */
    public function getItemPrice()
    {
        return $this->_fields['ItemPrice']['FieldValue'];
    }
    /**
     * Set the value of the ItemPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney itemPrice
     * @return $this 
     */
    public function setItemPrice($value)
    {
        $this->_fields['ItemPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemPrice is set.
     *
     * @return true if ItemPrice is set.
     */
    public function isSetItemPrice()
    {
        return !is_null($this->_fields['ItemPrice']['FieldValue']);
    }
    /**
     * Set the value of ItemPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $ItemPrice
     * @return $this
     */
    public function withItemPrice($ItemPrice)
    {
        $this->setItemPrice($ItemPrice);
        return $this;
    }
    /**
     * Get the value of the ShippingPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney ShippingPrice.
     */
    public function getShippingPrice()
    {
        return $this->_fields['ShippingPrice']['FieldValue'];
    }
    /**
     * Set the value of the ShippingPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney shippingPrice
     * @return $this 
     */
    public function setShippingPrice($value)
    {
        $this->_fields['ShippingPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingPrice is set.
     *
     * @return true if ShippingPrice is set.
     */
    public function isSetShippingPrice()
    {
        return !is_null($this->_fields['ShippingPrice']['FieldValue']);
    }
    /**
     * Set the value of ShippingPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $ShippingPrice
     * @return $this
     */
    public function withShippingPrice($ShippingPrice)
    {
        $this->setShippingPrice($ShippingPrice);
        return $this;
    }
    /**
     * Get the value of the GiftWrapPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney GiftWrapPrice.
     */
    public function getGiftWrapPrice()
    {
        return $this->_fields['GiftWrapPrice']['FieldValue'];
    }
    /**
     * Set the value of the GiftWrapPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney giftWrapPrice
     * @return $this 
     */
    public function setGiftWrapPrice($value)
    {
        $this->_fields['GiftWrapPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GiftWrapPrice is set.
     *
     * @return true if GiftWrapPrice is set.
     */
    public function isSetGiftWrapPrice()
    {
        return !is_null($this->_fields['GiftWrapPrice']['FieldValue']);
    }
    /**
     * Set the value of GiftWrapPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $GiftWrapPrice
     * @return $this
     */
    public function withGiftWrapPrice($GiftWrapPrice)
    {
        $this->setGiftWrapPrice($GiftWrapPrice);
        return $this;
    }
    /**
     * Get the value of the ItemTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney ItemTax.
     */
    public function getItemTax()
    {
        return $this->_fields['ItemTax']['FieldValue'];
    }
    /**
     * Set the value of the ItemTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney itemTax
     * @return $this 
     */
    public function setItemTax($value)
    {
        $this->_fields['ItemTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemTax is set.
     *
     * @return true if ItemTax is set.
     */
    public function isSetItemTax()
    {
        return !is_null($this->_fields['ItemTax']['FieldValue']);
    }
    /**
     * Set the value of ItemTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $ItemTax
     * @return $this
     */
    public function withItemTax($ItemTax)
    {
        $this->setItemTax($ItemTax);
        return $this;
    }
    /**
     * Get the value of the ShippingTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney ShippingTax.
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }
    /**
     * Set the value of the ShippingTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney shippingTax
     * @return $this 
     */
    public function setShippingTax($value)
    {
        $this->_fields['ShippingTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingTax is set.
     *
     * @return true if ShippingTax is set.
     */
    public function isSetShippingTax()
    {
        return !is_null($this->_fields['ShippingTax']['FieldValue']);
    }
    /**
     * Set the value of ShippingTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $ShippingTax
     * @return $this
     */
    public function withShippingTax($ShippingTax)
    {
        $this->setShippingTax($ShippingTax);
        return $this;
    }
    /**
     * Get the value of the GiftWrapTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney GiftWrapTax.
     */
    public function getGiftWrapTax()
    {
        return $this->_fields['GiftWrapTax']['FieldValue'];
    }
    /**
     * Set the value of the GiftWrapTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney giftWrapTax
     * @return $this 
     */
    public function setGiftWrapTax($value)
    {
        $this->_fields['GiftWrapTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GiftWrapTax is set.
     *
     * @return true if GiftWrapTax is set.
     */
    public function isSetGiftWrapTax()
    {
        return !is_null($this->_fields['GiftWrapTax']['FieldValue']);
    }
    /**
     * Set the value of GiftWrapTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $GiftWrapTax
     * @return $this
     */
    public function withGiftWrapTax($GiftWrapTax)
    {
        $this->setGiftWrapTax($GiftWrapTax);
        return $this;
    }
    /**
     * Get the value of the ShippingDiscount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney ShippingDiscount.
     */
    public function getShippingDiscount()
    {
        return $this->_fields['ShippingDiscount']['FieldValue'];
    }
    /**
     * Set the value of the ShippingDiscount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney shippingDiscount
     * @return $this 
     */
    public function setShippingDiscount($value)
    {
        $this->_fields['ShippingDiscount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingDiscount is set.
     *
     * @return true if ShippingDiscount is set.
     */
    public function isSetShippingDiscount()
    {
        return !is_null($this->_fields['ShippingDiscount']['FieldValue']);
    }
    /**
     * Set the value of ShippingDiscount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $ShippingDiscount
     * @return $this
     */
    public function withShippingDiscount($ShippingDiscount)
    {
        $this->setShippingDiscount($ShippingDiscount);
        return $this;
    }
    /**
     * Get the value of the PromotionDiscount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney PromotionDiscount.
     */
    public function getPromotionDiscount()
    {
        return $this->_fields['PromotionDiscount']['FieldValue'];
    }
    /**
     * Set the value of the PromotionDiscount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney promotionDiscount
     * @return $this 
     */
    public function setPromotionDiscount($value)
    {
        $this->_fields['PromotionDiscount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PromotionDiscount is set.
     *
     * @return true if PromotionDiscount is set.
     */
    public function isSetPromotionDiscount()
    {
        return !is_null($this->_fields['PromotionDiscount']['FieldValue']);
    }
    /**
     * Set the value of PromotionDiscount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $PromotionDiscount
     * @return $this
     */
    public function withPromotionDiscount($PromotionDiscount)
    {
        $this->setPromotionDiscount($PromotionDiscount);
        return $this;
    }
    /**
     * Get the value of the PromotionIds property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] PromotionIds.
     */
    public function getPromotionIds()
    {
        if ($this->_fields['PromotionIds']['FieldValue'] == null) {
            $this->_fields['PromotionIds']['FieldValue'] = array();
        }
        return $this->_fields['PromotionIds']['FieldValue'];
    }
    /**
     * Set the value of the PromotionIds property.
     *
     * @param array promotionIds
     * @return $this 
     */
    public function setPromotionIds($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PromotionIds']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PromotionIds.
     */
    public function unsetPromotionIds()
    {
        $this->_fields['PromotionIds']['FieldValue'] = array();
    }
    /**
     * Check to see if PromotionIds is set.
     *
     * @return true if PromotionIds is set.
     */
    public function isSetPromotionIds()
    {
        return !empty($this->_fields['PromotionIds']['FieldValue']);
    }
    /**
     * Add values for PromotionIds, return this.
     *
     * @param \[] $PromotionIds_array,...
     * @return $this
     */
    public function withPromotionIds(...$PromotionIds_array)
    {
        foreach ($PromotionIds_array as $PromotionIds) {
            $this->_fields['PromotionIds']['FieldValue'][] = $PromotionIds;
        }
        return $this;
    }
    /**
     * Get the value of the CODFee property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney CODFee.
     */
    public function getCODFee()
    {
        return $this->_fields['CODFee']['FieldValue'];
    }
    /**
     * Set the value of the CODFee property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney codFee
     * @return $this 
     */
    public function setCODFee($value)
    {
        $this->_fields['CODFee']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CODFee is set.
     *
     * @return true if CODFee is set.
     */
    public function isSetCODFee()
    {
        return !is_null($this->_fields['CODFee']['FieldValue']);
    }
    /**
     * Set the value of CODFee, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $CODFee
     * @return $this
     */
    public function withCODFee($CODFee)
    {
        $this->setCODFee($CODFee);
        return $this;
    }
    /**
     * Get the value of the CODFeeDiscount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney CODFeeDiscount.
     */
    public function getCODFeeDiscount()
    {
        return $this->_fields['CODFeeDiscount']['FieldValue'];
    }
    /**
     * Set the value of the CODFeeDiscount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney codFeeDiscount
     * @return $this 
     */
    public function setCODFeeDiscount($value)
    {
        $this->_fields['CODFeeDiscount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CODFeeDiscount is set.
     *
     * @return true if CODFeeDiscount is set.
     */
    public function isSetCODFeeDiscount()
    {
        return !is_null($this->_fields['CODFeeDiscount']['FieldValue']);
    }
    /**
     * Set the value of CODFeeDiscount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney $CODFeeDiscount
     * @return $this
     */
    public function withCODFeeDiscount($CODFeeDiscount)
    {
        $this->setCODFeeDiscount($CODFeeDiscount);
        return $this;
    }
    /**
     * Check the value of IsGift.
     *
     * @return true if IsGift is set to true.
     */
    public function isIsGift()
    {
        return !is_null($this->_fields['IsGift']['FieldValue']) && $this->_fields['IsGift']['FieldValue'];
    }
    /**
     * Get the value of the IsGift property.
     *
     * @return Boolean IsGift.
     */
    public function getIsGift()
    {
        return $this->_fields['IsGift']['FieldValue'];
    }
    /**
     * Set the value of the IsGift property.
     *
     * @param bool isGift
     * @return $this 
     */
    public function setIsGift($value)
    {
        $this->_fields['IsGift']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsGift is set.
     *
     * @return true if IsGift is set.
     */
    public function isSetIsGift()
    {
        return !is_null($this->_fields['IsGift']['FieldValue']);
    }
    /**
     * Set the value of IsGift, return this.
     *
     * @param bool $IsGift
     * @return $this
     */
    public function withIsGift($IsGift)
    {
        $this->setIsGift($IsGift);
        return $this;
    }
    /**
     * Get the value of the GiftMessageText property.
     *
     * @return String GiftMessageText.
     */
    public function getGiftMessageText()
    {
        return $this->_fields['GiftMessageText']['FieldValue'];
    }
    /**
     * Set the value of the GiftMessageText property.
     *
     * @param string giftMessageText
     * @return $this 
     */
    public function setGiftMessageText($value)
    {
        $this->_fields['GiftMessageText']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GiftMessageText is set.
     *
     * @return true if GiftMessageText is set.
     */
    public function isSetGiftMessageText()
    {
        return !is_null($this->_fields['GiftMessageText']['FieldValue']);
    }
    /**
     * Set the value of GiftMessageText, return this.
     *
     * @param string $GiftMessageText
     * @return $this
     */
    public function withGiftMessageText($GiftMessageText)
    {
        $this->setGiftMessageText($GiftMessageText);
        return $this;
    }
    /**
     * Get the value of the GiftWrapLevel property.
     *
     * @return String GiftWrapLevel.
     */
    public function getGiftWrapLevel()
    {
        return $this->_fields['GiftWrapLevel']['FieldValue'];
    }
    /**
     * Set the value of the GiftWrapLevel property.
     *
     * @param string giftWrapLevel
     * @return $this 
     */
    public function setGiftWrapLevel($value)
    {
        $this->_fields['GiftWrapLevel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GiftWrapLevel is set.
     *
     * @return true if GiftWrapLevel is set.
     */
    public function isSetGiftWrapLevel()
    {
        return !is_null($this->_fields['GiftWrapLevel']['FieldValue']);
    }
    /**
     * Set the value of GiftWrapLevel, return this.
     *
     * @param string $GiftWrapLevel
     * @return $this
     */
    public function withGiftWrapLevel($GiftWrapLevel)
    {
        $this->setGiftWrapLevel($GiftWrapLevel);
        return $this;
    }
    /**
     * Get the value of the InvoiceData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelInvoiceData InvoiceData.
     */
    public function getInvoiceData()
    {
        return $this->_fields['InvoiceData']['FieldValue'];
    }
    /**
     * Set the value of the InvoiceData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelInvoiceData invoiceData
     * @return $this 
     */
    public function setInvoiceData($value)
    {
        $this->_fields['InvoiceData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvoiceData is set.
     *
     * @return true if InvoiceData is set.
     */
    public function isSetInvoiceData()
    {
        return !is_null($this->_fields['InvoiceData']['FieldValue']);
    }
    /**
     * Set the value of InvoiceData, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelInvoiceData $InvoiceData
     * @return $this
     */
    public function withInvoiceData($InvoiceData)
    {
        $this->setInvoiceData($InvoiceData);
        return $this;
    }
    /**
     * Get the value of the ConditionNote property.
     *
     * @return String ConditionNote.
     */
    public function getConditionNote()
    {
        return $this->_fields['ConditionNote']['FieldValue'];
    }
    /**
     * Set the value of the ConditionNote property.
     *
     * @param string conditionNote
     * @return $this 
     */
    public function setConditionNote($value)
    {
        $this->_fields['ConditionNote']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConditionNote is set.
     *
     * @return true if ConditionNote is set.
     */
    public function isSetConditionNote()
    {
        return !is_null($this->_fields['ConditionNote']['FieldValue']);
    }
    /**
     * Set the value of ConditionNote, return this.
     *
     * @param string $ConditionNote
     * @return $this
     */
    public function withConditionNote($ConditionNote)
    {
        $this->setConditionNote($ConditionNote);
        return $this;
    }
    /**
     * Get the value of the ConditionId property.
     *
     * @return String ConditionId.
     */
    public function getConditionId()
    {
        return $this->_fields['ConditionId']['FieldValue'];
    }
    /**
     * Set the value of the ConditionId property.
     *
     * @param string conditionId
     * @return $this 
     */
    public function setConditionId($value)
    {
        $this->_fields['ConditionId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConditionId is set.
     *
     * @return true if ConditionId is set.
     */
    public function isSetConditionId()
    {
        return !is_null($this->_fields['ConditionId']['FieldValue']);
    }
    /**
     * Set the value of ConditionId, return this.
     *
     * @param string $ConditionId
     * @return $this
     */
    public function withConditionId($ConditionId)
    {
        $this->setConditionId($ConditionId);
        return $this;
    }
    /**
     * Get the value of the ConditionSubtypeId property.
     *
     * @return String ConditionSubtypeId.
     */
    public function getConditionSubtypeId()
    {
        return $this->_fields['ConditionSubtypeId']['FieldValue'];
    }
    /**
     * Set the value of the ConditionSubtypeId property.
     *
     * @param string conditionSubtypeId
     * @return $this 
     */
    public function setConditionSubtypeId($value)
    {
        $this->_fields['ConditionSubtypeId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConditionSubtypeId is set.
     *
     * @return true if ConditionSubtypeId is set.
     */
    public function isSetConditionSubtypeId()
    {
        return !is_null($this->_fields['ConditionSubtypeId']['FieldValue']);
    }
    /**
     * Set the value of ConditionSubtypeId, return this.
     *
     * @param string $ConditionSubtypeId
     * @return $this
     */
    public function withConditionSubtypeId($ConditionSubtypeId)
    {
        $this->setConditionSubtypeId($ConditionSubtypeId);
        return $this;
    }
    /**
     * Get the value of the ScheduledDeliveryStartDate property.
     *
     * @return String ScheduledDeliveryStartDate.
     */
    public function getScheduledDeliveryStartDate()
    {
        return $this->_fields['ScheduledDeliveryStartDate']['FieldValue'];
    }
    /**
     * Set the value of the ScheduledDeliveryStartDate property.
     *
     * @param string scheduledDeliveryStartDate
     * @return $this 
     */
    public function setScheduledDeliveryStartDate($value)
    {
        $this->_fields['ScheduledDeliveryStartDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ScheduledDeliveryStartDate is set.
     *
     * @return true if ScheduledDeliveryStartDate is set.
     */
    public function isSetScheduledDeliveryStartDate()
    {
        return !is_null($this->_fields['ScheduledDeliveryStartDate']['FieldValue']);
    }
    /**
     * Set the value of ScheduledDeliveryStartDate, return this.
     *
     * @param string $ScheduledDeliveryStartDate
     * @return $this
     */
    public function withScheduledDeliveryStartDate($ScheduledDeliveryStartDate)
    {
        $this->setScheduledDeliveryStartDate($ScheduledDeliveryStartDate);
        return $this;
    }
    /**
     * Get the value of the ScheduledDeliveryEndDate property.
     *
     * @return String ScheduledDeliveryEndDate.
     */
    public function getScheduledDeliveryEndDate()
    {
        return $this->_fields['ScheduledDeliveryEndDate']['FieldValue'];
    }
    /**
     * Set the value of the ScheduledDeliveryEndDate property.
     *
     * @param string scheduledDeliveryEndDate
     * @return $this 
     */
    public function setScheduledDeliveryEndDate($value)
    {
        $this->_fields['ScheduledDeliveryEndDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ScheduledDeliveryEndDate is set.
     *
     * @return true if ScheduledDeliveryEndDate is set.
     */
    public function isSetScheduledDeliveryEndDate()
    {
        return !is_null($this->_fields['ScheduledDeliveryEndDate']['FieldValue']);
    }
    /**
     * Set the value of ScheduledDeliveryEndDate, return this.
     *
     * @param string $ScheduledDeliveryEndDate
     * @return $this
     */
    public function withScheduledDeliveryEndDate($ScheduledDeliveryEndDate)
    {
        $this->setScheduledDeliveryEndDate($ScheduledDeliveryEndDate);
        return $this;
    }
    /**
     * Get the value of the PriceDesignation property.
     *
     * @return String PriceDesignation.
     */
    public function getPriceDesignation()
    {
        return $this->_fields['PriceDesignation']['FieldValue'];
    }
    /**
     * Set the value of the PriceDesignation property.
     *
     * @param string priceDesignation
     * @return $this 
     */
    public function setPriceDesignation($value)
    {
        $this->_fields['PriceDesignation']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PriceDesignation is set.
     *
     * @return true if PriceDesignation is set.
     */
    public function isSetPriceDesignation()
    {
        return !is_null($this->_fields['PriceDesignation']['FieldValue']);
    }
    /**
     * Set the value of PriceDesignation, return this.
     *
     * @param string $PriceDesignation
     * @return $this
     */
    public function withPriceDesignation($PriceDesignation)
    {
        $this->setPriceDesignation($PriceDesignation);
        return $this;
    }
    /**
     * Get the value of the BuyerCustomizedInfo property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail BuyerCustomizedInfo.
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->_fields['BuyerCustomizedInfo']['FieldValue'];
    }
    /**
     * Set the value of the BuyerCustomizedInfo property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail buyerCustomizedInfo
     * @return $this 
     */
    public function setBuyerCustomizedInfo($value)
    {
        $this->_fields['BuyerCustomizedInfo']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerCustomizedInfo is set.
     *
     * @return true if BuyerCustomizedInfo is set.
     */
    public function isSetBuyerCustomizedInfo()
    {
        return !is_null($this->_fields['BuyerCustomizedInfo']['FieldValue']);
    }
    /**
     * Set the value of BuyerCustomizedInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail $BuyerCustomizedInfo
     * @return $this
     */
    public function withBuyerCustomizedInfo($BuyerCustomizedInfo)
    {
        $this->setBuyerCustomizedInfo($BuyerCustomizedInfo);
        return $this;
    }
    /**
     * Get the value of the TaxCollection property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxCollection TaxCollection.
     */
    public function getTaxCollection()
    {
        return $this->_fields['TaxCollection']['FieldValue'];
    }
    /**
     * Set the value of the TaxCollection property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxCollection taxCollection
     * @return $this 
     */
    public function setTaxCollection($value)
    {
        $this->_fields['TaxCollection']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TaxCollection is set.
     *
     * @return true if TaxCollection is set.
     */
    public function isSetTaxCollection()
    {
        return !is_null($this->_fields['TaxCollection']['FieldValue']);
    }
    /**
     * Set the value of TaxCollection, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxCollection $TaxCollection
     * @return $this
     */
    public function withTaxCollection($TaxCollection)
    {
        $this->setTaxCollection($TaxCollection);
        return $this;
    }
}