<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	string	$ReportId
 */
class MarketplaceWebServiceModelGetReportRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Report' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest instance
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
    /* -0------------------------------------------------- */
    /**
     * Gets the value of the Report property.
     * 
     * @return string Report
     */
    public function getReport()
    {
        return $this->fields['Report']['FieldValue'];
    }
    /**
     * Sets the value of the Report property.
     * 
     * @param string Report
     * @return $this 
     */
    public function setReport($value)
    {
        $this->fields['Report']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Report and returns this instance
     * 
     * @param string $value Report
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequest instance
     */
    public function withReport($value)
    {
        $this->setReport($value);
        return $this;
    }
    /**
     * Checks if Report is set
     * 
     * @return bool true if Report  is set
     */
    public function isSetReport()
    {
        return !is_null($this->fields['Report']['FieldValue']);
    }
}