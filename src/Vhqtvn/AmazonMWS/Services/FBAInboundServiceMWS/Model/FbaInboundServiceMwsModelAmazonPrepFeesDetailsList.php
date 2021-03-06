<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmazonPrepFeesDetailsList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmazonPrepFeesDetails[]	$AmazonPrepFeesDetails
 */
class FbaInboundServiceMwsModelAmazonPrepFeesDetailsList extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AmazonPrepFeesDetails' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmazonPrepFeesDetails::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the AmazonPrepFeesDetails property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmazonPrepFeesDetails[] AmazonPrepFeesDetails.
     */
    public function getAmazonPrepFeesDetails()
    {
        if ($this->_fields['AmazonPrepFeesDetails']['FieldValue'] == null) {
            $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = array();
        }
        return $this->_fields['AmazonPrepFeesDetails']['FieldValue'];
    }
    /**
     * Set the value of the AmazonPrepFeesDetails property.
     *
     * @param array amazonPrepFeesDetails
     * @return $this instance
     */
    public function setAmazonPrepFeesDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear AmazonPrepFeesDetails.
     */
    public function unsetAmazonPrepFeesDetails()
    {
        $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = array();
    }
    /**
     * Check to see if AmazonPrepFeesDetails is set.
     *
     * @return true if AmazonPrepFeesDetails is set.
     */
    public function isSetAmazonPrepFeesDetails()
    {
        return !empty($this->_fields['AmazonPrepFeesDetails']['FieldValue']);
    }
    /**
     * Add values for AmazonPrepFeesDetails, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmazonPrepFeesDetails[] $AmazonPrepFeesDetails_array,...
     * @return $this
     */
    public function withAmazonPrepFeesDetails(...$AmazonPrepFeesDetails_array)
    {
        foreach ($AmazonPrepFeesDetails_array as $AmazonPrepFeesDetails) {
            $this->_fields['AmazonPrepFeesDetails']['FieldValue'][] = $AmazonPrepFeesDetails;
        }
        return $this;
    }
}