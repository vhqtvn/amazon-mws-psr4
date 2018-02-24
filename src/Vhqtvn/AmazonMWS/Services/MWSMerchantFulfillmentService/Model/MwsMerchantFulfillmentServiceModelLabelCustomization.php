<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabelCustomization
 * 
 * @property	string	$CustomTextForLabel
 * @property	string	$StandardIdForLabel
 */
class MwsMerchantFulfillmentServiceModelLabelCustomization extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CustomTextForLabel' => array('FieldValue' => null, 'FieldType' => 'string'), 'StandardIdForLabel' => array('FieldValue' => null, 'FieldType' => 'string'));
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