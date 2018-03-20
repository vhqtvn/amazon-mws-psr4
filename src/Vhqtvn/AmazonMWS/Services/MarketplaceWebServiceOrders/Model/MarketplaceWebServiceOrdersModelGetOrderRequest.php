<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelGetOrderRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	\string[]	$AmazonOrderId
 */
class MarketplaceWebServiceOrdersModelGetOrderRequest extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmazonOrderId' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Id'));
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
     * Get the value of the AmazonOrderId property.
     *
     * @return \string[] AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        if ($this->_fields['AmazonOrderId']['FieldValue'] == null) {
            $this->_fields['AmazonOrderId']['FieldValue'] = array();
        }
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param array amazonOrderId
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear AmazonOrderId.
     */
    public function unsetAmazonOrderId()
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = array();
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !empty($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Add values for AmazonOrderId, return this.
     *
     * @param \string[] $AmazonOrderId_array,...
     * @return $this
     */
    public function withAmazonOrderId(...$AmazonOrderId_array)
    {
        foreach ($AmazonOrderId_array as $AmazonOrderId) {
            $this->_fields['AmazonOrderId']['FieldValue'][] = $AmazonOrderId;
        }
        return $this;
    }
}