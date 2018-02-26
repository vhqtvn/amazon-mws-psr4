<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList
 * 
 * @property	array	$PrepDetails
 */
class FbaInboundServiceMwsModelPrepDetailsList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PrepDetails' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetails::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the PrepDetails property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetails[] PrepDetails.
     */
    public function getPrepDetails()
    {
        if ($this->_fields['PrepDetails']['FieldValue'] == null) {
            $this->_fields['PrepDetails']['FieldValue'] = array();
        }
        return $this->_fields['PrepDetails']['FieldValue'];
    }
    /**
     * Set the value of the PrepDetails property.
     *
     * @param array prepDetails
     * @return $this 
     */
    public function setPrepDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PrepDetails']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PrepDetails.
     */
    public function unsetPrepDetails()
    {
        $this->_fields['PrepDetails']['FieldValue'] = array();
    }
    /**
     * Check to see if PrepDetails is set.
     *
     * @return true if PrepDetails is set.
     */
    public function isSetPrepDetails()
    {
        return !empty($this->_fields['PrepDetails']['FieldValue']);
    }
    /**
     * Add values for PrepDetails, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetails[] $PrepDetails_array,...
     * @return $this
     */
    public function withPrepDetails(...$PrepDetails_array)
    {
        foreach ($PrepDetails_array as $PrepDetails) {
            $this->_fields['PrepDetails']['FieldValue'][] = $PrepDetails;
        }
        return $this;
    }
}