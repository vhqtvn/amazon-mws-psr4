<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListingQualityRecommendation
 * 
 * @property	string	$QualitySet
 * @property	string	$DefectGroup
 * @property	string	$DefectAttribute
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier	$ItemIdentifier
 * @property	string	$ItemName
 * @property	string	$RecommendationId
 * @property	string	$RecommendationReason
 */
class MwsRecommendationsSectionServiceModelListingQualityRecommendation extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('QualitySet' => array('FieldValue' => null, 'FieldType' => 'string'), 'DefectGroup' => array('FieldValue' => null, 'FieldType' => 'string'), 'DefectAttribute' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier::class), 'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the QualitySet property.
     *
     * @return \string QualitySet.
     */
    public function getQualitySet()
    {
        return $this->_fields['QualitySet']['FieldValue'];
    }
    /**
     * Set the value of the QualitySet property.
     *
     * @param string qualitySet
     * @return $this instance
     */
    public function setQualitySet($value)
    {
        $this->_fields['QualitySet']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QualitySet is set.
     *
     * @return true if QualitySet is set.
     */
    public function isSetQualitySet()
    {
        return !is_null($this->_fields['QualitySet']['FieldValue']);
    }
    /**
     * Set the value of QualitySet, return this.
     *
     * @param string $QualitySet
     * @return $this
     */
    public function withQualitySet($QualitySet)
    {
        $this->setQualitySet($QualitySet);
        return $this;
    }
    /**
     * Get the value of the DefectGroup property.
     *
     * @return \string DefectGroup.
     */
    public function getDefectGroup()
    {
        return $this->_fields['DefectGroup']['FieldValue'];
    }
    /**
     * Set the value of the DefectGroup property.
     *
     * @param string defectGroup
     * @return $this instance
     */
    public function setDefectGroup($value)
    {
        $this->_fields['DefectGroup']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DefectGroup is set.
     *
     * @return true if DefectGroup is set.
     */
    public function isSetDefectGroup()
    {
        return !is_null($this->_fields['DefectGroup']['FieldValue']);
    }
    /**
     * Set the value of DefectGroup, return this.
     *
     * @param string $DefectGroup
     * @return $this
     */
    public function withDefectGroup($DefectGroup)
    {
        $this->setDefectGroup($DefectGroup);
        return $this;
    }
    /**
     * Get the value of the DefectAttribute property.
     *
     * @return \string DefectAttribute.
     */
    public function getDefectAttribute()
    {
        return $this->_fields['DefectAttribute']['FieldValue'];
    }
    /**
     * Set the value of the DefectAttribute property.
     *
     * @param string defectAttribute
     * @return $this instance
     */
    public function setDefectAttribute($value)
    {
        $this->_fields['DefectAttribute']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DefectAttribute is set.
     *
     * @return true if DefectAttribute is set.
     */
    public function isSetDefectAttribute()
    {
        return !is_null($this->_fields['DefectAttribute']['FieldValue']);
    }
    /**
     * Set the value of DefectAttribute, return this.
     *
     * @param string $DefectAttribute
     * @return $this
     */
    public function withDefectAttribute($DefectAttribute)
    {
        $this->setDefectAttribute($DefectAttribute);
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