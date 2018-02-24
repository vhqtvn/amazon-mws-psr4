<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResult	$ListRecommendationsResult
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MwsRecommendationsSectionServiceModelListRecommendationsResponse extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListRecommendationsResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListRecommendationsResult property.
     *
     * @return ListRecommendationsResult ListRecommendationsResult.
     */
    public function getListRecommendationsResult()
    {
        return $this->_fields['ListRecommendationsResult']['FieldValue'];
    }
    /**
     * Set the value of the ListRecommendationsResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResult listRecommendationsResult
     * @return $this 
     */
    public function setListRecommendationsResult($value)
    {
        $this->_fields['ListRecommendationsResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListRecommendationsResult is set.
     *
     * @return true if ListRecommendationsResult is set.
     */
    public function isSetListRecommendationsResult()
    {
        return !is_null($this->_fields['ListRecommendationsResult']['FieldValue']);
    }
    /**
     * Set the value of ListRecommendationsResult, return this.
     *
     * @param listRecommendationsResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListRecommendationsResult($value)
    {
        $this->setListRecommendationsResult($value);
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
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
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
     * Construct \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListRecommendationsResponse']");
        if ($response->length == 1) {
            return new MwsRecommendationsSectionServiceModelListRecommendationsResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MWSRecommendationsSectionService_Model_ListRecommendationsResponse from provided XML. \n                                  Make sure that ListRecommendationsResponse is a root element");
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
        $xml .= "<ListRecommendationsResponse xmlns=\"https://mws.amazonservices.com/Recommendations/2013-04-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListRecommendationsResponse>";
        return $xml;
    }
}