<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResult	$GetReportScheduleCountResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata	$ResponseMetadata
 */
class MarketplaceWebServiceModelGetReportScheduleCountResponse extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetReportScheduleCountResult: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResult</li>
     * <li>ResponseMetadata: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('GetReportScheduleCountResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata::class));
        parent::__construct($data);
    }
    /**
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportScheduleCountResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceModelGetReportScheduleCountResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebService_Model_GetReportScheduleCountResponse from provided XML. \n                                  Make sure that GetReportScheduleCountResponse is a root element");
        }
    }
    /**
     * Gets the value of the GetReportScheduleCountResult.
     * 
     * @return GetReportScheduleCountResult GetReportScheduleCountResult
     */
    public function getGetReportScheduleCountResult()
    {
        return $this->fields['GetReportScheduleCountResult']['FieldValue'];
    }
    /**
     * Sets the value of the GetReportScheduleCountResult.
     * 
     * @param GetReportScheduleCountResult GetReportScheduleCountResult
     * @return void
     */
    public function setGetReportScheduleCountResult($value)
    {
        $this->fields['GetReportScheduleCountResult']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the GetReportScheduleCountResult  and returns this instance
     * 
     * @param GetReportScheduleCountResult $value GetReportScheduleCountResult
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse instance
     */
    public function withGetReportScheduleCountResult($value)
    {
        $this->setGetReportScheduleCountResult($value);
        return $this;
    }
    /**
     * Checks if GetReportScheduleCountResult  is set
     * 
     * @return bool true if GetReportScheduleCountResult property is set
     */
    public function isSetGetReportScheduleCountResult()
    {
        return !is_null($this->fields['GetReportScheduleCountResult']['FieldValue']);
    }
    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }
    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value)
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }
    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->fields['ResponseMetadata']['FieldValue']);
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetReportScheduleCountResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportScheduleCountResponse>";
        return $xml;
    }
    private $_responseHeaderMetadata = null;
    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }
    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}