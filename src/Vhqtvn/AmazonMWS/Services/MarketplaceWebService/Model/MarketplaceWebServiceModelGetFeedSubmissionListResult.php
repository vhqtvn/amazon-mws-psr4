<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult
 * 
 * @property	string	$NextToken
 * @property	bool	$HasNext
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo	$FeedSubmissionInfo
 */
class MarketplaceWebServiceModelGetFeedSubmissionListResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>FeedSubmissionInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'), 'FeedSubmissionInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken()
    {
        return $this->fields['NextToken']['FieldValue'];
    }
    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the NextToken and returns this instance
     * 
     * @param string $value NextToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->fields['NextToken']['FieldValue']);
    }
    /**
     * Gets the value of the HasNext property.
     * 
     * @return bool HasNext
     */
    public function getHasNext()
    {
        return $this->fields['HasNext']['FieldValue'];
    }
    /**
     * Sets the value of the HasNext property.
     * 
     * @param bool HasNext
     * @return $this 
     */
    public function setHasNext($value)
    {
        $this->fields['HasNext']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the HasNext and returns this instance
     * 
     * @param bool $value HasNext
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult instance
     */
    public function withHasNext($value)
    {
        $this->setHasNext($value);
        return $this;
    }
    /**
     * Checks if HasNext is set
     * 
     * @return bool true if HasNext  is set
     */
    public function isSetHasNext()
    {
        return !is_null($this->fields['HasNext']['FieldValue']);
    }
    /**
     * Gets the value of the FeedSubmissionInfo.
     * 
     * @return array of FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfoList()
    {
        return $this->fields['FeedSubmissionInfo']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionInfo.
     * 
     * @param mixed FeedSubmissionInfo or an array of FeedSubmissionInfo FeedSubmissionInfo
     * @return $this 
     */
    public function setFeedSubmissionInfoList($feedSubmissionInfo)
    {
        if (!$this->_isNumericArray($feedSubmissionInfo)) {
            $feedSubmissionInfo = array($feedSubmissionInfo);
        }
        $this->fields['FeedSubmissionInfo']['FieldValue'] = $feedSubmissionInfo;
        return $this;
    }
    /**
     * Sets single or multiple values of FeedSubmissionInfo list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFeedSubmissionInfo($feedSubmissionInfo1, $feedSubmissionInfo2)</code>
     * 
     * @param FeedSubmissionInfo  $feedSubmissionInfoArgs one or more FeedSubmissionInfo
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult  instance
     */
    public function withFeedSubmissionInfo($feedSubmissionInfoArgs)
    {
        foreach (func_get_args() as $feedSubmissionInfo) {
            $this->fields['FeedSubmissionInfo']['FieldValue'][] = $feedSubmissionInfo;
        }
        return $this;
    }
    /**
     * Checks if FeedSubmissionInfo list is non-empty
     * 
     * @return bool true if FeedSubmissionInfo list is non-empty
     */
    public function isSetFeedSubmissionInfo()
    {
        return count($this->fields['FeedSubmissionInfo']['FieldValue']) > 0;
    }
}