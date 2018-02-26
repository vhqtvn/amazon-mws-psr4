<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASINList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASIN[]	$InvalidASIN
 */
class FbaInboundServiceMwsModelInvalidASINList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InvalidASIN' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASIN::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the InvalidASIN property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASIN[] InvalidASIN.
     */
    public function getInvalidASIN()
    {
        if ($this->_fields['InvalidASIN']['FieldValue'] == null) {
            $this->_fields['InvalidASIN']['FieldValue'] = array();
        }
        return $this->_fields['InvalidASIN']['FieldValue'];
    }
    /**
     * Set the value of the InvalidASIN property.
     *
     * @param array invalidASIN
     * @return $this 
     */
    public function setInvalidASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['InvalidASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear InvalidASIN.
     */
    public function unsetInvalidASIN()
    {
        $this->_fields['InvalidASIN']['FieldValue'] = array();
    }
    /**
     * Check to see if InvalidASIN is set.
     *
     * @return true if InvalidASIN is set.
     */
    public function isSetInvalidASIN()
    {
        return !empty($this->_fields['InvalidASIN']['FieldValue']);
    }
    /**
     * Add values for InvalidASIN, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASIN[] $InvalidASIN_array,...
     * @return $this
     */
    public function withInvalidASIN(...$InvalidASIN_array)
    {
        foreach ($InvalidASIN_array as $InvalidASIN) {
            $this->_fields['InvalidASIN']['FieldValue'][] = $InvalidASIN;
        }
        return $this;
    }
}