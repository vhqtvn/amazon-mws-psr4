<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINInboundGuidanceList
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASINInboundGuidance: array</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelASINInboundGuidanceList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ASINInboundGuidance' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINInboundGuidance::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the ASINInboundGuidance property.
     *
     * @return List<ASINInboundGuidance> ASINInboundGuidance.
     */
    public function getASINInboundGuidance()
    {
        if ($this->_fields['ASINInboundGuidance']['FieldValue'] == null) {
            $this->_fields['ASINInboundGuidance']['FieldValue'] = array();
        }
        return $this->_fields['ASINInboundGuidance']['FieldValue'];
    }
    /**
     * Set the value of the ASINInboundGuidance property.
     *
     * @param array asinInboundGuidance
     * @return $this 
     */
    public function setASINInboundGuidance($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ASINInboundGuidance']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ASINInboundGuidance.
     */
    public function unsetASINInboundGuidance()
    {
        $this->_fields['ASINInboundGuidance']['FieldValue'] = array();
    }
    /**
     * Check to see if ASINInboundGuidance is set.
     *
     * @return true if ASINInboundGuidance is set.
     */
    public function isSetASINInboundGuidance()
    {
        return !empty($this->_fields['ASINInboundGuidance']['FieldValue']);
    }
    /**
     * Add values for ASINInboundGuidance, return this.
     *
     * @param asinInboundGuidance
     *             New values to add.
     *
     * @return $this .
     */
    public function withASINInboundGuidance()
    {
        foreach (func_get_args() as $ASINInboundGuidance) {
            $this->_fields['ASINInboundGuidance']['FieldValue'][] = $ASINInboundGuidance;
        }
        return $this;
    }
}