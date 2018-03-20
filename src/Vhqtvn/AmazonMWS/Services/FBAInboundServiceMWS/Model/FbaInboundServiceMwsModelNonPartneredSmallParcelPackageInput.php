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
     * @return \string TrackingId.
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }
    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @return $this instance
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
     * @param string $TrackingId
     * @return $this
     */
    public function withTrackingId($TrackingId)
    {
        $this->setTrackingId($TrackingId);
        return $this;
    }
}