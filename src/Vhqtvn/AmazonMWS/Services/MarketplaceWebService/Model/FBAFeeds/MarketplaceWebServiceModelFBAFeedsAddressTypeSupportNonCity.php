<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * AddressTypeSupportNonCity
 *
 *
 * @prop	string	Name	max 50 characters
 * @prop	string	AddressFieldOne	1-60 chars
 * @prop	string	AddressFieldTwo	1-60 chars
 * @prop	string	AddressFieldThree	1-60 chars
 * @prop	string	City	max 50 characters
 * @prop	string	DistrictOrCounty	max 50 characters
 * @prop	string	County	max 50 characters
 * @prop	string	StateOrRegion	max 50 characters
 * @prop	string	PostalCode	max 50 characters
 * @prop	string	CountryCode	Length must be >= 2 charaters and <= 2 charaters
 * @prop	string	PhoneNumber	max 50 characters
 */
class MarketplaceWebServiceModelFBAFeedsAddressTypeSupportNonCity extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "Name" => array('FieldValue' => null, 'FieldType' => 'string'),
            "AddressFieldOne" => array('FieldValue' => null, 'FieldType' => 'string'),
            "AddressFieldTwo" => array('FieldValue' => null, 'FieldType' => 'string'),
            "AddressFieldThree" => array('FieldValue' => null, 'FieldType' => 'string'),
            "City" => array('FieldValue' => null, 'FieldType' => 'string'),
            "DistrictOrCounty" => array('FieldValue' => null, 'FieldType' => 'string'),
            "County" => array('FieldValue' => null, 'FieldType' => 'string'),
            "StateOrRegion" => array('FieldValue' => null, 'FieldType' => 'string'),
            "PostalCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "CountryCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "PhoneNumber" => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Name property.
     * 
     * @return string Name
     */
    public function getName()
    {
        return $this->_fields["Name"]["FieldValue"];
    }
    /**
     * Sets the value of the Name property.
     * 
     * @param string Name max 50 characters
     * @return $this 
     */
    public function setName($value)
    {
        $this->_fields["Name"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Name, return this.
     *
     * @param string $Name max 50 characters
     * @return $this
     */
    public function withName($Name)
    {
        $this->setName($Name);
        return $this;
    }
    /**
     * Checks if Name is set
     * 
     * @return bool true if Name  is set
     */
    public function isSetName()
    {
        return !is_null($this->_fields["Name"]["FieldValue"]);
    }
    /**
     * Gets the value of the AddressFieldOne property.
     * 
     * @return string AddressFieldOne
     */
    public function getAddressFieldOne()
    {
        return $this->_fields["AddressFieldOne"]["FieldValue"];
    }
    /**
     * Sets the value of the AddressFieldOne property.
     * 
     * @param string AddressFieldOne 1-60 chars
     * @return $this 
     */
    public function setAddressFieldOne($value)
    {
        $this->_fields["AddressFieldOne"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AddressFieldOne, return this.
     *
     * @param string $AddressFieldOne 1-60 chars
     * @return $this
     */
    public function withAddressFieldOne($AddressFieldOne)
    {
        $this->setAddressFieldOne($AddressFieldOne);
        return $this;
    }
    /**
     * Checks if AddressFieldOne is set
     * 
     * @return bool true if AddressFieldOne  is set
     */
    public function isSetAddressFieldOne()
    {
        return !is_null($this->_fields["AddressFieldOne"]["FieldValue"]);
    }
    /**
     * Gets the value of the AddressFieldTwo property.
     * 
     * @return string AddressFieldTwo
     */
    public function getAddressFieldTwo()
    {
        return $this->_fields["AddressFieldTwo"]["FieldValue"];
    }
    /**
     * Sets the value of the AddressFieldTwo property.
     * 
     * @param string AddressFieldTwo 1-60 chars
     * @return $this 
     */
    public function setAddressFieldTwo($value)
    {
        $this->_fields["AddressFieldTwo"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AddressFieldTwo, return this.
     *
     * @param string $AddressFieldTwo 1-60 chars
     * @return $this
     */
    public function withAddressFieldTwo($AddressFieldTwo)
    {
        $this->setAddressFieldTwo($AddressFieldTwo);
        return $this;
    }
    /**
     * Checks if AddressFieldTwo is set
     * 
     * @return bool true if AddressFieldTwo  is set
     */
    public function isSetAddressFieldTwo()
    {
        return !is_null($this->_fields["AddressFieldTwo"]["FieldValue"]);
    }
    /**
     * Gets the value of the AddressFieldThree property.
     * 
     * @return string AddressFieldThree
     */
    public function getAddressFieldThree()
    {
        return $this->_fields["AddressFieldThree"]["FieldValue"];
    }
    /**
     * Sets the value of the AddressFieldThree property.
     * 
     * @param string AddressFieldThree 1-60 chars
     * @return $this 
     */
    public function setAddressFieldThree($value)
    {
        $this->_fields["AddressFieldThree"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of AddressFieldThree, return this.
     *
     * @param string $AddressFieldThree 1-60 chars
     * @return $this
     */
    public function withAddressFieldThree($AddressFieldThree)
    {
        $this->setAddressFieldThree($AddressFieldThree);
        return $this;
    }
    /**
     * Checks if AddressFieldThree is set
     * 
     * @return bool true if AddressFieldThree  is set
     */
    public function isSetAddressFieldThree()
    {
        return !is_null($this->_fields["AddressFieldThree"]["FieldValue"]);
    }
    /**
     * Gets the value of the City property.
     * 
     * @return string City
     */
    public function getCity()
    {
        return $this->_fields["City"]["FieldValue"];
    }
    /**
     * Sets the value of the City property.
     * 
     * @param string City max 50 characters
     * @return $this 
     */
    public function setCity($value)
    {
        $this->_fields["City"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of City, return this.
     *
     * @param string $City max 50 characters
     * @return $this
     */
    public function withCity($City)
    {
        $this->setCity($City);
        return $this;
    }
    /**
     * Checks if City is set
     * 
     * @return bool true if City  is set
     */
    public function isSetCity()
    {
        return !is_null($this->_fields["City"]["FieldValue"]);
    }
    /**
     * Gets the value of the DistrictOrCounty property.
     * 
     * @return string DistrictOrCounty
     */
    public function getDistrictOrCounty()
    {
        return $this->_fields["DistrictOrCounty"]["FieldValue"];
    }
    /**
     * Sets the value of the DistrictOrCounty property.
     * 
     * @param string DistrictOrCounty max 50 characters
     * @return $this 
     */
    public function setDistrictOrCounty($value)
    {
        $this->_fields["DistrictOrCounty"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DistrictOrCounty, return this.
     *
     * @param string $DistrictOrCounty max 50 characters
     * @return $this
     */
    public function withDistrictOrCounty($DistrictOrCounty)
    {
        $this->setDistrictOrCounty($DistrictOrCounty);
        return $this;
    }
    /**
     * Checks if DistrictOrCounty is set
     * 
     * @return bool true if DistrictOrCounty  is set
     */
    public function isSetDistrictOrCounty()
    {
        return !is_null($this->_fields["DistrictOrCounty"]["FieldValue"]);
    }
    /**
     * Gets the value of the County property.
     * 
     * @return string County
     */
    public function getCounty()
    {
        return $this->_fields["County"]["FieldValue"];
    }
    /**
     * Sets the value of the County property.
     * 
     * @param string County max 50 characters
     * @return $this 
     */
    public function setCounty($value)
    {
        $this->_fields["County"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of County, return this.
     *
     * @param string $County max 50 characters
     * @return $this
     */
    public function withCounty($County)
    {
        $this->setCounty($County);
        return $this;
    }
    /**
     * Checks if County is set
     * 
     * @return bool true if County  is set
     */
    public function isSetCounty()
    {
        return !is_null($this->_fields["County"]["FieldValue"]);
    }
    /**
     * Gets the value of the StateOrRegion property.
     * 
     * @return string StateOrRegion
     */
    public function getStateOrRegion()
    {
        return $this->_fields["StateOrRegion"]["FieldValue"];
    }
    /**
     * Sets the value of the StateOrRegion property.
     * 
     * @param string StateOrRegion max 50 characters
     * @return $this 
     */
    public function setStateOrRegion($value)
    {
        $this->_fields["StateOrRegion"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of StateOrRegion, return this.
     *
     * @param string $StateOrRegion max 50 characters
     * @return $this
     */
    public function withStateOrRegion($StateOrRegion)
    {
        $this->setStateOrRegion($StateOrRegion);
        return $this;
    }
    /**
     * Checks if StateOrRegion is set
     * 
     * @return bool true if StateOrRegion  is set
     */
    public function isSetStateOrRegion()
    {
        return !is_null($this->_fields["StateOrRegion"]["FieldValue"]);
    }
    /**
     * Gets the value of the PostalCode property.
     * 
     * @return string PostalCode
     */
    public function getPostalCode()
    {
        return $this->_fields["PostalCode"]["FieldValue"];
    }
    /**
     * Sets the value of the PostalCode property.
     * 
     * @param string PostalCode max 50 characters
     * @return $this 
     */
    public function setPostalCode($value)
    {
        $this->_fields["PostalCode"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of PostalCode, return this.
     *
     * @param string $PostalCode max 50 characters
     * @return $this
     */
    public function withPostalCode($PostalCode)
    {
        $this->setPostalCode($PostalCode);
        return $this;
    }
    /**
     * Checks if PostalCode is set
     * 
     * @return bool true if PostalCode  is set
     */
    public function isSetPostalCode()
    {
        return !is_null($this->_fields["PostalCode"]["FieldValue"]);
    }
    /**
     * Gets the value of the CountryCode property.
     * 
     * @return string CountryCode
     */
    public function getCountryCode()
    {
        return $this->_fields["CountryCode"]["FieldValue"];
    }
    /**
     * Sets the value of the CountryCode property.
     * 
     * @param string CountryCode Length must be >= 2 charaters and <= 2 charaters
     * @return $this 
     */
    public function setCountryCode($value)
    {
        $this->_fields["CountryCode"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of CountryCode, return this.
     *
     * @param string $CountryCode Length must be >= 2 charaters and <= 2 charaters
     * @return $this
     */
    public function withCountryCode($CountryCode)
    {
        $this->setCountryCode($CountryCode);
        return $this;
    }
    /**
     * Checks if CountryCode is set
     * 
     * @return bool true if CountryCode  is set
     */
    public function isSetCountryCode()
    {
        return !is_null($this->_fields["CountryCode"]["FieldValue"]);
    }
    /**
     * Gets the value of the PhoneNumber property.
     * 
     * @return string PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->_fields["PhoneNumber"]["FieldValue"];
    }
    /**
     * Sets the value of the PhoneNumber property.
     * 
     * @param string PhoneNumber max 50 characters
     * @return $this 
     */
    public function setPhoneNumber($value)
    {
        $this->_fields["PhoneNumber"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of PhoneNumber, return this.
     *
     * @param string $PhoneNumber max 50 characters
     * @return $this
     */
    public function withPhoneNumber($PhoneNumber)
    {
        $this->setPhoneNumber($PhoneNumber);
        return $this;
    }
    /**
     * Checks if PhoneNumber is set
     * 
     * @return bool true if PhoneNumber  is set
     */
    public function isSetPhoneNumber()
    {
        return !is_null($this->_fields["PhoneNumber"]["FieldValue"]);
    }
}
