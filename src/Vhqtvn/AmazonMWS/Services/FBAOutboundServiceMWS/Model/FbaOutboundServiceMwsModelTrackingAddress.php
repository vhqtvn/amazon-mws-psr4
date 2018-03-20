<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelTrackingAddress
 * 
 * @property	string	$City
 * @property	string	$State
 * @property	string	$Country
 */
class FbaOutboundServiceMwsModelTrackingAddress extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('City' => array('FieldValue' => null, 'FieldType' => 'string'), 'State' => array('FieldValue' => null, 'FieldType' => 'string'), 'Country' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the City property.
     *
     * @return \string City.
     */
    public function getCity()
    {
        return $this->_fields['City']['FieldValue'];
    }
    /**
     * Set the value of the City property.
     *
     * @param string city
     * @return $this instance
     */
    public function setCity($value)
    {
        $this->_fields['City']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if City is set.
     *
     * @return true if City is set.
     */
    public function isSetCity()
    {
        return !is_null($this->_fields['City']['FieldValue']);
    }
    /**
     * Set the value of City, return this.
     *
     * @param string $City
     * @return $this
     */
    public function withCity($City)
    {
        $this->setCity($City);
        return $this;
    }
    /**
     * Get the value of the State property.
     *
     * @return \string State.
     */
    public function getState()
    {
        return $this->_fields['State']['FieldValue'];
    }
    /**
     * Set the value of the State property.
     *
     * @param string state
     * @return $this instance
     */
    public function setState($value)
    {
        $this->_fields['State']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if State is set.
     *
     * @return true if State is set.
     */
    public function isSetState()
    {
        return !is_null($this->_fields['State']['FieldValue']);
    }
    /**
     * Set the value of State, return this.
     *
     * @param string $State
     * @return $this
     */
    public function withState($State)
    {
        $this->setState($State);
        return $this;
    }
    /**
     * Get the value of the Country property.
     *
     * @return \string Country.
     */
    public function getCountry()
    {
        return $this->_fields['Country']['FieldValue'];
    }
    /**
     * Set the value of the Country property.
     *
     * @param string country
     * @return $this instance
     */
    public function setCountry($value)
    {
        $this->_fields['Country']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Country is set.
     *
     * @return true if Country is set.
     */
    public function isSetCountry()
    {
        return !is_null($this->_fields['Country']['FieldValue']);
    }
    /**
     * Set the value of Country, return this.
     *
     * @param string $Country
     * @return $this
     */
    public function withCountry($Country)
    {
        $this->setCountry($Country);
        return $this;
    }
}