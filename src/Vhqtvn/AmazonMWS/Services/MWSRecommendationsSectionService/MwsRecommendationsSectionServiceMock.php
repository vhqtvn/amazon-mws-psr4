<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceInterface;
use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendationsResponse;
use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResponse;
use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetServiceStatusResponse;
class MwsRecommendationsSectionServiceMock implements MwsRecommendationsSectionServiceInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller. 
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendations request or \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendations object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendations
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceException
     */
    public function getLastUpdatedTimeForRecommendations($request)
    {
        return MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendationsResponse::fromXML($this->_invoke('GetLastUpdatedTimeForRecommendations'));
    }
    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendations request or \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendations object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendations
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceException
     */
    public function listRecommendations($request)
    {
        return MwsRecommendationsSectionServiceModelListRecommendationsResponse::fromXML($this->_invoke('ListRecommendations'));
    }
    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextToken request or \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceException
     */
    public function listRecommendationsByNextToken($request)
    {
        return MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResponse::fromXML($this->_invoke('ListRecommendationsByNextToken'));
    }
    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceException
     */
    public function getServiceStatus($request)
    {
        return MwsRecommendationsSectionServiceModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
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