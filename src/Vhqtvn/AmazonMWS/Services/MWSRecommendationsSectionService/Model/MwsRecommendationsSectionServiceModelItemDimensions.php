<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelItemDimensions
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure	$Height
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure	$Width
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure	$Length
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelWeightMeasure	$Weight
 */
class MwsRecommendationsSectionServiceModelItemDimensions extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Height' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure::class), 'Width' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure::class), 'Length' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure::class), 'Weight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelWeightMeasure::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Height property.
     *
     * @return DimensionMeasure Height.
     */
    public function getHeight()
    {
        return $this->_fields['Height']['FieldValue'];
    }
    /**
     * Set the value of the Height property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure height
     * @return $this 
     */
    public function setHeight($value)
    {
        $this->_fields['Height']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Height is set.
     *
     * @return true if Height is set.
     */
    public function isSetHeight()
    {
        return !is_null($this->_fields['Height']['FieldValue']);
    }
    /**
     * Set the value of Height, return this.
     *
     * @param height
     *             The new value to set.
     *
     * @return $this .
     */
    public function withHeight($value)
    {
        $this->setHeight($value);
        return $this;
    }
    /**
     * Get the value of the Width property.
     *
     * @return DimensionMeasure Width.
     */
    public function getWidth()
    {
        return $this->_fields['Width']['FieldValue'];
    }
    /**
     * Set the value of the Width property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure width
     * @return $this 
     */
    public function setWidth($value)
    {
        $this->_fields['Width']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Width is set.
     *
     * @return true if Width is set.
     */
    public function isSetWidth()
    {
        return !is_null($this->_fields['Width']['FieldValue']);
    }
    /**
     * Set the value of Width, return this.
     *
     * @param width
     *             The new value to set.
     *
     * @return $this .
     */
    public function withWidth($value)
    {
        $this->setWidth($value);
        return $this;
    }
    /**
     * Get the value of the Length property.
     *
     * @return DimensionMeasure Length.
     */
    public function getLength()
    {
        return $this->_fields['Length']['FieldValue'];
    }
    /**
     * Set the value of the Length property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelDimensionMeasure length
     * @return $this 
     */
    public function setLength($value)
    {
        $this->_fields['Length']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Length is set.
     *
     * @return true if Length is set.
     */
    public function isSetLength()
    {
        return !is_null($this->_fields['Length']['FieldValue']);
    }
    /**
     * Set the value of Length, return this.
     *
     * @param length
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLength($value)
    {
        $this->setLength($value);
        return $this;
    }
    /**
     * Get the value of the Weight property.
     *
     * @return WeightMeasure Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }
    /**
     * Set the value of the Weight property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelWeightMeasure weight
     * @return $this 
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set.
     */
    public function isSetWeight()
    {
        return !is_null($this->_fields['Weight']['FieldValue']);
    }
    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set.
     *
     * @return $this .
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }
}