<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceInterface;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCountResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionCountResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCountResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListResponse;
/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 * 
 */
class MarketplaceWebServiceMock implements MarketplaceWebServiceInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Get Report 
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReport request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReport object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReport
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReport($request)
    {
        return MarketplaceWebServiceModelGetReportResponse::fromXML($this->invoke('GetReport'));
    }
    /**
     * Get Report Schedule Count 
     * returns the number of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCount request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCount object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCount
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleCountResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportScheduleCount($request)
    {
        return MarketplaceWebServiceModelGetReportScheduleCountResponse::fromXML($this->invoke('GetReportScheduleCount'));
    }
    /**
     * Get Report Request List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListByNextToken request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListByNextTokenResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportRequestListByNextToken($request)
    {
        return MarketplaceWebServiceModelGetReportRequestListByNextTokenResponse::fromXML($this->invoke('GetReportRequestListByNextToken'));
    }
    /**
     * Update Report Acknowledgements 
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgements request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgements object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgements
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function updateReportAcknowledgements($request)
    {
        return MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse::fromXML($this->invoke('UpdateReportAcknowledgements'));
    }
    /**
     * Submit Feed 
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *   
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeed request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeed object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeed
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function submitFeed($request)
    {
        return MarketplaceWebServiceModelSubmitFeedResponse::fromXML($this->invoke('SubmitFeed'));
    }
    /**
     * Get Report Count 
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCount request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCount object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCount
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCountResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCountResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportCount($request)
    {
        return MarketplaceWebServiceModelGetReportCountResponse::fromXML($this->invoke('GetReportCount'));
    }
    /**
     * Get Feed Submission List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListByNextToken request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListByNextTokenResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getFeedSubmissionListByNextToken($request)
    {
        return MarketplaceWebServiceModelGetFeedSubmissionListByNextTokenResponse::fromXML($this->invoke('GetFeedSubmissionListByNextToken'));
    }
    /**
     * Cancel Feed Submissions 
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissions request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissions object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissions
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function cancelFeedSubmissions($request)
    {
        return MarketplaceWebServiceModelCancelFeedSubmissionsResponse::fromXML($this->invoke('CancelFeedSubmissions'));
    }
    /**
     * Request Report 
     * requests the generation of a report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReport request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReport object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReport
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function requestReport($request)
    {
        return MarketplaceWebServiceModelRequestReportResponse::fromXML($this->invoke('RequestReport'));
    }
    /**
     * Get Feed Submission Count 
     * returns the number of feeds matching all of the specified criteria
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionCount request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionCount object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionCount
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionCountResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionCountResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getFeedSubmissionCount($request)
    {
        return MarketplaceWebServiceModelGetFeedSubmissionCountResponse::fromXML($this->invoke('GetFeedSubmissionCount'));
    }
    /**
     * Cancel Report Requests 
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequests request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequests object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequests
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function cancelReportRequests($request)
    {
        return MarketplaceWebServiceModelCancelReportRequestsResponse::fromXML($this->invoke('CancelReportRequests'));
    }
    /**
     * Get Report List 
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportList request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportList object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportList($request)
    {
        return MarketplaceWebServiceModelGetReportListResponse::fromXML($this->invoke('GetReportList'));
    }
    /**
     * Get Feed Submission Result 
     * retrieves the feed processing report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResult request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResult object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResult
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getFeedSubmissionResult($request)
    {
        return MarketplaceWebServiceModelGetFeedSubmissionResultResponse::fromXML($this->invoke('GetFeedSubmissionResult'));
    }
    /**
     * Get Feed Submission List 
     * returns a list of feed submission identifiers and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionList request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionList object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getFeedSubmissionList($request)
    {
        return MarketplaceWebServiceModelGetFeedSubmissionListResponse::fromXML($this->invoke('GetFeedSubmissionList'));
    }
    /**
     * Get Report Request List 
     * returns a list of report requests ids and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestList request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestList object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportRequestList($request)
    {
        return MarketplaceWebServiceModelGetReportRequestListResponse::fromXML($this->invoke('GetReportRequestList'));
    }
    /**
     * Get Report Schedule List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextToken request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextTokenResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportScheduleListByNextToken($request)
    {
        return MarketplaceWebServiceModelGetReportScheduleListByNextTokenResponse::fromXML($this->invoke('GetReportScheduleListByNextToken'));
    }
    /**
     * Get Report List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextToken request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextToken object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportListByNextToken($request)
    {
        return MarketplaceWebServiceModelGetReportListByNextTokenResponse::fromXML($this->invoke('GetReportListByNextToken'));
    }
    /**
     * Manage Report Schedule 
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportSchedule request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportSchedule object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportSchedule
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function manageReportSchedule($request)
    {
        return MarketplaceWebServiceModelManageReportScheduleResponse::fromXML($this->invoke('ManageReportSchedule'));
    }
    /**
     * Get Report Request Count 
     * returns a count of report requests; by default all the report
     * requests in the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCount request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCount object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCount
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCountResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCountResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportRequestCount($request)
    {
        return MarketplaceWebServiceModelGetReportRequestCountResponse::fromXML($this->invoke('GetReportRequestCount'));
    }
    /**
     * Get Report Schedule List 
     * returns the list of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html      
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleList request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleList object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListResponse \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException
     */
    public function getReportScheduleList($request)
    {
        return MarketplaceWebServiceModelGetReportScheduleListResponse::fromXML($this->invoke('GetReportScheduleList'));
    }
    // Private API ------------------------------------------------------------//
    private function invoke($actionName)
    {
        return $xml = file_get_contents(
            'MarketplaceWebService/Mock/' . $actionName . 'Response.xml',
            /** search include path */
            TRUE
        );
    }
}