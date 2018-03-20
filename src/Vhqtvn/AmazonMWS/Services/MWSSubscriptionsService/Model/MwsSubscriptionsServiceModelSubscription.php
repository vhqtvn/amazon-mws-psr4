<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscription
 * 
 * @property	string	$NotificationType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination	$Destination
 * @property	bool	$IsEnabled
 */
class MwsSubscriptionsServiceModelSubscription extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NotificationType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Destination' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination::class), 'IsEnabled' => array('FieldValue' => null, 'FieldType' => 'bool'));
        parent::__construct($data);
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
    /**
     * Check the value of IsEnabled.
     *
     * @return true if IsEnabled is set to true.
     */
    public function isIsEnabled()
    {
        return $this->_fields['IsEnabled']['FieldValue'];
    }
    /**
     * Get the value of the IsEnabled property.
     *
     * @return boolean IsEnabled.
     */
    public function getIsEnabled()
    {
        return $this->_fields['IsEnabled']['FieldValue'];
    }
    /**
     * Set the value of the IsEnabled property.
     *
     * @param bool isEnabled
     * @return $this instance
     */
    public function setIsEnabled($value)
    {
        $this->_fields['IsEnabled']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsEnabled is set.
     *
     * @return true if IsEnabled is set.
     */
    public function isSetIsEnabled()
    {
        return !is_null($this->_fields['IsEnabled']['FieldValue']);
    }
    /**
     * Set the value of IsEnabled, return this.
     *
     * @param bool $IsEnabled
     * @return $this
     */
    public function withIsEnabled($IsEnabled)
    {
        $this->setIsEnabled($IsEnabled);
        return $this;
    }
}