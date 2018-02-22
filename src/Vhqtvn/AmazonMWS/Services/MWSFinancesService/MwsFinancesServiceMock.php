<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceInterface;
use Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsResponse;
use Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsResponse;
use Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelGetServiceStatusResponse;
class MwsFinancesServiceMock implements MwsFinancesServiceInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * List Financial Event Groups
     * ListFinancialEventGroups can be used to find financial event groups that meet filter criteria.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroups request or \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroups object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroups
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceException
     */
    public function listFinancialEventGroups($request)
    {
        return MwsFinancesServiceModelListFinancialEventGroupsResponse::fromXML($this->_invoke('ListFinancialEventGroups'));
    }
    /**
     * List Financial Event Groups By Next Token
     * If ListFinancialEventGroups returns a nextToken, thus indicating that there are more groups
     *         than returned that matched the given filter criteria, ListFinancialEventGroupsByNextToken
     *         can be used to retrieve those groups using that nextToken.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsByNextToken request or \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceException
     */
    public function listFinancialEventGroupsByNextToken($request)
    {
        return MwsFinancesServiceModelListFinancialEventGroupsByNextTokenResponse::fromXML($this->_invoke('ListFinancialEventGroupsByNextToken'));
    }
    /**
     * List Financial Events
     * ListFinancialEvents can be used to find financial events that meet the specified criteria.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEvents request or \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEvents object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEvents
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceException
     */
    public function listFinancialEvents($request)
    {
        return MwsFinancesServiceModelListFinancialEventsResponse::fromXML($this->_invoke('ListFinancialEvents'));
    }
    /**
     * List Financial Events By Next Token
     * If ListFinancialEvents returns a nextToken, thus indicating that there are more financial events
     *         than returned that matched the given filter criteria, ListFinancialEventsByNextToken
     *         can be used to retrieve those events using that nextToken.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsByNextToken request or \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceException
     */
    public function listFinancialEventsByNextToken($request)
    {
        return MwsFinancesServiceModelListFinancialEventsByNextTokenResponse::fromXML($this->_invoke('ListFinancialEventsByNextToken'));
    }
    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelGetServiceStatus
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceException
     */
    public function getServiceStatus($request)
    {
        return MwsFinancesServiceModelGetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
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