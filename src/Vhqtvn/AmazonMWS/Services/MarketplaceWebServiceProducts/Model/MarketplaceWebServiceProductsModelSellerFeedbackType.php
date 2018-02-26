<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerFeedbackType
 * 
 * @property	float	$SellerPositiveFeedbackRating
 * @property	int	$FeedbackCount
 */
class MarketplaceWebServiceProductsModelSellerFeedbackType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerPositiveFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'float'), 'FeedbackCount' => array('FieldValue' => null, 'FieldType' => 'int'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerPositiveFeedbackRating property.
     *
     * @return Double SellerPositiveFeedbackRating.
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }
    /**
     * Set the value of the SellerPositiveFeedbackRating property.
     *
     * @param float sellerPositiveFeedbackRating
     * @return $this 
     */
    public function setSellerPositiveFeedbackRating($value)
    {
        $this->_fields['SellerPositiveFeedbackRating']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerPositiveFeedbackRating is set.
     *
     * @return true if SellerPositiveFeedbackRating is set.
     */
    public function isSetSellerPositiveFeedbackRating()
    {
        return !is_null($this->_fields['SellerPositiveFeedbackRating']['FieldValue']);
    }
    /**
     * Set the value of SellerPositiveFeedbackRating, return this.
     *
     * @param float $SellerPositiveFeedbackRating
     * @return $this
     */
    public function withSellerPositiveFeedbackRating($SellerPositiveFeedbackRating)
    {
        $this->setSellerPositiveFeedbackRating($SellerPositiveFeedbackRating);
        return $this;
    }
    /**
     * Get the value of the FeedbackCount property.
     *
     * @return long FeedbackCount.
     */
    public function getFeedbackCount()
    {
        return $this->_fields['FeedbackCount']['FieldValue'];
    }
    /**
     * Set the value of the FeedbackCount property.
     *
     * @param int feedbackCount
     * @return $this 
     */
    public function setFeedbackCount($value)
    {
        $this->_fields['FeedbackCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeedbackCount is set.
     *
     * @return true if FeedbackCount is set.
     */
    public function isSetFeedbackCount()
    {
        return !is_null($this->_fields['FeedbackCount']['FieldValue']);
    }
    /**
     * Set the value of FeedbackCount, return this.
     *
     * @param int $FeedbackCount
     * @return $this
     */
    public function withFeedbackCount($FeedbackCount)
    {
        $this->setFeedbackCount($FeedbackCount);
        return $this;
    }
}