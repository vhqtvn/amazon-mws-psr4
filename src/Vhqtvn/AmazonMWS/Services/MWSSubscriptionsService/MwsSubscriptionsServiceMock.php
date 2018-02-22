<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceInterface;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscriptionResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscriptionResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestinationResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptionsResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestinationResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestinationResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscriptionResponse;
use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatusResponse;
class MwsSubscriptionsServiceMock implements MwsSubscriptionsServiceInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscription
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function createSubscription($request)
    {
        return MwsSubscriptionsServiceModelCreateSubscriptionResponse::fromXML($this->_invoke('CreateSubscription'));
    }
    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscription
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function deleteSubscription($request)
    {
        return MwsSubscriptionsServiceModelDeleteSubscriptionResponse::fromXML($this->_invoke('DeleteSubscription'));
    }
    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestination request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestination object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestination
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestinationResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function deregisterDestination($request)
    {
        return MwsSubscriptionsServiceModelDeregisterDestinationResponse::fromXML($this->_invoke('DeregisterDestination'));
    }
    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscription
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function getSubscription($request)
    {
        return MwsSubscriptionsServiceModelGetSubscriptionResponse::fromXML($this->_invoke('GetSubscription'));
    }
    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinations request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinations object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinations
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function listRegisteredDestinations($request)
    {
        return MwsSubscriptionsServiceModelListRegisteredDestinationsResponse::fromXML($this->_invoke('ListRegisteredDestinations'));
    }
    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptions request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptions object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptions
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptionsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function listSubscriptions($request)
    {
        return MwsSubscriptionsServiceModelListSubscriptionsResponse::fromXML($this->_invoke('ListSubscriptions'));
    }
    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestination request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestination object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestination
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestinationResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function registerDestination($request)
    {
        return MwsSubscriptionsServiceModelRegisterDestinationResponse::fromXML($this->_invoke('RegisterDestination'));
    }
    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestination request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestination object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestination
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestinationResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function sendTestNotificationToDestination($request)
    {
        return MwsSubscriptionsServiceModelSendTestNotificationToDestinationResponse::fromXML($this->_invoke('SendTestNotificationToDestination'));
    }
    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscription
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function updateSubscription($request)
    {
        return MwsSubscriptionsServiceModelUpdateSubscriptionResponse::fromXML($this->_invoke('UpdateSubscription'));
    }
    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function getServiceStatus($request)
    {
        return MwsSubscriptionsServiceModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }
    // Private API ------------------------------------------------------------//
    private function _invoke($actionName)
    {
        return $xml = file_get_contents(
            dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml',
            /** search include path */
            TRUE
        );
    }
}