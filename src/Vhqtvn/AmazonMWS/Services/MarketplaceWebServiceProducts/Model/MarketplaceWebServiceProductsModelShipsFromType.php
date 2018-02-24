<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShipsFromType
 * 
 * @property	string	$State
 * @property	string	$Country
 */
class MarketplaceWebServiceProductsModelShipsFromType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('State' => array('FieldValue' => null, 'FieldType' => 'string'), 'Country' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the State property.
     *
     * @return String State.
     */
    public function getState()
    {
        return $this->_fields['State']['FieldValue'];
    }
    /**
     * Set the value of the State property.
     *
     * @param string state
     * @return $this 
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
     * @param state
     *             The new value to set.
     *
     * @return $this .
     */
    public function withState($value)
    {
        $this->setState($value);
        return $this;
    }
    /**
     * Get the value of the Country property.
     *
     * @return String Country.
     */
    public function getCountry()
    {
        return $this->_fields['Country']['FieldValue'];
    }
    /**
     * Set the value of the Country property.
     *
     * @param string country
     * @return $this 
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
     * @param country
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCountry($value)
    {
        $this->setCountry($value);
        return $this;
    }
}