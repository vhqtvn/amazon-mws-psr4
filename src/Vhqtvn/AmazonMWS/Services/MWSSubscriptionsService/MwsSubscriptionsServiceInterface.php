<?php

/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:27:20 GMT 2015
 */
namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService;

interface MwsSubscriptionsServiceInterface
{
    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscriptionInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelCreateSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function createSubscription($request);
    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscriptionInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeleteSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function deleteSubscription($request);
    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestination request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestination object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestinationInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDeregisterDestinationResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function deregisterDestination($request);
    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function getSubscription($request);
    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinations request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinations object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function listRegisteredDestinations($request);
    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptions request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptions object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptionsInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListSubscriptionsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function listSubscriptions($request);
    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestination request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestination object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestinationInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelRegisterDestinationResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function registerDestination($request);
    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestination request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestination object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestinationInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSendTestNotificationToDestinationResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function sendTestNotificationToDestination($request);
    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscription request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscription object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscriptionInput
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelUpdateSubscriptionResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function updateSubscription($request);
    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatusRequest
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceException
     */
    public function getServiceStatus($request);
}