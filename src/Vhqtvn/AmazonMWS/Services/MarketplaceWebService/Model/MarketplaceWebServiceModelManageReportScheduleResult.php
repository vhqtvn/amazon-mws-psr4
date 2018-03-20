<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleResult
 * 
 * @property	int	$Count
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule	$ReportSchedule
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
        $this->_fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'ReportSchedule' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule::class)));
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
     * @return $this instance
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