<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList
 * 
 * @property	array	$InvalidSKU
 */
class FbaInboundServiceMwsModelInvalidSKUList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InvalidSKU' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKU::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the InvalidSKU property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKU[] InvalidSKU.
     */
    public function getInvalidSKU()
    {
        if ($this->_fields['InvalidSKU']['FieldValue'] == null) {
            $this->_fields['InvalidSKU']['FieldValue'] = array();
        }
        return $this->_fields['InvalidSKU']['FieldValue'];
    }
    /**
     * Set the value of the InvalidSKU property.
     *
     * @param array invalidSKU
     * @return $this 
     */
    public function setInvalidSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['InvalidSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear InvalidSKU.
     */
    public function unsetInvalidSKU()
    {
        $this->_fields['InvalidSKU']['FieldValue'] = array();
    }
    /**
     * Check to see if InvalidSKU is set.
     *
     * @return true if InvalidSKU is set.
     */
    public function isSetInvalidSKU()
    {
        return !empty($this->_fields['InvalidSKU']['FieldValue']);
    }
    /**
     * Add values for InvalidSKU, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKU $InvalidSKU_array,...
     * @return $this
     */
    public function withInvalidSKU(...$InvalidSKU_array)
    {
        foreach ($InvalidSKU_array as $InvalidSKU) {
            $this->_fields['InvalidSKU']['FieldValue'][] = $InvalidSKU;
        }
        return $this;
    }
}