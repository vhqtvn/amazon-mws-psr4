<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelUpdateFulfillmentOrderItem
 * 
 * @property	string	$SellerSKU
 * @property	string	$SellerFulfillmentOrderItemId
 * @property	int	$Quantity
 * @property	string	$GiftMessage
 * @property	string	$DisplayableComment
 * @property	string	$FulfillmentNetworkSKU
 * @property	string	$OrderItemDisposition
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$PerUnitDeclaredValue
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$PerUnitPrice
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$PerUnitTax
 */
class FbaOutboundServiceMwsModelUpdateFulfillmentOrderItem extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'GiftMessage' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableComment' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentNetworkSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderItemDisposition' => array('FieldValue' => null, 'FieldType' => 'string'), 'PerUnitDeclaredValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'PerUnitPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'PerUnitTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return \string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this instance
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
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return \string SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return $this instance
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set.
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
        return !is_null($this->_fields['SellerFulfillmentOrderItemId']['FieldValue']);
    }
    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param string $SellerFulfillmentOrderItemId
     * @return $this
     */
    public function withSellerFulfillmentOrderItemId($SellerFulfillmentOrderItemId)
    {
        $this->setSellerFulfillmentOrderItemId($SellerFulfillmentOrderItemId);
        return $this;
    }
    /**
     * Get the value of the Quantity property.
     *
     * @return int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }
    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return $this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param int $Quantity
     * @return $this
     */
    public function withQuantity($Quantity)
    {
        $this->setQuantity($Quantity);
        return $this;
    }
    /**
     * Get the value of the GiftMessage property.
     *
     * @return \string GiftMessage.
     */
    public function getGiftMessage()
    {
        return $this->_fields['GiftMessage']['FieldValue'];
    }
    /**
     * Set the value of the GiftMessage property.
     *
     * @param string giftMessage
     * @return $this instance
     */
    public function setGiftMessage($value)
    {
        $this->_fields['GiftMessage']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GiftMessage is set.
     *
     * @return true if GiftMessage is set.
     */
    public function isSetGiftMessage()
    {
        return !is_null($this->_fields['GiftMessage']['FieldValue']);
    }
    /**
     * Set the value of GiftMessage, return this.
     *
     * @param string $GiftMessage
     * @return $this
     */
    public function withGiftMessage($GiftMessage)
    {
        $this->setGiftMessage($GiftMessage);
        return $this;
    }
    /**
     * Get the value of the DisplayableComment property.
     *
     * @return \string DisplayableComment.
     */
    public function getDisplayableComment()
    {
        return $this->_fields['DisplayableComment']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableComment property.
     *
     * @param string displayableComment
     * @return $this instance
     */
    public function setDisplayableComment($value)
    {
        $this->_fields['DisplayableComment']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DisplayableComment is set.
     *
     * @return true if DisplayableComment is set.
     */
    public function isSetDisplayableComment()
    {
        return !is_null($this->_fields['DisplayableComment']['FieldValue']);
    }
    /**
     * Set the value of DisplayableComment, return this.
     *
     * @param string $DisplayableComment
     * @return $this
     */
    public function withDisplayableComment($DisplayableComment)
    {
        $this->setDisplayableComment($DisplayableComment);
        return $this;
    }
    /**
     * Get the value of the FulfillmentNetworkSKU property.
     *
     * @return \string FulfillmentNetworkSKU.
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentNetworkSKU property.
     *
     * @param string fulfillmentNetworkSKU
     * @return $this instance
     */
    public function setFulfillmentNetworkSKU($value)
    {
        $this->_fields['FulfillmentNetworkSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentNetworkSKU is set.
     *
     * @return true if FulfillmentNetworkSKU is set.
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return !is_null($this->_fields['FulfillmentNetworkSKU']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentNetworkSKU, return this.
     *
     * @param string $FulfillmentNetworkSKU
     * @return $this
     */
    public function withFulfillmentNetworkSKU($FulfillmentNetworkSKU)
    {
        $this->setFulfillmentNetworkSKU($FulfillmentNetworkSKU);
        return $this;
    }
    /**
     * Get the value of the OrderItemDisposition property.
     *
     * @return \string OrderItemDisposition.
     */
    public function getOrderItemDisposition()
    {
        return $this->_fields['OrderItemDisposition']['FieldValue'];
    }
    /**
     * Set the value of the OrderItemDisposition property.
     *
     * @param string orderItemDisposition
     * @return $this instance
     */
    public function setOrderItemDisposition($value)
    {
        $this->_fields['OrderItemDisposition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderItemDisposition is set.
     *
     * @return true if OrderItemDisposition is set.
     */
    public function isSetOrderItemDisposition()
    {
        return !is_null($this->_fields['OrderItemDisposition']['FieldValue']);
    }
    /**
     * Set the value of OrderItemDisposition, return this.
     *
     * @param string $OrderItemDisposition
     * @return $this
     */
    public function withOrderItemDisposition($OrderItemDisposition)
    {
        $this->setOrderItemDisposition($OrderItemDisposition);
        return $this;
    }
    /**
     * Get the value of the PerUnitDeclaredValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency PerUnitDeclaredValue.
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->_fields['PerUnitDeclaredValue']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitDeclaredValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency perUnitDeclaredValue
     * @return $this instance
     */
    public function setPerUnitDeclaredValue($value)
    {
        $this->_fields['PerUnitDeclaredValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PerUnitDeclaredValue is set.
     *
     * @return true if PerUnitDeclaredValue is set.
     */
    public function isSetPerUnitDeclaredValue()
    {
        return !is_null($this->_fields['PerUnitDeclaredValue']['FieldValue']);
    }
    /**
     * Set the value of PerUnitDeclaredValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $PerUnitDeclaredValue
     * @return $this
     */
    public function withPerUnitDeclaredValue($PerUnitDeclaredValue)
    {
        $this->setPerUnitDeclaredValue($PerUnitDeclaredValue);
        return $this;
    }
    /**
     * Get the value of the PerUnitPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency PerUnitPrice.
     */
    public function getPerUnitPrice()
    {
        return $this->_fields['PerUnitPrice']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency perUnitPrice
     * @return $this instance
     */
    public function setPerUnitPrice($value)
    {
        $this->_fields['PerUnitPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PerUnitPrice is set.
     *
     * @return true if PerUnitPrice is set.
     */
    public function isSetPerUnitPrice()
    {
        return !is_null($this->_fields['PerUnitPrice']['FieldValue']);
    }
    /**
     * Set the value of PerUnitPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $PerUnitPrice
     * @return $this
     */
    public function withPerUnitPrice($PerUnitPrice)
    {
        $this->setPerUnitPrice($PerUnitPrice);
        return $this;
    }
    /**
     * Get the value of the PerUnitTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency PerUnitTax.
     */
    public function getPerUnitTax()
    {
        return $this->_fields['PerUnitTax']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency perUnitTax
     * @return $this instance
     */
    public function setPerUnitTax($value)
    {
        $this->_fields['PerUnitTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PerUnitTax is set.
     *
     * @return true if PerUnitTax is set.
     */
    public function isSetPerUnitTax()
    {
        return !is_null($this->_fields['PerUnitTax']['FieldValue']);
    }
    /**
     * Set the value of PerUnitTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $PerUnitTax
     * @return $this
     */
    public function withPerUnitTax($PerUnitTax)
    {
        $this->setPerUnitTax($PerUnitTax);
        return $this;
    }
}