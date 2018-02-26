<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGuidanceReasonList
 * 
 * @property	array	$GuidanceReason
 */
class FbaInboundServiceMwsModelGuidanceReasonList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('GuidanceReason' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Get the value of the GuidanceReason property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelString[] GuidanceReason.
     */
    public function getGuidanceReason()
    {
        if ($this->_fields['GuidanceReason']['FieldValue'] == null) {
            $this->_fields['GuidanceReason']['FieldValue'] = array();
        }
        return $this->_fields['GuidanceReason']['FieldValue'];
    }
    /**
     * Set the value of the GuidanceReason property.
     *
     * @param array guidanceReason
     * @return $this 
     */
    public function setGuidanceReason($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GuidanceReason']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear GuidanceReason.
     */
    public function unsetGuidanceReason()
    {
        $this->_fields['GuidanceReason']['FieldValue'] = array();
    }
    /**
     * Check to see if GuidanceReason is set.
     *
     * @return true if GuidanceReason is set.
     */
    public function isSetGuidanceReason()
    {
        return !empty($this->_fields['GuidanceReason']['FieldValue']);
    }
    /**
     * Add values for GuidanceReason, return this.
     *
     * @param \[] $GuidanceReason_array,...
     * @return $this
     */
    public function withGuidanceReason(...$GuidanceReason_array)
    {
        foreach ($GuidanceReason_array as $GuidanceReason) {
            $this->_fields['GuidanceReason']['FieldValue'][] = $GuidanceReason;
        }
        return $this;
    }
}