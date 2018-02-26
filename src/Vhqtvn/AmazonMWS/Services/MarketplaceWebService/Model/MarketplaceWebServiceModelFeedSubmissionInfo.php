<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo
 * 
 * @property	string	$FeedSubmissionId
 * @property	string	$FeedType
 * @property	string	$SubmittedDate
 * @property	string	$FeedProcessingStatus
 * @property	string	$StartedProcessingDate
 * @property	string	$CompletedProcessingDate
 */
class MarketplaceWebServiceModelFeedSubmissionInfo extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>FeedSubmissionId: string</li>
     * <li>FeedType: string</li>
     * <li>SubmittedDate: string</li>
     * <li>FeedProcessingStatus: string</li>
     * <li>StartedProcessingDate: string</li>
     * <li>CompletedProcessingDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('FeedSubmissionId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedType' => array('FieldValue' => null, 'FieldType' => 'string'), 'SubmittedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'FeedProcessingStatus' => array('FieldValue' => null, 'FieldType' => 'string'), 'StartedProcessingDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'CompletedProcessingDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
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
        return !is_null($this->fields['FeedSubmissionId']['FieldValue']);
    }
    /**
     * Gets the value of the FeedType property.
     * 
     * @return string FeedType
     */
    public function getFeedType()
    {
        return $this->fields['FeedType']['FieldValue'];
    }
    /**
     * Sets the value of the FeedType property.
     * 
     * @param string FeedType
     * @return $this 
     */
    public function setFeedType($value)
    {
        $this->fields['FeedType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of FeedType, return this.
     *
     * @param string $FeedType
     * @return $this
     */
    public function withFeedType($FeedType)
    {
        $this->setFeedType($FeedType);
        return $this;
    }
    /**
     * Checks if FeedType is set
     * 
     * @return bool true if FeedType  is set
     */
    public function isSetFeedType()
    {
        return !is_null($this->fields['FeedType']['FieldValue']);
    }
    /**
     * Gets the value of the SubmittedDate property.
     * 
     * @return string SubmittedDate
     */
    public function getSubmittedDate()
    {
        return $this->fields['SubmittedDate']['FieldValue'];
    }
    /**
     * Sets the value of the SubmittedDate property.
     * 
     * @param string SubmittedDate
     * @return $this 
     */
    public function setSubmittedDate($value)
    {
        $this->fields['SubmittedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of SubmittedDate, return this.
     *
     * @param string $SubmittedDate
     * @return $this
     */
    public function withSubmittedDate($SubmittedDate)
    {
        $this->setSubmittedDate($SubmittedDate);
        return $this;
    }
    /**
     * Checks if SubmittedDate is set
     * 
     * @return bool true if SubmittedDate  is set
     */
    public function isSetSubmittedDate()
    {
        return !is_null($this->fields['SubmittedDate']['FieldValue']);
    }
    /**
     * Gets the value of the FeedProcessingStatus property.
     * 
     * @return string FeedProcessingStatus
     */
    public function getFeedProcessingStatus()
    {
        return $this->fields['FeedProcessingStatus']['FieldValue'];
    }
    /**
     * Sets the value of the FeedProcessingStatus property.
     * 
     * @param string FeedProcessingStatus
     * @return $this 
     */
    public function setFeedProcessingStatus($value)
    {
        $this->fields['FeedProcessingStatus']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of FeedProcessingStatus, return this.
     *
     * @param string $FeedProcessingStatus
     * @return $this
     */
    public function withFeedProcessingStatus($FeedProcessingStatus)
    {
        $this->setFeedProcessingStatus($FeedProcessingStatus);
        return $this;
    }
    /**
     * Checks if FeedProcessingStatus is set
     * 
     * @return bool true if FeedProcessingStatus  is set
     */
    public function isSetFeedProcessingStatus()
    {
        return !is_null($this->fields['FeedProcessingStatus']['FieldValue']);
    }
    /**
     * Gets the value of the StartedProcessingDate property.
     * 
     * @return string StartedProcessingDate
     */
    public function getStartedProcessingDate()
    {
        return $this->fields['StartedProcessingDate']['FieldValue'];
    }
    /**
     * Sets the value of the StartedProcessingDate property.
     * 
     * @param string StartedProcessingDate
     * @return $this 
     */
    public function setStartedProcessingDate($value)
    {
        $this->fields['StartedProcessingDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of StartedProcessingDate, return this.
     *
     * @param string $StartedProcessingDate
     * @return $this
     */
    public function withStartedProcessingDate($StartedProcessingDate)
    {
        $this->setStartedProcessingDate($StartedProcessingDate);
        return $this;
    }
    /**
     * Checks if StartedProcessingDate is set
     * 
     * @return bool true if StartedProcessingDate  is set
     */
    public function isSetStartedProcessingDate()
    {
        return !is_null($this->fields['StartedProcessingDate']['FieldValue']);
    }
    /**
     * Gets the value of the CompletedProcessingDate property.
     * 
     * @return string CompletedProcessingDate
     */
    public function getCompletedProcessingDate()
    {
        return $this->fields['CompletedProcessingDate']['FieldValue'];
    }
    /**
     * Sets the value of the CompletedProcessingDate property.
     * 
     * @param string CompletedProcessingDate
     * @return $this 
     */
    public function setCompletedProcessingDate($value)
    {
        $this->fields['CompletedProcessingDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of CompletedProcessingDate, return this.
     *
     * @param string $CompletedProcessingDate
     * @return $this
     */
    public function withCompletedProcessingDate($CompletedProcessingDate)
    {
        $this->setCompletedProcessingDate($CompletedProcessingDate);
        return $this;
    }
    /**
     * Checks if CompletedProcessingDate is set
     * 
     * @return bool true if CompletedProcessingDate  is set
     */
    public function isSetCompletedProcessingDate()
    {
        return !is_null($this->fields['CompletedProcessingDate']['FieldValue']);
    }
}