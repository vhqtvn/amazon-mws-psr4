<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersInterface;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelGetServiceStatusResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse;
class MarketplaceWebServiceSellersMock implements MarketplaceWebServiceSellersInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     *         takes no input.
     *         All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersException
     */
    public function getServiceStatus($request)
    {
        return MarketplaceWebServiceSellersModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }
    /**
     * List Marketplace Participations
     * Returns a list of marketplaces that the seller submitting the request can sell in, 
     *         and a list of participations that include seller-specific information in that marketplace.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipations request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipations object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipations
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersException
     */
    public function listMarketplaceParticipations($request)
    {
        return MarketplaceWebServiceSellersModelListMarketplaceParticipationsResponse::fromXML($this->_invoke('ListMarketplaceParticipations'));
    }
    /**
     * List Marketplace Participations By Next Token
     * Returns the next page of marketplaces and participations using the NextToken value 
     *         that was returned by your previous request to either ListMarketplaceParticipations or
     *         ListMarketplaceParticipationsByNextToken.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextToken request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersException
     */
    public function listMarketplaceParticipationsByNextToken($request)
    {
        return MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResponse::fromXML($this->_invoke('ListMarketplaceParticipationsByNextToken'));
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