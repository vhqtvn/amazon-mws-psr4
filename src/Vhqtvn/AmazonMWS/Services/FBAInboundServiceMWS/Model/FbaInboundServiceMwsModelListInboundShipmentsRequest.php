<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$Marketplace
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentStatusList	$ShipmentStatusList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentIdList	$ShipmentIdList
 * @property	string	$LastUpdatedBefore
 * @property	string	$LastUpdatedAfter
 */
class FbaInboundServiceMwsModelListInboundShipmentsRequest extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentStatusList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentStatusList::class), 'ShipmentIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentIdList::class), 'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'), 'LastUpdatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return \string SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param string $SellerId
     * @return $this
     */
    public function withSellerId($SellerId)
    {
        $this->setSellerId($SellerId);
        return $this;
    }
    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return \string MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }
    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Get the value of the Marketplace property.
     *
     * @return \string Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }
    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }
    /**
     * Set the value of Marketplace, return this.
     *
     * @param string $Marketplace
     * @return $this
     */
    public function withMarketplace($Marketplace)
    {
        $this->setMarketplace($Marketplace);
        return $this;
    }
    /**
     * Get the value of the ShipmentStatusList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentStatusList ShipmentStatusList.
     */
    public function getShipmentStatusList()
    {
        return $this->_fields['ShipmentStatusList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentStatusList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentStatusList shipmentStatusList
     * @return $this instance
     */
    public function setShipmentStatusList($value)
    {
        $this->_fields['ShipmentStatusList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentStatusList is set.
     *
     * @return true if ShipmentStatusList is set.
     */
    public function isSetShipmentStatusList()
    {
        return !is_null($this->_fields['ShipmentStatusList']['FieldValue']);
    }
    /**
     * Set the value of ShipmentStatusList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentStatusList $ShipmentStatusList
     * @return $this
     */
    public function withShipmentStatusList($ShipmentStatusList)
    {
        $this->setShipmentStatusList($ShipmentStatusList);
        return $this;
    }
    /**
     * Get the value of the ShipmentIdList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentIdList ShipmentIdList.
     */
    public function getShipmentIdList()
    {
        return $this->_fields['ShipmentIdList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentIdList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentIdList shipmentIdList
     * @return $this instance
     */
    public function setShipmentIdList($value)
    {
        $this->_fields['ShipmentIdList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentIdList is set.
     *
     * @return true if ShipmentIdList is set.
     */
    public function isSetShipmentIdList()
    {
        return !is_null($this->_fields['ShipmentIdList']['FieldValue']);
    }
    /**
     * Set the value of ShipmentIdList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelShipmentIdList $ShipmentIdList
     * @return $this
     */
    public function withShipmentIdList($ShipmentIdList)
    {
        $this->setShipmentIdList($ShipmentIdList);
        return $this;
    }
    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return \DateTime LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string lastUpdatedBefore
     * @return $this instance
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return true if LastUpdatedBefore is set.
     */
    public function isSetLastUpdatedBefore()
    {
        return !is_null($this->_fields['LastUpdatedBefore']['FieldValue']);
    }
    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param string $LastUpdatedBefore
     * @return $this
     */
    public function withLastUpdatedBefore($LastUpdatedBefore)
    {
        $this->setLastUpdatedBefore($LastUpdatedBefore);
        return $this;
    }
    /**
     * Get the value of the LastUpdatedAfter property.
     *
     * @return \DateTime LastUpdatedAfter.
     */
    public function getLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdatedAfter property.
     *
     * @param string lastUpdatedAfter
     * @return $this instance
     */
    public function setLastUpdatedAfter($value)
    {
        $this->_fields['LastUpdatedAfter']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdatedAfter is set.
     *
     * @return true if LastUpdatedAfter is set.
     */
    public function isSetLastUpdatedAfter()
    {
        return !is_null($this->_fields['LastUpdatedAfter']['FieldValue']);
    }
    /**
     * Set the value of LastUpdatedAfter, return this.
     *
     * @param string $LastUpdatedAfter
     * @return $this
     */
    public function withLastUpdatedAfter($LastUpdatedAfter)
    {
        $this->setLastUpdatedAfter($LastUpdatedAfter);
        return $this;
    }
}