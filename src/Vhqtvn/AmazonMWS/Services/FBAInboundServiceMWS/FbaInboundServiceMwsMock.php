<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsInterface;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmPreorderResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmTransportRequestResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlanResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelEstimateTransportRequestResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetBillOfLadingResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForASINResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForSKUResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPackageLabelsResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPalletLabelsResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPreorderInfoResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASINResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForSKUResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetServiceStatusResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContentResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetUniquePackageLabelsResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPutTransportContentResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelUpdateInboundShipmentResponse;
use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelVoidTransportRequestResponse;
class FbaInboundServiceMwsMock implements FbaInboundServiceMwsInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Confirm Preorder
     * Given a shipment id. and date as input, this API confirms a shipment as a
     * pre-order.
     * This date must be the same as the NeedByDate (NBD) that is returned in the
     * GetPreorderInfo API. Any other date will result in an appropriate error code.
     * All items in the shipment with a release date on or after the
     * ConfirmedFulfillableDate ( also returned by the GetPreorderInfo  API) would
     * be pre-orderable on the website and would be fulfilled without promise breaks,
     * if the NBD is met.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmPreorder request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmPreorder object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmPreorder
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmPreorderResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function confirmPreorder($request)
    {
        return FbaInboundServiceMwsModelConfirmPreorderResponse::fromXML($this->_invoke('ConfirmPreorder'));
    }
    /**
     * Confirm Transport Request
     * Confirms the estimate returned by the EstimateTransportRequest operation.
     *     Once this operation has been called successfully, the seller agrees to allow Amazon to charge
     *     their account the amount returned in the estimate.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmTransportRequest request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmTransportRequest object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmTransportRequest
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmTransportRequestResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function confirmTransportRequest($request)
    {
        return FbaInboundServiceMwsModelConfirmTransportRequestResponse::fromXML($this->_invoke('ConfirmTransportRequest'));
    }
    /**
     * Create Inbound Shipment
     * Creates an inbound shipment. It may include up to 200 items. 
     * The initial status of a shipment will be set to 'Working'.
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     * More items may be added using the Update call.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipment request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipment object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipment
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function createInboundShipment($request)
    {
        return FbaInboundServiceMwsModelCreateInboundShipmentResponse::fromXML($this->_invoke('CreateInboundShipment'));
    }
    /**
     * Create Inbound Shipment Plan
     * Plans inbound shipments for a set of items.  Registers identifiers if needed,
     * and assigns ShipmentIds for planned shipments.
     * When all the items are not all in the same category (e.g. some sortable, some 
     * non-sortable) it may be necessary to create multiple shipments (one for each 
     * of the shipment groups returned).
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlan request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlan object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlan
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelCreateInboundShipmentPlanResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function createInboundShipmentPlan($request)
    {
        return FbaInboundServiceMwsModelCreateInboundShipmentPlanResponse::fromXML($this->_invoke('CreateInboundShipmentPlan'));
    }
    /**
     * Estimate Transport Request
     * Initiates the process for requesting an estimated shipping cost based-on the shipment
     *     for which the request is being made, whether or not the carrier shipment is partnered/non-partnered
     *     and the carrier type.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelEstimateTransportRequest request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelEstimateTransportRequest object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelEstimateTransportRequest
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelEstimateTransportRequestResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function estimateTransportRequest($request)
    {
        return FbaInboundServiceMwsModelEstimateTransportRequestResponse::fromXML($this->_invoke('EstimateTransportRequest'));
    }
    /**
     * Get Bill Of Lading
     * Retrieves the PDF-formatted BOL data for a partnered LTL shipment.
     *     This PDF data will be ZIP'd and then it will be encoded as a Base64 string, and a
     *     MD5 hash is included with the response to validate the BOL data which will be encoded as Base64.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetBillOfLading request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetBillOfLading object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetBillOfLading
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetBillOfLadingResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getBillOfLading($request)
    {
        return FbaInboundServiceMwsModelGetBillOfLadingResponse::fromXML($this->_invoke('GetBillOfLading'));
    }
    /**
     * Get Inbound Guidance For ASIN
     * Given a list of ASINs and shipToCountryCode, this API returns Inbound
     *      guidance to ASINs in request with optional reason code if applicable.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForASIN request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForASIN
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getInboundGuidanceForASIN($request)
    {
        return FbaInboundServiceMwsModelGetInboundGuidanceForASINResponse::fromXML($this->_invoke('GetInboundGuidanceForASIN'));
    }
    /**
     * Get Inbound Guidance For SKU
     * Given a list of SKUs and shipToCountryCode, this API returns Inbound
     *      guidance to SKUs in request with optional reason code if applicable.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForSKU request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForSKU
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getInboundGuidanceForSKU($request)
    {
        return FbaInboundServiceMwsModelGetInboundGuidanceForSKUResponse::fromXML($this->_invoke('GetInboundGuidanceForSKU'));
    }
    /**
     * Get Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing 
     *     Amazon-partnered carriers. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *     
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPackageLabels request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPackageLabels object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPackageLabels
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPackageLabelsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getPackageLabels($request)
    {
        return FbaInboundServiceMwsModelGetPackageLabelsResponse::fromXML($this->_invoke('GetPackageLabels'));
    }
    /**
     * Get Pallet Labels
     * Retrieves the PDF-formatted pallet label data for the pallets in an LTL shipment. These labels
     *     include relevant data for shipments being sent to Amazon Fulfillment Centers. The PDF data will be 
     *     ZIP'd and then it will be encoded as a Base64 string, and MD5 hash is included with the response to 
     *     validate the label data which will be encoded as Base64. The language of the address and FC prep 
     *     instructions sections of the labels are determined by the marketplace in which the request is being 
     *     made and the marketplace of the destination FC, respectively.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPalletLabels request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPalletLabels object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPalletLabels
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPalletLabelsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getPalletLabels($request)
    {
        return FbaInboundServiceMwsModelGetPalletLabelsResponse::fromXML($this->_invoke('GetPalletLabels'));
    }
    /**
     * Get Preorder Info
     * Given a shipment id. as input, based on the release date of the items in the
     * shipment, this API returns the suggested need By Date that the shipment items
     * must reach Amazon FC to successfully fulfill Pre-Orders without any promise
     * breaks.
     * This API also returns the confirmed Fullfillable date. All items in the
     * shipment that have a release date on or after this date would have the
     * pre-order buy box show up on the detail page if this shipment is marked as a
     * pre-orderable.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPreorderInfo request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPreorderInfo object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPreorderInfo
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPreorderInfoResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getPreorderInfo($request)
    {
        return FbaInboundServiceMwsModelGetPreorderInfoResponse::fromXML($this->_invoke('GetPreorderInfo'));
    }
    /**
     * Get Prep Instructions For ASIN
     * Returns the required prep that must be performed for a set of items, identified
     * by ASINs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASIN request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASIN
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getPrepInstructionsForASIN($request)
    {
        return FbaInboundServiceMwsModelGetPrepInstructionsForASINResponse::fromXML($this->_invoke('GetPrepInstructionsForASIN'));
    }
    /**
     * Get Prep Instructions For SKU
     * Returns the required prep that must be performed for a set of items, identified
     * by SellerSKUs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForSKU request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForSKU
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getPrepInstructionsForSKU($request)
    {
        return FbaInboundServiceMwsModelGetPrepInstructionsForSKUResponse::fromXML($this->_invoke('GetPrepInstructionsForSKU'));
    }
    /**
     * Get Service Status
     * Gets the status of the service.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getServiceStatus($request)
    {
        return FbaInboundServiceMwsModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }
    /**
     * Get Transport Content
     * A read-only operation which sellers use to retrieve the current
     *     details about the transportation of an inbound shipment, including status of the
     *     partnered carrier workflow and status of individual packages when they arrive at our FCs.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContent request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContent object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContent
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getTransportContent($request)
    {
        return FbaInboundServiceMwsModelGetTransportContentResponse::fromXML($this->_invoke('GetTransportContent'));
    }
    /**
     * Get Unique Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing 
     *     Amazon-partnered carriers. Each label contains a unique package identifier that represents the mapping between
     *     physical and virtual packages. This API requires that Carton Information has been provided for all packages in the
     *     shipment. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *     
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetUniquePackageLabels request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetUniquePackageLabels object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetUniquePackageLabels
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetUniquePackageLabelsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function getUniquePackageLabels($request)
    {
        return FbaInboundServiceMwsModelGetUniquePackageLabelsResponse::fromXML($this->_invoke('GetUniquePackageLabels'));
    }
    /**
     * List Inbound Shipment Items
     * Gets the first set of inbound shipment items for the given ShipmentId or 
     * all inbound shipment items updated between the given date range. 
     * A NextToken is also returned to further iterate through the Seller's 
     * remaining inbound shipment items. To get the next set of inbound 
     * shipment items, you must call ListInboundShipmentItemsByNextToken and 
     * pass in the 'NextToken' this call returned. If a NextToken is not 
     * returned, it indicates the end-of-data. Use LastUpdatedBefore 
     * and LastUpdatedAfter to filter results based on last updated time. 
     * Either the ShipmentId or a pair of LastUpdatedBefore and LastUpdatedAfter 
     * must be passed in. if ShipmentId is set, the LastUpdatedBefore and 
     * LastUpdatedAfter will be ignored.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItems request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItems object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItems
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function listInboundShipmentItems($request)
    {
        return FbaInboundServiceMwsModelListInboundShipmentItemsResponse::fromXML($this->_invoke('ListInboundShipmentItems'));
    }
    /**
     * List Inbound Shipment Items By Next Token
     * Gets the next set of inbound shipment items with the NextToken 
     * which can be used to iterate through the remaining inbound shipment 
     * items. If a NextToken is not returned, it indicates the end-of-data. 
     * You must first call ListInboundShipmentItems to get a 'NextToken'.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsByNextToken request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentItemsByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function listInboundShipmentItemsByNextToken($request)
    {
        return FbaInboundServiceMwsModelListInboundShipmentItemsByNextTokenResponse::fromXML($this->_invoke('ListInboundShipmentItemsByNextToken'));
    }
    /**
     * List Inbound Shipments
     * Get the first set of inbound shipments created by a Seller according to 
     * the specified shipment status or the specified shipment Id. A NextToken 
     * is also returned to further iterate through the Seller's remaining 
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     * At least one of ShipmentStatusList and ShipmentIdList must be passed in. 
     * if both are passed in, then only shipments that match the specified 
     * shipment Id and specified shipment status will be returned.
     * the LastUpdatedBefore and LastUpdatedAfter are optional, they are used 
     * to filter results based on last update time of the shipment.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipments request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipments object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipments
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function listInboundShipments($request)
    {
        return FbaInboundServiceMwsModelListInboundShipmentsResponse::fromXML($this->_invoke('ListInboundShipments'));
    }
    /**
     * List Inbound Shipments By Next Token
     * Gets the next set of inbound shipments created by a Seller with the 
     * NextToken which can be used to iterate through the remaining inbound 
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsByNextToken request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelListInboundShipmentsByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function listInboundShipmentsByNextToken($request)
    {
        return FbaInboundServiceMwsModelListInboundShipmentsByNextTokenResponse::fromXML($this->_invoke('ListInboundShipmentsByNextToken'));
    }
    /**
     * Put Transport Content
     * A write operation which sellers use to provide transportation details regarding
     *     how an inbound shipment will arrive at Amazon's Fulfillment Centers.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPutTransportContent request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPutTransportContent object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPutTransportContent
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPutTransportContentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function putTransportContent($request)
    {
        return FbaInboundServiceMwsModelPutTransportContentResponse::fromXML($this->_invoke('PutTransportContent'));
    }
    /**
     * Update Inbound Shipment
     * Updates an pre-existing inbound shipment specified by the 
     * ShipmentId. It may include up to 200 items.
     * If InboundShipmentHeader is set. it replaces the header information 
     * for the given shipment.
     * If InboundShipmentItems is set. it adds, replaces and removes 
     * the line time to inbound shipment.
     * For non-existing item, it will add the item for new line item; 
     * For existing line items, it will replace the QuantityShipped for the item.
     * For QuantityShipped = 0, it indicates the item should be removed from the shipment
     * 
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelUpdateInboundShipment request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelUpdateInboundShipment object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelUpdateInboundShipment
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelUpdateInboundShipmentResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function updateInboundShipment($request)
    {
        return FbaInboundServiceMwsModelUpdateInboundShipmentResponse::fromXML($this->_invoke('UpdateInboundShipment'));
    }
    /**
     * Void Transport Request
     * Voids a previously-confirmed transport request. It only succeeds for requests
     *     made by the VoidDeadline provided in the PartneredEstimate component of the
     *     response of the GetTransportContent operation for a shipment. Currently this
     *     deadline is 24 hours after confirming a transport request for a partnered small parcel
     *     request and 1 hour after confirming a transport request for a partnered LTL/TL
     *     request, though this is subject to change at any time without notice.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelVoidTransportRequest request or \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelVoidTransportRequest object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelVoidTransportRequest
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelVoidTransportRequestResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsException
     */
    public function voidTransportRequest($request)
    {
        return FbaInboundServiceMwsModelVoidTransportRequestResponse::fromXML($this->_invoke('VoidTransportRequest'));
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