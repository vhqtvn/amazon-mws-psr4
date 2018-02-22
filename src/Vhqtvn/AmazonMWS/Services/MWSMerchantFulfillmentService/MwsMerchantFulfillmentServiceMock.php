<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceInterface;
use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCancelShipmentResponse;
use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResponse;
use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetEligibleShippingServicesResponse;
use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetShipmentResponse;
use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetServiceStatusResponse;
class MwsMerchantFulfillmentServiceMock implements MwsMerchantFulfillmentServiceInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCancelShipment request or \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCancelShipment object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCancelShipment
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCancelShipmentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceException
     */
    public function cancelShipment($request)
    {
        return MwsMerchantFulfillmentServiceModelCancelShipmentResponse::fromXML($this->_invoke('CancelShipment'));
    }
    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipment request or \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipment object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipment
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCreateShipmentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceException
     */
    public function createShipment($request)
    {
        return MwsMerchantFulfillmentServiceModelCreateShipmentResponse::fromXML($this->_invoke('CreateShipment'));
    }
    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetEligibleShippingServices request or \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetEligibleShippingServices object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetEligibleShippingServices
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetEligibleShippingServicesResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceException
     */
    public function getEligibleShippingServices($request)
    {
        return MwsMerchantFulfillmentServiceModelGetEligibleShippingServicesResponse::fromXML($this->_invoke('GetEligibleShippingServices'));
    }
    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetShipment request or \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetShipment object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetShipment
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetShipmentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceException
     */
    public function getShipment($request)
    {
        return MwsMerchantFulfillmentServiceModelGetShipmentResponse::fromXML($this->_invoke('GetShipment'));
    }
    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceException
     */
    public function getServiceStatus($request)
    {
        return MwsMerchantFulfillmentServiceModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
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