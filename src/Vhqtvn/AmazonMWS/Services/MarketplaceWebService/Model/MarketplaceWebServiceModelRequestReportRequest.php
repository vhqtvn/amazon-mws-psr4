<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList	$MarketplaceIdList
 * @property	string	$ReportType
 * @property	string	$StartDate
 * @property	string	$EndDate
 * @property	string	$ReportOptions
 */
class MarketplaceWebServiceModelRequestReportRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MarketplaceIdList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList</li>
     * <li>ReportType: string</li>
     * <li>StartDate: string</li>
     * <li>EndDate: string</li>
     * <li>ReportOptions: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'StartDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'EndDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'ReportOptions' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
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
     * Gets the value of the MarketplaceIdList.
     * 
     * @return IdList MarketplaceIdList
     */
    public function getMarketplaceIdList()
    {
        return $this->fields['MarketplaceIdList']['FieldValue'];
    }
    /**
     * Sets the value of the MarketplaceIdList.
     * 
     * @param IdList MarketplaceIdList
     * @return void
     */
    public function setMarketplaceIdList($value)
    {
        $marketplaceIdList = new MarketplaceWebServiceModelIdList();
        $marketplaceIdList->setId($value['Id']);
        $this->fields['MarketplaceIdList']['FieldValue'] = $marketplaceIdList;
        return;
    }
    /**
     * Sets the value of the MarketplaceIdList  and returns this instance
     * 
     * @param IdList $value MarketplaceIdList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
     */
    public function withMarketplaceIdList($value)
    {
        $this->setMarketplaceIdList($value);
        return $this;
    }
    /**
     * Checks if MarketplaceIdList  is set
     * 
     * @return bool true if MarketplaceIdList property is set
     */
    public function isSetMarketplaceIdList()
    {
        return !is_null($this->fields['MarketplaceIdList']['FieldValue']);
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
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
     * Gets the value of the StartDate property.
     * 
     * @return string StartDate
     */
    public function getStartDate()
    {
        return $this->fields['StartDate']['FieldValue'];
    }
    /**
     * Sets the value of the StartDate property.
     * 
     * @param string StartDate
     * @return $this 
     */
    public function setStartDate($value)
    {
        $this->fields['StartDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the StartDate and returns this instance
     * 
     * @param string $value StartDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
     */
    public function withStartDate($value)
    {
        $this->setStartDate($value);
        return $this;
    }
    /**
     * Checks if StartDate is set
     * 
     * @return bool true if StartDate  is set
     */
    public function isSetStartDate()
    {
        return !is_null($this->fields['StartDate']['FieldValue']);
    }
    /**
     * Gets the value of the EndDate property.
     * 
     * @return string EndDate
     */
    public function getEndDate()
    {
        return $this->fields['EndDate']['FieldValue'];
    }
    /**
     * Sets the value of the EndDate property.
     * 
     * @param string EndDate
     * @return $this 
     */
    public function setEndDate($value)
    {
        $this->fields['EndDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the EndDate and returns this instance
     * 
     * @param string $value EndDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
     */
    public function withEndDate($value)
    {
        $this->setEndDate($value);
        return $this;
    }
    /**
     * Checks if EndDate is set
     * 
     * @return bool true if EndDate  is set
     */
    public function isSetEndDate()
    {
        return !is_null($this->fields['EndDate']['FieldValue']);
    }
    /**
     * Gets the value of the ReportOptions property.
     * 
     * @return string ReportOptions
     */
    public function getReportOptions()
    {
        return $this->fields['ReportOptions']['FieldValue'];
    }
    /**
     * Sets the value of the ReportOptions property.
     * 
     * @param string ReportOptions
     * @return $this 
     */
    public function setReportOptions($value)
    {
        $this->fields['ReportOptions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the ReportOptions and returns this instance
     * 
     * @param string $value ReportOptions
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportRequest instance
     */
    public function withReportOptions($value)
    {
        $this->setReportOptions($value);
        return $this;
    }
    /**
     * Checks if ReportOptions is set
     * 
     * @return bool true if ReportOptions  is set
     */
    public function isSetReportOptions()
    {
        return !is_null($this->fields['ReportOptions']['FieldValue']);
    }
}