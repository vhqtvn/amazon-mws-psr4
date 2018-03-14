<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError	$Error
 * @property	string	$RequestId
 */
class MarketplaceWebServiceModelErrorResponse extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Error: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError</li>
     * <li>RequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Error' => array('FieldValue' => array(), 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError::class), 'RequestId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:ErrorResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceModelErrorResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebService_Model_ErrorResponse from provided XML. \n                                  Make sure that ErrorResponse is a root element");
        }
    }
    /**
     * Gets the value of the Error.
     * 
     * @return array of Error Error
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }
    /**
     * Sets the value of the Error.
     * 
     * @param mixed Error or an array of Error Error
     * @return $this 
     */
    public function setError($error)
    {
        if (!$this->_isNumericArray($error)) {
            $error = array($error);
        }
        $this->_fields['Error']['FieldValue'] = $error;
        return $this;
    }
    /**
     * Add values for Error, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError[] $Error_array,...
     * @return $this
     */
    public function withError(...$Error_array)
    {
        foreach ($Error_array as $error) {
            $this->_fields['Error']['FieldValue'][] = $error;
        }
        return $this;
    }
    /**
     * Checks if Error list is non-empty
     * 
     * @return bool true if Error list is non-empty
     */
    public function isSetError()
    {
        return count($this->_fields['Error']['FieldValue']) > 0;
    }
    /**
     * Gets the value of the RequestId property.
     * 
     * @return string RequestId
     */
    public function getRequestId()
    {
        return $this->_fields['RequestId']['FieldValue'];
    }
    /**
     * Sets the value of the RequestId property.
     * 
     * @param string RequestId
     * @return $this 
     */
    public function setRequestId($value)
    {
        $this->_fields['RequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of RequestId, return this.
     *
     * @param string $RequestId
     * @return $this
     */
    public function withRequestId($RequestId)
    {
        $this->setRequestId($RequestId);
        return $this;
    }
    /**
     * Checks if RequestId is set
     * 
     * @return bool true if RequestId  is set
     */
    public function isSetRequestId()
    {
        return !is_null($this->_fields['RequestId']['FieldValue']);
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ErrorResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ErrorResponse>";
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