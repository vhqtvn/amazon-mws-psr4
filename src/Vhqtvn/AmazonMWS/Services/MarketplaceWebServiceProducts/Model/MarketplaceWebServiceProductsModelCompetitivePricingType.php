<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePricingType
 * 
 * Properties:
 * <ul>
 * 
 * <li>CompetitivePrices: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceList</li>
 * <li>NumberOfOfferListings: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOfferListingsList</li>
 * <li>TradeInValue: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelCompetitivePricingType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CompetitivePrices' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceList::class), 'NumberOfOfferListings' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOfferListingsList::class), 'TradeInValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the CompetitivePrices property.
     *
     * @return CompetitivePriceList CompetitivePrices.
     */
    public function getCompetitivePrices()
    {
        return $this->_fields['CompetitivePrices']['FieldValue'];
    }
    /**
     * Set the value of the CompetitivePrices property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceList competitivePrices
     * @return $this 
     */
    public function setCompetitivePrices($value)
    {
        $this->_fields['CompetitivePrices']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CompetitivePrices is set.
     *
     * @return true if CompetitivePrices is set.
     */
    public function isSetCompetitivePrices()
    {
        return !is_null($this->_fields['CompetitivePrices']['FieldValue']);
    }
    /**
     * Set the value of CompetitivePrices, return this.
     *
     * @param competitivePrices
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCompetitivePrices($value)
    {
        $this->setCompetitivePrices($value);
        return $this;
    }
    /**
     * Get the value of the NumberOfOfferListings property.
     *
     * @return NumberOfOfferListingsList NumberOfOfferListings.
     */
    public function getNumberOfOfferListings()
    {
        return $this->_fields['NumberOfOfferListings']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfOfferListings property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelNumberOfOfferListingsList numberOfOfferListings
     * @return $this 
     */
    public function setNumberOfOfferListings($value)
    {
        $this->_fields['NumberOfOfferListings']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfOfferListings is set.
     *
     * @return true if NumberOfOfferListings is set.
     */
    public function isSetNumberOfOfferListings()
    {
        return !is_null($this->_fields['NumberOfOfferListings']['FieldValue']);
    }
    /**
     * Set the value of NumberOfOfferListings, return this.
     *
     * @param numberOfOfferListings
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNumberOfOfferListings($value)
    {
        $this->setNumberOfOfferListings($value);
        return $this;
    }
    /**
     * Get the value of the TradeInValue property.
     *
     * @return MoneyType TradeInValue.
     */
    public function getTradeInValue()
    {
        return $this->_fields['TradeInValue']['FieldValue'];
    }
    /**
     * Set the value of the TradeInValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType tradeInValue
     * @return $this 
     */
    public function setTradeInValue($value)
    {
        $this->_fields['TradeInValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TradeInValue is set.
     *
     * @return true if TradeInValue is set.
     */
    public function isSetTradeInValue()
    {
        return !is_null($this->_fields['TradeInValue']['FieldValue']);
    }
    /**
     * Set the value of TradeInValue, return this.
     *
     * @param tradeInValue
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTradeInValue($value)
    {
        $this->setTradeInValue($value);
        return $this;
    }
}