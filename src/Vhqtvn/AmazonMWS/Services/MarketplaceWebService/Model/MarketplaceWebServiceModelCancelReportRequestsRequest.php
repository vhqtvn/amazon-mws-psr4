<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList	$ReportRequestIdList
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList	$ReportTypeList
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList	$ReportProcessingStatusList
 * @property	string	$RequestedFromDate
 * @property	string	$RequestedToDate
 */
class MarketplaceWebServiceModelCancelReportRequestsRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelReportRequestsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportRequestIdList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList</li>
     * <li>ReportTypeList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList</li>
     * <li>ReportProcessingStatusList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList</li>
     * <li>RequestedFromDate: string</li>
     * <li>RequestedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportRequestIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class), 'ReportTypeList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList::class), 'ReportProcessingStatusList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList::class), 'RequestedFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'RequestedToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
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
     * Gets the value of the ReportRequestIdList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList ReportRequestIdList
     */
    public function getReportRequestIdList()
    {
        return $this->_fields['ReportRequestIdList']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestIdList.
     * 
     * @param IdList ReportRequestIdList
     * @return void
     */
    public function setReportRequestIdList($value)
    {
        $this->_fields['ReportRequestIdList']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of ReportRequestIdList, return this.
     *
     * @param IdList $ReportRequestIdList
     * @return $this
     */
    public function withReportRequestIdList($ReportRequestIdList)
    {
        $this->setReportRequestIdList($ReportRequestIdList);
        return $this;
    }
    /**
     * Checks if ReportRequestIdList  is set
     * 
     * @return bool true if ReportRequestIdList property is set
     */
    public function isSetReportRequestIdList()
    {
        return !is_null($this->_fields['ReportRequestIdList']['FieldValue']);
    }
    /**
     * Gets the value of the ReportTypeList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList ReportTypeList
     */
    public function getReportTypeList()
    {
        return $this->_fields['ReportTypeList']['FieldValue'];
    }
    /**
     * Sets the value of the ReportTypeList.
     * 
     * @param TypeList ReportTypeList
     * @return void
     */
    public function setReportTypeList($value)
    {
        $this->_fields['ReportTypeList']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of ReportTypeList, return this.
     *
     * @param TypeList $ReportTypeList
     * @return $this
     */
    public function withReportTypeList($ReportTypeList)
    {
        $this->setReportTypeList($ReportTypeList);
        return $this;
    }
    /**
     * Checks if ReportTypeList  is set
     * 
     * @return bool true if ReportTypeList property is set
     */
    public function isSetReportTypeList()
    {
        return !is_null($this->_fields['ReportTypeList']['FieldValue']);
    }
    /**
     * Gets the value of the ReportProcessingStatusList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList ReportProcessingStatusList
     */
    public function getReportProcessingStatusList()
    {
        return $this->_fields['ReportProcessingStatusList']['FieldValue'];
    }
    /**
     * Sets the value of the ReportProcessingStatusList.
     * 
     * @param StatusList ReportProcessingStatusList
     * @return void
     */
    public function setReportProcessingStatusList($value)
    {
        $this->_fields['ReportProcessingStatusList']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of ReportProcessingStatusList, return this.
     *
     * @param StatusList $ReportProcessingStatusList
     * @return $this
     */
    public function withReportProcessingStatusList($ReportProcessingStatusList)
    {
        $this->setReportProcessingStatusList($ReportProcessingStatusList);
        return $this;
    }
    /**
     * Checks if ReportProcessingStatusList  is set
     * 
     * @return bool true if ReportProcessingStatusList property is set
     */
    public function isSetReportProcessingStatusList()
    {
        return !is_null($this->_fields['ReportProcessingStatusList']['FieldValue']);
    }
    /**
     * Gets the value of the RequestedFromDate property.
     * 
     * @return string RequestedFromDate
     */
    public function getRequestedFromDate()
    {
        return $this->_fields['RequestedFromDate']['FieldValue'];
    }
    /**
     * Sets the value of the RequestedFromDate property.
     * 
     * @param string RequestedFromDate
     * @return $this 
     */
    public function setRequestedFromDate($value)
    {
        $this->_fields['RequestedFromDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of RequestedFromDate, return this.
     *
     * @param string $RequestedFromDate
     * @return $this
     */
    public function withRequestedFromDate($RequestedFromDate)
    {
        $this->setRequestedFromDate($RequestedFromDate);
        return $this;
    }
    /**
     * Checks if RequestedFromDate is set
     * 
     * @return bool true if RequestedFromDate  is set
     */
    public function isSetRequestedFromDate()
    {
        return !is_null($this->_fields['RequestedFromDate']['FieldValue']);
    }
    /**
     * Gets the value of the RequestedToDate property.
     * 
     * @return string RequestedToDate
     */
    public function getRequestedToDate()
    {
        return $this->_fields['RequestedToDate']['FieldValue'];
    }
    /**
     * Sets the value of the RequestedToDate property.
     * 
     * @param string RequestedToDate
     * @return $this 
     */
    public function setRequestedToDate($value)
    {
        $this->_fields['RequestedToDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of RequestedToDate, return this.
     *
     * @param string $RequestedToDate
     * @return $this
     */
    public function withRequestedToDate($RequestedToDate)
    {
        $this->setRequestedToDate($RequestedToDate);
        return $this;
    }
    /**
     * Checks if RequestedToDate is set
     * 
     * @return bool true if RequestedToDate  is set
     */
    public function isSetRequestedToDate()
    {
        return !is_null($this->_fields['RequestedToDate']['FieldValue']);
    }
}