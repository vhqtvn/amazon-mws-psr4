<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType
 * 
 * Properties:
 * <ul>
 * 
 * <li>minimumHours: int</li>
 * <li>maximumHours: int</li>
 * <li>availableDate: string</li>
 * <li>availabilityType: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelDetailedShippingTimeType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('minimumHours' => array('FieldValue' => null, 'FieldType' => '@int'), 'maximumHours' => array('FieldValue' => null, 'FieldType' => '@int'), 'availableDate' => array('FieldValue' => null, 'FieldType' => '@string'), 'availabilityType' => array('FieldValue' => null, 'FieldType' => '@string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the minimumHours property.
     *
     * @return Long minimumHours.
     */
    public function getminimumHours()
    {
        return $this->_fields['minimumHours']['FieldValue'];
    }
    /**
     * Set the value of the minimumHours property.
     *
     * @param int minimumHours
     * @return $this 
     */
    public function setminimumHours($value)
    {
        $this->_fields['minimumHours']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if minimumHours is set.
     *
     * @return true if minimumHours is set.
     */
    public function isSetminimumHours()
    {
        return !is_null($this->_fields['minimumHours']['FieldValue']);
    }
    /**
     * Set the value of minimumHours, return this.
     *
     * @param minimumHours
     *             The new value to set.
     *
     * @return $this .
     */
    public function withminimumHours($value)
    {
        $this->setminimumHours($value);
        return $this;
    }
    /**
     * Get the value of the maximumHours property.
     *
     * @return Long maximumHours.
     */
    public function getmaximumHours()
    {
        return $this->_fields['maximumHours']['FieldValue'];
    }
    /**
     * Set the value of the maximumHours property.
     *
     * @param int maximumHours
     * @return $this 
     */
    public function setmaximumHours($value)
    {
        $this->_fields['maximumHours']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if maximumHours is set.
     *
     * @return true if maximumHours is set.
     */
    public function isSetmaximumHours()
    {
        return !is_null($this->_fields['maximumHours']['FieldValue']);
    }
    /**
     * Set the value of maximumHours, return this.
     *
     * @param maximumHours
     *             The new value to set.
     *
     * @return $this .
     */
    public function withmaximumHours($value)
    {
        $this->setmaximumHours($value);
        return $this;
    }
    /**
     * Get the value of the availableDate property.
     *
     * @return XMLGregorianCalendar availableDate.
     */
    public function getavailableDate()
    {
        return $this->_fields['availableDate']['FieldValue'];
    }
    /**
     * Set the value of the availableDate property.
     *
     * @param string availableDate
     * @return $this 
     */
    public function setavailableDate($value)
    {
        $this->_fields['availableDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if availableDate is set.
     *
     * @return true if availableDate is set.
     */
    public function isSetavailableDate()
    {
        return !is_null($this->_fields['availableDate']['FieldValue']);
    }
    /**
     * Set the value of availableDate, return this.
     *
     * @param availableDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withavailableDate($value)
    {
        $this->setavailableDate($value);
        return $this;
    }
    /**
     * Get the value of the availabilityType property.
     *
     * @return String availabilityType.
     */
    public function getavailabilityType()
    {
        return $this->_fields['availabilityType']['FieldValue'];
    }
    /**
     * Set the value of the availabilityType property.
     *
     * @param string availabilityType
     * @return $this 
     */
    public function setavailabilityType($value)
    {
        $this->_fields['availabilityType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if availabilityType is set.
     *
     * @return true if availabilityType is set.
     */
    public function isSetavailabilityType()
    {
        return !is_null($this->_fields['availabilityType']['FieldValue']);
    }
    /**
     * Set the value of availabilityType, return this.
     *
     * @param availabilityType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withavailabilityType($value)
    {
        $this->setavailabilityType($value);
        return $this;
    }
}