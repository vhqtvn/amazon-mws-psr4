<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType
 * 
 * Properties:
 * <ul>
 * 
 * <li>LandedPrice: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 * <li>ListingPrice: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 * <li>Shipping: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType</li>
 * <li>Points: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelPriceType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('LandedPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'ListingPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'Shipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'Points' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the LandedPrice property.
     *
     * @return MoneyType LandedPrice.
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }
    /**
     * Set the value of the LandedPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType landedPrice
     * @return $this 
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set.
     */
    public function isSetLandedPrice()
    {
        return !is_null($this->_fields['LandedPrice']['FieldValue']);
    }
    /**
     * Set the value of LandedPrice, return this.
     *
     * @param landedPrice
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);
        return $this;
    }
    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }
    /**
     * Set the value of the ListingPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType listingPrice
     * @return $this 
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
        return !is_null($this->_fields['ListingPrice']['FieldValue']);
    }
    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }
    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }
    /**
     * Set the value of the Shipping property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType shipping
     * @return $this 
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
        return !is_null($this->_fields['Shipping']['FieldValue']);
    }
    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }
    /**
     * Get the value of the Points property.
     *
     * @return Points Points.
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }
    /**
     * Set the value of the Points property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints points
     * @return $this 
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set.
     */
    public function isSetPoints()
    {
        return !is_null($this->_fields['Points']['FieldValue']);
    }
    /**
     * Set the value of Points, return this.
     *
     * @param points
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPoints($value)
    {
        $this->setPoints($value);
        return $this;
    }
}