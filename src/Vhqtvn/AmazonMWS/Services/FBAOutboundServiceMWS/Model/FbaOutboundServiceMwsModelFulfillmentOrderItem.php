<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentOrderItem
 * 
 * @property	string	$SellerSKU
 * @property	string	$SellerFulfillmentOrderItemId
 * @property	int	$Quantity
 * @property	string	$GiftMessage
 * @property	string	$DisplayableComment
 * @property	string	$FulfillmentNetworkSKU
 * @property	string	$OrderItemDisposition
 * @property	int	$CancelledQuantity
 * @property	int	$UnfulfillableQuantity
 * @property	string	$EstimatedShipDateTime
 * @property	string	$EstimatedArrivalDateTime
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$PerUnitPrice
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$PerUnitTax
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$PerUnitDeclaredValue
 */
class FbaOutboundServiceMwsModelFulfillmentOrderItem extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'GiftMessage' => array('FieldValue' => null, 'FieldType' => 'string'), 'DisplayableComment' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentNetworkSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderItemDisposition' => array('FieldValue' => null, 'FieldType' => 'string'), 'CancelledQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'UnfulfillableQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'EstimatedShipDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'), 'PerUnitPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'PerUnitTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'PerUnitDeclaredValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class));
        parent::__construct($data);
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
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }
    /**
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return String SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return $this 
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
     * @param sellerFulfillmentOrderItemId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);
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
     * @return $this 
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
     * @param quantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }
    /**
     * Get the value of the GiftMessage property.
     *
     * @return String GiftMessage.
     */
    public function getGiftMessage()
    {
        return $this->_fields['GiftMessage']['FieldValue'];
    }
    /**
     * Set the value of the GiftMessage property.
     *
     * @param string giftMessage
     * @return $this 
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
     * @param giftMessage
     *             The new value to set.
     *
     * @return $this .
     */
    public function withGiftMessage($value)
    {
        $this->setGiftMessage($value);
        return $this;
    }
    /**
     * Get the value of the DisplayableComment property.
     *
     * @return String DisplayableComment.
     */
    public function getDisplayableComment()
    {
        return $this->_fields['DisplayableComment']['FieldValue'];
    }
    /**
     * Set the value of the DisplayableComment property.
     *
     * @param string displayableComment
     * @return $this 
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
     * @param displayableComment
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDisplayableComment($value)
    {
        $this->setDisplayableComment($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentNetworkSKU property.
     *
     * @return String FulfillmentNetworkSKU.
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentNetworkSKU property.
     *
     * @param string fulfillmentNetworkSKU
     * @return $this 
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
     * @param fulfillmentNetworkSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentNetworkSKU($value)
    {
        $this->setFulfillmentNetworkSKU($value);
        return $this;
    }
    /**
     * Get the value of the OrderItemDisposition property.
     *
     * @return String OrderItemDisposition.
     */
    public function getOrderItemDisposition()
    {
        return $this->_fields['OrderItemDisposition']['FieldValue'];
    }
    /**
     * Set the value of the OrderItemDisposition property.
     *
     * @param string orderItemDisposition
     * @return $this 
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
     * @param orderItemDisposition
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOrderItemDisposition($value)
    {
        $this->setOrderItemDisposition($value);
        return $this;
    }
    /**
     * Get the value of the CancelledQuantity property.
     *
     * @return int CancelledQuantity.
     */
    public function getCancelledQuantity()
    {
        return $this->_fields['CancelledQuantity']['FieldValue'];
    }
    /**
     * Set the value of the CancelledQuantity property.
     *
     * @param int cancelledQuantity
     * @return $this 
     */
    public function setCancelledQuantity($value)
    {
        $this->_fields['CancelledQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CancelledQuantity is set.
     *
     * @return true if CancelledQuantity is set.
     */
    public function isSetCancelledQuantity()
    {
        return !is_null($this->_fields['CancelledQuantity']['FieldValue']);
    }
    /**
     * Set the value of CancelledQuantity, return this.
     *
     * @param cancelledQuantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCancelledQuantity($value)
    {
        $this->setCancelledQuantity($value);
        return $this;
    }
    /**
     * Get the value of the UnfulfillableQuantity property.
     *
     * @return int UnfulfillableQuantity.
     */
    public function getUnfulfillableQuantity()
    {
        return $this->_fields['UnfulfillableQuantity']['FieldValue'];
    }
    /**
     * Set the value of the UnfulfillableQuantity property.
     *
     * @param int unfulfillableQuantity
     * @return $this 
     */
    public function setUnfulfillableQuantity($value)
    {
        $this->_fields['UnfulfillableQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if UnfulfillableQuantity is set.
     *
     * @return true if UnfulfillableQuantity is set.
     */
    public function isSetUnfulfillableQuantity()
    {
        return !is_null($this->_fields['UnfulfillableQuantity']['FieldValue']);
    }
    /**
     * Set the value of UnfulfillableQuantity, return this.
     *
     * @param unfulfillableQuantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withUnfulfillableQuantity($value)
    {
        $this->setUnfulfillableQuantity($value);
        return $this;
    }
    /**
     * Get the value of the EstimatedShipDateTime property.
     *
     * @return XMLGregorianCalendar EstimatedShipDateTime.
     */
    public function getEstimatedShipDateTime()
    {
        return $this->_fields['EstimatedShipDateTime']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedShipDateTime property.
     *
     * @param string estimatedShipDateTime
     * @return $this 
     */
    public function setEstimatedShipDateTime($value)
    {
        $this->_fields['EstimatedShipDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedShipDateTime is set.
     *
     * @return true if EstimatedShipDateTime is set.
     */
    public function isSetEstimatedShipDateTime()
    {
        return !is_null($this->_fields['EstimatedShipDateTime']['FieldValue']);
    }
    /**
     * Set the value of EstimatedShipDateTime, return this.
     *
     * @param estimatedShipDateTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withEstimatedShipDateTime($value)
    {
        $this->setEstimatedShipDateTime($value);
        return $this;
    }
    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return XMLGregorianCalendar EstimatedArrivalDateTime.
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string estimatedArrivalDateTime
     * @return $this 
     */
    public function setEstimatedArrivalDateTime($value)
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedArrivalDateTime is set.
     *
     * @return true if EstimatedArrivalDateTime is set.
     */
    public function isSetEstimatedArrivalDateTime()
    {
        return !is_null($this->_fields['EstimatedArrivalDateTime']['FieldValue']);
    }
    /**
     * Set the value of EstimatedArrivalDateTime, return this.
     *
     * @param estimatedArrivalDateTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withEstimatedArrivalDateTime($value)
    {
        $this->setEstimatedArrivalDateTime($value);
        return $this;
    }
    /**
     * Get the value of the PerUnitPrice property.
     *
     * @return Currency PerUnitPrice.
     */
    public function getPerUnitPrice()
    {
        return $this->_fields['PerUnitPrice']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency perUnitPrice
     * @return $this 
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
     * @param perUnitPrice
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPerUnitPrice($value)
    {
        $this->setPerUnitPrice($value);
        return $this;
    }
    /**
     * Get the value of the PerUnitTax property.
     *
     * @return Currency PerUnitTax.
     */
    public function getPerUnitTax()
    {
        return $this->_fields['PerUnitTax']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency perUnitTax
     * @return $this 
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
     * @param perUnitTax
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPerUnitTax($value)
    {
        $this->setPerUnitTax($value);
        return $this;
    }
    /**
     * Get the value of the PerUnitDeclaredValue property.
     *
     * @return Currency PerUnitDeclaredValue.
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->_fields['PerUnitDeclaredValue']['FieldValue'];
    }
    /**
     * Set the value of the PerUnitDeclaredValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency perUnitDeclaredValue
     * @return $this 
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
     * @param perUnitDeclaredValue
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPerUnitDeclaredValue($value)
    {
        $this->setPerUnitDeclaredValue($value);
        return $this;
    }
}