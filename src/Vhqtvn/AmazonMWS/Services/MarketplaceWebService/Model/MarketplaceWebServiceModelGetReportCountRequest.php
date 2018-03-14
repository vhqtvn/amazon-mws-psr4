<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCountRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList	$ReportTypeList
 * @property	bool	$Acknowledged
 * @property	string	$AvailableFromDate
 * @property	string	$AvailableToDate
 */
class MarketplaceWebServiceModelGetReportCountRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportCountRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportTypeList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList</li>
     * <li>Acknowledged: bool</li>
     * <li>AvailableFromDate: string</li>
     * <li>AvailableToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportTypeList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList::class), 'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool'), 'AvailableFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'AvailableToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
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
     * Gets the value of the Acknowledged property.
     * 
     * @return bool Acknowledged
     */
    public function getAcknowledged()
    {
        return $this->_fields['Acknowledged']['FieldValue'];
    }
    /**
     * Sets the value of the Acknowledged property.
     * 
     * @param bool Acknowledged
     * @return $this 
     */
    public function setAcknowledged($value)
    {
        $this->_fields['Acknowledged']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Acknowledged, return this.
     *
     * @param bool $Acknowledged
     * @return $this
     */
    public function withAcknowledged($Acknowledged)
    {
        $this->setAcknowledged($Acknowledged);
        return $this;
    }
    /**
     * Checks if Acknowledged is set
     * 
     * @return bool true if Acknowledged  is set
     */
    public function isSetAcknowledged()
    {
        return !is_null($this->_fields['Acknowledged']['FieldValue']);
    }
    /**
     * Gets the value of the AvailableFromDate property.
     * 
     * @return string AvailableFromDate
     */
    public function getAvailableFromDate()
    {
        return $this->_fields['AvailableFromDate']['FieldValue'];
    }
    /**
     * Sets the value of the AvailableFromDate property.
     * 
     * @param string AvailableFromDate
     * @return $this 
     */
    public function setAvailableFromDate($value)
    {
        $this->_fields['AvailableFromDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of AvailableFromDate, return this.
     *
     * @param string $AvailableFromDate
     * @return $this
     */
    public function withAvailableFromDate($AvailableFromDate)
    {
        $this->setAvailableFromDate($AvailableFromDate);
        return $this;
    }
    /**
     * Checks if AvailableFromDate is set
     * 
     * @return bool true if AvailableFromDate  is set
     */
    public function isSetAvailableFromDate()
    {
        return !is_null($this->_fields['AvailableFromDate']['FieldValue']);
    }
    /**
     * Gets the value of the AvailableToDate property.
     * 
     * @return string AvailableToDate
     */
    public function getAvailableToDate()
    {
        return $this->_fields['AvailableToDate']['FieldValue'];
    }
    /**
     * Sets the value of the AvailableToDate property.
     * 
     * @param string AvailableToDate
     * @return $this 
     */
    public function setAvailableToDate($value)
    {
        $this->_fields['AvailableToDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of AvailableToDate, return this.
     *
     * @param string $AvailableToDate
     * @return $this
     */
    public function withAvailableToDate($AvailableToDate)
    {
        $this->setAvailableToDate($AvailableToDate);
        return $this;
    }
    /**
     * Checks if AvailableToDate is set
     * 
     * @return bool true if AvailableToDate  is set
     */
    public function isSetAvailableToDate()
    {
        return !is_null($this->_fields['AvailableToDate']['FieldValue']);
    }
}