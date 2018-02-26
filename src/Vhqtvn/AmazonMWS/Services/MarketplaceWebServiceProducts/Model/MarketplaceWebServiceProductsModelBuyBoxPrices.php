<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPriceType[]	$BuyBoxPrice
 */
class MarketplaceWebServiceProductsModelBuyBoxPrices extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('BuyBoxPrice' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPriceType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the BuyBoxPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPriceType[] BuyBoxPrice.
     */
    public function getBuyBoxPrice()
    {
        if ($this->_fields['BuyBoxPrice']['FieldValue'] == null) {
            $this->_fields['BuyBoxPrice']['FieldValue'] = array();
        }
        return $this->_fields['BuyBoxPrice']['FieldValue'];
    }
    /**
     * Set the value of the BuyBoxPrice property.
     *
     * @param array buyBoxPrice
     * @return $this 
     */
    public function setBuyBoxPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['BuyBoxPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear BuyBoxPrice.
     */
    public function unsetBuyBoxPrice()
    {
        $this->_fields['BuyBoxPrice']['FieldValue'] = array();
    }
    /**
     * Check to see if BuyBoxPrice is set.
     *
     * @return true if BuyBoxPrice is set.
     */
    public function isSetBuyBoxPrice()
    {
        return !empty($this->_fields['BuyBoxPrice']['FieldValue']);
    }
    /**
     * Add values for BuyBoxPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPriceType[] $BuyBoxPrice_array,...
     * @return $this
     */
    public function withBuyBoxPrice(...$BuyBoxPrice_array)
    {
        foreach ($BuyBoxPrice_array as $BuyBoxPrice) {
            $this->_fields['BuyBoxPrice']['FieldValue'][] = $BuyBoxPrice;
        }
        return $this;
    }
}