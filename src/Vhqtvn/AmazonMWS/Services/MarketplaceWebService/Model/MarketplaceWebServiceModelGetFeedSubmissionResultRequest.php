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
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedSubmissionId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedSubmissionResult' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Gets the value of the FeedSubmissionId property.
     * 
     * @return string FeedSubmissionId
     */
    public function getFeedSubmissionId()
    {
        return $this->_fields['FeedSubmissionId']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionId property.
     * 
     * @param string FeedSubmissionId
     * @return $this 
     */
    public function setFeedSubmissionId($value)
    {
        $this->_fields['FeedSubmissionId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of FeedSubmissionId, return this.
     *
     * @param string $FeedSubmissionId
     * @return $this
     */
    public function withFeedSubmissionId($FeedSubmissionId)
    {
        $this->setFeedSubmissionId($FeedSubmissionId);
        return $this;
    }
    /**
     * Checks if FeedSubmissionId is set
     * 
     * @return bool true if FeedSubmissionId  is set
     */
    public function isSetFeedSubmissionId()
    {
        return !is_null($this->_fields['FeedSubmissionId']['FieldValue']);
    }
    /**
     * Gets the value of the FeedSubmissionResult property.
     * 
     * @return string FeedSubmissionResult
     */
    public function getFeedSubmissionResult()
    {
        return $this->_fields['FeedSubmissionResult']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionResult property.
     * 
     * @param string FeedSubmissionResult
     * @return $this 
     */
    public function setFeedSubmissionResult($value)
    {
        $this->_fields['FeedSubmissionResult']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of FeedSubmissionResult, return this.
     *
     * @param string $FeedSubmissionResult
     * @return $this
     */
    public function withFeedSubmissionResult($FeedSubmissionResult)
    {
        $this->setFeedSubmissionResult($FeedSubmissionResult);
        return $this;
    }
    /**
     * Checks if FeedSubmissionResult is set
     * 
     * @return bool true if FeedSubmissionResult  is set
     */
    public function isFeedSubmissionResult()
    {
        return !is_null($this->_fields['FeedSubmissionResult']['FieldValue']);
    }
}