<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$MarketplaceId
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINListType	$ASINList
 * @property	string	$ItemCondition
 * @property	bool	$ExcludeMe
 */
class MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINRequest extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASINList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINListType::class), 'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'), 'ExcludeMe' => array('FieldValue' => null, 'FieldType' => 'bool'));
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
     * Get the value of the ASINList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINListType ASINList.
     */
    public function getASINList()
    {
        return $this->_fields['ASINList']['FieldValue'];
    }
    /**
     * Set the value of the ASINList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINListType asinList
     * @return $this instance
     */
    public function setASINList($value)
    {
        $this->_fields['ASINList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASINList is set.
     *
     * @return true if ASINList is set.
     */
    public function isSetASINList()
    {
        return !is_null($this->_fields['ASINList']['FieldValue']);
    }
    /**
     * Set the value of ASINList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINListType $ASINList
     * @return $this
     */
    public function withASINList($ASINList)
    {
        $this->setASINList($ASINList);
        return $this;
    }
    /**
     * Get the value of the ItemCondition property.
     *
     * @return \string ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }
    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return $this instance
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
     * @param string $ItemCondition
     * @return $this
     */
    public function withItemCondition($ItemCondition)
    {
        $this->setItemCondition($ItemCondition);
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
     * @return \bool ExcludeMe.
     */
    public function getExcludeMe()
    {
        return $this->_fields['ExcludeMe']['FieldValue'];
    }
    /**
     * Set the value of the ExcludeMe property.
     *
     * @param bool excludeMe
     * @return $this instance
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
     * @param bool $ExcludeMe
     * @return $this
     */
    public function withExcludeMe($ExcludeMe)
    {
        $this->setExcludeMe($ExcludeMe);
        return $this;
    }
}