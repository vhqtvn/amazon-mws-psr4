<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestination
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeliveryChannel: string</li>
 * <li>AttributeList: \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelAttributeKeyValueList</li>
 *
 * </ul>
 */
class MwsSubscriptionsServiceModelDestination extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DeliveryChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'AttributeList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelAttributeKeyValueList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the DeliveryChannel property.
     *
     * @return String DeliveryChannel.
     */
    public function getDeliveryChannel()
    {
        return $this->_fields['DeliveryChannel']['FieldValue'];
    }
    /**
     * Set the value of the DeliveryChannel property.
     *
     * @param string deliveryChannel
     * @return $this 
     */
    public function setDeliveryChannel($value)
    {
        $this->_fields['DeliveryChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DeliveryChannel is set.
     *
     * @return true if DeliveryChannel is set.
     */
    public function isSetDeliveryChannel()
    {
        return !is_null($this->_fields['DeliveryChannel']['FieldValue']);
    }
    /**
     * Set the value of DeliveryChannel, return this.
     *
     * @param deliveryChannel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDeliveryChannel($value)
    {
        $this->setDeliveryChannel($value);
        return $this;
    }
    /**
     * Get the value of the AttributeList property.
     *
     * @return AttributeKeyValueList AttributeList.
     */
    public function getAttributeList()
    {
        return $this->_fields['AttributeList']['FieldValue'];
    }
    /**
     * Set the value of the AttributeList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelAttributeKeyValueList attributeList
     * @return $this 
     */
    public function setAttributeList($value)
    {
        $this->_fields['AttributeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AttributeList is set.
     *
     * @return true if AttributeList is set.
     */
    public function isSetAttributeList()
    {
        return !is_null($this->_fields['AttributeList']['FieldValue']);
    }
    /**
     * Set the value of AttributeList, return this.
     *
     * @param attributeList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAttributeList($value)
    {
        $this->setAttributeList($value);
        return $this;
    }
}