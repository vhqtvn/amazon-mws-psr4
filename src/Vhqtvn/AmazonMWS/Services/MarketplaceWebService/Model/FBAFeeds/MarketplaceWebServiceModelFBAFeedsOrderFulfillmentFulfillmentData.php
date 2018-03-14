<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderFulfillmentFulfillmentData
 *
 *
 * @prop	enum	CarrierCode	
 * @prop	string	CarrierName	max 50 characters
 * @prop	string	ShippingMethod	max 50 characters
 * @prop	string	ShipperTrackingNumber	max 50 characters
 */
class MarketplaceWebServiceModelFBAFeedsOrderFulfillmentFulfillmentData extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "CarrierCode" => array('FieldValue' => null, 'FieldType' => 'enum'),
            "CarrierName" => array('FieldValue' => null, 'FieldType' => 'string'),
            "ShippingMethod" => array('FieldValue' => null, 'FieldType' => 'string'),
            "ShipperTrackingNumber" => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the CarrierCode property.
     * 
     * @return enum CarrierCode
     */
    public function getCarrierCode()
    {
        return $this->_fields["CarrierCode"]["FieldValue"];
    }
    /**
     * Sets the value of the CarrierCode property.
     * 
     * @param enum CarrierCode 
     * @return $this 
     */
    public function setCarrierCode($value)
    {
        $this->_fields["CarrierCode"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of CarrierCode, return this.
     *
     * @param enum $CarrierCode 
     * @return $this
     */
    public function withCarrierCode($CarrierCode)
    {
        $this->setCarrierCode($CarrierCode);
        return $this;
    }
    /**
     * Checks if CarrierCode is set
     * 
     * @return bool true if CarrierCode  is set
     */
    public function isSetCarrierCode()
    {
        return !is_null($this->_fields["CarrierCode"]["FieldValue"]);
    }
    /**
     * Gets the value of the CarrierName property.
     * 
     * @return string CarrierName
     */
    public function getCarrierName()
    {
        return $this->_fields["CarrierName"]["FieldValue"];
    }
    /**
     * Sets the value of the CarrierName property.
     * 
     * @param string CarrierName max 50 characters
     * @return $this 
     */
    public function setCarrierName($value)
    {
        $this->_fields["CarrierName"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of CarrierName, return this.
     *
     * @param string $CarrierName max 50 characters
     * @return $this
     */
    public function withCarrierName($CarrierName)
    {
        $this->setCarrierName($CarrierName);
        return $this;
    }
    /**
     * Checks if CarrierName is set
     * 
     * @return bool true if CarrierName  is set
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields["CarrierName"]["FieldValue"]);
    }
    /**
     * Gets the value of the ShippingMethod property.
     * 
     * @return string ShippingMethod
     */
    public function getShippingMethod()
    {
        return $this->_fields["ShippingMethod"]["FieldValue"];
    }
    /**
     * Sets the value of the ShippingMethod property.
     * 
     * @param string ShippingMethod max 50 characters
     * @return $this 
     */
    public function setShippingMethod($value)
    {
        $this->_fields["ShippingMethod"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of ShippingMethod, return this.
     *
     * @param string $ShippingMethod max 50 characters
     * @return $this
     */
    public function withShippingMethod($ShippingMethod)
    {
        $this->setShippingMethod($ShippingMethod);
        return $this;
    }
    /**
     * Checks if ShippingMethod is set
     * 
     * @return bool true if ShippingMethod  is set
     */
    public function isSetShippingMethod()
    {
        return !is_null($this->_fields["ShippingMethod"]["FieldValue"]);
    }
    /**
     * Gets the value of the ShipperTrackingNumber property.
     * 
     * @return string ShipperTrackingNumber
     */
    public function getShipperTrackingNumber()
    {
        return $this->_fields["ShipperTrackingNumber"]["FieldValue"];
    }
    /**
     * Sets the value of the ShipperTrackingNumber property.
     * 
     * @param string ShipperTrackingNumber max 50 characters
     * @return $this 
     */
    public function setShipperTrackingNumber($value)
    {
        $this->_fields["ShipperTrackingNumber"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of ShipperTrackingNumber, return this.
     *
     * @param string $ShipperTrackingNumber max 50 characters
     * @return $this
     */
    public function withShipperTrackingNumber($ShipperTrackingNumber)
    {
        $this->setShipperTrackingNumber($ShipperTrackingNumber);
        return $this;
    }
    /**
     * Checks if ShipperTrackingNumber is set
     * 
     * @return bool true if ShipperTrackingNumber  is set
     */
    public function isSetShipperTrackingNumber()
    {
        return !is_null($this->_fields["ShipperTrackingNumber"]["FieldValue"]);
    }
}
