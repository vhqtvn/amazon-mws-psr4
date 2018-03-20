<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo	$ReportRequestInfo
 */
class MarketplaceWebServiceModelRequestReportResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelRequestReportResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportRequestInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('ReportRequestInfo' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo::class));
        parent::__construct($data);
    }
    /**
     * Gets the value of the ReportRequestInfo.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfo()
    {
        return $this->_fields['ReportRequestInfo']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestInfo.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo ReportRequestInfo
     * @return void
     */
    public function setReportRequestInfo($value)
    {
        $this->_fields['ReportRequestInfo']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of ReportRequestInfo, return this.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportRequestInfo $ReportRequestInfo
     * @return $this
     */
    public function withReportRequestInfo($ReportRequestInfo)
    {
        $this->setReportRequestInfo($ReportRequestInfo);
        return $this;
    }
    /**
     * Checks if ReportRequestInfo  is set
     * 
     * @return bool true if ReportRequestInfo property is set
     */
    public function isSetReportRequestInfo()
    {
        return !is_null($this->_fields['ReportRequestInfo']['FieldValue']);
    }
}