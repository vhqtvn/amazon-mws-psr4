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
        $this->fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Schedule' => array('FieldValue' => null, 'FieldType' => 'string'), 'ScheduleDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Marketplace property.
     * 
     * @return string Marketplace
     */
    public function getMarketplace()
    {
        return $this->fields['Marketplace']['FieldValue'];
    }
    /**
     * Sets the value of the Marketplace property.
     * 
     * @param string Marketplace
     * @return $this 
     */
    public function setMarketplace($value)
    {
        $this->fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Marketplace and returns this instance
     * 
     * @param string $value Marketplace
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }
    /**
     * Checks if Marketplace is set
     * 
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return !is_null($this->fields['Marketplace']['FieldValue']);
    }
    /**
     * Gets the value of the Merchant property.
     * 
     * @return string Merchant
     */
    public function getMerchant()
    {
        return $this->fields['Merchant']['FieldValue'];
    }
    /**
     * Sets the value of the Merchant property.
     * 
     * @param string Merchant
     * @return $this 
     */
    public function setMerchant($value)
    {
        $this->fields['Merchant']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Merchant and returns this instance
     * 
     * @param string $value Merchant
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest instance
     */
    public function withMerchant($value)
    {
        $this->setMerchant($value);
        return $this;
    }
    /**
     * Checks if Merchant is set
     * 
     * @return bool true if Merchant  is set
     */
    public function isSetMerchant()
    {
        return !is_null($this->fields['Merchant']['FieldValue']);
    }
    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @return $this 
     */
    public function setMWSAuthToken($value)
    {
        $this->fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the MWSAuthToken and returns this instance
     *
     * @param string $value MWSAuthToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }
    /**
     * Checks if MWSAuthToken is set
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->fields['MWSAuthToken']['FieldValue']);
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
     * Sets the value of the ReportType and returns this instance
     * 
     * @param string $value ReportType
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest instance
     */
    public function withReportType($value)
    {
        $this->setReportType($value);
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
     * Sets the value of the Schedule and returns this instance
     * 
     * @param string $value Schedule
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest instance
     */
    public function withSchedule($value)
    {
        $this->setSchedule($value);
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
     * Gets the value of the ScheduleDate property.
     * 
     * @return string ScheduleDate
     */
    public function getScheduleDate()
    {
        return $this->fields['ScheduleDate']['FieldValue'];
    }
    /**
     * Sets the value of the ScheduleDate property.
     * 
     * @param string ScheduleDate
     * @return $this 
     */
    public function setScheduleDate($value)
    {
        $this->fields['ScheduleDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the ScheduleDate and returns this instance
     * 
     * @param string $value ScheduleDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelManageReportScheduleRequest instance
     */
    public function withScheduleDate($value)
    {
        $this->setScheduleDate($value);
        return $this;
    }
    /**
     * Checks if ScheduleDate is set
     * 
     * @return bool true if ScheduleDate  is set
     */
    public function isSetScheduleDate()
    {
        return !is_null($this->fields['ScheduleDate']['FieldValue']);
    }
}