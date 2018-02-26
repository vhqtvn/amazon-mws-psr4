<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule
 * 
 * @property	string	$ReportType
 * @property	string	$Schedule
 * @property	string	$ScheduledDate
 */
class MarketplaceWebServiceModelReportSchedule extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportSchedule
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportType: string</li>
     * <li>Schedule: string</li>
     * <li>ScheduledDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Schedule' => array('FieldValue' => null, 'FieldType' => 'string'), 'ScheduledDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the ReportType property.
     * 
     * @return string ReportType
     */
    public function getReportType()
    {
        return $this->fields['ReportType']['FieldValue'];
    }
    /**
     * Sets the value of the ReportType property.
     * 
     * @param string ReportType
     * @return $this 
     */
    public function setReportType($value)
    {
        $this->fields['ReportType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportType, return this.
     *
     * @param string $ReportType
     * @return $this
     */
    public function withReportType($ReportType)
    {
        $this->setReportType($ReportType);
        return $this;
    }
    /**
     * Checks if ReportType is set
     * 
     * @return bool true if ReportType  is set
     */
    public function isSetReportType()
    {
        return !is_null($this->fields['ReportType']['FieldValue']);
    }
    /**
     * Gets the value of the Schedule property.
     * 
     * @return string Schedule
     */
    public function getSchedule()
    {
        return $this->fields['Schedule']['FieldValue'];
    }
    /**
     * Sets the value of the Schedule property.
     * 
     * @param string Schedule
     * @return $this 
     */
    public function setSchedule($value)
    {
        $this->fields['Schedule']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Schedule, return this.
     *
     * @param string $Schedule
     * @return $this
     */
    public function withSchedule($Schedule)
    {
        $this->setSchedule($Schedule);
        return $this;
    }
    /**
     * Checks if Schedule is set
     * 
     * @return bool true if Schedule  is set
     */
    public function isSetSchedule()
    {
        return !is_null($this->fields['Schedule']['FieldValue']);
    }
    /**
     * Gets the value of the ScheduledDate property.
     * 
     * @return string ScheduledDate
     */
    public function getScheduledDate()
    {
        return $this->fields['ScheduledDate']['FieldValue'];
    }
    /**
     * Sets the value of the ScheduledDate property.
     * 
     * @param string ScheduledDate
     * @return $this 
     */
    public function setScheduledDate($value)
    {
        $this->fields['ScheduledDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ScheduledDate, return this.
     *
     * @param string $ScheduledDate
     * @return $this
     */
    public function withScheduledDate($ScheduledDate)
    {
        $this->setScheduledDate($ScheduledDate);
        return $this;
    }
    /**
     * Checks if ScheduledDate is set
     * 
     * @return bool true if ScheduledDate  is set
     */
    public function isSetScheduledDate()
    {
        return !is_null($this->fields['ScheduledDate']['FieldValue']);
    }
}