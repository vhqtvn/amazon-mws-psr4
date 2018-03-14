<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * CartonContentsRequest
 *
 *
 * @prop	string	ShipmentId	Must match pattern FBA[A-Z0-9]+
 * @prop	int	NumCartons	positive number
 * @prop	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList	Carton	
 */
class MarketplaceWebServiceModelFBAFeedsCartonContentsRequest extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "ShipmentId" => array('FieldValue' => null, 'FieldType' => 'string'),
            "NumCartons" => array('FieldValue' => null, 'FieldType' => 'int'),
            "Carton" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList::class),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the ShipmentId property.
     * 
     * @return string ShipmentId
     */
    public function getShipmentId()
    {
        return $this->_fields["ShipmentId"]["FieldValue"];
    }
    /**
     * Sets the value of the ShipmentId property.
     * 
     * @param string ShipmentId Must match pattern FBA[A-Z0-9]+
     * @return $this 
     */
    public function setShipmentId($value)
    {
        $this->_fields["ShipmentId"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of ShipmentId, return this.
     *
     * @param string $ShipmentId Must match pattern FBA[A-Z0-9]+
     * @return $this
     */
    public function withShipmentId($ShipmentId)
    {
        $this->setShipmentId($ShipmentId);
        return $this;
    }
    /**
     * Checks if ShipmentId is set
     * 
     * @return bool true if ShipmentId  is set
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields["ShipmentId"]["FieldValue"]);
    }
    /**
     * Gets the value of the NumCartons property.
     * 
     * @return int NumCartons
     */
    public function getNumCartons()
    {
        return $this->_fields["NumCartons"]["FieldValue"];
    }
    /**
     * Sets the value of the NumCartons property.
     * 
     * @param int NumCartons positive number
     * @return $this 
     */
    public function setNumCartons($value)
    {
        $this->_fields["NumCartons"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of NumCartons, return this.
     *
     * @param int $NumCartons positive number
     * @return $this
     */
    public function withNumCartons($NumCartons)
    {
        $this->setNumCartons($NumCartons);
        return $this;
    }
    /**
     * Checks if NumCartons is set
     * 
     * @return bool true if NumCartons  is set
     */
    public function isSetNumCartons()
    {
        return !is_null($this->_fields["NumCartons"]["FieldValue"]);
    }
    /**
     * Gets the value of the Carton property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList Carton
     */
    public function getCarton()
    {
        return $this->_fields["Carton"]["FieldValue"];
    }
    /**
     * Sets the value of the Carton property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList Carton 
     * @return $this 
     */
    public function setCarton($value)
    {
        $this->_fields["Carton"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Carton, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList $Carton 
     * @return $this
     */
    public function withCarton($Carton)
    {
        $this->setCarton($Carton);
        return $this;
    }
    /**
     * Checks if Carton is set
     * 
     * @return bool true if Carton  is set
     */
    public function isSetCarton()
    {
        return !is_null($this->_fields["Carton"]["FieldValue"]);
    }
}
