<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelDetailedShippingTimeType
 * 
 * @property	int	$minimumHours
 * @property	int	$maximumHours
 * @property	string	$availableDate
 * @property	string	$availabilityType
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
     * @return int minimumHours.
     */
    public function getminimumHours()
    {
        return $this->_fields['minimumHours']['FieldValue'];
    }
    /**
     * Set the value of the minimumHours property.
     *
     * @param int minimumHours
     * @return $this instance
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
     * @param int $minimumHours
     * @return $this
     */
    public function withminimumHours($minimumHours)
    {
        $this->setminimumHours($minimumHours);
        return $this;
    }
    /**
     * Get the value of the maximumHours property.
     *
     * @return int maximumHours.
     */
    public function getmaximumHours()
    {
        return $this->_fields['maximumHours']['FieldValue'];
    }
    /**
     * Set the value of the maximumHours property.
     *
     * @param int maximumHours
     * @return $this instance
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
     * @param int $maximumHours
     * @return $this
     */
    public function withmaximumHours($maximumHours)
    {
        $this->setmaximumHours($maximumHours);
        return $this;
    }
    /**
     * Get the value of the availableDate property.
     *
     * @return \DateTime availableDate.
     */
    public function getavailableDate()
    {
        return $this->_fields['availableDate']['FieldValue'];
    }
    /**
     * Set the value of the availableDate property.
     *
     * @param string availableDate
     * @return $this instance
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
     * @param string $availableDate
     * @return $this
     */
    public function withavailableDate($availableDate)
    {
        $this->setavailableDate($availableDate);
        return $this;
    }
    /**
     * Get the value of the availabilityType property.
     *
     * @return \string availabilityType.
     */
    public function getavailabilityType()
    {
        return $this->_fields['availabilityType']['FieldValue'];
    }
    /**
     * Set the value of the availabilityType property.
     *
     * @param string availabilityType
     * @return $this instance
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
     * @param string $availabilityType
     * @return $this
     */
    public function withavailabilityType($availabilityType)
    {
        $this->setavailabilityType($availabilityType);
        return $this;
    }
}