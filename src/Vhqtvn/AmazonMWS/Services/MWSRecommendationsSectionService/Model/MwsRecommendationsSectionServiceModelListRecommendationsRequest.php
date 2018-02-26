<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsRequest
 * 
 * @property	string	$MarketplaceId
 * @property	string	$MWSAuthToken
 * @property	string	$SellerId
 * @property	string	$RecommendationCategory
 * @property	array	$CategoryQueryList
 */
class MwsRecommendationsSectionServiceModelListRecommendationsRequest extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecommendationCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'CategoryQueryList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelCategoryQuery::class), 'ListMemberName' => 'CategoryQuery'));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this 
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }
    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this 
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param string $SellerId
     * @return $this
     */
    public function withSellerId($SellerId)
    {
        $this->setSellerId($SellerId);
        return $this;
    }
    /**
     * Get the value of the RecommendationCategory property.
     *
     * @return String RecommendationCategory.
     */
    public function getRecommendationCategory()
    {
        return $this->_fields['RecommendationCategory']['FieldValue'];
    }
    /**
     * Set the value of the RecommendationCategory property.
     *
     * @param string recommendationCategory
     * @return $this 
     */
    public function setRecommendationCategory($value)
    {
        $this->_fields['RecommendationCategory']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecommendationCategory is set.
     *
     * @return true if RecommendationCategory is set.
     */
    public function isSetRecommendationCategory()
    {
        return !is_null($this->_fields['RecommendationCategory']['FieldValue']);
    }
    /**
     * Set the value of RecommendationCategory, return this.
     *
     * @param string $RecommendationCategory
     * @return $this
     */
    public function withRecommendationCategory($RecommendationCategory)
    {
        $this->setRecommendationCategory($RecommendationCategory);
        return $this;
    }
    /**
     * Get the value of the CategoryQueryList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelCategoryQuery[] CategoryQueryList.
     */
    public function getCategoryQueryList()
    {
        if ($this->_fields['CategoryQueryList']['FieldValue'] == null) {
            $this->_fields['CategoryQueryList']['FieldValue'] = array();
        }
        return $this->_fields['CategoryQueryList']['FieldValue'];
    }
    /**
     * Set the value of the CategoryQueryList property.
     *
     * @param array categoryQueryList
     * @return $this 
     */
    public function setCategoryQueryList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['CategoryQueryList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear CategoryQueryList.
     */
    public function unsetCategoryQueryList()
    {
        $this->_fields['CategoryQueryList']['FieldValue'] = array();
    }
    /**
     * Check to see if CategoryQueryList is set.
     *
     * @return true if CategoryQueryList is set.
     */
    public function isSetCategoryQueryList()
    {
        return !empty($this->_fields['CategoryQueryList']['FieldValue']);
    }
    /**
     * Add values for CategoryQueryList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelCategoryQuery[] $CategoryQueryList_array,...
     * @return $this
     */
    public function withCategoryQueryList(...$CategoryQueryList_array)
    {
        foreach ($CategoryQueryList_array as $CategoryQueryList) {
            $this->_fields['CategoryQueryList']['FieldValue'][] = $CategoryQueryList;
        }
        return $this;
    }
}