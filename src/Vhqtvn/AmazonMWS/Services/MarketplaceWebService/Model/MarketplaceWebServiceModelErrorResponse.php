<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>Error: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError</li>
 * <li>RequestId: string</li>
 *
 * </ul>
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
        $this->fields = array('Error' => array('FieldValue' => array(), 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelError::class), 'RequestId' => array('FieldValue' => null, 'FieldType' => 'string'));
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
        return $this->fields['Error']['FieldValue'];
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
        $this->fields['Error']['FieldValue'] = $error;
        return $this;
    }
    /**
     * Sets single or multiple values of Error list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withError($error1, $error2)</code>
     * 
     * @param Error  $errorArgs one or more Error
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse  instance
     */
    public function withError($errorArgs)
    {
        foreach (func_get_args() as $error) {
            $this->fields['Error']['FieldValue'][] = $error;
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
        return count($this->fields['Error']['FieldValue']) > 0;
    }
    /**
     * Gets the value of the RequestId property.
     * 
     * @return string RequestId
     */
    public function getRequestId()
    {
        return $this->fields['RequestId']['FieldValue'];
    }
    /**
     * Sets the value of the RequestId property.
     * 
     * @param string RequestId
     * @return $this 
     */
    public function setRequestId($value)
    {
        $this->fields['RequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the RequestId and returns this instance
     * 
     * @param string $value RequestId
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelErrorResponse instance
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);
        return $this;
    }
    /**
     * Checks if RequestId is set
     * 
     * @return bool true if RequestId  is set
     */
    public function isSetRequestId()
    {
        return !is_null($this->fields['RequestId']['FieldValue']);
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