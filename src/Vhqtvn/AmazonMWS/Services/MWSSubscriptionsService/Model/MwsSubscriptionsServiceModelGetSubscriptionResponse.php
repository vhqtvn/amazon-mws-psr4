<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResult	$GetSubscriptionResult
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MwsSubscriptionsServiceModelGetSubscriptionResponse extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('GetSubscriptionResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the GetSubscriptionResult property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResult GetSubscriptionResult.
     */
    public function getGetSubscriptionResult()
    {
        return $this->_fields['GetSubscriptionResult']['FieldValue'];
    }
    /**
     * Set the value of the GetSubscriptionResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResult getSubscriptionResult
     * @return $this 
     */
    public function setGetSubscriptionResult($value)
    {
        $this->_fields['GetSubscriptionResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GetSubscriptionResult is set.
     *
     * @return true if GetSubscriptionResult is set.
     */
    public function isSetGetSubscriptionResult()
    {
        return !is_null($this->_fields['GetSubscriptionResult']['FieldValue']);
    }
    /**
     * Set the value of GetSubscriptionResult, return this.
     *
     * @param getSubscriptionResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withGetSubscriptionResult($value)
    {
        $this->setGetSubscriptionResult($value);
        return $this;
    }
    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseMetadata ResponseMetadata.
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
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelResponseHeaderMetadata ResponseHeaderMetadata.
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
     * Construct \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetSubscriptionResponse']");
        if ($response->length == 1) {
            return new MwsSubscriptionsServiceModelGetSubscriptionResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MWSSubscriptionsService_Model_GetSubscriptionResponse from provided XML. \n                                  Make sure that GetSubscriptionResponse is a root element");
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
        $xml .= "<GetSubscriptionResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetSubscriptionResponse>";
        return $xml;
    }
}