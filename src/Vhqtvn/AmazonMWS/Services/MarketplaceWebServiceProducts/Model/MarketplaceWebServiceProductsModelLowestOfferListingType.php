<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingType
 * 
 * Properties:
 * <ul>
 * 
 * <li>Qualifiers: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType</li>
 * <li>NumberOfOfferListingsConsidered: int</li>
 * <li>SellerFeedbackCount: int</li>
 * <li>Price: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType</li>
 * <li>MultipleOffersAtLowestPrice: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelLowestOfferListingType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Qualifiers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType::class), 'NumberOfOfferListingsConsidered' => array('FieldValue' => null, 'FieldType' => 'int'), 'SellerFeedbackCount' => array('FieldValue' => null, 'FieldType' => 'int'), 'Price' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType::class), 'MultipleOffersAtLowestPrice' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Qualifiers property.
     *
     * @return QualifiersType Qualifiers.
     */
    public function getQualifiers()
    {
        return $this->_fields['Qualifiers']['FieldValue'];
    }
    /**
     * Set the value of the Qualifiers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType qualifiers
     * @return $this 
     */
    public function setQualifiers($value)
    {
        $this->_fields['Qualifiers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Qualifiers is set.
     *
     * @return true if Qualifiers is set.
     */
    public function isSetQualifiers()
    {
        return !is_null($this->_fields['Qualifiers']['FieldValue']);
    }
    /**
     * Set the value of Qualifiers, return this.
     *
     * @param qualifiers
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQualifiers($value)
    {
        $this->setQualifiers($value);
        return $this;
    }
    /**
     * Get the value of the NumberOfOfferListingsConsidered property.
     *
     * @return Integer NumberOfOfferListingsConsidered.
     */
    public function getNumberOfOfferListingsConsidered()
    {
        return $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfOfferListingsConsidered property.
     *
     * @param int numberOfOfferListingsConsidered
     * @return $this 
     */
    public function setNumberOfOfferListingsConsidered($value)
    {
        $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfOfferListingsConsidered is set.
     *
     * @return true if NumberOfOfferListingsConsidered is set.
     */
    public function isSetNumberOfOfferListingsConsidered()
    {
        return !is_null($this->_fields['NumberOfOfferListingsConsidered']['FieldValue']);
    }
    /**
     * Set the value of NumberOfOfferListingsConsidered, return this.
     *
     * @param numberOfOfferListingsConsidered
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNumberOfOfferListingsConsidered($value)
    {
        $this->setNumberOfOfferListingsConsidered($value);
        return $this;
    }
    /**
     * Get the value of the SellerFeedbackCount property.
     *
     * @return int SellerFeedbackCount.
     */
    public function getSellerFeedbackCount()
    {
        return $this->_fields['SellerFeedbackCount']['FieldValue'];
    }
    /**
     * Set the value of the SellerFeedbackCount property.
     *
     * @param int sellerFeedbackCount
     * @return $this 
     */
    public function setSellerFeedbackCount($value)
    {
        $this->_fields['SellerFeedbackCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFeedbackCount is set.
     *
     * @return true if SellerFeedbackCount is set.
     */
    public function isSetSellerFeedbackCount()
    {
        return !is_null($this->_fields['SellerFeedbackCount']['FieldValue']);
    }
    /**
     * Set the value of SellerFeedbackCount, return this.
     *
     * @param sellerFeedbackCount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerFeedbackCount($value)
    {
        $this->setSellerFeedbackCount($value);
        return $this;
    }
    /**
     * Get the value of the Price property.
     *
     * @return PriceType Price.
     */
    public function getPrice()
    {
        return $this->_fields['Price']['FieldValue'];
    }
    /**
     * Set the value of the Price property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType price
     * @return $this 
     */
    public function setPrice($value)
    {
        $this->_fields['Price']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Price is set.
     *
     * @return true if Price is set.
     */
    public function isSetPrice()
    {
        return !is_null($this->_fields['Price']['FieldValue']);
    }
    /**
     * Set the value of Price, return this.
     *
     * @param price
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPrice($value)
    {
        $this->setPrice($value);
        return $this;
    }
    /**
     * Get the value of the MultipleOffersAtLowestPrice property.
     *
     * @return String MultipleOffersAtLowestPrice.
     */
    public function getMultipleOffersAtLowestPrice()
    {
        return $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'];
    }
    /**
     * Set the value of the MultipleOffersAtLowestPrice property.
     *
     * @param string multipleOffersAtLowestPrice
     * @return $this 
     */
    public function setMultipleOffersAtLowestPrice($value)
    {
        $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MultipleOffersAtLowestPrice is set.
     *
     * @return true if MultipleOffersAtLowestPrice is set.
     */
    public function isSetMultipleOffersAtLowestPrice()
    {
        return !is_null($this->_fields['MultipleOffersAtLowestPrice']['FieldValue']);
    }
    /**
     * Set the value of MultipleOffersAtLowestPrice, return this.
     *
     * @param multipleOffersAtLowestPrice
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMultipleOffersAtLowestPrice($value)
    {
        $this->setMultipleOffersAtLowestPrice($value);
        return $this;
    }
}