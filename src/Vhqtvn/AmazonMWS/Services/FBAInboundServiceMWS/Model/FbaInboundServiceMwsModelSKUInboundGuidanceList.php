<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidanceList
 * 
 * @property	array	$SKUInboundGuidance
 */
class FbaInboundServiceMwsModelSKUInboundGuidanceList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SKUInboundGuidance' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidance::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the SKUInboundGuidance property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidance[] SKUInboundGuidance.
     */
    public function getSKUInboundGuidance()
    {
        if ($this->_fields['SKUInboundGuidance']['FieldValue'] == null) {
            $this->_fields['SKUInboundGuidance']['FieldValue'] = array();
        }
        return $this->_fields['SKUInboundGuidance']['FieldValue'];
    }
    /**
     * Set the value of the SKUInboundGuidance property.
     *
     * @param array skuInboundGuidance
     * @return $this 
     */
    public function setSKUInboundGuidance($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SKUInboundGuidance']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SKUInboundGuidance.
     */
    public function unsetSKUInboundGuidance()
    {
        $this->_fields['SKUInboundGuidance']['FieldValue'] = array();
    }
    /**
     * Check to see if SKUInboundGuidance is set.
     *
     * @return true if SKUInboundGuidance is set.
     */
    public function isSetSKUInboundGuidance()
    {
        return !empty($this->_fields['SKUInboundGuidance']['FieldValue']);
    }
    /**
     * Add values for SKUInboundGuidance, return this.
     *
     * @param skuInboundGuidance
     *             New values to add.
     *
     * @return $this .
     */
    public function withSKUInboundGuidance()
    {
        foreach (func_get_args() as $SKUInboundGuidance) {
            $this->_fields['SKUInboundGuidance']['FieldValue'][] = $SKUInboundGuidance;
        }
        return $this;
    }
}