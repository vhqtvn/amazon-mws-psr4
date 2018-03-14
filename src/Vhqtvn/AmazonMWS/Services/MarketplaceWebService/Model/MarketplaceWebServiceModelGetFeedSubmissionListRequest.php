<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList	$FeedSubmissionIdList
 * @property	Count	$MaxCount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList	$FeedTypeList
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList	$FeedProcessingStatusList
 * @property	string	$SubmittedFromDate
 * @property	string	$SubmittedToDate
 */
class MarketplaceWebServiceModelGetFeedSubmissionListRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>FeedSubmissionIdList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList</li>
     * <li>MaxCount: Count</li>
     * <li>FeedTypeList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList</li>
     * <li>FeedProcessingStatusList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList</li>
     * <li>SubmittedFromDate: string</li>
     * <li>SubmittedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedSubmissionIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class), 'MaxCount' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedTypeList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList::class), 'FeedProcessingStatusList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList::class), 'SubmittedFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'SubmittedToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
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
     * Gets the value of the FeedSubmissionIdList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList FeedSubmissionIdList
     */
    public function getFeedSubmissionIdList()
    {
        return $this->_fields['FeedSubmissionIdList']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionIdList.
     * 
     * @param IdList FeedSubmissionIdList
     * @return void
     */
    public function setFeedSubmissionIdList($value)
    {
        $this->_fields['FeedSubmissionIdList']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of FeedSubmissionIdList, return this.
     *
     * @param IdList $FeedSubmissionIdList
     * @return $this
     */
    public function withFeedSubmissionIdList($FeedSubmissionIdList)
    {
        $this->setFeedSubmissionIdList($FeedSubmissionIdList);
        return $this;
    }
    /**
     * Checks if FeedSubmissionIdList  is set
     * 
     * @return bool true if FeedSubmissionIdList property is set
     */
    public function isSetFeedSubmissionIdList()
    {
        return !is_null($this->_fields['FeedSubmissionIdList']['FieldValue']);
    }
    /**
     * Gets the value of the MaxCount property.
     * 
     * @return Count MaxCount
     */
    public function getMaxCount()
    {
        return $this->_fields['MaxCount']['FieldValue'];
    }
    /**
     * Sets the value of the MaxCount property.
     * 
     * @param Count MaxCount
     * @return $this 
     */
    public function setMaxCount($value)
    {
        $this->_fields['MaxCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of MaxCount, return this.
     *
     * @param Count $MaxCount
     * @return $this
     */
    public function withMaxCount($MaxCount)
    {
        $this->setMaxCount($MaxCount);
        return $this;
    }
    /**
     * Checks if MaxCount is set
     * 
     * @return bool true if MaxCount  is set
     */
    public function isSetMaxCount()
    {
        return !is_null($this->_fields['MaxCount']['FieldValue']);
    }
    /**
     * Gets the value of the FeedTypeList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList FeedTypeList
     */
    public function getFeedTypeList()
    {
        return $this->_fields['FeedTypeList']['FieldValue'];
    }
    /**
     * Sets the value of the FeedTypeList.
     * 
     * @param TypeList FeedTypeList
     * @return void
     */
    public function setFeedTypeList($value)
    {
        $this->_fields['FeedTypeList']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of FeedTypeList, return this.
     *
     * @param TypeList $FeedTypeList
     * @return $this
     */
    public function withFeedTypeList($FeedTypeList)
    {
        $this->setFeedTypeList($FeedTypeList);
        return $this;
    }
    /**
     * Checks if FeedTypeList  is set
     * 
     * @return bool true if FeedTypeList property is set
     */
    public function isSetFeedTypeList()
    {
        return !is_null($this->_fields['FeedTypeList']['FieldValue']);
    }
    /**
     * Gets the value of the FeedProcessingStatusList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList FeedProcessingStatusList
     */
    public function getFeedProcessingStatusList()
    {
        return $this->_fields['FeedProcessingStatusList']['FieldValue'];
    }
    /**
     * Sets the value of the FeedProcessingStatusList.
     * 
     * @param StatusList FeedProcessingStatusList
     * @return void
     */
    public function setFeedProcessingStatusList($value)
    {
        $this->_fields['FeedProcessingStatusList']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of FeedProcessingStatusList, return this.
     *
     * @param StatusList $FeedProcessingStatusList
     * @return $this
     */
    public function withFeedProcessingStatusList($FeedProcessingStatusList)
    {
        $this->setFeedProcessingStatusList($FeedProcessingStatusList);
        return $this;
    }
    /**
     * Checks if FeedProcessingStatusList  is set
     * 
     * @return bool true if FeedProcessingStatusList property is set
     */
    public function isSetFeedProcessingStatusList()
    {
        return !is_null($this->_fields['FeedProcessingStatusList']['FieldValue']);
    }
    /**
     * Gets the value of the SubmittedFromDate property.
     * 
     * @return string SubmittedFromDate
     */
    public function getSubmittedFromDate()
    {
        return $this->_fields['SubmittedFromDate']['FieldValue'];
    }
    /**
     * Sets the value of the SubmittedFromDate property.
     * 
     * @param string SubmittedFromDate
     * @return $this 
     */
    public function setSubmittedFromDate($value)
    {
        $this->_fields['SubmittedFromDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of SubmittedFromDate, return this.
     *
     * @param string $SubmittedFromDate
     * @return $this
     */
    public function withSubmittedFromDate($SubmittedFromDate)
    {
        $this->setSubmittedFromDate($SubmittedFromDate);
        return $this;
    }
    /**
     * Checks if SubmittedFromDate is set
     * 
     * @return bool true if SubmittedFromDate  is set
     */
    public function isSetSubmittedFromDate()
    {
        return !is_null($this->_fields['SubmittedFromDate']['FieldValue']);
    }
    /**
     * Gets the value of the SubmittedToDate property.
     * 
     * @return string SubmittedToDate
     */
    public function getSubmittedToDate()
    {
        return $this->_fields['SubmittedToDate']['FieldValue'];
    }
    /**
     * Sets the value of the SubmittedToDate property.
     * 
     * @param string SubmittedToDate
     * @return $this 
     */
    public function setSubmittedToDate($value)
    {
        $this->_fields['SubmittedToDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of SubmittedToDate, return this.
     *
     * @param string $SubmittedToDate
     * @return $this
     */
    public function withSubmittedToDate($SubmittedToDate)
    {
        $this->setSubmittedToDate($SubmittedToDate);
        return $this;
    }
    /**
     * Checks if SubmittedToDate is set
     * 
     * @return bool true if SubmittedToDate  is set
     */
    public function isSetSubmittedToDate()
    {
        return !is_null($this->_fields['SubmittedToDate']['FieldValue']);
    }
}