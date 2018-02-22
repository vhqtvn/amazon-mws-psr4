<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Count: int</li>
 * <li>ReportSchedule: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule</li>
 *
 * </ul>
 */
class MarketplaceWebServiceModelManageReportScheduleResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Count: int</li>
     * <li>ReportSchedule: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'ReportSchedule' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule::class)));
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResult instance
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
     * Gets the value of the ReportSchedule.
     * 
     * @return array of ReportSchedule ReportSchedule
     */
    public function getReportScheduleList()
    {
        return $this->fields['ReportSchedule']['FieldValue'];
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
        $this->fields['ReportSchedule']['FieldValue'] = $reportSchedule;
        return $this;
    }
    /**
     * Sets single or multiple values of ReportSchedule list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportSchedule($reportSchedule1, $reportSchedule2)</code>
     * 
     * @param ReportSchedule  $reportScheduleArgs one or more ReportSchedule
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResult  instance
     */
    public function withReportSchedule($reportScheduleArgs)
    {
        foreach (func_get_args() as $reportSchedule) {
            $this->fields['ReportSchedule']['FieldValue'][] = $reportSchedule;
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
        return count($this->fields['ReportSchedule']['FieldValue']) > 0;
    }
}