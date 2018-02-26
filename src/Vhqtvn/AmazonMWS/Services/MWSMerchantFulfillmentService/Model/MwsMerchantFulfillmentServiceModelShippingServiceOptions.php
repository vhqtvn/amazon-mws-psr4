<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingServiceOptions
 * 
 * @property	string	$DeliveryExperience
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount	$DeclaredValue
 * @property	bool	$CarrierWillPickUp
 * @property	string	$LabelFormat
 */
class MwsMerchantFulfillmentServiceModelShippingServiceOptions extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DeliveryExperience' => array('FieldValue' => null, 'FieldType' => 'string'), 'DeclaredValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount::class), 'CarrierWillPickUp' => array('FieldValue' => null, 'FieldType' => 'bool'), 'LabelFormat' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the DeliveryExperience property.
     *
     * @return String DeliveryExperience.
     */
    public function getDeliveryExperience()
    {
        return $this->_fields['DeliveryExperience']['FieldValue'];
    }
    /**
     * Set the value of the DeliveryExperience property.
     *
     * @param string deliveryExperience
     * @return $this 
     */
    public function setDeliveryExperience($value)
    {
        $this->_fields['DeliveryExperience']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DeliveryExperience is set.
     *
     * @return true if DeliveryExperience is set.
     */
    public function isSetDeliveryExperience()
    {
        return !is_null($this->_fields['DeliveryExperience']['FieldValue']);
    }
    /**
     * Set the value of DeliveryExperience, return this.
     *
     * @param string $DeliveryExperience
     * @return $this
     */
    public function withDeliveryExperience($DeliveryExperience)
    {
        $this->setDeliveryExperience($DeliveryExperience);
        return $this;
    }
    /**
     * Get the value of the DeclaredValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount DeclaredValue.
     */
    public function getDeclaredValue()
    {
        return $this->_fields['DeclaredValue']['FieldValue'];
    }
    /**
     * Set the value of the DeclaredValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount declaredValue
     * @return $this 
     */
    public function setDeclaredValue($value)
    {
        $this->_fields['DeclaredValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DeclaredValue is set.
     *
     * @return true if DeclaredValue is set.
     */
    public function isSetDeclaredValue()
    {
        return !is_null($this->_fields['DeclaredValue']['FieldValue']);
    }
    /**
     * Set the value of DeclaredValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount $DeclaredValue
     * @return $this
     */
    public function withDeclaredValue($DeclaredValue)
    {
        $this->setDeclaredValue($DeclaredValue);
        return $this;
    }
    /**
     * Check the value of CarrierWillPickUp.
     *
     * @return true if CarrierWillPickUp is set to true.
     */
    public function isCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }
    /**
     * Get the value of the CarrierWillPickUp property.
     *
     * @return boolean CarrierWillPickUp.
     */
    public function getCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }
    /**
     * Set the value of the CarrierWillPickUp property.
     *
     * @param bool carrierWillPickUp
     * @return $this 
     */
    public function setCarrierWillPickUp($value)
    {
        $this->_fields['CarrierWillPickUp']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierWillPickUp is set.
     *
     * @return true if CarrierWillPickUp is set.
     */
    public function isSetCarrierWillPickUp()
    {
        return !is_null($this->_fields['CarrierWillPickUp']['FieldValue']);
    }
    /**
     * Set the value of CarrierWillPickUp, return this.
     *
     * @param bool $CarrierWillPickUp
     * @return $this
     */
    public function withCarrierWillPickUp($CarrierWillPickUp)
    {
        $this->setCarrierWillPickUp($CarrierWillPickUp);
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
     * @param string $LabelFormat
     * @return $this
     */
    public function withLabelFormat($LabelFormat)
    {
        $this->setLabelFormat($LabelFormat);
        return $this;
    }
}