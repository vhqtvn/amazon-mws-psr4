<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetMyPriceForSKUResult: array</li>
 * <li>ResponseMetadata: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata</li>
 * <li>ResponseHeaderMetadata: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('GetMyPriceForSKUResult' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKUResult::class)), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the GetMyPriceForSKUResult property.
     *
     * @return List<GetMyPriceForSKUResult> GetMyPriceForSKUResult.
     */
    public function getGetMyPriceForSKUResult()
    {
        if ($this->_fields['GetMyPriceForSKUResult']['FieldValue'] == null) {
            $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = array();
        }
        return $this->_fields['GetMyPriceForSKUResult']['FieldValue'];
    }
    /**
     * Set the value of the GetMyPriceForSKUResult property.
     *
     * @param array getMyPriceForSKUResult
     * @return $this 
     */
    public function setGetMyPriceForSKUResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear GetMyPriceForSKUResult.
     */
    public function unsetGetMyPriceForSKUResult()
    {
        $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = array();
    }
    /**
     * Check to see if GetMyPriceForSKUResult is set.
     *
     * @return true if GetMyPriceForSKUResult is set.
     */
    public function isSetGetMyPriceForSKUResult()
    {
        return !empty($this->_fields['GetMyPriceForSKUResult']['FieldValue']);
    }
    /**
     * Add values for GetMyPriceForSKUResult, return this.
     *
     * @param getMyPriceForSKUResult
     *             New values to add.
     *
     * @return $this .
     */
    public function withGetMyPriceForSKUResult()
    {
        foreach (func_get_args() as $GetMyPriceForSKUResult) {
            $this->_fields['GetMyPriceForSKUResult']['FieldValue'][] = $GetMyPriceForSKUResult;
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
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMyPriceForSKUResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse from provided XML. \n                                  Make sure that GetMyPriceForSKUResponse is a root element");
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
        $xml .= "<GetMyPriceForSKUResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyPriceForSKUResponse>";
        return $xml;
    }
}