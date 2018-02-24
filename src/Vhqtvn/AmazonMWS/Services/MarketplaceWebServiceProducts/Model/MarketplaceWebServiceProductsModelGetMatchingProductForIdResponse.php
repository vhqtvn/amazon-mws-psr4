<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse
 * 
 * @property	array	$GetMatchingProductForIdResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('GetMatchingProductForIdResult' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResult::class)), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the GetMatchingProductForIdResult property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResult[] GetMatchingProductForIdResult.
     */
    public function getGetMatchingProductForIdResult()
    {
        if ($this->_fields['GetMatchingProductForIdResult']['FieldValue'] == null) {
            $this->_fields['GetMatchingProductForIdResult']['FieldValue'] = array();
        }
        return $this->_fields['GetMatchingProductForIdResult']['FieldValue'];
    }
    /**
     * Set the value of the GetMatchingProductForIdResult property.
     *
     * @param array getMatchingProductForIdResult
     * @return $this 
     */
    public function setGetMatchingProductForIdResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GetMatchingProductForIdResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear GetMatchingProductForIdResult.
     */
    public function unsetGetMatchingProductForIdResult()
    {
        $this->_fields['GetMatchingProductForIdResult']['FieldValue'] = array();
    }
    /**
     * Check to see if GetMatchingProductForIdResult is set.
     *
     * @return true if GetMatchingProductForIdResult is set.
     */
    public function isSetGetMatchingProductForIdResult()
    {
        return !empty($this->_fields['GetMatchingProductForIdResult']['FieldValue']);
    }
    /**
     * Add values for GetMatchingProductForIdResult, return this.
     *
     * @param getMatchingProductForIdResult
     *             New values to add.
     *
     * @return $this .
     */
    public function withGetMatchingProductForIdResult()
    {
        foreach (func_get_args() as $GetMatchingProductForIdResult) {
            $this->_fields['GetMatchingProductForIdResult']['FieldValue'][] = $GetMatchingProductForIdResult;
        }
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata responseMetadata
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata responseHeaderMetadata
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
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMatchingProductForIdResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse from provided XML. \n                                  Make sure that GetMatchingProductForIdResponse is a root element");
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
        $xml .= "<GetMatchingProductForIdResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMatchingProductForIdResponse>";
        return $xml;
    }
}