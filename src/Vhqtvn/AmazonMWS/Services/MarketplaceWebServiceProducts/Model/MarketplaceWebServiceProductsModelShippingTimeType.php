<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelShippingTimeType
 * 
 * @property	string	$Max
 */
class MarketplaceWebServiceProductsModelShippingTimeType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Max' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Max property.
     *
     * @return \string Max.
     */
    public function getMax()
    {
        return $this->_fields['Max']['FieldValue'];
    }
    /**
     * Set the value of the Max property.
     *
     * @param string max
     * @return $this instance
     */
    public function setMax($value)
    {
        $this->_fields['Max']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Max is set.
     *
     * @return true if Max is set.
     */
    public function isSetMax()
    {
        return !is_null($this->_fields['Max']['FieldValue']);
    }
    /**
     * Set the value of Max, return this.
     *
     * @param string $Max
     * @return $this
     */
    public function withMax($Max)
    {
        $this->setMax($Max);
        return $this;
    }
}