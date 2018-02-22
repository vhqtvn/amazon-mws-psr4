<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsModel;
use DOMDocument;
use DOMXPath;
use Exception;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListInventorySupplyByNextTokenResult: \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResult</li>
 * <li>ResponseMetadata: \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata</li>
 * <li>ResponseHeaderMetadata: \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata</li>
 *
 * </ul>
 */
class FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse extends FbaInventoryServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListInventorySupplyByNextTokenResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListInventorySupplyByNextTokenResult property.
     *
     * @return ListInventorySupplyByNextTokenResult ListInventorySupplyByNextTokenResult.
     */
    public function getListInventorySupplyByNextTokenResult()
    {
        return $this->_fields['ListInventorySupplyByNextTokenResult']['FieldValue'];
    }
    /**
     * Set the value of the ListInventorySupplyByNextTokenResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResult listInventorySupplyByNextTokenResult
     * @return $this 
     */
    public function setListInventorySupplyByNextTokenResult($value)
    {
        $this->_fields['ListInventorySupplyByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListInventorySupplyByNextTokenResult is set.
     *
     * @return true if ListInventorySupplyByNextTokenResult is set.
     */
    public function isSetListInventorySupplyByNextTokenResult()
    {
        return !is_null($this->_fields['ListInventorySupplyByNextTokenResult']['FieldValue']);
    }
    /**
     * Set the value of ListInventorySupplyByNextTokenResult, return this.
     *
     * @param listInventorySupplyByNextTokenResult
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListInventorySupplyByNextTokenResult($value)
    {
        $this->setListInventorySupplyByNextTokenResult($value);
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata responseMetadata
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata responseHeaderMetadata
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
     * Construct \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListInventorySupplyByNextTokenResponse']");
        if ($response->length == 1) {
            return new FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse from provided XML. \n                                  Make sure that ListInventorySupplyByNextTokenResponse is a root element");
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
        $xml .= "<ListInventorySupplyByNextTokenResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInventory/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInventorySupplyByNextTokenResponse>";
        return $xml;
    }
}