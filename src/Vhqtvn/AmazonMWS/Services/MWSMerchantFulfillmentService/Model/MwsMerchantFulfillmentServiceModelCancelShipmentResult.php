<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCancelShipmentResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment	$Shipment
 */
class MwsMerchantFulfillmentServiceModelCancelShipmentResult extends MwsMerchantFulfillmentServiceModel
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment $Shipment
     * @return $this
     */
    public function withShipment($Shipment)
    {
        $this->setShipment($Shipment);
        return $this;
    }
}