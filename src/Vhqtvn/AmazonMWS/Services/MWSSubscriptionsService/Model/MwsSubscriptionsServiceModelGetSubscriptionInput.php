<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionInput
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$MarketplaceId
 * @property	string	$NotificationType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination	$Destination
 */
class MwsSubscriptionsServiceModelGetSubscriptionInput extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'NotificationType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Destination' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination::class));
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
     * Get the value of the NotificationType property.
     *
     * @return \string NotificationType.
     */
    public function getNotificationType()
    {
        return $this->_fields['NotificationType']['FieldValue'];
    }
    /**
     * Set the value of the NotificationType property.
     *
     * @param string notificationType
     * @return $this instance
     */
    public function setNotificationType($value)
    {
        $this->_fields['NotificationType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NotificationType is set.
     *
     * @return true if NotificationType is set.
     */
    public function isSetNotificationType()
    {
        return !is_null($this->_fields['NotificationType']['FieldValue']);
    }
    /**
     * Set the value of NotificationType, return this.
     *
     * @param string $NotificationType
     * @return $this
     */
    public function withNotificationType($NotificationType)
    {
        $this->setNotificationType($NotificationType);
        return $this;
    }
    /**
     * Get the value of the Destination property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination Destination.
     */
    public function getDestination()
    {
        return $this->_fields['Destination']['FieldValue'];
    }
    /**
     * Set the value of the Destination property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination destination
     * @return $this instance
     */
    public function setDestination($value)
    {
        $this->_fields['Destination']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Destination is set.
     *
     * @return true if Destination is set.
     */
    public function isSetDestination()
    {
        return !is_null($this->_fields['Destination']['FieldValue']);
    }
    /**
     * Set the value of Destination, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination $Destination
     * @return $this
     */
    public function withDestination($Destination)
    {
        $this->setDestination($Destination);
        return $this;
    }
}