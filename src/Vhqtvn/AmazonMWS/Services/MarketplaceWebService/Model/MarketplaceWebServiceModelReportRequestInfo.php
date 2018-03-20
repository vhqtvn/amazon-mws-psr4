<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo
 * 
 * @property	string	$ReportRequestId
 * @property	string	$ReportType
 * @property	string	$StartDate
 * @property	string	$EndDate
 * @property	string	$SubmittedDate
 * @property	string	$ReportProcessingStatus
 */
class MarketplaceWebServiceModelReportRequestInfo extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportRequestId: string</li>
     * <li>ReportType: string</li>
     * <li>StartDate: string</li>
     * <li>EndDate: string</li>
     * <li>Scheduled: bool</li>
     * <li>SubmittedDate: string</li>
     * <li>ReportProcessingStatus: string</li>
     * <li>GeneratedReportId: string</li>
     * <li>StartedProcessingDate: string</li>
     * <li>CompletedDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('ReportRequestId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'StartDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'EndDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'Scheduled' => array('FieldValue' => null, 'FieldType' => 'bool'), 'SubmittedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'ReportProcessingStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'GeneratedReportId' => array('FieldValue' => null, 'FieldType' => 'string'), 'StartedProcessingDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'CompletedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the ReportRequestId property.
     * 
     * @return string ReportRequestId
     */
    public function getReportRequestId()
    {
        return $this->_fields['ReportRequestId']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestId property.
     * 
     * @param string ReportRequestId
     * @return $this instance
     */
    public function setReportRequestId($value)
    {
        $this->_fields['ReportRequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportRequestId, return this.
     *
     * @param string $ReportRequestId
     * @return $this
     */
    public function withReportRequestId($ReportRequestId)
    {
        $this->setReportRequestId($ReportRequestId);
        return $this;
    }
    /**
     * Checks if ReportRequestId is set
     * 
     * @return bool true if ReportRequestId  is set
     */
    public function isSetReportRequestId()
    {
        return !is_null($this->_fields['ReportRequestId']['FieldValue']);
    }
    /**
     * Gets the value of the ReportType property.
     * 
     * @return string ReportType
     */
    public function getReportType()
    {
        return $this->_fields['ReportType']['FieldValue'];
    }
    /**
     * Sets the value of the ReportType property.
     * 
     * @param string ReportType
     * @return $this instance
     */
    public function setReportType($value)
    {
        $this->_fields['ReportType']['FieldValue'] = $value;
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
        return !is_null($this->_fields['ReportType']['FieldValue']);
    }
    /**
     * Gets the value of the StartDate property.
     * 
     * @return string StartDate
     */
    public function getStartDate()
    {
        return $this->_fields['StartDate']['FieldValue'];
    }
    /**
     * Sets the value of the StartDate property.
     * 
     * @param string StartDate
     * @return $this instance
     */
    public function setStartDate($value)
    {
        $this->_fields['StartDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of StartDate, return this.
     *
     * @param string $StartDate
     * @return $this
     */
    public function withStartDate($StartDate)
    {
        $this->setStartDate($StartDate);
        return $this;
    }
    /**
     * Checks if StartDate is set
     * 
     * @return bool true if StartDate  is set
     */
    public function isSetStartDate()
    {
        return !is_null($this->_fields['StartDate']['FieldValue']);
    }
    /**
     * Gets the value of the EndDate property.
     * 
     * @return string EndDate
     */
    public function getEndDate()
    {
        return $this->_fields['EndDate']['FieldValue'];
    }
    /**
     * Sets the value of the EndDate property.
     * 
     * @param string EndDate
     * @return $this instance
     */
    public function setEndDate($value)
    {
        $this->_fields['EndDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of EndDate, return this.
     *
     * @param string $EndDate
     * @return $this
     */
    public function withEndDate($EndDate)
    {
        $this->setEndDate($EndDate);
        return $this;
    }
    /**
     * Checks if EndDate is set
     * 
     * @return bool true if EndDate  is set
     */
    public function isSetEndDate()
    {
        return !is_null($this->_fields['EndDate']['FieldValue']);
    }
    /**
     * Gets the value of the Scheduled property.
     * 
     * @return string Scheduled
     */
    public function getScheduled()
    {
        return $this->_fields['Scheduled']['FieldValue'];
    }
    /**
     * Sets the value of the Scheduled property.
     * 
     * @param string Scheduled
     * @return $this instance
     */
    public function setScheduled($value)
    {
        $this->_fields['Scheduled']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Scheduled, return this.
     *
     * @param string $Scheduled
     * @return $this
     */
    public function withScheduled($Scheduled)
    {
        $this->setScheduled($Scheduled);
        return $this;
    }
    /**
     * Checks if Scheduled is set
     * 
     * @return bool true if Scheduled  is set
     */
    public function isSetScheduled()
    {
        return !is_null($this->_fields['Scheduled']['FieldValue']);
    }
    /**
     * Gets the value of the SubmittedDate property.
     * 
     * @return string SubmittedDate
     */
    public function getSubmittedDate()
    {
        return $this->_fields['SubmittedDate']['FieldValue'];
    }
    /**
     * Sets the value of the SubmittedDate property.
     * 
     * @param string SubmittedDate
     * @return $this instance
     */
    public function setSubmittedDate($value)
    {
        $this->_fields['SubmittedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of SubmittedDate, return this.
     *
     * @param string $SubmittedDate
     * @return $this
     */
    public function withSubmittedDate($SubmittedDate)
    {
        $this->setSubmittedDate($SubmittedDate);
        return $this;
    }
    /**
     * Checks if SubmittedDate is set
     * 
     * @return bool true if SubmittedDate  is set
     */
    public function isSetSubmittedDate()
    {
        return !is_null($this->_fields['SubmittedDate']['FieldValue']);
    }
    /**
     * Gets the value of the ReportProcessingStatus property.
     * 
     * @return string ReportProcessingStatus
     */
    public function getReportProcessingStatus()
    {
        return $this->_fields['ReportProcessingStatus']['FieldValue'];
    }
    /**
     * Sets the value of the ReportProcessingStatus property.
     * 
     * @param string ReportProcessingStatus
     * @return $this instance
     */
    public function setReportProcessingStatus($value)
    {
        $this->_fields['ReportProcessingStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportProcessingStatus, return this.
     *
     * @param string $ReportProcessingStatus
     * @return $this
     */
    public function withReportProcessingStatus($ReportProcessingStatus)
    {
        $this->setReportProcessingStatus($ReportProcessingStatus);
        return $this;
    }
    /**
     * Checks if ReportProcessingStatus is set
     * 
     * @return bool true if ReportProcessingStatus  is set
     */
    public function isSetReportProcessingStatus()
    {
        return !is_null($this->_fields['ReportProcessingStatus']['FieldValue']);
    }
    /**
     * Gets the value of the GeneratedReportId property.
     *
     * @return string GeneratedReportId
     */
    public function getGeneratedReportId()
    {
        return $this->_fields['GeneratedReportId']['FieldValue'];
    }
    /**
     * Sets the value of the GeneratedReportId property.
     *
     * @param string GeneratedReportId
     * @return $this instance
     */
    public function setGeneratedReportId($value)
    {
        $this->_fields['GeneratedReportId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of GeneratedReportId, return this.
     *
     * @param string $GeneratedReportId
     * @return $this
     */
    public function withGeneratedReportId($GeneratedReportId)
    {
        $this->setGeneratedReportId($GeneratedReportId);
        return $this;
    }
    /**
     * Checks if GeneratedReportId is set
     *
     * @return bool true if GeneratedReportId  is set
     */
    public function isSetGeneratedReportId()
    {
        return !is_null($this->_fields['GeneratedReportId']['FieldValue']);
    }
    /**
     * Gets the value of the StartedProcessingDate property.
     *
     * @return string StartedProcessingDate
     */
    public function getStartedProcessingDate()
    {
        return $this->_fields['StartedProcessingDate']['FieldValue'];
    }
    /**
     * Sets the value of the StartedProcessingDate property.
     *
     * @param string StartedProcessingDate
     * @return $this instance
     */
    public function setStartedProcessingDate($value)
    {
        $this->_fields['StartedProcessingDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of StartedProcessingDate, return this.
     *
     * @param string $StartedProcessingDate
     * @return $this
     */
    public function withStartedProcessingDate($StartedProcessingDate)
    {
        $this->setStartedProcessingDate($StartedProcessingDate);
        return $this;
    }
    /**
     * Checks if StartedProcessingDate is set
     *
     * @return bool true if StartedProcessingDate  is set
     */
    public function isSetStartedProcessingDate()
    {
        return !is_null($this->_fields['StartedProcessingDate']['FieldValue']);
    }
    /**
     * Gets the value of the CompletedDate property.
     *
     * @return string CompletedDate
     */
    public function getCompletedDate()
    {
        return $this->_fields['CompletedDate']['FieldValue'];
    }
    /**
     * Sets the value of the CompletedDate property.
     *
     * @param string CompletedDate
     * @return $this instance
     */
    public function setCompletedDate($value)
    {
        $this->_fields['CompletedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of CompletedDate, return this.
     *
     * @param string $CompletedDate
     * @return $this
     */
    public function withCompletedDate($CompletedDate)
    {
        $this->setCompletedDate($CompletedDate);
        return $this;
    }
    /**
     * Checks if CompletedDate is set
     *
     * @return bool true if CompletedDate  is set
     */
    public function isSetCompletedDate()
    {
        return !is_null($this->_fields['CompletedDate']['FieldValue']);
    }
}