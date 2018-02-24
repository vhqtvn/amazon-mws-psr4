<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResult	$ListRecommendationsByNextTokenResult
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListRecommendationsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListRecommendationsByNextTokenResult property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResult ListRecommendationsByNextTokenResult.
     */
    public function getListRecommendationsByNextTokenResult()
    {
        return $this->_fields['ListRecommendationsByNextTokenResult']['FieldValue'];
    }
    /**
     * Set the value of the ListRecommendationsByNextTokenResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResult listRecommendationsByNextTokenResult
     * @return $this 
     */
    public function setListRecommendationsByNextTokenResult($value)
    {
        $this->_fields['ListRecommendationsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListRecommendationsByNextTokenResult is set.
     *
     * @return true if ListRecommendationsByNextTokenResult is set.
     */
    public function isSetListRecommendationsByNextTokenResult()
    {
        return !is_null($this->_fields['ListRecommendationsByNextTokenResult']['FieldValue']);
    }
    /**
     * Set the value of ListRecommendationsByNextTokenResult, return this.
     *
     * @param listRecommendationsByNextTokenResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListRecommendationsByNextTokenResult($value)
    {
        $this->setListRecommendationsByNextTokenResult($value);
        return $this;
    }
    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }
    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseMetadata responseMetadata
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
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }
    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseHeaderMetadata responseHeaderMetadata
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
     * Construct \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListRecommendationsByNextTokenResponse']");
        if ($response->length == 1) {
            return new MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse from provided XML. \n                                  Make sure that ListRecommendationsByNextTokenResponse is a root element");
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
        $xml .= "<ListRecommendationsByNextTokenResponse xmlns=\"https://mws.amazonservices.com/Recommendations/2013-04-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListRecommendationsByNextTokenResponse>";
        return $xml;
    }
}