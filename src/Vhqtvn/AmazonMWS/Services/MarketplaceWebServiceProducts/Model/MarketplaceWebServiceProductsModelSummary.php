<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary
 * 
 * Properties:
 * <ul>
 * 
 * <li>TotalOfferCount: int</li>
 * <li>NumberOfOffers: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers</li>
 * <li>LowestPrices: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices</li>
 * <li>BuyBoxPrices: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices</li>
 * <li>ListPrice: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 * <li>SuggestedLowerPricePlusShipping: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 * <li>BuyBoxEligibleOffers: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers</li>
 * <li>OffersAvailableTime: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelSummary extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TotalOfferCount' => array('FieldValue' => null, 'FieldType' => 'int'), 'NumberOfOffers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers::class), 'LowestPrices' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices::class), 'BuyBoxPrices' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices::class), 'ListPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'SuggestedLowerPricePlusShipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'BuyBoxEligibleOffers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers::class), 'OffersAvailableTime' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the TotalOfferCount property.
     *
     * @return int TotalOfferCount.
     */
    public function getTotalOfferCount()
    {
        return $this->_fields['TotalOfferCount']['FieldValue'];
    }
    /**
     * Set the value of the TotalOfferCount property.
     *
     * @param int totalOfferCount
     * @return $this 
     */
    public function setTotalOfferCount($value)
    {
        $this->_fields['TotalOfferCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalOfferCount is set.
     *
     * @return true if TotalOfferCount is set.
     */
    public function isSetTotalOfferCount()
    {
        return !is_null($this->_fields['TotalOfferCount']['FieldValue']);
    }
    /**
     * Set the value of TotalOfferCount, return this.
     *
     * @param totalOfferCount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTotalOfferCount($value)
    {
        $this->setTotalOfferCount($value);
        return $this;
    }
    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return NumberOfOffers NumberOfOffers.
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers numberOfOffers
     * @return $this 
     */
    public function setNumberOfOffers($value)
    {
        $this->_fields['NumberOfOffers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfOffers is set.
     *
     * @return true if NumberOfOffers is set.
     */
    public function isSetNumberOfOffers()
    {
        return !is_null($this->_fields['NumberOfOffers']['FieldValue']);
    }
    /**
     * Set the value of NumberOfOffers, return this.
     *
     * @param numberOfOffers
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNumberOfOffers($value)
    {
        $this->setNumberOfOffers($value);
        return $this;
    }
    /**
     * Get the value of the LowestPrices property.
     *
     * @return LowestPrices LowestPrices.
     */
    public function getLowestPrices()
    {
        return $this->_fields['LowestPrices']['FieldValue'];
    }
    /**
     * Set the value of the LowestPrices property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices lowestPrices
     * @return $this 
     */
    public function setLowestPrices($value)
    {
        $this->_fields['LowestPrices']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LowestPrices is set.
     *
     * @return true if LowestPrices is set.
     */
    public function isSetLowestPrices()
    {
        return !is_null($this->_fields['LowestPrices']['FieldValue']);
    }
    /**
     * Set the value of LowestPrices, return this.
     *
     * @param lowestPrices
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLowestPrices($value)
    {
        $this->setLowestPrices($value);
        return $this;
    }
    /**
     * Get the value of the BuyBoxPrices property.
     *
     * @return BuyBoxPrices BuyBoxPrices.
     */
    public function getBuyBoxPrices()
    {
        return $this->_fields['BuyBoxPrices']['FieldValue'];
    }
    /**
     * Set the value of the BuyBoxPrices property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices buyBoxPrices
     * @return $this 
     */
    public function setBuyBoxPrices($value)
    {
        $this->_fields['BuyBoxPrices']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyBoxPrices is set.
     *
     * @return true if BuyBoxPrices is set.
     */
    public function isSetBuyBoxPrices()
    {
        return !is_null($this->_fields['BuyBoxPrices']['FieldValue']);
    }
    /**
     * Set the value of BuyBoxPrices, return this.
     *
     * @param buyBoxPrices
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyBoxPrices($value)
    {
        $this->setBuyBoxPrices($value);
        return $this;
    }
    /**
     * Get the value of the ListPrice property.
     *
     * @return MoneyType ListPrice.
     */
    public function getListPrice()
    {
        return $this->_fields['ListPrice']['FieldValue'];
    }
    /**
     * Set the value of the ListPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType listPrice
     * @return $this 
     */
    public function setListPrice($value)
    {
        $this->_fields['ListPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListPrice is set.
     *
     * @return true if ListPrice is set.
     */
    public function isSetListPrice()
    {
        return !is_null($this->_fields['ListPrice']['FieldValue']);
    }
    /**
     * Set the value of ListPrice, return this.
     *
     * @param listPrice
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListPrice($value)
    {
        $this->setListPrice($value);
        return $this;
    }
    /**
     * Get the value of the SuggestedLowerPricePlusShipping property.
     *
     * @return MoneyType SuggestedLowerPricePlusShipping.
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'];
    }
    /**
     * Set the value of the SuggestedLowerPricePlusShipping property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType suggestedLowerPricePlusShipping
     * @return $this 
     */
    public function setSuggestedLowerPricePlusShipping($value)
    {
        $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SuggestedLowerPricePlusShipping is set.
     *
     * @return true if SuggestedLowerPricePlusShipping is set.
     */
    public function isSetSuggestedLowerPricePlusShipping()
    {
        return !is_null($this->_fields['SuggestedLowerPricePlusShipping']['FieldValue']);
    }
    /**
     * Set the value of SuggestedLowerPricePlusShipping, return this.
     *
     * @param suggestedLowerPricePlusShipping
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSuggestedLowerPricePlusShipping($value)
    {
        $this->setSuggestedLowerPricePlusShipping($value);
        return $this;
    }
    /**
     * Get the value of the BuyBoxEligibleOffers property.
     *
     * @return BuyBoxEligibleOffers BuyBoxEligibleOffers.
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->_fields['BuyBoxEligibleOffers']['FieldValue'];
    }
    /**
     * Set the value of the BuyBoxEligibleOffers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers buyBoxEligibleOffers
     * @return $this 
     */
    public function setBuyBoxEligibleOffers($value)
    {
        $this->_fields['BuyBoxEligibleOffers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyBoxEligibleOffers is set.
     *
     * @return true if BuyBoxEligibleOffers is set.
     */
    public function isSetBuyBoxEligibleOffers()
    {
        return !is_null($this->_fields['BuyBoxEligibleOffers']['FieldValue']);
    }
    /**
     * Set the value of BuyBoxEligibleOffers, return this.
     *
     * @param buyBoxEligibleOffers
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBuyBoxEligibleOffers($value)
    {
        $this->setBuyBoxEligibleOffers($value);
        return $this;
    }
    /**
     * Get the value of the OffersAvailableTime property.
     *
     * @return XMLGregorianCalendar OffersAvailableTime.
     */
    public function getOffersAvailableTime()
    {
        return $this->_fields['OffersAvailableTime']['FieldValue'];
    }
    /**
     * Set the value of the OffersAvailableTime property.
     *
     * @param string offersAvailableTime
     * @return $this 
     */
    public function setOffersAvailableTime($value)
    {
        $this->_fields['OffersAvailableTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OffersAvailableTime is set.
     *
     * @return true if OffersAvailableTime is set.
     */
    public function isSetOffersAvailableTime()
    {
        return !is_null($this->_fields['OffersAvailableTime']['FieldValue']);
    }
    /**
     * Set the value of OffersAvailableTime, return this.
     *
     * @param offersAvailableTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOffersAvailableTime($value)
    {
        $this->setOffersAvailableTime($value);
        return $this;
    }
}