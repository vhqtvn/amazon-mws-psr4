<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult
 * 
 * @property	int	$Count
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo	$FeedSubmissionInfo
 */
class MarketplaceWebServiceModelCancelFeedSubmissionsResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Count: int</li>
     * <li>FeedSubmissionInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'FeedSubmissionInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Count property.
     * 
     * @return int Count
     */
    public function getCount()
    {
        return $this->fields['Count']['FieldValue'];
    }
    /**
     * Sets the value of the Count property.
     * 
     * @param int Count
     * @return $this 
     */
    public function setCount($value)
    {
        $this->fields['Count']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Count and returns this instance
     * 
     * @param int $value Count
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult instance
     */
    public function withCount($value)
    {
        $this->setCount($value);
        return $this;
    }
    /**
     * Checks if Count is set
     * 
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return !is_null($this->fields['Count']['FieldValue']);
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
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult  instance
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