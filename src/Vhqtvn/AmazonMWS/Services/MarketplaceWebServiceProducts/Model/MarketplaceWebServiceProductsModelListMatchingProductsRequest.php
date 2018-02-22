<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>Query: string</li>
 * <li>QueryContextId: string</li>
 *
 * </ul>
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
     * @param sellerId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }
    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this 
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
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
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
     * @param marketplaceId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }
    /**
     * Get the value of the Query property.
     *
     * @return String Query.
     */
    public function getQuery()
    {
        return $this->_fields['Query']['FieldValue'];
    }
    /**
     * Set the value of the Query property.
     *
     * @param string query
     * @return $this 
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
     * @param query
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuery($value)
    {
        $this->setQuery($value);
        return $this;
    }
    /**
     * Get the value of the QueryContextId property.
     *
     * @return String QueryContextId.
     */
    public function getQueryContextId()
    {
        return $this->_fields['QueryContextId']['FieldValue'];
    }
    /**
     * Set the value of the QueryContextId property.
     *
     * @param string queryContextId
     * @return $this 
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
     * @param queryContextId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQueryContextId($value)
    {
        $this->setQueryContextId($value);
        return $this;
    }
}