<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentItemList	$ItemData
 * @property	string	$NextToken
 */
class FbaInboundServiceMwsModelListInboundShipmentItemsResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ItemData' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentItemList::class), 'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ItemData property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentItemList ItemData.
     */
    public function getItemData()
    {
        return $this->_fields['ItemData']['FieldValue'];
    }
    /**
     * Set the value of the ItemData property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentItemList itemData
     * @return $this 
     */
    public function setItemData($value)
    {
        $this->_fields['ItemData']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemData is set.
     *
     * @return true if ItemData is set.
     */
    public function isSetItemData()
    {
        return !is_null($this->_fields['ItemData']['FieldValue']);
    }
    /**
     * Set the value of ItemData, return this.
     *
     * @param itemData
     *             The new value to set.
     *
     * @return $this .
     */
    public function withItemData($value)
    {
        $this->setItemData($value);
        return $this;
    }
    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
}