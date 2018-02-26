<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelMarketplace
 * 
 * @property	string	$MarketplaceId
 * @property	string	$Name
 * @property	string	$DefaultCountryCode
 * @property	string	$DefaultCurrencyCode
 * @property	string	$DefaultLanguageCode
 * @property	string	$DomainName
 */
class MarketplaceWebServiceSellersModelMarketplace extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Name' => array('FieldValue' => null, 'FieldType' => 'string'), 'DefaultCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'DefaultCurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'DefaultLanguageCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'DomainName' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
    /**
     * Get the value of the Name property.
     *
     * @return String Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }
    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @return $this 
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
     * Get the value of the DefaultCountryCode property.
     *
     * @return String DefaultCountryCode.
     */
    public function getDefaultCountryCode()
    {
        return $this->_fields['DefaultCountryCode']['FieldValue'];
    }
    /**
     * Set the value of the DefaultCountryCode property.
     *
     * @param string defaultCountryCode
     * @return $this 
     */
    public function setDefaultCountryCode($value)
    {
        $this->_fields['DefaultCountryCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DefaultCountryCode is set.
     *
     * @return true if DefaultCountryCode is set.
     */
    public function isSetDefaultCountryCode()
    {
        return !is_null($this->_fields['DefaultCountryCode']['FieldValue']);
    }
    /**
     * Set the value of DefaultCountryCode, return this.
     *
     * @param string $DefaultCountryCode
     * @return $this
     */
    public function withDefaultCountryCode($DefaultCountryCode)
    {
        $this->setDefaultCountryCode($DefaultCountryCode);
        return $this;
    }
    /**
     * Get the value of the DefaultCurrencyCode property.
     *
     * @return String DefaultCurrencyCode.
     */
    public function getDefaultCurrencyCode()
    {
        return $this->_fields['DefaultCurrencyCode']['FieldValue'];
    }
    /**
     * Set the value of the DefaultCurrencyCode property.
     *
     * @param string defaultCurrencyCode
     * @return $this 
     */
    public function setDefaultCurrencyCode($value)
    {
        $this->_fields['DefaultCurrencyCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DefaultCurrencyCode is set.
     *
     * @return true if DefaultCurrencyCode is set.
     */
    public function isSetDefaultCurrencyCode()
    {
        return !is_null($this->_fields['DefaultCurrencyCode']['FieldValue']);
    }
    /**
     * Set the value of DefaultCurrencyCode, return this.
     *
     * @param string $DefaultCurrencyCode
     * @return $this
     */
    public function withDefaultCurrencyCode($DefaultCurrencyCode)
    {
        $this->setDefaultCurrencyCode($DefaultCurrencyCode);
        return $this;
    }
    /**
     * Get the value of the DefaultLanguageCode property.
     *
     * @return String DefaultLanguageCode.
     */
    public function getDefaultLanguageCode()
    {
        return $this->_fields['DefaultLanguageCode']['FieldValue'];
    }
    /**
     * Set the value of the DefaultLanguageCode property.
     *
     * @param string defaultLanguageCode
     * @return $this 
     */
    public function setDefaultLanguageCode($value)
    {
        $this->_fields['DefaultLanguageCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DefaultLanguageCode is set.
     *
     * @return true if DefaultLanguageCode is set.
     */
    public function isSetDefaultLanguageCode()
    {
        return !is_null($this->_fields['DefaultLanguageCode']['FieldValue']);
    }
    /**
     * Set the value of DefaultLanguageCode, return this.
     *
     * @param string $DefaultLanguageCode
     * @return $this
     */
    public function withDefaultLanguageCode($DefaultLanguageCode)
    {
        $this->setDefaultLanguageCode($DefaultLanguageCode);
        return $this;
    }
    /**
     * Get the value of the DomainName property.
     *
     * @return String DomainName.
     */
    public function getDomainName()
    {
        return $this->_fields['DomainName']['FieldValue'];
    }
    /**
     * Set the value of the DomainName property.
     *
     * @param string domainName
     * @return $this 
     */
    public function setDomainName($value)
    {
        $this->_fields['DomainName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DomainName is set.
     *
     * @return true if DomainName is set.
     */
    public function isSetDomainName()
    {
        return !is_null($this->_fields['DomainName']['FieldValue']);
    }
    /**
     * Set the value of DomainName, return this.
     *
     * @param string $DomainName
     * @return $this
     */
    public function withDomainName($DomainName)
    {
        $this->setDomainName($DomainName);
        return $this;
    }
}