<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$MarketplaceId
 * @property	string	$Query
 * @property	string	$QueryContextId
 */
class MarketplaceWebServiceProductsModelListMatchingProductsRequest extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Query' => array('FieldValue' => null, 'FieldType' => 'string'), 'QueryContextId' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the MarketplaceId property.
     *
     * @return \string MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this instance
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
     * Get the value of the Query property.
     *
     * @return \string Query.
     */
    public function getQuery()
    {
        return $this->_fields['Query']['FieldValue'];
    }
    /**
     * Set the value of the Query property.
     *
     * @param string query
     * @return $this instance
     */
    public function setQuery($value)
    {
        $this->_fields['Query']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Query is set.
     *
     * @return true if Query is set.
     */
    public function isSetQuery()
    {
        return !is_null($this->_fields['Query']['FieldValue']);
    }
    /**
     * Set the value of Query, return this.
     *
     * @param string $Query
     * @return $this
     */
    public function withQuery($Query)
    {
        $this->setQuery($Query);
        return $this;
    }
    /**
     * Get the value of the QueryContextId property.
     *
     * @return \string QueryContextId.
     */
    public function getQueryContextId()
    {
        return $this->_fields['QueryContextId']['FieldValue'];
    }
    /**
     * Set the value of the QueryContextId property.
     *
     * @param string queryContextId
     * @return $this instance
     */
    public function setQueryContextId($value)
    {
        $this->_fields['QueryContextId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QueryContextId is set.
     *
     * @return true if QueryContextId is set.
     */
    public function isSetQueryContextId()
    {
        return !is_null($this->_fields['QueryContextId']['FieldValue']);
    }
    /**
     * Set the value of QueryContextId, return this.
     *
     * @param string $QueryContextId
     * @return $this
     */
    public function withQueryContextId($QueryContextId)
    {
        $this->setQueryContextId($QueryContextId);
        return $this;
    }
}