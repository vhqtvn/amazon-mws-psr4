<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS;

use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsInterface;
use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelGetServiceStatusResponse;
use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResponse;
use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse;
class FbaInventoryServiceMwsMock implements FbaInventoryServiceMwsInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Get Service Status
     * Gets the status of the service.
     *     Status is one of GREEN, RED representing:
     *     GREEN: The service section is operating normally.
     *     RED: The service section disruption.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsException
     */
    public function getServiceStatus($request)
    {
        return FbaInventoryServiceMwsModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }
    /**
     * List Inventory Supply
     * Get information about the supply of seller-owned inventory in
     *     Amazon's fulfillment network. "Supply" is inventory that is available
     *     for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     *     this includes all sellable inventory that has been received by Amazon,
     *     that is not reserved for existing orders or for internal FC processes,
     *     and also inventory expected to be received from inbound shipments.
     * 
     *     This operation provides 2 typical usages by setting different 
     *     ListInventorySupplyRequest value:
     *     
     *     1. Set value to SellerSkus and not set value to QueryStartDateTime, 
     *     this operation will return all sellable inventory that has been received 
     *     by Amazon's fulfillment network for these SellerSkus.
     * 
     *     2. Not set value to SellerSkus and set value to QueryStartDateTime,
     *     This operation will return information about the supply of all seller-owned
     *     inventory in Amazon's fulfillment network, for inventory items that may have had
     *     recent changes in inventory levels. It provides the most efficient mechanism 
     *     for clients to maintain local copies of inventory supply data.
     * 
     *     Only 1 of these 2 parameters (SellerSkus and QueryStartDateTime) can be set value for 1 request.
     *     If both with values or neither with values, an exception will be thrown.
     * 
     *     This operation is used with ListInventorySupplyByNextToken
     *     to paginate over the resultset. Begin pagination by invoking the
     *     ListInventorySupply operation, and retrieve the first set of
     *     results. If more results are available,continuing iteratively requesting further 
     *     pages results by invoking the ListInventorySupplyByNextToken operation (each time 
     *     passing in the NextToken value from the previous result), until the returned NextToken
     *     is null, indicating no further results are available.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupply request or \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupply object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupply
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsException
     */
    public function listInventorySupply($request)
    {
        return FbaInventoryServiceMwsModelListInventorySupplyResponse::fromXML($this->_invoke('ListInventorySupply'));
    }
    /**
     * List Inventory Supply By Next Token
     * Continues pagination over a resultset of inventory data for inventory
     *     items.
     *     
     *     This operation is used in conjunction with ListUpdatedInventorySupply.
     *     Please refer to documentation for that operation for further details.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextToken request or \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsException
     */
    public function listInventorySupplyByNextToken($request)
    {
        return FbaInventoryServiceMwsModelListInventorySupplyByNextTokenResponse::fromXML($this->_invoke('ListInventorySupplyByNextToken'));
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