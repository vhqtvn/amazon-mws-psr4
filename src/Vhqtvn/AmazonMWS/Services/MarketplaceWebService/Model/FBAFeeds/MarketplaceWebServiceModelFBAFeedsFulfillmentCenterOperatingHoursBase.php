<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * FulfillmentCenterOperatingHoursBase
 *
 *
 * @prop	string	Open	Time
 * @prop	string	Close	Time
 */
class MarketplaceWebServiceModelFBAFeedsFulfillmentCenterOperatingHoursBase extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "Open" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Close" => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Open property.
     * 
     * @return string Open
     */
    public function getOpen()
    {
        return $this->_fields["Open"]["FieldValue"];
    }
    /**
     * Sets the value of the Open property.
     * 
     * @param string Open Time
     * @return $this 
     */
    public function setOpen($value)
    {
        $this->_fields["Open"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Open, return this.
     *
     * @param string $Open Time
     * @return $this
     */
    public function withOpen($Open)
    {
        $this->setOpen($Open);
        return $this;
    }
    /**
     * Checks if Open is set
     * 
     * @return bool true if Open  is set
     */
    public function isSetOpen()
    {
        return !is_null($this->_fields["Open"]["FieldValue"]);
    }
    /**
     * Gets the value of the Close property.
     * 
     * @return string Close
     */
    public function getClose()
    {
        return $this->_fields["Close"]["FieldValue"];
    }
    /**
     * Sets the value of the Close property.
     * 
     * @param string Close Time
     * @return $this 
     */
    public function setClose($value)
    {
        $this->_fields["Close"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Close, return this.
     *
     * @param string $Close Time
     * @return $this
     */
    public function withClose($Close)
    {
        $this->setClose($Close);
        return $this;
    }
    /**
     * Checks if Close is set
     * 
     * @return bool true if Close  is set
     */
    public function isSetClose()
    {
        return !is_null($this->_fields["Close"]["FieldValue"]);
    }
}
