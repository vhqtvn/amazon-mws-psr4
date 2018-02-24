<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseMetadata
 * 
 * @property	string	$RequestId
 */
class MarketplaceWebServiceSellersModelResponseMetadata extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('RequestId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the RequestId property.
     *
     * @return String RequestId.
     */
    public function getRequestId()
    {
        return $this->_fields['RequestId']['FieldValue'];
    }
    /**
     * Set the value of the RequestId property.
     *
     * @param string requestId
     * @return $this 
     */
    public function setRequestId($value)
    {
        $this->_fields['RequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RequestId is set.
     *
     * @return true if RequestId is set.
     */
    public function isSetRequestId()
    {
        return !is_null($this->_fields['RequestId']['FieldValue']);
    }
    /**
     * Set the value of RequestId, return this.
     *
     * @param requestId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);
        return $this;
    }
}