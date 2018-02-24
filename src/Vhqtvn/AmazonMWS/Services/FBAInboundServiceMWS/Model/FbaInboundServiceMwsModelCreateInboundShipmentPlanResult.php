<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlanResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanList	$InboundShipmentPlans
 */
class FbaInboundServiceMwsModelCreateInboundShipmentPlanResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InboundShipmentPlans' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the InboundShipmentPlans property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanList InboundShipmentPlans.
     */
    public function getInboundShipmentPlans()
    {
        return $this->_fields['InboundShipmentPlans']['FieldValue'];
    }
    /**
     * Set the value of the InboundShipmentPlans property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanList inboundShipmentPlans
     * @return $this 
     */
    public function setInboundShipmentPlans($value)
    {
        $this->_fields['InboundShipmentPlans']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InboundShipmentPlans is set.
     *
     * @return true if InboundShipmentPlans is set.
     */
    public function isSetInboundShipmentPlans()
    {
        return !is_null($this->_fields['InboundShipmentPlans']['FieldValue']);
    }
    /**
     * Set the value of InboundShipmentPlans, return this.
     *
     * @param inboundShipmentPlans
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInboundShipmentPlans($value)
    {
        $this->setInboundShipmentPlans($value);
        return $this;
    }
}