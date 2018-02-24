<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetBillOfLadingResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDocument	$TransportDocument
 */
class FbaInboundServiceMwsModelGetBillOfLadingResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TransportDocument' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDocument::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the TransportDocument property.
     *
     * @return TransportDocument TransportDocument.
     */
    public function getTransportDocument()
    {
        return $this->_fields['TransportDocument']['FieldValue'];
    }
    /**
     * Set the value of the TransportDocument property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDocument transportDocument
     * @return $this 
     */
    public function setTransportDocument($value)
    {
        $this->_fields['TransportDocument']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportDocument is set.
     *
     * @return true if TransportDocument is set.
     */
    public function isSetTransportDocument()
    {
        return !is_null($this->_fields['TransportDocument']['FieldValue']);
    }
    /**
     * Set the value of TransportDocument, return this.
     *
     * @param transportDocument
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransportDocument($value)
    {
        $this->setTransportDocument($value);
        return $this;
    }
}