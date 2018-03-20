<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxClassification
 * 
 * @property	string	$Name
 * @property	string	$Value
 */
class MarketplaceWebServiceOrdersModelTaxClassification extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Name' => array('FieldValue' => null, 'FieldType' => 'string'), 'Value' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Name property.
     *
     * @return \string Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }
    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @return $this instance
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set.
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
    }
    /**
     * Set the value of Name, return this.
     *
     * @param string $Name
     * @return $this
     */
    public function withName($Name)
    {
        $this->setName($Name);
        return $this;
    }
    /**
     * Get the value of the Value property.
     *
     * @return \string Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }
    /**
     * Set the value of the Value property.
     *
     * @param string value
     * @return $this instance
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Value is set.
     *
     * @return true if Value is set.
     */
    public function isSetValue()
    {
        return !is_null($this->_fields['Value']['FieldValue']);
    }
    /**
     * Set the value of Value, return this.
     *
     * @param string $Value
     * @return $this
     */
    public function withValue($Value)
    {
        $this->setValue($Value);
        return $this;
    }
}