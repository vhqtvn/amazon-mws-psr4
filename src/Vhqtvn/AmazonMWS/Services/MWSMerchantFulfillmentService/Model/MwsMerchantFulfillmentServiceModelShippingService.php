<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingService
 * 
 * @property	string	$ShippingServiceName
 * @property	string	$CarrierName
 * @property	string	$ShippingServiceId
 * @property	string	$ShippingServiceOfferId
 * @property	string	$ShipDate
 * @property	string	$EarliestEstimatedDeliveryDate
 * @property	string	$LatestEstimatedDeliveryDate
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount	$Rate
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingServiceOptions	$ShippingServiceOptions
 * @property	\[]	$AvailableLabelFormats
 */
class MwsMerchantFulfillmentServiceModelShippingService extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShippingServiceName' => array('FieldValue' => null, 'FieldType' => 'string'), 'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingServiceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShippingServiceOfferId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'EarliestEstimatedDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'LatestEstimatedDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'Rate' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount::class), 'ShippingServiceOptions' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingServiceOptions::class), 'AvailableLabelFormats' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'LabelFormat'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShippingServiceName property.
     *
     * @return String ShippingServiceName.
     */
    public function getShippingServiceName()
    {
        return $this->_fields['ShippingServiceName']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceName property.
     *
     * @param string shippingServiceName
     * @return $this 
     */
    public function setShippingServiceName($value)
    {
        $this->_fields['ShippingServiceName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingServiceName is set.
     *
     * @return true if ShippingServiceName is set.
     */
    public function isSetShippingServiceName()
    {
        return !is_null($this->_fields['ShippingServiceName']['FieldValue']);
    }
    /**
     * Set the value of ShippingServiceName, return this.
     *
     * @param string $ShippingServiceName
     * @return $this
     */
    public function withShippingServiceName($ShippingServiceName)
    {
        $this->setShippingServiceName($ShippingServiceName);
        return $this;
    }
    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }
    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return $this 
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }
    /**
     * Set the value of CarrierName, return this.
     *
     * @param string $CarrierName
     * @return $this
     */
    public function withCarrierName($CarrierName)
    {
        $this->setCarrierName($CarrierName);
        return $this;
    }
    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return String ShippingServiceId.
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @return $this 
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set.
     */
    public function isSetShippingServiceId()
    {
        return !is_null($this->_fields['ShippingServiceId']['FieldValue']);
    }
    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param string $ShippingServiceId
     * @return $this
     */
    public function withShippingServiceId($ShippingServiceId)
    {
        $this->setShippingServiceId($ShippingServiceId);
        return $this;
    }
    /**
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return String ShippingServiceOfferId.
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @return $this 
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set.
     */
    public function isSetShippingServiceOfferId()
    {
        return !is_null($this->_fields['ShippingServiceOfferId']['FieldValue']);
    }
    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param string $ShippingServiceOfferId
     * @return $this
     */
    public function withShippingServiceOfferId($ShippingServiceOfferId)
    {
        $this->setShippingServiceOfferId($ShippingServiceOfferId);
        return $this;
    }
    /**
     * Get the value of the ShipDate property.
     *
     * @return XMLGregorianCalendar ShipDate.
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }
    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @return $this 
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set.
     */
    public function isSetShipDate()
    {
        return !is_null($this->_fields['ShipDate']['FieldValue']);
    }
    /**
     * Set the value of ShipDate, return this.
     *
     * @param string $ShipDate
     * @return $this
     */
    public function withShipDate($ShipDate)
    {
        $this->setShipDate($ShipDate);
        return $this;
    }
    /**
     * Get the value of the EarliestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar EarliestEstimatedDeliveryDate.
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the EarliestEstimatedDeliveryDate property.
     *
     * @param string earliestEstimatedDeliveryDate
     * @return $this 
     */
    public function setEarliestEstimatedDeliveryDate($value)
    {
        $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EarliestEstimatedDeliveryDate is set.
     *
     * @return true if EarliestEstimatedDeliveryDate is set.
     */
    public function isSetEarliestEstimatedDeliveryDate()
    {
        return !is_null($this->_fields['EarliestEstimatedDeliveryDate']['FieldValue']);
    }
    /**
     * Set the value of EarliestEstimatedDeliveryDate, return this.
     *
     * @param string $EarliestEstimatedDeliveryDate
     * @return $this
     */
    public function withEarliestEstimatedDeliveryDate($EarliestEstimatedDeliveryDate)
    {
        $this->setEarliestEstimatedDeliveryDate($EarliestEstimatedDeliveryDate);
        return $this;
    }
    /**
     * Get the value of the LatestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar LatestEstimatedDeliveryDate.
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the LatestEstimatedDeliveryDate property.
     *
     * @param string latestEstimatedDeliveryDate
     * @return $this 
     */
    public function setLatestEstimatedDeliveryDate($value)
    {
        $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LatestEstimatedDeliveryDate is set.
     *
     * @return true if LatestEstimatedDeliveryDate is set.
     */
    public function isSetLatestEstimatedDeliveryDate()
    {
        return !is_null($this->_fields['LatestEstimatedDeliveryDate']['FieldValue']);
    }
    /**
     * Set the value of LatestEstimatedDeliveryDate, return this.
     *
     * @param string $LatestEstimatedDeliveryDate
     * @return $this
     */
    public function withLatestEstimatedDeliveryDate($LatestEstimatedDeliveryDate)
    {
        $this->setLatestEstimatedDeliveryDate($LatestEstimatedDeliveryDate);
        return $this;
    }
    /**
     * Get the value of the Rate property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount Rate.
     */
    public function getRate()
    {
        return $this->_fields['Rate']['FieldValue'];
    }
    /**
     * Set the value of the Rate property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount rate
     * @return $this 
     */
    public function setRate($value)
    {
        $this->_fields['Rate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Rate is set.
     *
     * @return true if Rate is set.
     */
    public function isSetRate()
    {
        return !is_null($this->_fields['Rate']['FieldValue']);
    }
    /**
     * Set the value of Rate, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount $Rate
     * @return $this
     */
    public function withRate($Rate)
    {
        $this->setRate($Rate);
        return $this;
    }
    /**
     * Get the value of the ShippingServiceOptions property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingServiceOptions ShippingServiceOptions.
     */
    public function getShippingServiceOptions()
    {
        return $this->_fields['ShippingServiceOptions']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceOptions property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingServiceOptions shippingServiceOptions
     * @return $this 
     */
    public function setShippingServiceOptions($value)
    {
        $this->_fields['ShippingServiceOptions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingServiceOptions is set.
     *
     * @return true if ShippingServiceOptions is set.
     */
    public function isSetShippingServiceOptions()
    {
        return !is_null($this->_fields['ShippingServiceOptions']['FieldValue']);
    }
    /**
     * Set the value of ShippingServiceOptions, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingServiceOptions $ShippingServiceOptions
     * @return $this
     */
    public function withShippingServiceOptions($ShippingServiceOptions)
    {
        $this->setShippingServiceOptions($ShippingServiceOptions);
        return $this;
    }
    /**
     * Get the value of the AvailableLabelFormats property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelString[] AvailableLabelFormats.
     */
    public function getAvailableLabelFormats()
    {
        if ($this->_fields['AvailableLabelFormats']['FieldValue'] == null) {
            $this->_fields['AvailableLabelFormats']['FieldValue'] = array();
        }
        return $this->_fields['AvailableLabelFormats']['FieldValue'];
    }
    /**
     * Set the value of the AvailableLabelFormats property.
     *
     * @param array availableLabelFormats
     * @return $this 
     */
    public function setAvailableLabelFormats($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['AvailableLabelFormats']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear AvailableLabelFormats.
     */
    public function unsetAvailableLabelFormats()
    {
        $this->_fields['AvailableLabelFormats']['FieldValue'] = array();
    }
    /**
     * Check to see if AvailableLabelFormats is set.
     *
     * @return true if AvailableLabelFormats is set.
     */
    public function isSetAvailableLabelFormats()
    {
        return !empty($this->_fields['AvailableLabelFormats']['FieldValue']);
    }
    /**
     * Add values for AvailableLabelFormats, return this.
     *
     * @param \string[] $AvailableLabelFormats_array,...
     * @return $this
     */
    public function withAvailableLabelFormats(...$AvailableLabelFormats_array)
    {
        foreach ($AvailableLabelFormats_array as $AvailableLabelFormats) {
            $this->_fields['AvailableLabelFormats']['FieldValue'][] = $AvailableLabelFormats;
        }
        return $this;
    }
}