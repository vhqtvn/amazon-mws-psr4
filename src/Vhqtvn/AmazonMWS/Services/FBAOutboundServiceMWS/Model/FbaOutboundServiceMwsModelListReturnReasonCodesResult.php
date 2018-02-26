<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelListReturnReasonCodesResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReasonCodeDetailsList	$ReasonCodeDetailsList
 */
class FbaOutboundServiceMwsModelListReturnReasonCodesResult extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ReasonCodeDetailsList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReasonCodeDetailsList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ReasonCodeDetailsList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReasonCodeDetailsList ReasonCodeDetailsList.
     */
    public function getReasonCodeDetailsList()
    {
        return $this->_fields['ReasonCodeDetailsList']['FieldValue'];
    }
    /**
     * Set the value of the ReasonCodeDetailsList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReasonCodeDetailsList reasonCodeDetailsList
     * @return $this 
     */
    public function setReasonCodeDetailsList($value)
    {
        $this->_fields['ReasonCodeDetailsList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReasonCodeDetailsList is set.
     *
     * @return true if ReasonCodeDetailsList is set.
     */
    public function isSetReasonCodeDetailsList()
    {
        return !is_null($this->_fields['ReasonCodeDetailsList']['FieldValue']);
    }
    /**
     * Set the value of ReasonCodeDetailsList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReasonCodeDetailsList $ReasonCodeDetailsList
     * @return $this
     */
    public function withReasonCodeDetailsList($ReasonCodeDetailsList)
    {
        $this->setReasonCodeDetailsList($ReasonCodeDetailsList);
        return $this;
    }
}