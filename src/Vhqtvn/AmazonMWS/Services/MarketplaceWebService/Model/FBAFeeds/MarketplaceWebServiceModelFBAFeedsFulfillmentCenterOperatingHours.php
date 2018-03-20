<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentCenterOperatingHours
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Monday	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Tuesday	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Wednesday	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Thursday	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Friday	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Saturday	
 * @prop	MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase	Sunday	
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHours extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "Monday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
            "Tuesday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
            "Wednesday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
            "Thursday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
            "Friday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
            "Saturday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
            "Sunday" => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Monday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Monday
     */
    public function getMonday()
    {
        return $this->_fields["Monday"]["FieldValue"];
    }
    /**
     * Sets the value of the Monday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Monday 
     * @return $this 
     */
    public function setMonday($value)
    {
        $this->_fields["Monday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Monday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Monday 
     * @return $this
     */
    public function withMonday($Monday)
    {
        $this->setMonday($Monday);
        return $this;
    }
    /**
     * Checks if Monday is set
     * 
     * @return bool true if Monday  is set
     */
    public function isSetMonday()
    {
        return !is_null($this->_fields["Monday"]["FieldValue"]);
    }
    /**
     * Gets the value of the Tuesday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Tuesday
     */
    public function getTuesday()
    {
        return $this->_fields["Tuesday"]["FieldValue"];
    }
    /**
     * Sets the value of the Tuesday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Tuesday 
     * @return $this 
     */
    public function setTuesday($value)
    {
        $this->_fields["Tuesday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Tuesday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Tuesday 
     * @return $this
     */
    public function withTuesday($Tuesday)
    {
        $this->setTuesday($Tuesday);
        return $this;
    }
    /**
     * Checks if Tuesday is set
     * 
     * @return bool true if Tuesday  is set
     */
    public function isSetTuesday()
    {
        return !is_null($this->_fields["Tuesday"]["FieldValue"]);
    }
    /**
     * Gets the value of the Wednesday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Wednesday
     */
    public function getWednesday()
    {
        return $this->_fields["Wednesday"]["FieldValue"];
    }
    /**
     * Sets the value of the Wednesday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Wednesday 
     * @return $this 
     */
    public function setWednesday($value)
    {
        $this->_fields["Wednesday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Wednesday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Wednesday 
     * @return $this
     */
    public function withWednesday($Wednesday)
    {
        $this->setWednesday($Wednesday);
        return $this;
    }
    /**
     * Checks if Wednesday is set
     * 
     * @return bool true if Wednesday  is set
     */
    public function isSetWednesday()
    {
        return !is_null($this->_fields["Wednesday"]["FieldValue"]);
    }
    /**
     * Gets the value of the Thursday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Thursday
     */
    public function getThursday()
    {
        return $this->_fields["Thursday"]["FieldValue"];
    }
    /**
     * Sets the value of the Thursday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Thursday 
     * @return $this 
     */
    public function setThursday($value)
    {
        $this->_fields["Thursday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Thursday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Thursday 
     * @return $this
     */
    public function withThursday($Thursday)
    {
        $this->setThursday($Thursday);
        return $this;
    }
    /**
     * Checks if Thursday is set
     * 
     * @return bool true if Thursday  is set
     */
    public function isSetThursday()
    {
        return !is_null($this->_fields["Thursday"]["FieldValue"]);
    }
    /**
     * Gets the value of the Friday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Friday
     */
    public function getFriday()
    {
        return $this->_fields["Friday"]["FieldValue"];
    }
    /**
     * Sets the value of the Friday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Friday 
     * @return $this 
     */
    public function setFriday($value)
    {
        $this->_fields["Friday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Friday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Friday 
     * @return $this
     */
    public function withFriday($Friday)
    {
        $this->setFriday($Friday);
        return $this;
    }
    /**
     * Checks if Friday is set
     * 
     * @return bool true if Friday  is set
     */
    public function isSetFriday()
    {
        return !is_null($this->_fields["Friday"]["FieldValue"]);
    }
    /**
     * Gets the value of the Saturday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Saturday
     */
    public function getSaturday()
    {
        return $this->_fields["Saturday"]["FieldValue"];
    }
    /**
     * Sets the value of the Saturday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Saturday 
     * @return $this 
     */
    public function setSaturday($value)
    {
        $this->_fields["Saturday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Saturday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Saturday 
     * @return $this
     */
    public function withSaturday($Saturday)
    {
        $this->setSaturday($Saturday);
        return $this;
    }
    /**
     * Checks if Saturday is set
     * 
     * @return bool true if Saturday  is set
     */
    public function isSetSaturday()
    {
        return !is_null($this->_fields["Saturday"]["FieldValue"]);
    }
    /**
     * Gets the value of the Sunday property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Sunday
     */
    public function getSunday()
    {
        return $this->_fields["Sunday"]["FieldValue"];
    }
    /**
     * Sets the value of the Sunday property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase Sunday 
     * @return $this 
     */
    public function setSunday($value)
    {
        $this->_fields["Sunday"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Sunday, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase $Sunday 
     * @return $this
     */
    public function withSunday($Sunday)
    {
        $this->setSunday($Sunday);
        return $this;
    }
    /**
     * Checks if Sunday is set
     * 
     * @return bool true if Sunday  is set
     */
    public function isSetSunday()
    {
        return !is_null($this->_fields["Sunday"]["FieldValue"]);
    }
}
