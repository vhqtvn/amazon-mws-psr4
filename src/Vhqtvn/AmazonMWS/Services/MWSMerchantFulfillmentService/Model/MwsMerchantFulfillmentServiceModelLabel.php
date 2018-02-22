<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabel
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomTextForLabel: string</li>
 * <li>Dimensions: \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabelDimensions</li>
 * <li>FileContents: \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelFileContents</li>
 * <li>LabelFormat: string</li>
 * <li>StandardIdForLabel: string</li>
 *
 * </ul>
 */
class MwsMerchantFulfillmentServiceModelLabel extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CustomTextForLabel' => array('FieldValue' => null, 'FieldType' => 'string'), 'Dimensions' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabelDimensions::class), 'FileContents' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelFileContents::class), 'LabelFormat' => array('FieldValue' => null, 'FieldType' => 'string'), 'StandardIdForLabel' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the CustomTextForLabel property.
     *
     * @return String CustomTextForLabel.
     */
    public function getCustomTextForLabel()
    {
        return $this->_fields['CustomTextForLabel']['FieldValue'];
    }
    /**
     * Set the value of the CustomTextForLabel property.
     *
     * @param string customTextForLabel
     * @return $this 
     */
    public function setCustomTextForLabel($value)
    {
        $this->_fields['CustomTextForLabel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CustomTextForLabel is set.
     *
     * @return true if CustomTextForLabel is set.
     */
    public function isSetCustomTextForLabel()
    {
        return !is_null($this->_fields['CustomTextForLabel']['FieldValue']);
    }
    /**
     * Set the value of CustomTextForLabel, return this.
     *
     * @param customTextForLabel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCustomTextForLabel($value)
    {
        $this->setCustomTextForLabel($value);
        return $this;
    }
    /**
     * Get the value of the Dimensions property.
     *
     * @return LabelDimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }
    /**
     * Set the value of the Dimensions property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabelDimensions dimensions
     * @return $this 
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set.
     */
    public function isSetDimensions()
    {
        return !is_null($this->_fields['Dimensions']['FieldValue']);
    }
    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);
        return $this;
    }
    /**
     * Get the value of the FileContents property.
     *
     * @return FileContents FileContents.
     */
    public function getFileContents()
    {
        return $this->_fields['FileContents']['FieldValue'];
    }
    /**
     * Set the value of the FileContents property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelFileContents fileContents
     * @return $this 
     */
    public function setFileContents($value)
    {
        $this->_fields['FileContents']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FileContents is set.
     *
     * @return true if FileContents is set.
     */
    public function isSetFileContents()
    {
        return !is_null($this->_fields['FileContents']['FieldValue']);
    }
    /**
     * Set the value of FileContents, return this.
     *
     * @param fileContents
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFileContents($value)
    {
        $this->setFileContents($value);
        return $this;
    }
    /**
     * Get the value of the LabelFormat property.
     *
     * @return String LabelFormat.
     */
    public function getLabelFormat()
    {
        return $this->_fields['LabelFormat']['FieldValue'];
    }
    /**
     * Set the value of the LabelFormat property.
     *
     * @param string labelFormat
     * @return $this 
     */
    public function setLabelFormat($value)
    {
        $this->_fields['LabelFormat']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LabelFormat is set.
     *
     * @return true if LabelFormat is set.
     */
    public function isSetLabelFormat()
    {
        return !is_null($this->_fields['LabelFormat']['FieldValue']);
    }
    /**
     * Set the value of LabelFormat, return this.
     *
     * @param labelFormat
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLabelFormat($value)
    {
        $this->setLabelFormat($value);
        return $this;
    }
    /**
     * Get the value of the StandardIdForLabel property.
     *
     * @return String StandardIdForLabel.
     */
    public function getStandardIdForLabel()
    {
        return $this->_fields['StandardIdForLabel']['FieldValue'];
    }
    /**
     * Set the value of the StandardIdForLabel property.
     *
     * @param string standardIdForLabel
     * @return $this 
     */
    public function setStandardIdForLabel($value)
    {
        $this->_fields['StandardIdForLabel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if StandardIdForLabel is set.
     *
     * @return true if StandardIdForLabel is set.
     */
    public function isSetStandardIdForLabel()
    {
        return !is_null($this->_fields['StandardIdForLabel']['FieldValue']);
    }
    /**
     * Set the value of StandardIdForLabel, return this.
     *
     * @param standardIdForLabel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withStandardIdForLabel($value)
    {
        $this->setStandardIdForLabel($value);
        return $this;
    }
}