<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferType
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType	$BuyingPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$RegularPrice
 * @property	string	$FulfillmentChannel
 * @property	string	$ItemCondition
 * @property	string	$ItemSubCondition
 * @property	string	$SellerId
 * @property	string	$SellerSKU
 */
class MarketplaceWebServiceProductsModelOfferType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('BuyingPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType::class), 'RegularPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemSubCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the BuyingPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType BuyingPrice.
     */
    public function getBuyingPrice()
    {
        return $this->_fields['BuyingPrice']['FieldValue'];
    }
    /**
     * Set the value of the BuyingPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType buyingPrice
     * @return $this 
     */
    public function setBuyingPrice($value)
    {
        $this->_fields['BuyingPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyingPrice is set.
     *
     * @return true if BuyingPrice is set.
     */
    public function isSetBuyingPrice()
    {
        return !is_null($this->_fields['BuyingPrice']['FieldValue']);
    }
    /**
     * Set the value of BuyingPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType $BuyingPrice
     * @return $this
     */
    public function withBuyingPrice($BuyingPrice)
    {
        $this->setBuyingPrice($BuyingPrice);
        return $this;
    }
    /**
     * Get the value of the RegularPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType RegularPrice.
     */
    public function getRegularPrice()
    {
        return $this->_fields['RegularPrice']['FieldValue'];
    }
    /**
     * Set the value of the RegularPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType regularPrice
     * @return $this 
     */
    public function setRegularPrice($value)
    {
        $this->_fields['RegularPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RegularPrice is set.
     *
     * @return true if RegularPrice is set.
     */
    public function isSetRegularPrice()
    {
        return !is_null($this->_fields['RegularPrice']['FieldValue']);
    }
    /**
     * Set the value of RegularPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $RegularPrice
     * @return $this
     */
    public function withRegularPrice($RegularPrice)
    {
        $this->setRegularPrice($RegularPrice);
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
     * @param string $FulfillmentChannel
     * @return $this
     */
    public function withFulfillmentChannel($FulfillmentChannel)
    {
        $this->setFulfillmentChannel($FulfillmentChannel);
        return $this;
    }
    /**
     * Get the value of the ItemCondition property.
     *
     * @return String ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return $this 
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
     * Get the value of the ItemSubCondition property.
     *
     * @return String ItemSubCondition.
     */
    public function getItemSubCondition()
    {
        return $this->_fields['ItemSubCondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemSubCondition property.
     *
     * @param string itemSubCondition
     * @return $this 
     */
    public function setItemSubCondition($value)
    {
        $this->_fields['ItemSubCondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemSubCondition is set.
     *
     * @return true if ItemSubCondition is set.
     */
    public function isSetItemSubCondition()
    {
        return !is_null($this->_fields['ItemSubCondition']['FieldValue']);
    }
    /**
     * Set the value of ItemSubCondition, return this.
     *
     * @param string $ItemSubCondition
     * @return $this
     */
    public function withItemSubCondition($ItemSubCondition)
    {
        $this->setItemSubCondition($ItemSubCondition);
        return $this;
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this 
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param string $SellerId
     * @return $this
     */
    public function withSellerId($SellerId)
    {
        $this->setSellerId($SellerId);
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
}