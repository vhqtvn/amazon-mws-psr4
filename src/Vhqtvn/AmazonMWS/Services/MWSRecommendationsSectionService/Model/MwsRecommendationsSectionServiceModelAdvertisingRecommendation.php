<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelAdvertisingRecommendation
 * 
 * @property	string	$LastUpdated
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier	$ItemIdentifier
 * @property	string	$ItemName
 * @property	string	$BrandName
 * @property	string	$ProductCategory
 * @property	int	$SalesRank
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice	$YourPricePlusShipping
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice	$LowestPricePlusShipping
 * @property	int	$AvailableQuantity
 * @property	int	$SalesForTheLast30Days
 * @property	string	$RecommendationId
 * @property	string	$RecommendationReason
 */
class MwsRecommendationsSectionServiceModelAdvertisingRecommendation extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('LastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier::class), 'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'), 'BrandName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProductCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'SalesRank' => array('FieldValue' => null, 'FieldType' => 'int'), 'YourPricePlusShipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice::class), 'LowestPricePlusShipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice::class), 'AvailableQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'SalesForTheLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'), 'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the YourPricePlusShipping property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice YourPricePlusShipping.
     */
    public function getYourPricePlusShipping()
    {
        return $this->_fields['YourPricePlusShipping']['FieldValue'];
    }
    /**
     * Set the value of the YourPricePlusShipping property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice yourPricePlusShipping
     * @return $this instance
     */
    public function setYourPricePlusShipping($value)
    {
        $this->_fields['YourPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if YourPricePlusShipping is set.
     *
     * @return true if YourPricePlusShipping is set.
     */
    public function isSetYourPricePlusShipping()
    {
        return !is_null($this->_fields['YourPricePlusShipping']['FieldValue']);
    }
    /**
     * Set the value of YourPricePlusShipping, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice $YourPricePlusShipping
     * @return $this
     */
    public function withYourPricePlusShipping($YourPricePlusShipping)
    {
        $this->setYourPricePlusShipping($YourPricePlusShipping);
        return $this;
    }
    /**
     * Get the value of the LowestPricePlusShipping property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice LowestPricePlusShipping.
     */
    public function getLowestPricePlusShipping()
    {
        return $this->_fields['LowestPricePlusShipping']['FieldValue'];
    }
    /**
     * Set the value of the LowestPricePlusShipping property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice lowestPricePlusShipping
     * @return $this instance
     */
    public function setLowestPricePlusShipping($value)
    {
        $this->_fields['LowestPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LowestPricePlusShipping is set.
     *
     * @return true if LowestPricePlusShipping is set.
     */
    public function isSetLowestPricePlusShipping()
    {
        return !is_null($this->_fields['LowestPricePlusShipping']['FieldValue']);
    }
    /**
     * Set the value of LowestPricePlusShipping, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPrice $LowestPricePlusShipping
     * @return $this
     */
    public function withLowestPricePlusShipping($LowestPricePlusShipping)
    {
        $this->setLowestPricePlusShipping($LowestPricePlusShipping);
        return $this;
    }
    /**
     * Get the value of the AvailableQuantity property.
     *
     * @return \int AvailableQuantity.
     */
    public function getAvailableQuantity()
    {
        return $this->_fields['AvailableQuantity']['FieldValue'];
    }
    /**
     * Set the value of the AvailableQuantity property.
     *
     * @param int availableQuantity
     * @return $this instance
     */
    public function setAvailableQuantity($value)
    {
        $this->_fields['AvailableQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AvailableQuantity is set.
     *
     * @return true if AvailableQuantity is set.
     */
    public function isSetAvailableQuantity()
    {
        return !is_null($this->_fields['AvailableQuantity']['FieldValue']);
    }
    /**
     * Set the value of AvailableQuantity, return this.
     *
     * @param int $AvailableQuantity
     * @return $this
     */
    public function withAvailableQuantity($AvailableQuantity)
    {
        $this->setAvailableQuantity($AvailableQuantity);
        return $this;
    }
    /**
     * Get the value of the SalesForTheLast30Days property.
     *
     * @return \int SalesForTheLast30Days.
     */
    public function getSalesForTheLast30Days()
    {
        return $this->_fields['SalesForTheLast30Days']['FieldValue'];
    }
    /**
     * Set the value of the SalesForTheLast30Days property.
     *
     * @param int salesForTheLast30Days
     * @return $this instance
     */
    public function setSalesForTheLast30Days($value)
    {
        $this->_fields['SalesForTheLast30Days']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesForTheLast30Days is set.
     *
     * @return true if SalesForTheLast30Days is set.
     */
    public function isSetSalesForTheLast30Days()
    {
        return !is_null($this->_fields['SalesForTheLast30Days']['FieldValue']);
    }
    /**
     * Set the value of SalesForTheLast30Days, return this.
     *
     * @param int $SalesForTheLast30Days
     * @return $this
     */
    public function withSalesForTheLast30Days($SalesForTheLast30Days)
    {
        $this->setSalesForTheLast30Days($SalesForTheLast30Days);
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