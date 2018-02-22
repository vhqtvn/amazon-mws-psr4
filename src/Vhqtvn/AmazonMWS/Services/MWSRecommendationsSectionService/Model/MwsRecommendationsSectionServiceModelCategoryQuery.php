<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelCategoryQuery
 * 
 * Properties:
 * <ul>
 * 
 * <li>RecommendationCategory: string</li>
 * <li>FilterOptions: array</li>
 *
 * </ul>
 */
class MwsRecommendationsSectionServiceModelCategoryQuery extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('RecommendationCategory' => array('FieldValue' => null, 'FieldType' => 'string'), 'FilterOptions' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'FilterOption'));
        parent::__construct($data);
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
     * @param recommendationCategory
     *             The new value to set.
     *
     * @return $this .
     */
    public function withRecommendationCategory($value)
    {
        $this->setRecommendationCategory($value);
        return $this;
    }
    /**
     * Get the value of the FilterOptions property.
     *
     * @return List<String> FilterOptions.
     */
    public function getFilterOptions()
    {
        if ($this->_fields['FilterOptions']['FieldValue'] == null) {
            $this->_fields['FilterOptions']['FieldValue'] = array();
        }
        return $this->_fields['FilterOptions']['FieldValue'];
    }
    /**
     * Set the value of the FilterOptions property.
     *
     * @param array filterOptions
     * @return $this 
     */
    public function setFilterOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FilterOptions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FilterOptions.
     */
    public function unsetFilterOptions()
    {
        $this->_fields['FilterOptions']['FieldValue'] = array();
    }
    /**
     * Check to see if FilterOptions is set.
     *
     * @return true if FilterOptions is set.
     */
    public function isSetFilterOptions()
    {
        return !empty($this->_fields['FilterOptions']['FieldValue']);
    }
    /**
     * Add values for FilterOptions, return this.
     *
     * @param filterOptions
     *             New values to add.
     *
     * @return $this .
     */
    public function withFilterOptions()
    {
        foreach (func_get_args() as $FilterOptions) {
            $this->_fields['FilterOptions']['FieldValue'][] = $FilterOptions;
        }
        return $this;
    }
}