<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptionsResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscriptionList	$SubscriptionList
 */
class MwsSubscriptionsServiceModelListSubscriptionsResult extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SubscriptionList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscriptionList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SubscriptionList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscriptionList SubscriptionList.
     */
    public function getSubscriptionList()
    {
        return $this->_fields['SubscriptionList']['FieldValue'];
    }
    /**
     * Set the value of the SubscriptionList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscriptionList subscriptionList
     * @return $this 
     */
    public function setSubscriptionList($value)
    {
        $this->_fields['SubscriptionList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SubscriptionList is set.
     *
     * @return true if SubscriptionList is set.
     */
    public function isSetSubscriptionList()
    {
        return !is_null($this->_fields['SubscriptionList']['FieldValue']);
    }
    /**
     * Set the value of SubscriptionList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscriptionList $SubscriptionList
     * @return $this
     */
    public function withSubscriptionList($SubscriptionList)
    {
        $this->setSubscriptionList($SubscriptionList);
        return $this;
    }
}