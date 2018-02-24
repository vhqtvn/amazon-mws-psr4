<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelMessage
 * 
 * @property	string	$Locale
 * @property	string	$Text
 */
class MarketplaceWebServiceSellersModelMessage extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Locale' => array('FieldValue' => null, 'FieldType' => 'string'), 'Text' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Locale property.
     *
     * @return String Locale.
     */
    public function getLocale()
    {
        return $this->_fields['Locale']['FieldValue'];
    }
    /**
     * Set the value of the Locale property.
     *
     * @param string locale
     * @return $this 
     */
    public function setLocale($value)
    {
        $this->_fields['Locale']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Locale is set.
     *
     * @return true if Locale is set.
     */
    public function isSetLocale()
    {
        return !is_null($this->_fields['Locale']['FieldValue']);
    }
    /**
     * Set the value of Locale, return this.
     *
     * @param locale
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLocale($value)
    {
        $this->setLocale($value);
        return $this;
    }
    /**
     * Get the value of the Text property.
     *
     * @return String Text.
     */
    public function getText()
    {
        return $this->_fields['Text']['FieldValue'];
    }
    /**
     * Set the value of the Text property.
     *
     * @param string text
     * @return $this 
     */
    public function setText($value)
    {
        $this->_fields['Text']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Text is set.
     *
     * @return true if Text is set.
     */
    public function isSetText()
    {
        return !is_null($this->_fields['Text']['FieldValue']);
    }
    /**
     * Set the value of Text, return this.
     *
     * @param text
     *             The new value to set.
     *
     * @return $this .
     */
    public function withText($value)
    {
        $this->setText($value);
        return $this;
    }
}