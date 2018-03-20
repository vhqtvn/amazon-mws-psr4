<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSummary
 * 
 * @property	int	$TotalOfferCount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers	$NumberOfOffers
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices	$LowestPrices
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices	$BuyBoxPrices
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$ListPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$SuggestedLowerPricePlusShipping
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers	$BuyBoxEligibleOffers
 * @property	string	$OffersAvailableTime
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
     * @return $this instance
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
     * @param int $TotalOfferCount
     * @return $this
     */
    public function withTotalOfferCount($TotalOfferCount)
    {
        $this->setTotalOfferCount($TotalOfferCount);
        return $this;
    }
    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers NumberOfOffers.
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers numberOfOffers
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOffers $NumberOfOffers
     * @return $this
     */
    public function withNumberOfOffers($NumberOfOffers)
    {
        $this->setNumberOfOffers($NumberOfOffers);
        return $this;
    }
    /**
     * Get the value of the LowestPrices property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices LowestPrices.
     */
    public function getLowestPrices()
    {
        return $this->_fields['LowestPrices']['FieldValue'];
    }
    /**
     * Set the value of the LowestPrices property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices lowestPrices
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPrices $LowestPrices
     * @return $this
     */
    public function withLowestPrices($LowestPrices)
    {
        $this->setLowestPrices($LowestPrices);
        return $this;
    }
    /**
     * Get the value of the BuyBoxPrices property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices BuyBoxPrices.
     */
    public function getBuyBoxPrices()
    {
        return $this->_fields['BuyBoxPrices']['FieldValue'];
    }
    /**
     * Set the value of the BuyBoxPrices property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices buyBoxPrices
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxPrices $BuyBoxPrices
     * @return $this
     */
    public function withBuyBoxPrices($BuyBoxPrices)
    {
        $this->setBuyBoxPrices($BuyBoxPrices);
        return $this;
    }
    /**
     * Get the value of the ListPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType ListPrice.
     */
    public function getListPrice()
    {
        return $this->_fields['ListPrice']['FieldValue'];
    }
    /**
     * Set the value of the ListPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType listPrice
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $ListPrice
     * @return $this
     */
    public function withListPrice($ListPrice)
    {
        $this->setListPrice($ListPrice);
        return $this;
    }
    /**
     * Get the value of the SuggestedLowerPricePlusShipping property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType SuggestedLowerPricePlusShipping.
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'];
    }
    /**
     * Set the value of the SuggestedLowerPricePlusShipping property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType suggestedLowerPricePlusShipping
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $SuggestedLowerPricePlusShipping
     * @return $this
     */
    public function withSuggestedLowerPricePlusShipping($SuggestedLowerPricePlusShipping)
    {
        $this->setSuggestedLowerPricePlusShipping($SuggestedLowerPricePlusShipping);
        return $this;
    }
    /**
     * Get the value of the BuyBoxEligibleOffers property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers BuyBoxEligibleOffers.
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->_fields['BuyBoxEligibleOffers']['FieldValue'];
    }
    /**
     * Set the value of the BuyBoxEligibleOffers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers buyBoxEligibleOffers
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelBuyBoxEligibleOffers $BuyBoxEligibleOffers
     * @return $this
     */
    public function withBuyBoxEligibleOffers($BuyBoxEligibleOffers)
    {
        $this->setBuyBoxEligibleOffers($BuyBoxEligibleOffers);
        return $this;
    }
    /**
     * Get the value of the OffersAvailableTime property.
     *
     * @return \DateTime OffersAvailableTime.
     */
    public function getOffersAvailableTime()
    {
        return $this->_fields['OffersAvailableTime']['FieldValue'];
    }
    /**
     * Set the value of the OffersAvailableTime property.
     *
     * @param string offersAvailableTime
     * @return $this instance
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
     * @param string $OffersAvailableTime
     * @return $this
     */
    public function withOffersAvailableTime($OffersAvailableTime)
    {
        $this->setOffersAvailableTime($OffersAvailableTime);
        return $this;
    }
}