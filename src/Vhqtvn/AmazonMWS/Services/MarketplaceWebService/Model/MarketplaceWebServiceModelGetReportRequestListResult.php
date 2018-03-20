<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListResult
 * 
 * @property	string	$NextToken
 * @property	bool	$HasNext
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo	$ReportRequestInfo
 */
class MarketplaceWebServiceModelGetReportRequestListResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestListResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ReportRequestInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ReportRequestInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param string $NextToken
     * @return $this
     */
    public function withNextToken($NextToken)
    {
        $this->setNextToken($NextToken);
        return $this;
    }
    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Gets the value of the HasNext property.
     * 
     * @return bool HasNext
     */
    public function getHasNext()
    {
        return $this->_fields['HasNext']['FieldValue'];
    }
    /**
     * Sets the value of the HasNext property.
     * 
     * @param bool HasNext
     * @return $this instance
     */
    public function setHasNext($value)
    {
        $this->_fields['HasNext']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of HasNext, return this.
     *
     * @param bool $HasNext
     * @return $this
     */
    public function withHasNext($HasNext)
    {
        $this->setHasNext($HasNext);
        return $this;
    }
    /**
     * Checks if HasNext is set
     * 
     * @return bool true if HasNext  is set
     */
    public function isSetHasNext()
    {
        return !is_null($this->_fields['HasNext']['FieldValue']);
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