<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKURequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>SellerSKUList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUListType</li>
 * <li>ItemCondition: string</li>
 * <li>ExcludeMe: bool</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKURequest extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerSKUList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUListType::class), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'ExcludeMe' => array('FieldValue' => null, 'FieldType' => 'bool'));
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
     * Get the value of the SellerSKUList property.
     *
     * @return SellerSKUListType SellerSKUList.
     */
    public function getSellerSKUList()
    {
        return $this->_fields['SellerSKUList']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKUList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUListType sellerSKUList
     * @return $this 
     */
    public function setSellerSKUList($value)
    {
        $this->_fields['SellerSKUList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKUList is set.
     *
     * @return true if SellerSKUList is set.
     */
    public function isSetSellerSKUList()
    {
        return !is_null($this->_fields['SellerSKUList']['FieldValue']);
    }
    /**
     * Set the value of SellerSKUList, return this.
     *
     * @param sellerSKUList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKUList($value)
    {
        $this->setSellerSKUList($value);
        return $this;
    }
    /**
     * Get the value of the ItemCondition property.
     *
     * @return String ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return $this 
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemCondition is set.
     *
     * @return true if ItemCondition is set.
     */
    public function isSetItemCondition()
    {
        return !is_null($this->_fields['ItemCondition']['FieldValue']);
    }
    /**
     * Set the value of ItemCondition, return this.
     *
     * @param itemCondition
     *             The new value to set.
     *
     * @return $this .
     */
    public function withItemCondition($value)
    {
        $this->setItemCondition($value);
        return $this;
    }
    /**
     * Check the value of ExcludeMe.
     *
     * @return true if ExcludeMe is set to true.
     */
    public function isExcludeMe()
    {
        return !is_null($this->_fields['ExcludeMe']['FieldValue']) && $this->_fields['ExcludeMe']['FieldValue'];
    }
    /**
     * Get the value of the ExcludeMe property.
     *
     * @return Boolean ExcludeMe.
     */
    public function getExcludeMe()
    {
        return $this->_fields['ExcludeMe']['FieldValue'];
    }
    /**
     * Set the value of the ExcludeMe property.
     *
     * @param bool excludeMe
     * @return $this 
     */
    public function setExcludeMe($value)
    {
        $this->_fields['ExcludeMe']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ExcludeMe is set.
     *
     * @return true if ExcludeMe is set.
     */
    public function isSetExcludeMe()
    {
        return !is_null($this->_fields['ExcludeMe']['FieldValue']);
    }
    /**
     * Set the value of ExcludeMe, return this.
     *
     * @param excludeMe
     *             The new value to set.
     *
     * @return $this .
     */
    public function withExcludeMe($value)
    {
        $this->setExcludeMe($value);
        return $this;
    }
}