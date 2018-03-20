<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructionsList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructions[]	$SKUPrepInstructions
 */
class FbaInboundServiceMwsModelSKUPrepInstructionsList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SKUPrepInstructions' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructions::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the SKUPrepInstructions property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructions[] SKUPrepInstructions.
     */
    public function getSKUPrepInstructions()
    {
        if ($this->_fields['SKUPrepInstructions']['FieldValue'] == null) {
            $this->_fields['SKUPrepInstructions']['FieldValue'] = array();
        }
        return $this->_fields['SKUPrepInstructions']['FieldValue'];
    }
    /**
     * Set the value of the SKUPrepInstructions property.
     *
     * @param array skuPrepInstructions
     * @return $this instance
     */
    public function setSKUPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SKUPrepInstructions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SKUPrepInstructions.
     */
    public function unsetSKUPrepInstructions()
    {
        $this->_fields['SKUPrepInstructions']['FieldValue'] = array();
    }
    /**
     * Check to see if SKUPrepInstructions is set.
     *
     * @return true if SKUPrepInstructions is set.
     */
    public function isSetSKUPrepInstructions()
    {
        return !empty($this->_fields['SKUPrepInstructions']['FieldValue']);
    }
    /**
     * Add values for SKUPrepInstructions, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructions[] $SKUPrepInstructions_array,...
     * @return $this
     */
    public function withSKUPrepInstructions(...$SKUPrepInstructions_array)
    {
        foreach ($SKUPrepInstructions_array as $SKUPrepInstructions) {
            $this->_fields['SKUPrepInstructions']['FieldValue'][] = $SKUPrepInstructions;
        }
        return $this;
    }
}