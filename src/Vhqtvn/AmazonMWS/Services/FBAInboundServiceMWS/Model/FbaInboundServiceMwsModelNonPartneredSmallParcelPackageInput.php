<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredSmallParcelPackageInput
 * 
 * @property	string	$TrackingId
 */
class FbaInboundServiceMwsModelNonPartneredSmallParcelPackageInput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TrackingId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the TrackingId property.
     *
     * @return String TrackingId.
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }
    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @return $this 
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set.
     */
    public function isSetTrackingId()
    {
        return !is_null($this->_fields['TrackingId']['FieldValue']);
    }
    /**
     * Set the value of TrackingId, return this.
     *
     * @param trackingId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTrackingId($value)
    {
        $this->setTrackingId($value);
        return $this;
    }
}