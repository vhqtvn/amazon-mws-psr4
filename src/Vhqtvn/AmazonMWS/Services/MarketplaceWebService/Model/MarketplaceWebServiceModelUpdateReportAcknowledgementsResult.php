<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult
 * 
 * @property	int	$Count
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo	$ReportInfo
 */
class MarketplaceWebServiceModelUpdateReportAcknowledgementsResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Count: int</li>
     * <li>ReportInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'ReportInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo::class)));
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
     * Gets the value of the ReportInfo.
     * 
     * @return array of ReportInfo ReportInfo
     */
    public function getReportInfoList()
    {
        return $this->_fields['ReportInfo']['FieldValue'];
    }
    /**
     * Sets the value of the ReportInfo.
     * 
     * @param mixed ReportInfo or an array of ReportInfo ReportInfo
     * @return $this instance
     */
    public function setReportInfoList($reportInfo)
    {
        if (!$this->_isNumericArray($reportInfo)) {
            $reportInfo = array($reportInfo);
        }
        $this->_fields['ReportInfo']['FieldValue'] = $reportInfo;
        return $this;
    }
    /**
     * Add values for ReportInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo[] $ReportInfo_array,...
     * @return $this
     */
    public function withReportInfo(...$ReportInfo_array)
    {
        foreach ($ReportInfo_array as $reportInfo) {
            $this->_fields['ReportInfo']['FieldValue'][] = $reportInfo;
        }
        return $this;
    }
    /**
     * Checks if ReportInfo list is non-empty
     * 
     * @return bool true if ReportInfo list is non-empty
     */
    public function isSetReportInfo()
    {
        return count($this->_fields['ReportInfo']['FieldValue']) > 0;
    }
}