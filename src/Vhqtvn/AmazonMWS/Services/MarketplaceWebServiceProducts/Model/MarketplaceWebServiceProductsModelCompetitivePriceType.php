<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceType
 * 
 * @property	string	$CompetitivePriceId
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType	$Price
 * @property	string	$condition
 * @property	string	$subcondition
 * @property	bool	$belongsToRequester
 */
class MarketplaceWebServiceProductsModelCompetitivePriceType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CompetitivePriceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Price' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType::class), 'condition' => array('FieldValue' => null, 'FieldType' => '@string'), 'subcondition' => array('FieldValue' => null, 'FieldType' => '@string'), 'belongsToRequester' => array('FieldValue' => null, 'FieldType' => '@bool'));
        parent::__construct($data);
    }
    /**
     * Get the value of the CompetitivePriceId property.
     *
     * @return \string CompetitivePriceId.
     */
    public function getCompetitivePriceId()
    {
        return $this->_fields['CompetitivePriceId']['FieldValue'];
    }
    /**
     * Set the value of the CompetitivePriceId property.
     *
     * @param string competitivePriceId
     * @return $this instance
     */
    public function setCompetitivePriceId($value)
    {
        $this->_fields['CompetitivePriceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CompetitivePriceId is set.
     *
     * @return true if CompetitivePriceId is set.
     */
    public function isSetCompetitivePriceId()
    {
        return !is_null($this->_fields['CompetitivePriceId']['FieldValue']);
    }
    /**
     * Set the value of CompetitivePriceId, return this.
     *
     * @param string $CompetitivePriceId
     * @return $this
     */
    public function withCompetitivePriceId($CompetitivePriceId)
    {
        $this->setCompetitivePriceId($CompetitivePriceId);
        return $this;
    }
    /**
     * Get the value of the Price property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType Price.
     */
    public function getPrice()
    {
        return $this->_fields['Price']['FieldValue'];
    }
    /**
     * Set the value of the Price property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType price
     * @return $this instance
     */
    public function setPrice($value)
    {
        $this->_fields['Price']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Price is set.
     *
     * @return true if Price is set.
     */
    public function isSetPrice()
    {
        return !is_null($this->_fields['Price']['FieldValue']);
    }
    /**
     * Set the value of Price, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType $Price
     * @return $this
     */
    public function withPrice($Price)
    {
        $this->setPrice($Price);
        return $this;
    }
    /**
     * Get the value of the condition property.
     *
     * @return \string condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }
    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @return $this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set.
     */
    public function isSetcondition()
    {
        return !is_null($this->_fields['condition']['FieldValue']);
    }
    /**
     * Set the value of condition, return this.
     *
     * @param string $condition
     * @return $this
     */
    public function withcondition($condition)
    {
        $this->setcondition($condition);
        return $this;
    }
    /**
     * Get the value of the subcondition property.
     *
     * @return \string subcondition.
     */
    public function getsubcondition()
    {
        return $this->_fields['subcondition']['FieldValue'];
    }
    /**
     * Set the value of the subcondition property.
     *
     * @param string subcondition
     * @return $this instance
     */
    public function setsubcondition($value)
    {
        $this->_fields['subcondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if subcondition is set.
     *
     * @return true if subcondition is set.
     */
    public function isSetsubcondition()
    {
        return !is_null($this->_fields['subcondition']['FieldValue']);
    }
    /**
     * Set the value of subcondition, return this.
     *
     * @param string $subcondition
     * @return $this
     */
    public function withsubcondition($subcondition)
    {
        $this->setsubcondition($subcondition);
        return $this;
    }
    /**
     * Check the value of belongsToRequester.
     *
     * @return true if belongsToRequester is set to true.
     */
    public function isbelongsToRequester()
    {
        return !is_null($this->_fields['belongsToRequester']['FieldValue']) && $this->_fields['belongsToRequester']['FieldValue'];
    }
    /**
     * Get the value of the belongsToRequester property.
     *
     * @return \bool belongsToRequester.
     */
    public function getbelongsToRequester()
    {
        return $this->_fields['belongsToRequester']['FieldValue'];
    }
    /**
     * Set the value of the belongsToRequester property.
     *
     * @param bool belongsToRequester
     * @return $this instance
     */
    public function setbelongsToRequester($value)
    {
        $this->_fields['belongsToRequester']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if belongsToRequester is set.
     *
     * @return true if belongsToRequester is set.
     */
    public function isSetbelongsToRequester()
    {
        return !is_null($this->_fields['belongsToRequester']['FieldValue']);
    }
    /**
     * Set the value of belongsToRequester, return this.
     *
     * @param bool $belongsToRequester
     * @return $this
     */
    public function withbelongsToRequester($belongsToRequester)
    {
        $this->setbelongsToRequester($belongsToRequester);
        return $this;
    }
}