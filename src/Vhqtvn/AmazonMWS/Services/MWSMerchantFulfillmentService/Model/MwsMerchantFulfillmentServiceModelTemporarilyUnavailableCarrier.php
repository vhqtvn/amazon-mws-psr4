<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelTemporarilyUnavailableCarrier
 * 
 * @property	string	$CarrierName
 */
class MwsMerchantFulfillmentServiceModelTemporarilyUnavailableCarrier extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
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
     * @param carrierName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }
}