<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentCenter
 *
 *
 * @prop	string	FulfillmentCenterID	
 * @prop	boolean	SupportsInStorePickup	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHours	OperatingHours	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentCenter extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "FulfillmentCenterID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "SupportsInStorePickup" => array('FieldValue' => null, 'FieldType' => 'boolean'),
            "OperatingHours" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHours::class),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the FulfillmentCenterID property.
     * 
     * @return string FulfillmentCenterID
     */
    public function getFulfillmentCenterID()
    {
        return $this->_fields["FulfillmentCenterID"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentCenterID property.
     * 
     * @param string FulfillmentCenterID 
     * @return $this 
     */
    public function setFulfillmentCenterID($value)
    {
        $this->_fields["FulfillmentCenterID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of FulfillmentCenterID, return this.
     *
     * @param string $FulfillmentCenterID 
     * @return $this
     */
    public function withFulfillmentCenterID($FulfillmentCenterID)
    {
        $this->setFulfillmentCenterID($FulfillmentCenterID);
        return $this;
    }
    /**
     * Checks if FulfillmentCenterID is set
     * 
     * @return bool true if FulfillmentCenterID  is set
     */
    public function isSetFulfillmentCenterID()
    {
        return !is_null($this->_fields["FulfillmentCenterID"]["FieldValue"]);
    }
    /**
     * Gets the value of the SupportsInStorePickup property.
     * 
     * @return boolean SupportsInStorePickup
     */
    public function getSupportsInStorePickup()
    {
        return $this->_fields["SupportsInStorePickup"]["FieldValue"];
    }
    /**
     * Sets the value of the SupportsInStorePickup property.
     * 
     * @param boolean SupportsInStorePickup 
     * @return $this 
     */
    public function setSupportsInStorePickup($value)
    {
        $this->_fields["SupportsInStorePickup"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of SupportsInStorePickup, return this.
     *
     * @param boolean $SupportsInStorePickup 
     * @return $this
     */
    public function withSupportsInStorePickup($SupportsInStorePickup)
    {
        $this->setSupportsInStorePickup($SupportsInStorePickup);
        return $this;
    }
    /**
     * Checks if SupportsInStorePickup is set
     * 
     * @return bool true if SupportsInStorePickup  is set
     */
    public function isSetSupportsInStorePickup()
    {
        return !is_null($this->_fields["SupportsInStorePickup"]["FieldValue"]);
    }
    /**
     * Gets the value of the OperatingHours property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHours OperatingHours
     */
    public function getOperatingHours()
    {
        return $this->_fields["OperatingHours"]["FieldValue"];
    }
    /**
     * Sets the value of the OperatingHours property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHours OperatingHours 
     * @return $this 
     */
    public function setOperatingHours($value)
    {
        $this->_fields["OperatingHours"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of OperatingHours, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHours $OperatingHours 
     * @return $this
     */
    public function withOperatingHours($OperatingHours)
    {
        $this->setOperatingHours($OperatingHours);
        return $this;
    }
    /**
     * Checks if OperatingHours is set
     * 
     * @return bool true if OperatingHours  is set
     */
    public function isSetOperatingHours()
    {
        return !is_null($this->_fields["OperatingHours"]["FieldValue"]);
    }
}
