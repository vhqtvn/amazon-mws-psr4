<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress
 * 
 * @property	string	$Name
 * @property	string	$AddressLine1
 * @property	string	$AddressLine2
 * @property	string	$DistrictOrCounty
 * @property	string	$City
 * @property	string	$StateOrProvinceCode
 * @property	string	$CountryCode
 * @property	string	$PostalCode
 */
class FbaInboundServiceMwsModelAddress extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Name' => array('FieldValue' => null, 'FieldType' => 'string'), 'AddressLine1' => array('FieldValue' => null, 'FieldType' => 'string'), 'AddressLine2' => array('FieldValue' => null, 'FieldType' => 'string'), 'DistrictOrCounty' => array('FieldValue' => null, 'FieldType' => 'string'), 'City' => array('FieldValue' => null, 'FieldType' => 'string'), 'StateOrProvinceCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the DistrictOrCounty property.
     *
     * @return \string DistrictOrCounty.
     */
    public function getDistrictOrCounty()
    {
        return $this->_fields['DistrictOrCounty']['FieldValue'];
    }
    /**
     * Set the value of the DistrictOrCounty property.
     *
     * @param string districtOrCounty
     * @return $this instance
     */
    public function setDistrictOrCounty($value)
    {
        $this->_fields['DistrictOrCounty']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DistrictOrCounty is set.
     *
     * @return true if DistrictOrCounty is set.
     */
    public function isSetDistrictOrCounty()
    {
        return !is_null($this->_fields['DistrictOrCounty']['FieldValue']);
    }
    /**
     * Set the value of DistrictOrCounty, return this.
     *
     * @param string $DistrictOrCounty
     * @return $this
     */
    public function withDistrictOrCounty($DistrictOrCounty)
    {
        $this->setDistrictOrCounty($DistrictOrCounty);
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
     * Get the value of the StateOrProvinceCode property.
     *
     * @return \string StateOrProvinceCode.
     */
    public function getStateOrProvinceCode()
    {
        return $this->_fields['StateOrProvinceCode']['FieldValue'];
    }
    /**
     * Set the value of the StateOrProvinceCode property.
     *
     * @param string stateOrProvinceCode
     * @return $this instance
     */
    public function setStateOrProvinceCode($value)
    {
        $this->_fields['StateOrProvinceCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if StateOrProvinceCode is set.
     *
     * @return true if StateOrProvinceCode is set.
     */
    public function isSetStateOrProvinceCode()
    {
        return !is_null($this->_fields['StateOrProvinceCode']['FieldValue']);
    }
    /**
     * Set the value of StateOrProvinceCode, return this.
     *
     * @param string $StateOrProvinceCode
     * @return $this
     */
    public function withStateOrProvinceCode($StateOrProvinceCode)
    {
        $this->setStateOrProvinceCode($StateOrProvinceCode);
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
}