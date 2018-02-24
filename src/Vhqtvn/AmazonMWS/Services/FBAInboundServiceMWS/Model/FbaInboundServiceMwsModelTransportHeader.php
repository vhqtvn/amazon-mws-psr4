<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportHeader
 * 
 * @property	string	$SellerId
 * @property	string	$ShipmentId
 * @property	bool	$IsPartnered
 * @property	string	$ShipmentType
 */
class FbaInboundServiceMwsModelTransportHeader extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsPartnered' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ShipmentType' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this 
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }
    /**
     * Get the value of the ShipmentId property.
     *
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this 
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }
    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }
    /**
     * Check the value of IsPartnered.
     *
     * @return true if IsPartnered is set to true.
     */
    public function isIsPartnered()
    {
        return $this->_fields['IsPartnered']['FieldValue'];
    }
    /**
     * Get the value of the IsPartnered property.
     *
     * @return boolean IsPartnered.
     */
    public function getIsPartnered()
    {
        return $this->_fields['IsPartnered']['FieldValue'];
    }
    /**
     * Set the value of the IsPartnered property.
     *
     * @param bool isPartnered
     * @return $this 
     */
    public function setIsPartnered($value)
    {
        $this->_fields['IsPartnered']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsPartnered is set.
     *
     * @return true if IsPartnered is set.
     */
    public function isSetIsPartnered()
    {
        return !is_null($this->_fields['IsPartnered']['FieldValue']);
    }
    /**
     * Set the value of IsPartnered, return this.
     *
     * @param isPartnered
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsPartnered($value)
    {
        $this->setIsPartnered($value);
        return $this;
    }
    /**
     * Get the value of the ShipmentType property.
     *
     * @return String ShipmentType.
     */
    public function getShipmentType()
    {
        return $this->_fields['ShipmentType']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentType property.
     *
     * @param string shipmentType
     * @return $this 
     */
    public function setShipmentType($value)
    {
        $this->_fields['ShipmentType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentType is set.
     *
     * @return true if ShipmentType is set.
     */
    public function isSetShipmentType()
    {
        return !is_null($this->_fields['ShipmentType']['FieldValue']);
    }
    /**
     * Set the value of ShipmentType, return this.
     *
     * @param shipmentType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentType($value)
    {
        $this->setShipmentType($value);
        return $this;
    }
}