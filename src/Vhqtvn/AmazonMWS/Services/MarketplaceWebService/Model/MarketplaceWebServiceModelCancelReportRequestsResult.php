<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResult
 * 
 * @property	int	$Count
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo	$ReportRequestInfo
 */
class MarketplaceWebServiceModelCancelReportRequestsResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Count: int</li>
     * <li>ReportRequestInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'ReportRequestInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Count property.
     * 
     * @return int Count
     */
    public function getCount()
    {
        return $this->fields['Count']['FieldValue'];
    }
    /**
     * Sets the value of the Count property.
     * 
     * @param int Count
     * @return $this 
     */
    public function setCount($value)
    {
        $this->fields['Count']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Count and returns this instance
     * 
     * @param int $value Count
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResult instance
     */
    public function withCount($value)
    {
        $this->setCount($value);
        return $this;
    }
    /**
     * Checks if Count is set
     * 
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return !is_null($this->fields['Count']['FieldValue']);
    }
    /**
     * Gets the value of the ReportRequestInfo.
     * 
     * @return array of ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfoList()
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestInfo.
     * 
     * @param mixed ReportRequestInfo or an array of ReportRequestInfo ReportRequestInfo
     * @return $this 
     */
    public function setReportRequestInfoList($reportRequestInfo)
    {
        if (!$this->_isNumericArray($reportRequestInfo)) {
            $reportRequestInfo = array($reportRequestInfo);
        }
        $this->fields['ReportRequestInfo']['FieldValue'] = $reportRequestInfo;
        return $this;
    }
    /**
     * Sets single or multiple values of ReportRequestInfo list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportRequestInfo($reportRequestInfo1, $reportRequestInfo2)</code>
     * 
     * @param ReportRequestInfo  $reportRequestInfoArgs one or more ReportRequestInfo
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsResult  instance
     */
    public function withReportRequestInfo($reportRequestInfoArgs)
    {
        foreach (func_get_args() as $reportRequestInfo) {
            $this->fields['ReportRequestInfo']['FieldValue'][] = $reportRequestInfo;
        }
        return $this;
    }
    /**
     * Checks if ReportRequestInfo list is non-empty
     * 
     * @return bool true if ReportRequestInfo list is non-empty
     */
    public function isSetReportRequestInfo()
    {
        return count($this->fields['ReportRequestInfo']['FieldValue']) > 0;
    }
}