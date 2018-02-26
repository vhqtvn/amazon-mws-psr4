<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOfferCountType
 * 
 * @property	string	$condition
 * @property	string	$fulfillmentChannel
 * @property	int	$OfferCount
 */
class MarketplaceWebServiceProductsModelOfferCountType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('condition' => array('FieldValue' => null, 'FieldType' => '@string'), 'fulfillmentChannel' => array('FieldValue' => null, 'FieldType' => '@string'), 'OfferCount' => array('FieldValue' => null, 'FieldType' => '.int'));
        parent::__construct($data);
    }
    /**
     * Get the value of the condition property.
     *
     * @return String condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }
    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @return $this 
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
     * Get the value of the fulfillmentChannel property.
     *
     * @return String fulfillmentChannel.
     */
    public function getfulfillmentChannel()
    {
        return $this->_fields['fulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the fulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this 
     */
    public function setfulfillmentChannel($value)
    {
        $this->_fields['fulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if fulfillmentChannel is set.
     *
     * @return true if fulfillmentChannel is set.
     */
    public function isSetfulfillmentChannel()
    {
        return !is_null($this->_fields['fulfillmentChannel']['FieldValue']);
    }
    /**
     * Set the value of fulfillmentChannel, return this.
     *
     * @param string $fulfillmentChannel
     * @return $this
     */
    public function withfulfillmentChannel($fulfillmentChannel)
    {
        $this->setfulfillmentChannel($fulfillmentChannel);
        return $this;
    }
    /**
     * Get the value of the OfferCount property.
     *
     * @return Integer OfferCount.
     */
    public function getOfferCount()
    {
        return $this->_fields['OfferCount']['FieldValue'];
    }
    /**
     * Set the value of the OfferCount property.
     *
     * @param int offerCount
     * @return $this 
     */
    public function setOfferCount($value)
    {
        $this->_fields['OfferCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OfferCount is set.
     *
     * @return true if OfferCount is set.
     */
    public function isSetOfferCount()
    {
        return !is_null($this->_fields['OfferCount']['FieldValue']);
    }
    /**
     * Set the value of OfferCount, return this.
     *
     * @param int $OfferCount
     * @return $this
     */
    public function withOfferCount($OfferCount)
    {
        $this->setOfferCount($OfferCount);
        return $this;
    }
}