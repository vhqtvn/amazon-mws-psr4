<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResponse
 * 
 * @property	array	$GetMyPriceForASINResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MarketplaceWebServiceProductsModelGetMyPriceForASINResponse extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('GetMyPriceForASINResult' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResult::class)), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the GetMyPriceForASINResult property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResult[] GetMyPriceForASINResult.
     */
    public function getGetMyPriceForASINResult()
    {
        if ($this->_fields['GetMyPriceForASINResult']['FieldValue'] == null) {
            $this->_fields['GetMyPriceForASINResult']['FieldValue'] = array();
        }
        return $this->_fields['GetMyPriceForASINResult']['FieldValue'];
    }
    /**
     * Set the value of the GetMyPriceForASINResult property.
     *
     * @param array getMyPriceForASINResult
     * @return $this 
     */
    public function setGetMyPriceForASINResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GetMyPriceForASINResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear GetMyPriceForASINResult.
     */
    public function unsetGetMyPriceForASINResult()
    {
        $this->_fields['GetMyPriceForASINResult']['FieldValue'] = array();
    }
    /**
     * Check to see if GetMyPriceForASINResult is set.
     *
     * @return true if GetMyPriceForASINResult is set.
     */
    public function isSetGetMyPriceForASINResult()
    {
        return !empty($this->_fields['GetMyPriceForASINResult']['FieldValue']);
    }
    /**
     * Add values for GetMyPriceForASINResult, return this.
     *
     * @param getMyPriceForASINResult
     *             New values to add.
     *
     * @return $this .
     */
    public function withGetMyPriceForASINResult()
    {
        foreach (func_get_args() as $GetMyPriceForASINResult) {
            $this->_fields['GetMyPriceForASINResult']['FieldValue'][] = $GetMyPriceForASINResult;
        }
        return $this;
    }
    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata ResponseMetadata.
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata ResponseHeaderMetadata.
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
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMyPriceForASINResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceProductsModelGetMyPriceForASINResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse from provided XML. \n                                  Make sure that GetMyPriceForASINResponse is a root element");
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
        $xml .= "<GetMyPriceForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyPriceForASINResponse>";
        return $xml;
    }
}