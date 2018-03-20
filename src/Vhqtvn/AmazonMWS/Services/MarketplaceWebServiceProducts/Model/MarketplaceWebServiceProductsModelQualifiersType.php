<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType
 * 
 * @property	string	$ItemCondition
 * @property	string	$ItemSubcondition
 * @property	string	$FulfillmentChannel
 * @property	string	$ShipsDomestically
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShippingTimeType	$ShippingTime
 * @property	string	$SellerPositiveFeedbackRating
 */
class MarketplaceWebServiceProductsModelQualifiersType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemSubcondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipsDomestically' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingTime' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShippingTimeType::class), 'SellerPositiveFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ItemCondition property.
     *
     * @return \string ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return $this instance
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemCondition is set.
     *
     * @return true if ItemCondition is set.
     */
    public function isSetItemCondition()
    {
        return !is_null($this->_fields['ItemCondition']['FieldValue']);
    }
    /**
     * Set the value of ItemCondition, return this.
     *
     * @param string $ItemCondition
     * @return $this
     */
    public function withItemCondition($ItemCondition)
    {
        $this->setItemCondition($ItemCondition);
        return $this;
    }
    /**
     * Get the value of the ItemSubcondition property.
     *
     * @return \string ItemSubcondition.
     */
    public function getItemSubcondition()
    {
        return $this->_fields['ItemSubcondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemSubcondition property.
     *
     * @param string itemSubcondition
     * @return $this instance
     */
    public function setItemSubcondition($value)
    {
        $this->_fields['ItemSubcondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemSubcondition is set.
     *
     * @return true if ItemSubcondition is set.
     */
    public function isSetItemSubcondition()
    {
        return !is_null($this->_fields['ItemSubcondition']['FieldValue']);
    }
    /**
     * Set the value of ItemSubcondition, return this.
     *
     * @param string $ItemSubcondition
     * @return $this
     */
    public function withItemSubcondition($ItemSubcondition)
    {
        $this->setItemSubcondition($ItemSubcondition);
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
     * Get the value of the ShipsDomestically property.
     *
     * @return \string ShipsDomestically.
     */
    public function getShipsDomestically()
    {
        return $this->_fields['ShipsDomestically']['FieldValue'];
    }
    /**
     * Set the value of the ShipsDomestically property.
     *
     * @param string shipsDomestically
     * @return $this instance
     */
    public function setShipsDomestically($value)
    {
        $this->_fields['ShipsDomestically']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipsDomestically is set.
     *
     * @return true if ShipsDomestically is set.
     */
    public function isSetShipsDomestically()
    {
        return !is_null($this->_fields['ShipsDomestically']['FieldValue']);
    }
    /**
     * Set the value of ShipsDomestically, return this.
     *
     * @param string $ShipsDomestically
     * @return $this
     */
    public function withShipsDomestically($ShipsDomestically)
    {
        $this->setShipsDomestically($ShipsDomestically);
        return $this;
    }
    /**
     * Get the value of the ShippingTime property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShippingTimeType ShippingTime.
     */
    public function getShippingTime()
    {
        return $this->_fields['ShippingTime']['FieldValue'];
    }
    /**
     * Set the value of the ShippingTime property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShippingTimeType shippingTime
     * @return $this instance
     */
    public function setShippingTime($value)
    {
        $this->_fields['ShippingTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingTime is set.
     *
     * @return true if ShippingTime is set.
     */
    public function isSetShippingTime()
    {
        return !is_null($this->_fields['ShippingTime']['FieldValue']);
    }
    /**
     * Set the value of ShippingTime, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShippingTimeType $ShippingTime
     * @return $this
     */
    public function withShippingTime($ShippingTime)
    {
        $this->setShippingTime($ShippingTime);
        return $this;
    }
    /**
     * Get the value of the SellerPositiveFeedbackRating property.
     *
     * @return \string SellerPositiveFeedbackRating.
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }
    /**
     * Set the value of the SellerPositiveFeedbackRating property.
     *
     * @param string sellerPositiveFeedbackRating
     * @return $this instance
     */
    public function setSellerPositiveFeedbackRating($value)
    {
        $this->_fields['SellerPositiveFeedbackRating']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerPositiveFeedbackRating is set.
     *
     * @return true if SellerPositiveFeedbackRating is set.
     */
    public function isSetSellerPositiveFeedbackRating()
    {
        return !is_null($this->_fields['SellerPositiveFeedbackRating']['FieldValue']);
    }
    /**
     * Set the value of SellerPositiveFeedbackRating, return this.
     *
     * @param string $SellerPositiveFeedbackRating
     * @return $this
     */
    public function withSellerPositiveFeedbackRating($SellerPositiveFeedbackRating)
    {
        $this->setSellerPositiveFeedbackRating($SellerPositiveFeedbackRating);
        return $this;
    }
}