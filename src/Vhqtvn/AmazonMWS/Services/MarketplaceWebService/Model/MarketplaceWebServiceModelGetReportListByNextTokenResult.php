<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ReportInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo</li>
 *
 * </ul>
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
        $this->fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ReportInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken()
    {
        return $this->fields['NextToken']['FieldValue'];
    }
    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the NextToken and returns this instance
     * 
     * @param string $value NextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResult instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->fields['NextToken']['FieldValue']);
    }
    /**
     * Gets the value of the HasNext property.
     * 
     * @return bool HasNext
     */
    public function getHasNext()
    {
        return $this->fields['HasNext']['FieldValue'];
    }
    /**
     * Sets the value of the HasNext property.
     * 
     * @param bool HasNext
     * @return $this 
     */
    public function setHasNext($value)
    {
        $this->fields['HasNext']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the HasNext and returns this instance
     * 
     * @param bool $value HasNext
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResult instance
     */
    public function withHasNext($value)
    {
        $this->setHasNext($value);
        return $this;
    }
    /**
     * Checks if HasNext is set
     * 
     * @return bool true if HasNext  is set
     */
    public function isSetHasNext()
    {
        return !is_null($this->fields['HasNext']['FieldValue']);
    }
    /**
     * Gets the value of the ReportInfo.
     * 
     * @return array of ReportInfo ReportInfo
     */
    public function getReportInfoList()
    {
        return $this->fields['ReportInfo']['FieldValue'];
    }
    /**
     * Sets the value of the ReportInfo.
     * 
     * @param mixed ReportInfo or an array of ReportInfo ReportInfo
     * @return $this 
     */
    public function setReportInfoList($reportInfo)
    {
        if (!$this->_isNumericArray($reportInfo)) {
            $reportInfo = array($reportInfo);
        }
        $this->fields['ReportInfo']['FieldValue'] = $reportInfo;
        return $this;
    }
    /**
     * Sets single or multiple values of ReportInfo list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportInfo($reportInfo1, $reportInfo2)</code>
     * 
     * @param ReportInfo  $reportInfoArgs one or more ReportInfo
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListByNextTokenResult  instance
     */
    public function withReportInfo($reportInfoArgs)
    {
        foreach (func_get_args() as $reportInfo) {
            $this->fields['ReportInfo']['FieldValue'][] = $reportInfo;
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
        return count($this->fields['ReportInfo']['FieldValue']) > 0;
    }
}