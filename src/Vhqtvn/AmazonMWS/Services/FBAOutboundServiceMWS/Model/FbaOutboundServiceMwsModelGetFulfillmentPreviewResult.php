<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewList	$FulfillmentPreviews
 */
class FbaOutboundServiceMwsModelGetFulfillmentPreviewResult extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FulfillmentPreviews' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the FulfillmentPreviews property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewList FulfillmentPreviews.
     */
    public function getFulfillmentPreviews()
    {
        return $this->_fields['FulfillmentPreviews']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentPreviews property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewList fulfillmentPreviews
     * @return $this instance
     */
    public function setFulfillmentPreviews($value)
    {
        $this->_fields['FulfillmentPreviews']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentPreviews is set.
     *
     * @return true if FulfillmentPreviews is set.
     */
    public function isSetFulfillmentPreviews()
    {
        return !is_null($this->_fields['FulfillmentPreviews']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentPreviews, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelFulfillmentPreviewList $FulfillmentPreviews
     * @return $this
     */
    public function withFulfillmentPreviews($FulfillmentPreviews)
    {
        $this->setFulfillmentPreviews($FulfillmentPreviews);
        return $this;
    }
}