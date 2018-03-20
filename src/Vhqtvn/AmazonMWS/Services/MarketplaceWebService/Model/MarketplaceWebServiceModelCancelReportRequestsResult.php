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
        $this->_fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'ReportRequestInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Count property.
     * 
     * @return int Count
     */
    public function getCount()
    {
        return $this->_fields['Count']['FieldValue'];
    }
    /**
     * Sets the value of the Count property.
     * 
     * @param int Count
     * @return $this instance
     */
    public function setCount($value)
    {
        $this->_fields['Count']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Count, return this.
     *
     * @param int $Count
     * @return $this
     */
    public function withCount($Count)
    {
        $this->setCount($Count);
        return $this;
    }
    /**
     * Checks if Count is set
     * 
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return !is_null($this->_fields['Count']['FieldValue']);
    }
    /**
     * Gets the value of the ReportRequestInfo.
     * 
     * @return array of ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfoList()
    {
        return $this->_fields['ReportRequestInfo']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestInfo.
     * 
     * @param mixed ReportRequestInfo or an array of ReportRequestInfo ReportRequestInfo
     * @return $this instance
     */
    public function setReportRequestInfoList($reportRequestInfo)
    {
        if (!$this->_isNumericArray($reportRequestInfo)) {
            $reportRequestInfo = array($reportRequestInfo);
        }
        $this->_fields['ReportRequestInfo']['FieldValue'] = $reportRequestInfo;
        return $this;
    }
    /**
     * Add values for ReportRequestInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo[] $ReportRequestInfo_array,...
     * @return $this
     */
    public function withReportRequestInfo(...$ReportRequestInfo_array)
    {
        foreach ($ReportRequestInfo_array as $reportRequestInfo) {
            $this->_fields['ReportRequestInfo']['FieldValue'][] = $reportRequestInfo;
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
        return count($this->_fields['ReportRequestInfo']['FieldValue']) > 0;
    }
}