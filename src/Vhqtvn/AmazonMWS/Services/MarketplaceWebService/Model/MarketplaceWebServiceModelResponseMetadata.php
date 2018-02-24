<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata
 * 
 * @property	string	$RequestId
 */
class MarketplaceWebServiceModelResponseMetadata extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>RequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('RequestId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the RequestId property.
     * 
     * @return string RequestId
     */
    public function getRequestId()
    {
        return $this->fields['RequestId']['FieldValue'];
    }
    /**
     * Sets the value of the RequestId property.
     * 
     * @param string RequestId
     * @return $this 
     */
    public function setRequestId($value)
    {
        $this->fields['RequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the RequestId and returns this instance
     * 
     * @param string $value RequestId
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata instance
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);
        return $this;
    }
    /**
     * Checks if RequestId is set
     * 
     * @return bool true if RequestId  is set
     */
    public function isSetRequestId()
    {
        return !is_null($this->fields['RequestId']['FieldValue']);
    }
}