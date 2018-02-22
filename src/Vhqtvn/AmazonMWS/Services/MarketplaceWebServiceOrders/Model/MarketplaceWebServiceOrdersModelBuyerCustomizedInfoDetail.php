<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomizedURL: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrdersModelBuyerCustomizedInfoDetail extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CustomizedURL' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the CustomizedURL property.
     *
     * @return String CustomizedURL.
     */
    public function getCustomizedURL()
    {
        return $this->_fields['CustomizedURL']['FieldValue'];
    }
    /**
     * Set the value of the CustomizedURL property.
     *
     * @param string customizedURL
     * @return $this 
     */
    public function setCustomizedURL($value)
    {
        $this->_fields['CustomizedURL']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CustomizedURL is set.
     *
     * @return true if CustomizedURL is set.
     */
    public function isSetCustomizedURL()
    {
        return !is_null($this->_fields['CustomizedURL']['FieldValue']);
    }
    /**
     * Set the value of CustomizedURL, return this.
     *
     * @param customizedURL
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCustomizedURL($value)
    {
        $this->setCustomizedURL($value);
        return $this;
    }
}