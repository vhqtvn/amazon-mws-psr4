<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContentResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>TransportContent: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelGetTransportContentResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TransportContent' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the TransportContent property.
     *
     * @return TransportContent TransportContent.
     */
    public function getTransportContent()
    {
        return $this->_fields['TransportContent']['FieldValue'];
    }
    /**
     * Set the value of the TransportContent property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent transportContent
     * @return $this 
     */
    public function setTransportContent($value)
    {
        $this->_fields['TransportContent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportContent is set.
     *
     * @return true if TransportContent is set.
     */
    public function isSetTransportContent()
    {
        return !is_null($this->_fields['TransportContent']['FieldValue']);
    }
    /**
     * Set the value of TransportContent, return this.
     *
     * @param transportContent
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransportContent($value)
    {
        $this->setTransportContent($value);
        return $this;
    }
}