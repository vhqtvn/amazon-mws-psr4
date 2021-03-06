<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSKUOfferDetail
 * 
 * @property	bool	$MyOffer
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
class MarketplaceWebServiceProductsModelSKUOfferDetail extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MyOffer' => array('FieldValue' => null, 'FieldType' => 'bool'), 'SubCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerFeedbackRating' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType::class), 'ShippingTime' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType::class), 'ListingPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'Points' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints::class), 'Shipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'ShipsFrom' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType::class), 'IsFulfilledByAmazon' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IsBuyBoxWinner' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IsFeaturedMerchant' => array('FieldValue' => null, 'FieldType' => 'bool'));
        parent::__construct($data);
    }
    /**
     * Check the value of MyOffer.
     *
     * @return true if MyOffer is set to true.
     */
    public function isMyOffer()
    {
        return $this->_fields['MyOffer']['FieldValue'];
    }
    /**
     * Get the value of the MyOffer property.
     *
     * @return boolean MyOffer.
     */
    public function getMyOffer()
    {
        return $this->_fields['MyOffer']['FieldValue'];
    }
    /**
     * Set the value of the MyOffer property.
     *
     * @param bool myOffer
     * @return $this instance
     */
    public function setMyOffer($value)
    {
        $this->_fields['MyOffer']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MyOffer is set.
     *
     * @return true if MyOffer is set.
     */
    public function isSetMyOffer()
    {
        return !is_null($this->_fields['MyOffer']['FieldValue']);
    }
    /**
     * Set the value of MyOffer, return this.
     *
     * @param bool $MyOffer
     * @return $this
     */
    public function withMyOffer($MyOffer)
    {
        $this->setMyOffer($MyOffer);
        return $this;
    }
    /**
     * Get the value of the SubCondition property.
     *
     * @return \string SubCondition.
     */
    public function getSubCondition()
    {
        return $this->_fields['SubCondition']['FieldValue'];
    }
    /**
     * Set the value of the SubCondition property.
     *
     * @param string subCondition
     * @return $this instance
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
     * @param string $SubCondition
     * @return $this
     */
    public function withSubCondition($SubCondition)
    {
        $this->setSubCondition($SubCondition);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType $SellerFeedbackRating
     * @return $this
     */
    public function withSellerFeedbackRating($SellerFeedbackRating)
    {
        $this->setSellerFeedbackRating($SellerFeedbackRating);
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType $ShippingTime
     * @return $this
     */
    public function withShippingTime($ShippingTime)
    {
        $this->setShippingTime($ShippingTime);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $ListingPrice
     * @return $this
     */
    public function withListingPrice($ListingPrice)
    {
        $this->setListingPrice($ListingPrice);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints $Points
     * @return $this
     */
    public function withPoints($Points)
    {
        $this->setPoints($Points);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $Shipping
     * @return $this
     */
    public function withShipping($Shipping)
    {
        $this->setShipping($Shipping);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType $ShipsFrom
     * @return $this
     */
    public function withShipsFrom($ShipsFrom)
    {
        $this->setShipsFrom($ShipsFrom);
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
     * @return $this instance
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
     * @param bool $IsFulfilledByAmazon
     * @return $this
     */
    public function withIsFulfilledByAmazon($IsFulfilledByAmazon)
    {
        $this->setIsFulfilledByAmazon($IsFulfilledByAmazon);
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
     * @return \bool IsBuyBoxWinner.
     */
    public function getIsBuyBoxWinner()
    {
        return $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }
    /**
     * Set the value of the IsBuyBoxWinner property.
     *
     * @param bool isBuyBoxWinner
     * @return $this instance
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
     * @param bool $IsBuyBoxWinner
     * @return $this
     */
    public function withIsBuyBoxWinner($IsBuyBoxWinner)
    {
        $this->setIsBuyBoxWinner($IsBuyBoxWinner);
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
     * @return \bool IsFeaturedMerchant.
     */
    public function getIsFeaturedMerchant()
    {
        return $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }
    /**
     * Set the value of the IsFeaturedMerchant property.
     *
     * @param bool isFeaturedMerchant
     * @return $this instance
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
     * @param bool $IsFeaturedMerchant
     * @return $this
     */
    public function withIsFeaturedMerchant($IsFeaturedMerchant)
    {
        $this->setIsFeaturedMerchant($IsFeaturedMerchant);
        return $this;
    }
}