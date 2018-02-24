<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	string	$FeedSubmissionId
 */
class MarketplaceWebServiceModelGetFeedSubmissionResultRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>FeedSubmissionId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedSubmissionId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedSubmissionResult' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest instance
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest instance
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
     * Gets the value of the FeedSubmissionId property.
     * 
     * @return string FeedSubmissionId
     */
    public function getFeedSubmissionId()
    {
        return $this->fields['FeedSubmissionId']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionId property.
     * 
     * @param string FeedSubmissionId
     * @return $this 
     */
    public function setFeedSubmissionId($value)
    {
        $this->fields['FeedSubmissionId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the FeedSubmissionId and returns this instance
     * 
     * @param string $value FeedSubmissionId
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest instance
     */
    public function withFeedSubmissionId($value)
    {
        $this->setFeedSubmissionId($value);
        return $this;
    }
    /**
     * Checks if FeedSubmissionId is set
     * 
     * @return bool true if FeedSubmissionId  is set
     */
    public function isSetFeedSubmissionId()
    {
        return !is_null($this->fields['FeedSubmissionId']['FieldValue']);
    }
    /**
     * Gets the value of the FeedSubmissionResult property.
     * 
     * @return string FeedSubmissionResult
     */
    public function getFeedSubmissionResult()
    {
        return $this->fields['FeedSubmissionResult']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionResult property.
     * 
     * @param string FeedSubmissionResult
     * @return $this 
     */
    public function setFeedSubmissionResult($value)
    {
        $this->fields['FeedSubmissionResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the FeedSubmissionResult and returns this instance
     * 
     * @param string $value FeedSubmissionResult
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultRequest instance
     */
    public function withFeedSubmissionResult($value)
    {
        $this->setFeedSubmissionResult($value);
        return $this;
    }
    /**
     * Checks if FeedSubmissionResult is set
     * 
     * @return bool true if FeedSubmissionResult  is set
     */
    public function isFeedSubmissionResult()
    {
        return !is_null($this->fields['FeedSubmissionResult']['FieldValue']);
    }
}