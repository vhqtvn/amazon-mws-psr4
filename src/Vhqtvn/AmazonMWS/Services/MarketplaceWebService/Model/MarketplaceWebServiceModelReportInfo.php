<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo
 * 
 * @property	string	$ReportId
 * @property	string	$ReportType
 * @property	string	$ReportRequestId
 * @property	string	$AvailableDate
 * @property	bool	$Acknowledged
 * @property	string	$AcknowledgedDate
 */
class MarketplaceWebServiceModelReportInfo extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportId: string</li>
     * <li>ReportType: string</li>
     * <li>ReportRequestId: string</li>
     * <li>AvailableDate: string</li>
     * <li>Acknowledged: bool</li>
     * <li>AcknowledgedDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('ReportId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportRequestId' => array('FieldValue' => null, 'FieldType' => 'string'), 'AvailableDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool'), 'AcknowledgedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the ReportId property.
     * 
     * @return string ReportId
     */
    public function getReportId()
    {
        return $this->fields['ReportId']['FieldValue'];
    }
    /**
     * Sets the value of the ReportId property.
     * 
     * @param string ReportId
     * @return $this 
     */
    public function setReportId($value)
    {
        $this->fields['ReportId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the ReportId and returns this instance
     * 
     * @param string $value ReportId
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo instance
     */
    public function withReportId($value)
    {
        $this->setReportId($value);
        return $this;
    }
    /**
     * Checks if ReportId is set
     * 
     * @return bool true if ReportId  is set
     */
    public function isSetReportId()
    {
        return !is_null($this->fields['ReportId']['FieldValue']);
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo instance
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
     * Gets the value of the ReportRequestId property.
     * 
     * @return string ReportRequestId
     */
    public function getReportRequestId()
    {
        return $this->fields['ReportRequestId']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestId property.
     * 
     * @param string ReportRequestId
     * @return $this 
     */
    public function setReportRequestId($value)
    {
        $this->fields['ReportRequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the ReportRequestId and returns this instance
     * 
     * @param string $value ReportRequestId
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo instance
     */
    public function withReportRequestId($value)
    {
        $this->setReportRequestId($value);
        return $this;
    }
    /**
     * Checks if ReportRequestId is set
     * 
     * @return bool true if ReportRequestId  is set
     */
    public function isSetReportRequestId()
    {
        return !is_null($this->fields['ReportRequestId']['FieldValue']);
    }
    /**
     * Gets the value of the AvailableDate property.
     * 
     * @return string AvailableDate
     */
    public function getAvailableDate()
    {
        return $this->fields['AvailableDate']['FieldValue'];
    }
    /**
     * Sets the value of the AvailableDate property.
     * 
     * @param string AvailableDate
     * @return $this 
     */
    public function setAvailableDate($value)
    {
        $this->fields['AvailableDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the AvailableDate and returns this instance
     * 
     * @param string $value AvailableDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo instance
     */
    public function withAvailableDate($value)
    {
        $this->setAvailableDate($value);
        return $this;
    }
    /**
     * Checks if AvailableDate is set
     * 
     * @return bool true if AvailableDate  is set
     */
    public function isSetAvailableDate()
    {
        return !is_null($this->fields['AvailableDate']['FieldValue']);
    }
    /**
     * Gets the value of the Acknowledged property.
     * 
     * @return bool Acknowledged
     */
    public function getAcknowledged()
    {
        return $this->fields['Acknowledged']['FieldValue'];
    }
    /**
     * Sets the value of the Acknowledged property.
     * 
     * @param bool Acknowledged
     * @return $this 
     */
    public function setAcknowledged($value)
    {
        $this->fields['Acknowledged']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Acknowledged and returns this instance
     * 
     * @param bool $value Acknowledged
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo instance
     */
    public function withAcknowledged($value)
    {
        $this->setAcknowledged($value);
        return $this;
    }
    /**
     * Checks if Acknowledged is set
     * 
     * @return bool true if Acknowledged  is set
     */
    public function isSetAcknowledged()
    {
        return !is_null($this->fields['Acknowledged']['FieldValue']);
    }
    /**
     * Gets the value of the AcknowledgedDate property.
     * 
     * @return string AcknowledgedDate
     */
    public function getAcknowledgedDate()
    {
        return $this->fields['AcknowledgedDate']['FieldValue'];
    }
    /**
     * Sets the value of the AcknowledgedDate property.
     * 
     * @param string AcknowledgedDate
     * @return $this 
     */
    public function setAcknowledgedDate($value)
    {
        $this->fields['AcknowledgedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the AcknowledgedDate and returns this instance
     * 
     * @param string $value AcknowledgedDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo instance
     */
    public function withAcknowledgedDate($value)
    {
        $this->setAcknowledgedDate($value);
        return $this;
    }
    /**
     * Checks if AcknowledgedDate is set
     * 
     * @return bool true if AcknowledgedDate  is set
     */
    public function isSetAcknowledgedDate()
    {
        return !is_null($this->fields['AcknowledgedDate']['FieldValue']);
    }
}