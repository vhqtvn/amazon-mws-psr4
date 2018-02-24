<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList	$FeedSubmissionIdList
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList	$FeedTypeList
 * @property	string	$SubmittedFromDate
 * @property	string	$SubmittedToDate
 */
class MarketplaceWebServiceModelCancelFeedSubmissionsRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>FeedSubmissionIdList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList</li>
     * <li>FeedTypeList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList</li>
     * <li>SubmittedFromDate: string</li>
     * <li>SubmittedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedSubmissionIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class), 'FeedTypeList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList::class), 'SubmittedFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'SubmittedToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
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
     * Gets the value of the FeedSubmissionIdList.
     * 
     * @return IdList FeedSubmissionIdList
     */
    public function getFeedSubmissionIdList()
    {
        return $this->fields['FeedSubmissionIdList']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionIdList.
     * 
     * @param IdList FeedSubmissionIdList
     * @return void
     */
    public function setFeedSubmissionIdList($value)
    {
        $this->fields['FeedSubmissionIdList']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the FeedSubmissionIdList  and returns this instance
     * 
     * @param IdList $value FeedSubmissionIdList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
     */
    public function withFeedSubmissionIdList($value)
    {
        $this->setFeedSubmissionIdList($value);
        return $this;
    }
    /**
     * Checks if FeedSubmissionIdList  is set
     * 
     * @return bool true if FeedSubmissionIdList property is set
     */
    public function isSetFeedSubmissionIdList()
    {
        return !is_null($this->fields['FeedSubmissionIdList']['FieldValue']);
    }
    /**
     * Gets the value of the FeedTypeList.
     * 
     * @return TypeList FeedTypeList
     */
    public function getFeedTypeList()
    {
        return $this->fields['FeedTypeList']['FieldValue'];
    }
    /**
     * Sets the value of the FeedTypeList.
     * 
     * @param TypeList FeedTypeList
     * @return void
     */
    public function setFeedTypeList($value)
    {
        $this->fields['FeedTypeList']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the FeedTypeList  and returns this instance
     * 
     * @param TypeList $value FeedTypeList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
     */
    public function withFeedTypeList($value)
    {
        $this->setFeedTypeList($value);
        return $this;
    }
    /**
     * Checks if FeedTypeList  is set
     * 
     * @return bool true if FeedTypeList property is set
     */
    public function isSetFeedTypeList()
    {
        return !is_null($this->fields['FeedTypeList']['FieldValue']);
    }
    /**
     * Gets the value of the SubmittedFromDate property.
     * 
     * @return string SubmittedFromDate
     */
    public function getSubmittedFromDate()
    {
        return $this->fields['SubmittedFromDate']['FieldValue'];
    }
    /**
     * Sets the value of the SubmittedFromDate property.
     * 
     * @param string SubmittedFromDate
     * @return $this 
     */
    public function setSubmittedFromDate($value)
    {
        $this->fields['SubmittedFromDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the SubmittedFromDate and returns this instance
     * 
     * @param string $value SubmittedFromDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
     */
    public function withSubmittedFromDate($value)
    {
        $this->setSubmittedFromDate($value);
        return $this;
    }
    /**
     * Checks if SubmittedFromDate is set
     * 
     * @return bool true if SubmittedFromDate  is set
     */
    public function isSetSubmittedFromDate()
    {
        return !is_null($this->fields['SubmittedFromDate']['FieldValue']);
    }
    /**
     * Gets the value of the SubmittedToDate property.
     * 
     * @return string SubmittedToDate
     */
    public function getSubmittedToDate()
    {
        return $this->fields['SubmittedToDate']['FieldValue'];
    }
    /**
     * Sets the value of the SubmittedToDate property.
     * 
     * @param string SubmittedToDate
     * @return $this 
     */
    public function setSubmittedToDate($value)
    {
        $this->fields['SubmittedToDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the SubmittedToDate and returns this instance
     * 
     * @param string $value SubmittedToDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsRequest instance
     */
    public function withSubmittedToDate($value)
    {
        $this->setSubmittedToDate($value);
        return $this;
    }
    /**
     * Checks if SubmittedToDate is set
     * 
     * @return bool true if SubmittedToDate  is set
     */
    public function isSetSubmittedToDate()
    {
        return !is_null($this->fields['SubmittedToDate']['FieldValue']);
    }
}