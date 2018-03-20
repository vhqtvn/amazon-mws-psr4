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
        $this->_fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'), 'FeedSubmissionInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Count property.
     * 
     * @return int Count
     */
    public function getCount()
    {
        return $this->_fields['Count']['FieldValue'];
    }
    /**
     * Sets the value of the Count property.
     * 
     * @param int Count
     * @return $this instance
     */
    public function setCount($value)
    {
        $this->_fields['Count']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of Count, return this.
     *
     * @param int $Count
     * @return $this
     */
    public function withCount($Count)
    {
        $this->setCount($Count);
        return $this;
    }
    /**
     * Checks if Count is set
     * 
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return !is_null($this->_fields['Count']['FieldValue']);
    }
    /**
     * Gets the value of the FeedSubmissionInfo.
     * 
     * @return array of FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfoList()
    {
        return $this->_fields['FeedSubmissionInfo']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionInfo.
     * 
     * @param mixed FeedSubmissionInfo or an array of FeedSubmissionInfo FeedSubmissionInfo
     * @return $this instance
     */
    public function setFeedSubmissionInfoList($feedSubmissionInfo)
    {
        if (!$this->_isNumericArray($feedSubmissionInfo)) {
            $feedSubmissionInfo = array($feedSubmissionInfo);
        }
        $this->_fields['FeedSubmissionInfo']['FieldValue'] = $feedSubmissionInfo;
        return $this;
    }
    /**
     * Add values for FeedSubmissionInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo[] $FeedSubmissionInfo_array,...
     * @return $this
     */
    public function withFeedSubmissionInfo(...$FeedSubmissionInfo_array)
    {
        foreach ($FeedSubmissionInfo_array as $feedSubmissionInfo) {
            $this->_fields['FeedSubmissionInfo']['FieldValue'][] = $feedSubmissionInfo;
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
        return count($this->_fields['FeedSubmissionInfo']['FieldValue']) > 0;
    }
}