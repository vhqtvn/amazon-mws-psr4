<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	string	$ReportType
 * @property	string	$Schedule
 * @property	string	$ScheduleDate
 */
class MarketplaceWebServiceModelManageReportScheduleRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportType: string</li>
     * <li>Schedule: string</li>
     * <li>ScheduleDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Schedule' => array('FieldValue' => null, 'FieldType' => 'string'), 'ScheduleDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Marketplace property.
     * 
     * @return string Marketplace
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }
    /**
     * Sets the value of the Marketplace property.
     * 
     * @param string Marketplace
     * @return $this 
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Marketplace, return this.
     *
     * @param string $Marketplace
     * @return $this
     */
    public function withMarketplace($Marketplace)
    {
        $this->setMarketplace($Marketplace);
        return $this;
    }
    /**
     * Checks if Marketplace is set
     * 
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }
    /**
     * Gets the value of the Merchant property.
     * 
     * @return string Merchant
     */
    public function getMerchant()
    {
        return $this->_fields['Merchant']['FieldValue'];
    }
    /**
     * Sets the value of the Merchant property.
     * 
     * @param string Merchant
     * @return $this 
     */
    public function setMerchant($value)
    {
        $this->_fields['Merchant']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Merchant, return this.
     *
     * @param string $Merchant
     * @return $this
     */
    public function withMerchant($Merchant)
    {
        $this->setMerchant($Merchant);
        return $this;
    }
    /**
     * Checks if Merchant is set
     * 
     * @return bool true if Merchant  is set
     */
    public function isSetMerchant()
    {
        return !is_null($this->_fields['Merchant']['FieldValue']);
    }
    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @return $this 
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Checks if MWSAuthToken is set
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
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
     * @return $this 
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
     * Gets the value of the Schedule property.
     * 
     * @return string Schedule
     */
    public function getSchedule()
    {
        return $this->_fields['Schedule']['FieldValue'];
    }
    /**
     * Sets the value of the Schedule property.
     * 
     * @param string Schedule
     * @return $this 
     */
    public function setSchedule($value)
    {
        $this->_fields['Schedule']['FieldValue'] = $value;
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
        return !is_null($this->_fields['Schedule']['FieldValue']);
    }
    /**
     * Gets the value of the ScheduleDate property.
     * 
     * @return string ScheduleDate
     */
    public function getScheduleDate()
    {
        return $this->_fields['ScheduleDate']['FieldValue'];
    }
    /**
     * Sets the value of the ScheduleDate property.
     * 
     * @param string ScheduleDate
     * @return $this 
     */
    public function setScheduleDate($value)
    {
        $this->_fields['ScheduleDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ScheduleDate, return this.
     *
     * @param string $ScheduleDate
     * @return $this
     */
    public function withScheduleDate($ScheduleDate)
    {
        $this->setScheduleDate($ScheduleDate);
        return $this;
    }
    /**
     * Checks if ScheduleDate is set
     * 
     * @return bool true if ScheduleDate  is set
     */
    public function isSetScheduleDate()
    {
        return !is_null($this->_fields['ScheduleDate']['FieldValue']);
    }
}