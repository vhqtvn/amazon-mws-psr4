<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResult
 * 
 * @property	string	$NextToken
 * @property	bool	$HasNext
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo	$ReportInfo
 */
class MarketplaceWebServiceModelGetReportListByNextTokenResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ReportInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ReportInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo::class)));
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