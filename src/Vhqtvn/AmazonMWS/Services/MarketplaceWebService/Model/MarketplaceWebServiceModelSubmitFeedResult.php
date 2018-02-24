<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo	$FeedSubmissionInfo
 */
class MarketplaceWebServiceModelSubmitFeedResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>FeedSubmissionInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('FeedSubmissionInfo' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo::class));
        parent::__construct($data);
    }
    /**
     * Gets the value of the FeedSubmissionInfo.
     * 
     * @return FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfo()
    {
        return $this->fields['FeedSubmissionInfo']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionInfo.
     * 
     * @param FeedSubmissionInfo FeedSubmissionInfo
     * @return void
     */
    public function setFeedSubmissionInfo($value)
    {
        $this->fields['FeedSubmissionInfo']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the FeedSubmissionInfo  and returns this instance
     * 
     * @param FeedSubmissionInfo $value FeedSubmissionInfo
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedResult instance
     */
    public function withFeedSubmissionInfo($value)
    {
        $this->setFeedSubmissionInfo($value);
        return $this;
    }
    /**
     * Checks if FeedSubmissionInfo  is set
     * 
     * @return bool true if FeedSubmissionInfo property is set
     */
    public function isSetFeedSubmissionInfo()
    {
        return !is_null($this->fields['FeedSubmissionInfo']['FieldValue']);
    }
}