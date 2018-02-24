<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResult	$ListRegisteredDestinationsResult
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MwsSubscriptionsServiceModelListRegisteredDestinationsResponse extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListRegisteredDestinationsResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListRegisteredDestinationsResult property.
     *
     * @return ListRegisteredDestinationsResult ListRegisteredDestinationsResult.
     */
    public function getListRegisteredDestinationsResult()
    {
        return $this->_fields['ListRegisteredDestinationsResult']['FieldValue'];
    }
    /**
     * Set the value of the ListRegisteredDestinationsResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResult listRegisteredDestinationsResult
     * @return $this 
     */
    public function setListRegisteredDestinationsResult($value)
    {
        $this->_fields['ListRegisteredDestinationsResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListRegisteredDestinationsResult is set.
     *
     * @return true if ListRegisteredDestinationsResult is set.
     */
    public function isSetListRegisteredDestinationsResult()
    {
        return !is_null($this->_fields['ListRegisteredDestinationsResult']['FieldValue']);
    }
    /**
     * Set the value of ListRegisteredDestinationsResult, return this.
     *
     * @param listRegisteredDestinationsResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListRegisteredDestinationsResult($value)
    {
        $this->setListRegisteredDestinationsResult($value);
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseMetadata responseMetadata
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseHeaderMetadata responseHeaderMetadata
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
     * Construct \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListRegisteredDestinationsResponse']");
        if ($response->length == 1) {
            return new MwsSubscriptionsServiceModelListRegisteredDestinationsResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MWSSubscriptionsService_Model_ListRegisteredDestinationsResponse from provided XML. \n                                  Make sure that ListRegisteredDestinationsResponse is a root element");
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
        $xml .= "<ListRegisteredDestinationsResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListRegisteredDestinationsResponse>";
        return $xml;
    }
}