<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment	$Shipment
 */
class MwsMerchantFulfillmentServiceModelCreateShipmentResult extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Shipment' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Shipment property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment Shipment.
     */
    public function getShipment()
    {
        return $this->_fields['Shipment']['FieldValue'];
    }
    /**
     * Set the value of the Shipment property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment shipment
     * @return $this 
     */
    public function setShipment($value)
    {
        $this->_fields['Shipment']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Shipment is set.
     *
     * @return true if Shipment is set.
     */
    public function isSetShipment()
    {
        return !is_null($this->_fields['Shipment']['FieldValue']);
    }
    /**
     * Set the value of Shipment, return this.
     *
     * @param shipment
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipment($value)
    {
        $this->setShipment($value);
        return $this;
    }
}