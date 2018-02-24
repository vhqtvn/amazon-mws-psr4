<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResult	$ListMarketplaceParticipationsByNextTokenResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListMarketplaceParticipationsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListMarketplaceParticipationsByNextTokenResult property.
     *
     * @return ListMarketplaceParticipationsByNextTokenResult ListMarketplaceParticipationsByNextTokenResult.
     */
    public function getListMarketplaceParticipationsByNextTokenResult()
    {
        return $this->_fields['ListMarketplaceParticipationsByNextTokenResult']['FieldValue'];
    }
    /**
     * Set the value of the ListMarketplaceParticipationsByNextTokenResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResult listMarketplaceParticipationsByNextTokenResult
     * @return $this 
     */
    public function setListMarketplaceParticipationsByNextTokenResult($value)
    {
        $this->_fields['ListMarketplaceParticipationsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListMarketplaceParticipationsByNextTokenResult is set.
     *
     * @return true if ListMarketplaceParticipationsByNextTokenResult is set.
     */
    public function isSetListMarketplaceParticipationsByNextTokenResult()
    {
        return !is_null($this->_fields['ListMarketplaceParticipationsByNextTokenResult']['FieldValue']);
    }
    /**
     * Set the value of ListMarketplaceParticipationsByNextTokenResult, return this.
     *
     * @param listMarketplaceParticipationsByNextTokenResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListMarketplaceParticipationsByNextTokenResult($value)
    {
        $this->setListMarketplaceParticipationsByNextTokenResult($value);
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseMetadata responseMetadata
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelResponseHeaderMetadata responseHeaderMetadata
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
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListMarketplaceParticipationsByNextTokenResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsByNextTokenResponse from provided XML. \n                                  Make sure that ListMarketplaceParticipationsByNextTokenResponse is a root element");
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
        $xml .= "<ListMarketplaceParticipationsByNextTokenResponse xmlns=\"https://mws.amazonservices.com/Sellers/2011-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMarketplaceParticipationsByNextTokenResponse>";
        return $xml;
    }
}