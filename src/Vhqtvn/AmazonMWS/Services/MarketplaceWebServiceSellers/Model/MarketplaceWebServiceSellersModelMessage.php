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
     * @return \string Locale.
     */
    public function getLocale()
    {
        return $this->_fields['Locale']['FieldValue'];
    }
    /**
     * Set the value of the Locale property.
     *
     * @param string locale
     * @return $this instance
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
     * @param string $Locale
     * @return $this
     */
    public function withLocale($Locale)
    {
        $this->setLocale($Locale);
        return $this;
    }
    /**
     * Get the value of the Text property.
     *
     * @return \string Text.
     */
    public function getText()
    {
        return $this->_fields['Text']['FieldValue'];
    }
    /**
     * Set the value of the Text property.
     *
     * @param string text
     * @return $this instance
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
     * @param string $Text
     * @return $this
     */
    public function withText($Text)
    {
        $this->setText($Text);
        return $this;
    }
}