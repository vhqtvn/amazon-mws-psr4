<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextTokenResult
 * 
 * @property	string	$NextToken
 * @property	bool	$HasNext
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule	$ReportSchedule
 */
class MarketplaceWebServiceModelGetReportScheduleListByNextTokenResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportScheduleListByNextTokenResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ReportSchedule: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ReportSchedule' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule::class)));
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
     * @return $this 
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
     * @return $this 
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
     * Gets the value of the ReportSchedule.
     * 
     * @return array of ReportSchedule ReportSchedule
     */
    public function getReportScheduleList()
    {
        return $this->_fields['ReportSchedule']['FieldValue'];
    }
    /**
     * Sets the value of the ReportSchedule.
     * 
     * @param mixed ReportSchedule or an array of ReportSchedule ReportSchedule
     * @return $this 
     */
    public function setReportScheduleList($reportSchedule)
    {
        if (!$this->_isNumericArray($reportSchedule)) {
            $reportSchedule = array($reportSchedule);
        }
        $this->_fields['ReportSchedule']['FieldValue'] = $reportSchedule;
        return $this;
    }
    /**
     * Add values for ReportSchedule, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule[] $ReportSchedule_array,...
     * @return $this
     */
    public function withReportSchedule(...$ReportSchedule_array)
    {
        foreach ($ReportSchedule_array as $reportSchedule) {
            $this->_fields['ReportSchedule']['FieldValue'][] = $reportSchedule;
        }
        return $this;
    }
    /**
     * Checks if ReportSchedule list is non-empty
     * 
     * @return bool true if ReportSchedule list is non-empty
     */
    public function isSetReportSchedule()
    {
        return count($this->_fields['ReportSchedule']['FieldValue']) > 0;
    }
}