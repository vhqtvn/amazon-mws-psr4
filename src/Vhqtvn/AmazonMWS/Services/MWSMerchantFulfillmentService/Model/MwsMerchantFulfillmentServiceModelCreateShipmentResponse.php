<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResult	$CreateShipmentResult
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class MwsMerchantFulfillmentServiceModelCreateShipmentResponse extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CreateShipmentResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the CreateShipmentResult property.
     *
     * @return CreateShipmentResult CreateShipmentResult.
     */
    public function getCreateShipmentResult()
    {
        return $this->_fields['CreateShipmentResult']['FieldValue'];
    }
    /**
     * Set the value of the CreateShipmentResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResult createShipmentResult
     * @return $this 
     */
    public function setCreateShipmentResult($value)
    {
        $this->_fields['CreateShipmentResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CreateShipmentResult is set.
     *
     * @return true if CreateShipmentResult is set.
     */
    public function isSetCreateShipmentResult()
    {
        return !is_null($this->_fields['CreateShipmentResult']['FieldValue']);
    }
    /**
     * Set the value of CreateShipmentResult, return this.
     *
     * @param createShipmentResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCreateShipmentResult($value)
    {
        $this->setCreateShipmentResult($value);
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelResponseMetadata responseMetadata
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelResponseHeaderMetadata responseHeaderMetadata
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
     * Construct \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateShipmentResponse']");
        if ($response->length == 1) {
            return new MwsMerchantFulfillmentServiceModelCreateShipmentResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MWSMerchantFulfillmentService_Model_CreateShipmentResponse from provided XML. \n                                  Make sure that CreateShipmentResponse is a root element");
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
        $xml .= "<CreateShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateShipmentResponse>";
        return $xml;
    }
}