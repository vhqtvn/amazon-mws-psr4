<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelScheduledDeliveryInfo
 * 
 * @property	string	$DeliveryTimeZone
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindowList	$DeliveryWindows
 */
class FbaOutboundServiceMwsModelScheduledDeliveryInfo extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DeliveryTimeZone' => array('FieldValue' => null, 'FieldType' => 'string'), 'DeliveryWindows' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindowList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the DeliveryTimeZone property.
     *
     * @return String DeliveryTimeZone.
     */
    public function getDeliveryTimeZone()
    {
        return $this->_fields['DeliveryTimeZone']['FieldValue'];
    }
    /**
     * Set the value of the DeliveryTimeZone property.
     *
     * @param string deliveryTimeZone
     * @return $this 
     */
    public function setDeliveryTimeZone($value)
    {
        $this->_fields['DeliveryTimeZone']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DeliveryTimeZone is set.
     *
     * @return true if DeliveryTimeZone is set.
     */
    public function isSetDeliveryTimeZone()
    {
        return !is_null($this->_fields['DeliveryTimeZone']['FieldValue']);
    }
    /**
     * Set the value of DeliveryTimeZone, return this.
     *
     * @param deliveryTimeZone
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDeliveryTimeZone($value)
    {
        $this->setDeliveryTimeZone($value);
        return $this;
    }
    /**
     * Get the value of the DeliveryWindows property.
     *
     * @return DeliveryWindowList DeliveryWindows.
     */
    public function getDeliveryWindows()
    {
        return $this->_fields['DeliveryWindows']['FieldValue'];
    }
    /**
     * Set the value of the DeliveryWindows property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelDeliveryWindowList deliveryWindows
     * @return $this 
     */
    public function setDeliveryWindows($value)
    {
        $this->_fields['DeliveryWindows']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DeliveryWindows is set.
     *
     * @return true if DeliveryWindows is set.
     */
    public function isSetDeliveryWindows()
    {
        return !is_null($this->_fields['DeliveryWindows']['FieldValue']);
    }
    /**
     * Set the value of DeliveryWindows, return this.
     *
     * @param deliveryWindows
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDeliveryWindows($value)
    {
        $this->setDeliveryWindows($value);
        return $this;
    }
}