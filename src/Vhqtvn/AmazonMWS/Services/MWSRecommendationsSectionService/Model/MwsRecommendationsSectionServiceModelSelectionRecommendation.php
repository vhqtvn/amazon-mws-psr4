<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelSelectionRecommendation
 * 
 * @property	string	$LastUpdated
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier	$ItemIdentifier
 * @property	string	$ItemName
 * @property	string	$BrandName
 * @property	string	$ProductCategory
 * @property	int	$SalesRank
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice	$BuyboxPrice
 * @property	int	$NumberOfOffers
 * @property	float	$AverageCustomerReview
 * @property	int	$NumberOfCustomerReviews
 * @property	string	$RecommendationId
 * @property	string	$RecommendationReason
 */
class MwsRecommendationsSectionServiceModelSelectionRecommendation extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('LastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier::class), 'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'), 'BrandName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProductCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'SalesRank' => array('FieldValue' => null, 'FieldType' => 'int'), 'BuyboxPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice::class), 'NumberOfOffers' => array('FieldValue' => null, 'FieldType' => 'int'), 'AverageCustomerReview' => array('FieldValue' => null, 'FieldType' => 'float'), 'NumberOfCustomerReviews' => array('FieldValue' => null, 'FieldType' => 'int'), 'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the LastUpdated property.
     *
     * @return \DateTime LastUpdated.
     */
    public function getLastUpdated()
    {
        return $this->_fields['LastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdated property.
     *
     * @param string lastUpdated
     * @return $this instance
     */
    public function setLastUpdated($value)
    {
        $this->_fields['LastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdated is set.
     *
     * @return true if LastUpdated is set.
     */
    public function isSetLastUpdated()
    {
        return !is_null($this->_fields['LastUpdated']['FieldValue']);
    }
    /**
     * Set the value of LastUpdated, return this.
     *
     * @param string $LastUpdated
     * @return $this
     */
    public function withLastUpdated($LastUpdated)
    {
        $this->setLastUpdated($LastUpdated);
        return $this;
    }
    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier ItemIdentifier.
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }
    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier itemIdentifier
     * @return $this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set.
     */
    public function isSetItemIdentifier()
    {
        return !is_null($this->_fields['ItemIdentifier']['FieldValue']);
    }
    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier $ItemIdentifier
     * @return $this
     */
    public function withItemIdentifier($ItemIdentifier)
    {
        $this->setItemIdentifier($ItemIdentifier);
        return $this;
    }
    /**
     * Get the value of the ItemName property.
     *
     * @return \string ItemName.
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }
    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @return $this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set.
     */
    public function isSetItemName()
    {
        return !is_null($this->_fields['ItemName']['FieldValue']);
    }
    /**
     * Set the value of ItemName, return this.
     *
     * @param string $ItemName
     * @return $this
     */
    public function withItemName($ItemName)
    {
        $this->setItemName($ItemName);
        return $this;
    }
    /**
     * Get the value of the BrandName property.
     *
     * @return \string BrandName.
     */
    public function getBrandName()
    {
        return $this->_fields['BrandName']['FieldValue'];
    }
    /**
     * Set the value of the BrandName property.
     *
     * @param string brandName
     * @return $this instance
     */
    public function setBrandName($value)
    {
        $this->_fields['BrandName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BrandName is set.
     *
     * @return true if BrandName is set.
     */
    public function isSetBrandName()
    {
        return !is_null($this->_fields['BrandName']['FieldValue']);
    }
    /**
     * Set the value of BrandName, return this.
     *
     * @param string $BrandName
     * @return $this
     */
    public function withBrandName($BrandName)
    {
        $this->setBrandName($BrandName);
        return $this;
    }
    /**
     * Get the value of the ProductCategory property.
     *
     * @return \string ProductCategory.
     */
    public function getProductCategory()
    {
        return $this->_fields['ProductCategory']['FieldValue'];
    }
    /**
     * Set the value of the ProductCategory property.
     *
     * @param string productCategory
     * @return $this instance
     */
    public function setProductCategory($value)
    {
        $this->_fields['ProductCategory']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProductCategory is set.
     *
     * @return true if ProductCategory is set.
     */
    public function isSetProductCategory()
    {
        return !is_null($this->_fields['ProductCategory']['FieldValue']);
    }
    /**
     * Set the value of ProductCategory, return this.
     *
     * @param string $ProductCategory
     * @return $this
     */
    public function withProductCategory($ProductCategory)
    {
        $this->setProductCategory($ProductCategory);
        return $this;
    }
    /**
     * Get the value of the SalesRank property.
     *
     * @return \int SalesRank.
     */
    public function getSalesRank()
    {
        return $this->_fields['SalesRank']['FieldValue'];
    }
    /**
     * Set the value of the SalesRank property.
     *
     * @param int salesRank
     * @return $this instance
     */
    public function setSalesRank($value)
    {
        $this->_fields['SalesRank']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesRank is set.
     *
     * @return true if SalesRank is set.
     */
    public function isSetSalesRank()
    {
        return !is_null($this->_fields['SalesRank']['FieldValue']);
    }
    /**
     * Set the value of SalesRank, return this.
     *
     * @param int $SalesRank
     * @return $this
     */
    public function withSalesRank($SalesRank)
    {
        $this->setSalesRank($SalesRank);
        return $this;
    }
    /**
     * Get the value of the BuyboxPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice BuyboxPrice.
     */
    public function getBuyboxPrice()
    {
        return $this->_fields['BuyboxPrice']['FieldValue'];
    }
    /**
     * Set the value of the BuyboxPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice buyboxPrice
     * @return $this instance
     */
    public function setBuyboxPrice($value)
    {
        $this->_fields['BuyboxPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyboxPrice is set.
     *
     * @return true if BuyboxPrice is set.
     */
    public function isSetBuyboxPrice()
    {
        return !is_null($this->_fields['BuyboxPrice']['FieldValue']);
    }
    /**
     * Set the value of BuyboxPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice $BuyboxPrice
     * @return $this
     */
    public function withBuyboxPrice($BuyboxPrice)
    {
        $this->setBuyboxPrice($BuyboxPrice);
        return $this;
    }
    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return \int NumberOfOffers.
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param int numberOfOffers
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
     * @param int $NumberOfOffers
     * @return $this
     */
    public function withNumberOfOffers($NumberOfOffers)
    {
        $this->setNumberOfOffers($NumberOfOffers);
        return $this;
    }
    /**
     * Get the value of the AverageCustomerReview property.
     *
     * @return \float AverageCustomerReview.
     */
    public function getAverageCustomerReview()
    {
        return $this->_fields['AverageCustomerReview']['FieldValue'];
    }
    /**
     * Set the value of the AverageCustomerReview property.
     *
     * @param float averageCustomerReview
     * @return $this instance
     */
    public function setAverageCustomerReview($value)
    {
        $this->_fields['AverageCustomerReview']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AverageCustomerReview is set.
     *
     * @return true if AverageCustomerReview is set.
     */
    public function isSetAverageCustomerReview()
    {
        return !is_null($this->_fields['AverageCustomerReview']['FieldValue']);
    }
    /**
     * Set the value of AverageCustomerReview, return this.
     *
     * @param float $AverageCustomerReview
     * @return $this
     */
    public function withAverageCustomerReview($AverageCustomerReview)
    {
        $this->setAverageCustomerReview($AverageCustomerReview);
        return $this;
    }
    /**
     * Get the value of the NumberOfCustomerReviews property.
     *
     * @return \int NumberOfCustomerReviews.
     */
    public function getNumberOfCustomerReviews()
    {
        return $this->_fields['NumberOfCustomerReviews']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfCustomerReviews property.
     *
     * @param int numberOfCustomerReviews
     * @return $this instance
     */
    public function setNumberOfCustomerReviews($value)
    {
        $this->_fields['NumberOfCustomerReviews']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfCustomerReviews is set.
     *
     * @return true if NumberOfCustomerReviews is set.
     */
    public function isSetNumberOfCustomerReviews()
    {
        return !is_null($this->_fields['NumberOfCustomerReviews']['FieldValue']);
    }
    /**
     * Set the value of NumberOfCustomerReviews, return this.
     *
     * @param int $NumberOfCustomerReviews
     * @return $this
     */
    public function withNumberOfCustomerReviews($NumberOfCustomerReviews)
    {
        $this->setNumberOfCustomerReviews($NumberOfCustomerReviews);
        return $this;
    }
    /**
     * Get the value of the RecommendationId property.
     *
     * @return \string RecommendationId.
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }
    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @return $this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set.
     */
    public function isSetRecommendationId()
    {
        return !is_null($this->_fields['RecommendationId']['FieldValue']);
    }
    /**
     * Set the value of RecommendationId, return this.
     *
     * @param string $RecommendationId
     * @return $this
     */
    public function withRecommendationId($RecommendationId)
    {
        $this->setRecommendationId($RecommendationId);
        return $this;
    }
    /**
     * Get the value of the RecommendationReason property.
     *
     * @return \string RecommendationReason.
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }
    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @return $this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set.
     */
    public function isSetRecommendationReason()
    {
        return !is_null($this->_fields['RecommendationReason']['FieldValue']);
    }
    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param string $RecommendationReason
     * @return $this
     */
    public function withRecommendationReason($RecommendationReason)
    {
        $this->setRecommendationReason($RecommendationReason);
        return $this;
    }
}