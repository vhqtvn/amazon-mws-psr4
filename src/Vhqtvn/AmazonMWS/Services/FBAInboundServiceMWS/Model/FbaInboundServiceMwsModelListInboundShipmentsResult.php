<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentList	$ShipmentData
 * @property	string	$NextToken
 */
class FbaInboundServiceMwsModelListInboundShipmentsResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentList::class), 'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentData property.
     *
     * @return InboundShipmentList ShipmentData.
     */
    public function getShipmentData()
    {
        return $this->_fields['ShipmentData']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentList shipmentData
     * @return $this 
     */
    public function setShipmentData($value)
    {
        $this->_fields['ShipmentData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentData is set.
     *
     * @return true if ShipmentData is set.
     */
    public function isSetShipmentData()
    {
        return !is_null($this->_fields['ShipmentData']['FieldValue']);
    }
    /**
     * Set the value of ShipmentData, return this.
     *
     * @param shipmentData
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentData($value)
    {
        $this->setShipmentData($value);
        return $this;
    }
    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
}