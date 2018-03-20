<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsModel;
use DOMDocument;
use DOMXPath;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResult	$ListInventorySupplyResult
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata	$ResponseMetadata
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata	$ResponseHeaderMetadata
 */
class FbaInventoryServiceMwsModelListInventorySupplyResponse extends FbaInventoryServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ListInventorySupplyResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata::class), 'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ListInventorySupplyResult property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResult ListInventorySupplyResult.
     */
    public function getListInventorySupplyResult()
    {
        return $this->_fields['ListInventorySupplyResult']['FieldValue'];
    }
    /**
     * Set the value of the ListInventorySupplyResult property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResult listInventorySupplyResult
     * @return $this instance
     */
    public function setListInventorySupplyResult($value)
    {
        $this->_fields['ListInventorySupplyResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListInventorySupplyResult is set.
     *
     * @return true if ListInventorySupplyResult is set.
     */
    public function isSetListInventorySupplyResult()
    {
        return !is_null($this->_fields['ListInventorySupplyResult']['FieldValue']);
    }
    /**
     * Set the value of ListInventorySupplyResult, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResult $ListInventorySupplyResult
     * @return $this
     */
    public function withListInventorySupplyResult($ListInventorySupplyResult)
    {
        $this->setListInventorySupplyResult($ListInventorySupplyResult);
        return $this;
    }
    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }
    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata responseMetadata
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseMetadata $ResponseMetadata
     * @return $this
     */
    public function withResponseMetadata($ResponseMetadata)
    {
        $this->setResponseMetadata($ResponseMetadata);
        return $this;
    }
    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }
    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata responseHeaderMetadata
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelResponseHeaderMetadata $ResponseHeaderMetadata
     * @return $this
     */
    public function withResponseHeaderMetadata($ResponseHeaderMetadata)
    {
        $this->setResponseHeaderMetadata($ResponseHeaderMetadata);
        return $this;
    }
    /**
     * Construct \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListInventorySupplyResponse']");
        if ($response->length == 1) {
            return new FbaInventoryServiceMwsModelListInventorySupplyResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct FBAInventoryServiceMWS_Model_ListInventorySupplyResponse from provided XML. \n                                  Make sure that ListInventorySupplyResponse is a root element");
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
        $xml .= "<ListInventorySupplyResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInventory/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInventorySupplyResponse>";
        return $xml;
    }
}