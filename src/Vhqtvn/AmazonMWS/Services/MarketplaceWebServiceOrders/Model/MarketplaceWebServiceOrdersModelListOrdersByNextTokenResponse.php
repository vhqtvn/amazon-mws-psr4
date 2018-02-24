<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersByNextTokenResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersByNextTokenResult	$ListOrdersByNextTokenResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MarketplaceWebServiceOrdersModelListOrdersByNextTokenResponse extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListOrdersByNextTokenResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersByNextTokenResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListOrdersByNextTokenResult property.
     *
     * @return ListOrdersByNextTokenResult ListOrdersByNextTokenResult.
     */
    public function getListOrdersByNextTokenResult()
    {
        return $this->_fields['ListOrdersByNextTokenResult']['FieldValue'];
    }
    /**
     * Set the value of the ListOrdersByNextTokenResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersByNextTokenResult listOrdersByNextTokenResult
     * @return $this 
     */
    public function setListOrdersByNextTokenResult($value)
    {
        $this->_fields['ListOrdersByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListOrdersByNextTokenResult is set.
     *
     * @return true if ListOrdersByNextTokenResult is set.
     */
    public function isSetListOrdersByNextTokenResult()
    {
        return !is_null($this->_fields['ListOrdersByNextTokenResult']['FieldValue']);
    }
    /**
     * Set the value of ListOrdersByNextTokenResult, return this.
     *
     * @param listOrdersByNextTokenResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListOrdersByNextTokenResult($value)
    {
        $this->setListOrdersByNextTokenResult($value);
        return $this;
    }
    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }
    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelResponseMetadata responseMetadata
     * @return $this 
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }
    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return $this .
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }
    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }
    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelResponseHeaderMetadata responseHeaderMetadata
     * @return $this 
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }
    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return $this .
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrdersByNextTokenResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceOrdersModelListOrdersByNextTokenResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebServiceOrders_Model_ListOrdersByNextTokenResponse from provided XML. \n                                  Make sure that ListOrdersByNextTokenResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ListOrdersByNextTokenResponse xmlns=\"https://mws.amazonservices.com/Orders/2013-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListOrdersByNextTokenResponse>";
        return $xml;
    }
}