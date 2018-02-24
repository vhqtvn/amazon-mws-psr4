<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructionsList
 * 
 * @property	array	$ASINPrepInstructions
 */
class FbaInboundServiceMwsModelASINPrepInstructionsList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ASINPrepInstructions' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructions::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the ASINPrepInstructions property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructions[] ASINPrepInstructions.
     */
    public function getASINPrepInstructions()
    {
        if ($this->_fields['ASINPrepInstructions']['FieldValue'] == null) {
            $this->_fields['ASINPrepInstructions']['FieldValue'] = array();
        }
        return $this->_fields['ASINPrepInstructions']['FieldValue'];
    }
    /**
     * Set the value of the ASINPrepInstructions property.
     *
     * @param array asinPrepInstructions
     * @return $this 
     */
    public function setASINPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ASINPrepInstructions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ASINPrepInstructions.
     */
    public function unsetASINPrepInstructions()
    {
        $this->_fields['ASINPrepInstructions']['FieldValue'] = array();
    }
    /**
     * Check to see if ASINPrepInstructions is set.
     *
     * @return true if ASINPrepInstructions is set.
     */
    public function isSetASINPrepInstructions()
    {
        return !empty($this->_fields['ASINPrepInstructions']['FieldValue']);
    }
    /**
     * Add values for ASINPrepInstructions, return this.
     *
     * @param asinPrepInstructions
     *             New values to add.
     *
     * @return $this .
     */
    public function withASINPrepInstructions()
    {
        foreach (func_get_args() as $ASINPrepInstructions) {
            $this->_fields['ASINPrepInstructions']['FieldValue'][] = $ASINPrepInstructions;
        }
        return $this;
    }
}