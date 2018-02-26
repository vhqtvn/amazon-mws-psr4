<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelParticipation
 * 
 * @property	string	$MarketplaceId
 * @property	string	$SellerId
 * @property	string	$HasSellerSuspendedListings
 */
class MarketplaceWebServiceSellersModelParticipation extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasSellerSuspendedListings' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this 
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
     * Get the value of the HasSellerSuspendedListings property.
     *
     * @return String HasSellerSuspendedListings.
     */
    public function getHasSellerSuspendedListings()
    {
        return $this->_fields['HasSellerSuspendedListings']['FieldValue'];
    }
    /**
     * Set the value of the HasSellerSuspendedListings property.
     *
     * @param string hasSellerSuspendedListings
     * @return $this 
     */
    public function setHasSellerSuspendedListings($value)
    {
        $this->_fields['HasSellerSuspendedListings']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if HasSellerSuspendedListings is set.
     *
     * @return true if HasSellerSuspendedListings is set.
     */
    public function isSetHasSellerSuspendedListings()
    {
        return !is_null($this->_fields['HasSellerSuspendedListings']['FieldValue']);
    }
    /**
     * Set the value of HasSellerSuspendedListings, return this.
     *
     * @param string $HasSellerSuspendedListings
     * @return $this
     */
    public function withHasSellerSuspendedListings($HasSellerSuspendedListings)
    {
        $this->setHasSellerSuspendedListings($HasSellerSuspendedListings);
        return $this;
    }
}