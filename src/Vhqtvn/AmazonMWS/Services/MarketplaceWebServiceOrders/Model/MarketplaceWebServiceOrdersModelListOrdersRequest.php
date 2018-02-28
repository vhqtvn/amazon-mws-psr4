<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelListOrdersRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$CreatedAfter
 * @property	string	$CreatedBefore
 * @property	string	$LastUpdatedAfter
 * @property	string	$LastUpdatedBefore
 * @property	\[]	$OrderStatus
 * @property	\[]	$MarketplaceId
 * @property	\[]	$FulfillmentChannel
 * @property	\[]	$PaymentMethod
 * @property	string	$BuyerEmail
 * @property	string	$SellerOrderId
 * @property	int	$MaxResultsPerPage
 * @property	\[]	$TFMShipmentStatus
 */
class MarketplaceWebServiceOrdersModelListOrdersRequest extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'CreatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'), 'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'), 'LastUpdatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'), 'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderStatus' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Status'), 'MarketplaceId' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Id'), 'FulfillmentChannel' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Channel'), 'PaymentMethod' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Method'), 'BuyerEmail' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'), 'TFMShipmentStatus' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Status'));
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
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Get the value of the CreatedAfter property.
     *
     * @return XMLGregorianCalendar CreatedAfter.
     */
    public function getCreatedAfter()
    {
        return $this->_fields['CreatedAfter']['FieldValue'];
    }
    /**
     * Set the value of the CreatedAfter property.
     *
     * @param string createdAfter
     * @return $this 
     */
    public function setCreatedAfter($value)
    {
        $this->_fields['CreatedAfter']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CreatedAfter is set.
     *
     * @return true if CreatedAfter is set.
     */
    public function isSetCreatedAfter()
    {
        return !is_null($this->_fields['CreatedAfter']['FieldValue']);
    }
    /**
     * Set the value of CreatedAfter, return this.
     *
     * @param string $CreatedAfter
     * @return $this
     */
    public function withCreatedAfter($CreatedAfter)
    {
        $this->setCreatedAfter($CreatedAfter);
        return $this;
    }
    /**
     * Get the value of the CreatedBefore property.
     *
     * @return XMLGregorianCalendar CreatedBefore.
     */
    public function getCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }
    /**
     * Set the value of the CreatedBefore property.
     *
     * @param string createdBefore
     * @return $this 
     */
    public function setCreatedBefore($value)
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CreatedBefore is set.
     *
     * @return true if CreatedBefore is set.
     */
    public function isSetCreatedBefore()
    {
        return !is_null($this->_fields['CreatedBefore']['FieldValue']);
    }
    /**
     * Set the value of CreatedBefore, return this.
     *
     * @param string $CreatedBefore
     * @return $this
     */
    public function withCreatedBefore($CreatedBefore)
    {
        $this->setCreatedBefore($CreatedBefore);
        return $this;
    }
    /**
     * Get the value of the LastUpdatedAfter property.
     *
     * @return XMLGregorianCalendar LastUpdatedAfter.
     */
    public function getLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdatedAfter property.
     *
     * @param string lastUpdatedAfter
     * @return $this 
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
    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return XMLGregorianCalendar LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string lastUpdatedBefore
     * @return $this 
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
     * Get the value of the OrderStatus property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] OrderStatus.
     */
    public function getOrderStatus()
    {
        if ($this->_fields['OrderStatus']['FieldValue'] == null) {
            $this->_fields['OrderStatus']['FieldValue'] = array();
        }
        return $this->_fields['OrderStatus']['FieldValue'];
    }
    /**
     * Set the value of the OrderStatus property.
     *
     * @param array orderStatus
     * @return $this 
     */
    public function setOrderStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OrderStatus.
     */
    public function unsetOrderStatus()
    {
        $this->_fields['OrderStatus']['FieldValue'] = array();
    }
    /**
     * Check to see if OrderStatus is set.
     *
     * @return true if OrderStatus is set.
     */
    public function isSetOrderStatus()
    {
        return !empty($this->_fields['OrderStatus']['FieldValue']);
    }
    /**
     * Add values for OrderStatus, return this.
     *
     * @param \string[] $OrderStatus_array,...
     * @return $this
     */
    public function withOrderStatus(...$OrderStatus_array)
    {
        foreach ($OrderStatus_array as $OrderStatus) {
            $this->_fields['OrderStatus']['FieldValue'][] = $OrderStatus;
        }
        return $this;
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] MarketplaceId.
     */
    public function getMarketplaceId()
    {
        if ($this->_fields['MarketplaceId']['FieldValue'] == null) {
            $this->_fields['MarketplaceId']['FieldValue'] = array();
        }
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param array marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear MarketplaceId.
     */
    public function unsetMarketplaceId()
    {
        $this->_fields['MarketplaceId']['FieldValue'] = array();
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !empty($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Add values for MarketplaceId, return this.
     *
     * @param \string[] $MarketplaceId_array,...
     * @return $this
     */
    public function withMarketplaceId(...$MarketplaceId_array)
    {
        foreach ($MarketplaceId_array as $MarketplaceId) {
            $this->_fields['MarketplaceId']['FieldValue'][] = $MarketplaceId;
        }
        return $this;
    }
    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        if ($this->_fields['FulfillmentChannel']['FieldValue'] == null) {
            $this->_fields['FulfillmentChannel']['FieldValue'] = array();
        }
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param array fulfillmentChannel
     * @return $this 
     */
    public function setFulfillmentChannel($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FulfillmentChannel.
     */
    public function unsetFulfillmentChannel()
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = array();
    }
    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !empty($this->_fields['FulfillmentChannel']['FieldValue']);
    }
    /**
     * Add values for FulfillmentChannel, return this.
     *
     * @param \string[] $FulfillmentChannel_array,...
     * @return $this
     */
    public function withFulfillmentChannel(...$FulfillmentChannel_array)
    {
        foreach ($FulfillmentChannel_array as $FulfillmentChannel) {
            $this->_fields['FulfillmentChannel']['FieldValue'][] = $FulfillmentChannel;
        }
        return $this;
    }
    /**
     * Get the value of the PaymentMethod property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] PaymentMethod.
     */
    public function getPaymentMethod()
    {
        if ($this->_fields['PaymentMethod']['FieldValue'] == null) {
            $this->_fields['PaymentMethod']['FieldValue'] = array();
        }
        return $this->_fields['PaymentMethod']['FieldValue'];
    }
    /**
     * Set the value of the PaymentMethod property.
     *
     * @param array paymentMethod
     * @return $this 
     */
    public function setPaymentMethod($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PaymentMethod']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PaymentMethod.
     */
    public function unsetPaymentMethod()
    {
        $this->_fields['PaymentMethod']['FieldValue'] = array();
    }
    /**
     * Check to see if PaymentMethod is set.
     *
     * @return true if PaymentMethod is set.
     */
    public function isSetPaymentMethod()
    {
        return !empty($this->_fields['PaymentMethod']['FieldValue']);
    }
    /**
     * Add values for PaymentMethod, return this.
     *
     * @param \string[] $PaymentMethod_array,...
     * @return $this
     */
    public function withPaymentMethod(...$PaymentMethod_array)
    {
        foreach ($PaymentMethod_array as $PaymentMethod) {
            $this->_fields['PaymentMethod']['FieldValue'][] = $PaymentMethod;
        }
        return $this;
    }
    /**
     * Get the value of the BuyerEmail property.
     *
     * @return String BuyerEmail.
     */
    public function getBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'];
    }
    /**
     * Set the value of the BuyerEmail property.
     *
     * @param string buyerEmail
     * @return $this 
     */
    public function setBuyerEmail($value)
    {
        $this->_fields['BuyerEmail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BuyerEmail is set.
     *
     * @return true if BuyerEmail is set.
     */
    public function isSetBuyerEmail()
    {
        return !is_null($this->_fields['BuyerEmail']['FieldValue']);
    }
    /**
     * Set the value of BuyerEmail, return this.
     *
     * @param string $BuyerEmail
     * @return $this
     */
    public function withBuyerEmail($BuyerEmail)
    {
        $this->setBuyerEmail($BuyerEmail);
        return $this;
    }
    /**
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this 
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
        return !is_null($this->_fields['SellerOrderId']['FieldValue']);
    }
    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param string $SellerOrderId
     * @return $this
     */
    public function withSellerOrderId($SellerOrderId)
    {
        $this->setSellerOrderId($SellerOrderId);
        return $this;
    }
    /**
     * Get the value of the MaxResultsPerPage property.
     *
     * @return Integer MaxResultsPerPage.
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }
    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @return $this 
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return true if MaxResultsPerPage is set.
     */
    public function isSetMaxResultsPerPage()
    {
        return !is_null($this->_fields['MaxResultsPerPage']['FieldValue']);
    }
    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param int $MaxResultsPerPage
     * @return $this
     */
    public function withMaxResultsPerPage($MaxResultsPerPage)
    {
        $this->setMaxResultsPerPage($MaxResultsPerPage);
        return $this;
    }
    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelString[] TFMShipmentStatus.
     */
    public function getTFMShipmentStatus()
    {
        if ($this->_fields['TFMShipmentStatus']['FieldValue'] == null) {
            $this->_fields['TFMShipmentStatus']['FieldValue'] = array();
        }
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }
    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param array tfmShipmentStatus
     * @return $this 
     */
    public function setTFMShipmentStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear TFMShipmentStatus.
     */
    public function unsetTFMShipmentStatus()
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = array();
    }
    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return true if TFMShipmentStatus is set.
     */
    public function isSetTFMShipmentStatus()
    {
        return !empty($this->_fields['TFMShipmentStatus']['FieldValue']);
    }
    /**
     * Add values for TFMShipmentStatus, return this.
     *
     * @param \string[] $TFMShipmentStatus_array,...
     * @return $this
     */
    public function withTFMShipmentStatus(...$TFMShipmentStatus_array)
    {
        foreach ($TFMShipmentStatus_array as $TFMShipmentStatus) {
            $this->_fields['TFMShipmentStatus']['FieldValue'][] = $TFMShipmentStatus;
        }
        return $this;
    }
}