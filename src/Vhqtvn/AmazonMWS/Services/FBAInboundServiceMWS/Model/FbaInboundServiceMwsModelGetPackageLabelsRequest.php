<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPackageLabelsRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$ShipmentId
 * @property	string	$PageType
 * @property	int	$NumberOfPackages
 */
class FbaInboundServiceMwsModelGetPackageLabelsRequest extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PageType' => array('FieldValue' => null, 'FieldType' => 'string'), 'NumberOfPackages' => array('FieldValue' => null, 'FieldType' => 'int'));
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
     * Get the value of the ShipmentId property.
     *
     * @return \string ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }
    /**
     * Set the value of ShipmentId, return this.
     *
     * @param string $ShipmentId
     * @return $this
     */
    public function withShipmentId($ShipmentId)
    {
        $this->setShipmentId($ShipmentId);
        return $this;
    }
    /**
     * Get the value of the PageType property.
     *
     * @return \string PageType.
     */
    public function getPageType()
    {
        return $this->_fields['PageType']['FieldValue'];
    }
    /**
     * Set the value of the PageType property.
     *
     * @param string pageType
     * @return $this instance
     */
    public function setPageType($value)
    {
        $this->_fields['PageType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PageType is set.
     *
     * @return true if PageType is set.
     */
    public function isSetPageType()
    {
        return !is_null($this->_fields['PageType']['FieldValue']);
    }
    /**
     * Set the value of PageType, return this.
     *
     * @param string $PageType
     * @return $this
     */
    public function withPageType($PageType)
    {
        $this->setPageType($PageType);
        return $this;
    }
    /**
     * Get the value of the NumberOfPackages property.
     *
     * @return \int NumberOfPackages.
     */
    public function getNumberOfPackages()
    {
        return $this->_fields['NumberOfPackages']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfPackages property.
     *
     * @param int numberOfPackages
     * @return $this instance
     */
    public function setNumberOfPackages($value)
    {
        $this->_fields['NumberOfPackages']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfPackages is set.
     *
     * @return true if NumberOfPackages is set.
     */
    public function isSetNumberOfPackages()
    {
        return !is_null($this->_fields['NumberOfPackages']['FieldValue']);
    }
    /**
     * Set the value of NumberOfPackages, return this.
     *
     * @param int $NumberOfPackages
     * @return $this
     */
    public function withNumberOfPackages($NumberOfPackages)
    {
        $this->setNumberOfPackages($NumberOfPackages);
        return $this;
    }
}