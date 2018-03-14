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
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'StartDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'EndDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'ReportOptions' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Gets the value of the MarketplaceIdList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList MarketplaceIdList
     */
    public function getMarketplaceIdList()
    {
        return $this->_fields['MarketplaceIdList']['FieldValue'];
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
        $this->_fields['MarketplaceIdList']['FieldValue'] = $marketplaceIdList;
        return;
    }
    /**
     * Set the value of MarketplaceIdList, return this.
     *
     * @param IdList $MarketplaceIdList
     * @return $this
     */
    public function withMarketplaceIdList($MarketplaceIdList)
    {
        $this->setMarketplaceIdList($MarketplaceIdList);
        return $this;
    }
    /**
     * Checks if MarketplaceIdList  is set
     * 
     * @return bool true if MarketplaceIdList property is set
     */
    public function isSetMarketplaceIdList()
    {
        return !is_null($this->_fields['MarketplaceIdList']['FieldValue']);
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
     * @return $this 
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
     * @return $this 
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
     * Gets the value of the ReportOptions property.
     * 
     * @return string ReportOptions
     */
    public function getReportOptions()
    {
        return $this->_fields['ReportOptions']['FieldValue'];
    }
    /**
     * Sets the value of the ReportOptions property.
     * 
     * @param string ReportOptions
     * @return $this 
     */
    public function setReportOptions($value)
    {
        $this->_fields['ReportOptions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportOptions, return this.
     *
     * @param string $ReportOptions
     * @return $this
     */
    public function withReportOptions($ReportOptions)
    {
        $this->setReportOptions($ReportOptions);
        return $this;
    }
    /**
     * Checks if ReportOptions is set
     * 
     * @return bool true if ReportOptions  is set
     */
    public function isSetReportOptions()
    {
        return !is_null($this->_fields['ReportOptions']['FieldValue']);
    }
}