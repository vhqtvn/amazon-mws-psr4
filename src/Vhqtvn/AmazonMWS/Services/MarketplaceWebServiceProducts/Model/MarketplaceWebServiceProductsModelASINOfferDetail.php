<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINOfferDetail
 * 
 * @property	string	$SubCondition
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType	$SellerFeedbackRating
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType	$ShippingTime
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$ListingPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints	$Points
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$Shipping
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType	$ShipsFrom
 * @property	bool	$IsFulfilledByAmazon
 * @property	bool	$IsBuyBoxWinner
 * @property	bool	$IsFeaturedMerchant
 */
class MarketplaceWebServiceProductsModelASINOfferDetail extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SubCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFeedbackRating' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType::class), 'ShippingTime' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType::class), 'ListingPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'Points' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints::class), 'Shipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'ShipsFrom' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType::class), 'IsFulfilledByAmazon' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IsBuyBoxWinner' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IsFeaturedMerchant' => array('FieldValue' => null, 'FieldType' => 'bool'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SubCondition property.
     *
     * @return String SubCondition.
     */
    public function getSubCondition()
    {
        return $this->_fields['SubCondition']['FieldValue'];
    }
    /**
     * Set the value of the SubCondition property.
     *
     * @param string subCondition
     * @return $this 
     */
    public function setSubCondition($value)
    {
        $this->_fields['SubCondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SubCondition is set.
     *
     * @return true if SubCondition is set.
     */
    public function isSetSubCondition()
    {
        return !is_null($this->_fields['SubCondition']['FieldValue']);
    }
    /**
     * Set the value of SubCondition, return this.
     *
     * @param subCondition
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSubCondition($value)
    {
        $this->setSubCondition($value);
        return $this;
    }
    /**
     * Get the value of the SellerFeedbackRating property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType SellerFeedbackRating.
     */
    public function getSellerFeedbackRating()
    {
        return $this->_fields['SellerFeedbackRating']['FieldValue'];
    }
    /**
     * Set the value of the SellerFeedbackRating property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType sellerFeedbackRating
     * @return $this 
     */
    public function setSellerFeedbackRating($value)
    {
        $this->_fields['SellerFeedbackRating']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFeedbackRating is set.
     *
     * @return true if SellerFeedbackRating is set.
     */
    public function isSetSellerFeedbackRating()
    {
        return !is_null($this->_fields['SellerFeedbackRating']['FieldValue']);
    }
    /**
     * Set the value of SellerFeedbackRating, return this.
     *
     * @param sellerFeedbackRating
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerFeedbackRating($value)
    {
        $this->setSellerFeedbackRating($value);
        return $this;
    }
    /**
     * Get the value of the ShippingTime property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType ShippingTime.
     */
    public function getShippingTime()
    {
        return $this->_fields['ShippingTime']['FieldValue'];
    }
    /**
     * Set the value of the ShippingTime property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType shippingTime
     * @return $this 
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
     * @param shippingTime
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShippingTime($value)
    {
        $this->setShippingTime($value);
        return $this;
    }
    /**
     * Get the value of the ListingPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType ListingPrice.
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
     * Get the value of the Points property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints Points.
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
    /**
     * Get the value of the Shipping property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType Shipping.
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
     * Get the value of the ShipsFrom property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType ShipsFrom.
     */
    public function getShipsFrom()
    {
        return $this->_fields['ShipsFrom']['FieldValue'];
    }
    /**
     * Set the value of the ShipsFrom property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType shipsFrom
     * @return $this 
     */
    public function setShipsFrom($value)
    {
        $this->_fields['ShipsFrom']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipsFrom is set.
     *
     * @return true if ShipsFrom is set.
     */
    public function isSetShipsFrom()
    {
        return !is_null($this->_fields['ShipsFrom']['FieldValue']);
    }
    /**
     * Set the value of ShipsFrom, return this.
     *
     * @param shipsFrom
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipsFrom($value)
    {
        $this->setShipsFrom($value);
        return $this;
    }
    /**
     * Check the value of IsFulfilledByAmazon.
     *
     * @return true if IsFulfilledByAmazon is set to true.
     */
    public function isIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }
    /**
     * Get the value of the IsFulfilledByAmazon property.
     *
     * @return boolean IsFulfilledByAmazon.
     */
    public function getIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }
    /**
     * Set the value of the IsFulfilledByAmazon property.
     *
     * @param bool isFulfilledByAmazon
     * @return $this 
     */
    public function setIsFulfilledByAmazon($value)
    {
        $this->_fields['IsFulfilledByAmazon']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsFulfilledByAmazon is set.
     *
     * @return true if IsFulfilledByAmazon is set.
     */
    public function isSetIsFulfilledByAmazon()
    {
        return !is_null($this->_fields['IsFulfilledByAmazon']['FieldValue']);
    }
    /**
     * Set the value of IsFulfilledByAmazon, return this.
     *
     * @param isFulfilledByAmazon
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsFulfilledByAmazon($value)
    {
        $this->setIsFulfilledByAmazon($value);
        return $this;
    }
    /**
     * Check the value of IsBuyBoxWinner.
     *
     * @return true if IsBuyBoxWinner is set to true.
     */
    public function isIsBuyBoxWinner()
    {
        return !is_null($this->_fields['IsBuyBoxWinner']['FieldValue']) && $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }
    /**
     * Get the value of the IsBuyBoxWinner property.
     *
     * @return Boolean IsBuyBoxWinner.
     */
    public function getIsBuyBoxWinner()
    {
        return $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }
    /**
     * Set the value of the IsBuyBoxWinner property.
     *
     * @param bool isBuyBoxWinner
     * @return $this 
     */
    public function setIsBuyBoxWinner($value)
    {
        $this->_fields['IsBuyBoxWinner']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsBuyBoxWinner is set.
     *
     * @return true if IsBuyBoxWinner is set.
     */
    public function isSetIsBuyBoxWinner()
    {
        return !is_null($this->_fields['IsBuyBoxWinner']['FieldValue']);
    }
    /**
     * Set the value of IsBuyBoxWinner, return this.
     *
     * @param isBuyBoxWinner
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsBuyBoxWinner($value)
    {
        $this->setIsBuyBoxWinner($value);
        return $this;
    }
    /**
     * Check the value of IsFeaturedMerchant.
     *
     * @return true if IsFeaturedMerchant is set to true.
     */
    public function isIsFeaturedMerchant()
    {
        return !is_null($this->_fields['IsFeaturedMerchant']['FieldValue']) && $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }
    /**
     * Get the value of the IsFeaturedMerchant property.
     *
     * @return Boolean IsFeaturedMerchant.
     */
    public function getIsFeaturedMerchant()
    {
        return $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }
    /**
     * Set the value of the IsFeaturedMerchant property.
     *
     * @param bool isFeaturedMerchant
     * @return $this 
     */
    public function setIsFeaturedMerchant($value)
    {
        $this->_fields['IsFeaturedMerchant']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsFeaturedMerchant is set.
     *
     * @return true if IsFeaturedMerchant is set.
     */
    public function isSetIsFeaturedMerchant()
    {
        return !is_null($this->_fields['IsFeaturedMerchant']['FieldValue']);
    }
    /**
     * Set the value of IsFeaturedMerchant, return this.
     *
     * @param isFeaturedMerchant
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsFeaturedMerchant($value)
    {
        $this->setIsFeaturedMerchant($value);
        return $this;
    }
}