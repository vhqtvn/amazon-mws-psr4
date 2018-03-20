<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelAddress
 * 
 * @property	string	$Name
 * @property	string	$AddressLine1
 * @property	string	$AddressLine2
 * @property	string	$AddressLine3
 * @property	string	$City
 * @property	string	$County
 * @property	string	$District
 * @property	string	$StateOrRegion
 * @property	string	$PostalCode
 * @property	string	$CountryCode
 * @property	string	$Phone
 * @property	string	$AddressType
 */
class MarketplaceWebServiceOrdersModelAddress extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Name' => array('FieldValue' => null, 'FieldType' => 'string'), 'AddressLine1' => array('FieldValue' => null, 'FieldType' => 'string'), 'AddressLine2' => array('FieldValue' => null, 'FieldType' => 'string'), 'AddressLine3' => array('FieldValue' => null, 'FieldType' => 'string'), 'City' => array('FieldValue' => null, 'FieldType' => 'string'), 'County' => array('FieldValue' => null, 'FieldType' => 'string'), 'District' => array('FieldValue' => null, 'FieldType' => 'string'), 'StateOrRegion' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'Phone' => array('FieldValue' => null, 'FieldType' => 'string'), 'AddressType' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the AddressLine1 property.
     *
     * @return \string AddressLine1.
     */
    public function getAddressLine1()
    {
        return $this->_fields['AddressLine1']['FieldValue'];
    }
    /**
     * Set the value of the AddressLine1 property.
     *
     * @param string addressLine1
     * @return $this instance
     */
    public function setAddressLine1($value)
    {
        $this->_fields['AddressLine1']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AddressLine1 is set.
     *
     * @return true if AddressLine1 is set.
     */
    public function isSetAddressLine1()
    {
        return !is_null($this->_fields['AddressLine1']['FieldValue']);
    }
    /**
     * Set the value of AddressLine1, return this.
     *
     * @param string $AddressLine1
     * @return $this
     */
    public function withAddressLine1($AddressLine1)
    {
        $this->setAddressLine1($AddressLine1);
        return $this;
    }
    /**
     * Get the value of the AddressLine2 property.
     *
     * @return \string AddressLine2.
     */
    public function getAddressLine2()
    {
        return $this->_fields['AddressLine2']['FieldValue'];
    }
    /**
     * Set the value of the AddressLine2 property.
     *
     * @param string addressLine2
     * @return $this instance
     */
    public function setAddressLine2($value)
    {
        $this->_fields['AddressLine2']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AddressLine2 is set.
     *
     * @return true if AddressLine2 is set.
     */
    public function isSetAddressLine2()
    {
        return !is_null($this->_fields['AddressLine2']['FieldValue']);
    }
    /**
     * Set the value of AddressLine2, return this.
     *
     * @param string $AddressLine2
     * @return $this
     */
    public function withAddressLine2($AddressLine2)
    {
        $this->setAddressLine2($AddressLine2);
        return $this;
    }
    /**
     * Get the value of the AddressLine3 property.
     *
     * @return \string AddressLine3.
     */
    public function getAddressLine3()
    {
        return $this->_fields['AddressLine3']['FieldValue'];
    }
    /**
     * Set the value of the AddressLine3 property.
     *
     * @param string addressLine3
     * @return $this instance
     */
    public function setAddressLine3($value)
    {
        $this->_fields['AddressLine3']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AddressLine3 is set.
     *
     * @return true if AddressLine3 is set.
     */
    public function isSetAddressLine3()
    {
        return !is_null($this->_fields['AddressLine3']['FieldValue']);
    }
    /**
     * Set the value of AddressLine3, return this.
     *
     * @param string $AddressLine3
     * @return $this
     */
    public function withAddressLine3($AddressLine3)
    {
        $this->setAddressLine3($AddressLine3);
        return $this;
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
     * Get the value of the County property.
     *
     * @return \string County.
     */
    public function getCounty()
    {
        return $this->_fields['County']['FieldValue'];
    }
    /**
     * Set the value of the County property.
     *
     * @param string county
     * @return $this instance
     */
    public function setCounty($value)
    {
        $this->_fields['County']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if County is set.
     *
     * @return true if County is set.
     */
    public function isSetCounty()
    {
        return !is_null($this->_fields['County']['FieldValue']);
    }
    /**
     * Set the value of County, return this.
     *
     * @param string $County
     * @return $this
     */
    public function withCounty($County)
    {
        $this->setCounty($County);
        return $this;
    }
    /**
     * Get the value of the District property.
     *
     * @return \string District.
     */
    public function getDistrict()
    {
        return $this->_fields['District']['FieldValue'];
    }
    /**
     * Set the value of the District property.
     *
     * @param string district
     * @return $this instance
     */
    public function setDistrict($value)
    {
        $this->_fields['District']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if District is set.
     *
     * @return true if District is set.
     */
    public function isSetDistrict()
    {
        return !is_null($this->_fields['District']['FieldValue']);
    }
    /**
     * Set the value of District, return this.
     *
     * @param string $District
     * @return $this
     */
    public function withDistrict($District)
    {
        $this->setDistrict($District);
        return $this;
    }
    /**
     * Get the value of the StateOrRegion property.
     *
     * @return \string StateOrRegion.
     */
    public function getStateOrRegion()
    {
        return $this->_fields['StateOrRegion']['FieldValue'];
    }
    /**
     * Set the value of the StateOrRegion property.
     *
     * @param string stateOrRegion
     * @return $this instance
     */
    public function setStateOrRegion($value)
    {
        $this->_fields['StateOrRegion']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if StateOrRegion is set.
     *
     * @return true if StateOrRegion is set.
     */
    public function isSetStateOrRegion()
    {
        return !is_null($this->_fields['StateOrRegion']['FieldValue']);
    }
    /**
     * Set the value of StateOrRegion, return this.
     *
     * @param string $StateOrRegion
     * @return $this
     */
    public function withStateOrRegion($StateOrRegion)
    {
        $this->setStateOrRegion($StateOrRegion);
        return $this;
    }
    /**
     * Get the value of the PostalCode property.
     *
     * @return \string PostalCode.
     */
    public function getPostalCode()
    {
        return $this->_fields['PostalCode']['FieldValue'];
    }
    /**
     * Set the value of the PostalCode property.
     *
     * @param string postalCode
     * @return $this instance
     */
    public function setPostalCode($value)
    {
        $this->_fields['PostalCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostalCode is set.
     *
     * @return true if PostalCode is set.
     */
    public function isSetPostalCode()
    {
        return !is_null($this->_fields['PostalCode']['FieldValue']);
    }
    /**
     * Set the value of PostalCode, return this.
     *
     * @param string $PostalCode
     * @return $this
     */
    public function withPostalCode($PostalCode)
    {
        $this->setPostalCode($PostalCode);
        return $this;
    }
    /**
     * Get the value of the CountryCode property.
     *
     * @return \string CountryCode.
     */
    public function getCountryCode()
    {
        return $this->_fields['CountryCode']['FieldValue'];
    }
    /**
     * Set the value of the CountryCode property.
     *
     * @param string countryCode
     * @return $this instance
     */
    public function setCountryCode($value)
    {
        $this->_fields['CountryCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CountryCode is set.
     *
     * @return true if CountryCode is set.
     */
    public function isSetCountryCode()
    {
        return !is_null($this->_fields['CountryCode']['FieldValue']);
    }
    /**
     * Set the value of CountryCode, return this.
     *
     * @param string $CountryCode
     * @return $this
     */
    public function withCountryCode($CountryCode)
    {
        $this->setCountryCode($CountryCode);
        return $this;
    }
    /**
     * Get the value of the Phone property.
     *
     * @return \string Phone.
     */
    public function getPhone()
    {
        return $this->_fields['Phone']['FieldValue'];
    }
    /**
     * Set the value of the Phone property.
     *
     * @param string phone
     * @return $this instance
     */
    public function setPhone($value)
    {
        $this->_fields['Phone']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Phone is set.
     *
     * @return true if Phone is set.
     */
    public function isSetPhone()
    {
        return !is_null($this->_fields['Phone']['FieldValue']);
    }
    /**
     * Set the value of Phone, return this.
     *
     * @param string $Phone
     * @return $this
     */
    public function withPhone($Phone)
    {
        $this->setPhone($Phone);
        return $this;
    }
    /**
     * Get the value of the AddressType property.
     *
     * @return \string AddressType.
     */
    public function getAddressType()
    {
        return $this->_fields['AddressType']['FieldValue'];
    }
    /**
     * Set the value of the AddressType property.
     *
     * @param string addressType
     * @return $this instance
     */
    public function setAddressType($value)
    {
        $this->_fields['AddressType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AddressType is set.
     *
     * @return true if AddressType is set.
     */
    public function isSetAddressType()
    {
        return !is_null($this->_fields['AddressType']['FieldValue']);
    }
    /**
     * Set the value of AddressType, return this.
     *
     * @param string $AddressType
     * @return $this
     */
    public function withAddressType($AddressType)
    {
        $this->setAddressType($AddressType);
        return $this;
    }
}