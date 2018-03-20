<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPalletLabelsRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$ShipmentId
 * @property	string	$PageType
 * @property	int	$NumberOfPallets
 */
class FbaInboundServiceMwsModelGetPalletLabelsRequest extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PageType' => array('FieldValue' => null, 'FieldType' => 'string'), 'NumberOfPallets' => array('FieldValue' => null, 'FieldType' => 'int'));
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
     * Get the value of the NumberOfPallets property.
     *
     * @return int NumberOfPallets.
     */
    public function getNumberOfPallets()
    {
        return $this->_fields['NumberOfPallets']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfPallets property.
     *
     * @param int numberOfPallets
     * @return $this instance
     */
    public function setNumberOfPallets($value)
    {
        $this->_fields['NumberOfPallets']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfPallets is set.
     *
     * @return true if NumberOfPallets is set.
     */
    public function isSetNumberOfPallets()
    {
        return !is_null($this->_fields['NumberOfPallets']['FieldValue']);
    }
    /**
     * Set the value of NumberOfPallets, return this.
     *
     * @param int $NumberOfPallets
     * @return $this
     */
    public function withNumberOfPallets($NumberOfPallets)
    {
        $this->setNumberOfPallets($NumberOfPallets);
        return $this;
    }
}