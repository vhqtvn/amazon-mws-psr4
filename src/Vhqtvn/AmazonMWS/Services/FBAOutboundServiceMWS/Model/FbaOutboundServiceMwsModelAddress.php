<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress
 * 
 * @property	string	$Name
 * @property	string	$Line1
 * @property	string	$Line2
 * @property	string	$Line3
 * @property	string	$DistrictOrCounty
 * @property	string	$City
 * @property	string	$StateOrProvinceCode
 * @property	string	$CountryCode
 * @property	string	$PostalCode
 * @property	string	$PhoneNumber
 */
class FbaOutboundServiceMwsModelAddress extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Name' => array('FieldValue' => null, 'FieldType' => 'string'), 'Line1' => array('FieldValue' => null, 'FieldType' => 'string'), 'Line2' => array('FieldValue' => null, 'FieldType' => 'string'), 'Line3' => array('FieldValue' => null, 'FieldType' => 'string'), 'DistrictOrCounty' => array('FieldValue' => null, 'FieldType' => 'string'), 'City' => array('FieldValue' => null, 'FieldType' => 'string'), 'StateOrProvinceCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'PhoneNumber' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the Line1 property.
     *
     * @return \string Line1.
     */
    public function getLine1()
    {
        return $this->_fields['Line1']['FieldValue'];
    }
    /**
     * Set the value of the Line1 property.
     *
     * @param string line1
     * @return $this instance
     */
    public function setLine1($value)
    {
        $this->_fields['Line1']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Line1 is set.
     *
     * @return true if Line1 is set.
     */
    public function isSetLine1()
    {
        return !is_null($this->_fields['Line1']['FieldValue']);
    }
    /**
     * Set the value of Line1, return this.
     *
     * @param string $Line1
     * @return $this
     */
    public function withLine1($Line1)
    {
        $this->setLine1($Line1);
        return $this;
    }
    /**
     * Get the value of the Line2 property.
     *
     * @return \string Line2.
     */
    public function getLine2()
    {
        return $this->_fields['Line2']['FieldValue'];
    }
    /**
     * Set the value of the Line2 property.
     *
     * @param string line2
     * @return $this instance
     */
    public function setLine2($value)
    {
        $this->_fields['Line2']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Line2 is set.
     *
     * @return true if Line2 is set.
     */
    public function isSetLine2()
    {
        return !is_null($this->_fields['Line2']['FieldValue']);
    }
    /**
     * Set the value of Line2, return this.
     *
     * @param string $Line2
     * @return $this
     */
    public function withLine2($Line2)
    {
        $this->setLine2($Line2);
        return $this;
    }
    /**
     * Get the value of the Line3 property.
     *
     * @return \string Line3.
     */
    public function getLine3()
    {
        return $this->_fields['Line3']['FieldValue'];
    }
    /**
     * Set the value of the Line3 property.
     *
     * @param string line3
     * @return $this instance
     */
    public function setLine3($value)
    {
        $this->_fields['Line3']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Line3 is set.
     *
     * @return true if Line3 is set.
     */
    public function isSetLine3()
    {
        return !is_null($this->_fields['Line3']['FieldValue']);
    }
    /**
     * Set the value of Line3, return this.
     *
     * @param string $Line3
     * @return $this
     */
    public function withLine3($Line3)
    {
        $this->setLine3($Line3);
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
    /**
     * Get the value of the PhoneNumber property.
     *
     * @return \string PhoneNumber.
     */
    public function getPhoneNumber()
    {
        return $this->_fields['PhoneNumber']['FieldValue'];
    }
    /**
     * Set the value of the PhoneNumber property.
     *
     * @param string phoneNumber
     * @return $this instance
     */
    public function setPhoneNumber($value)
    {
        $this->_fields['PhoneNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PhoneNumber is set.
     *
     * @return true if PhoneNumber is set.
     */
    public function isSetPhoneNumber()
    {
        return !is_null($this->_fields['PhoneNumber']['FieldValue']);
    }
    /**
     * Set the value of PhoneNumber, return this.
     *
     * @param string $PhoneNumber
     * @return $this
     */
    public function withPhoneNumber($PhoneNumber)
    {
        $this->setPhoneNumber($PhoneNumber);
        return $this;
    }
}