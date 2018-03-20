<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelContentType;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceException;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList	$MarketplaceIdList
 * @property	string	$FeedContent
 * @property	string	$FeedType
 * @property	bool	$PurgeAndReplace
 */
class MarketplaceWebServiceModelSubmitFeedRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelSubmitFeedRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MarketplaceIdList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList</li>
     * <li>FeedContent: string</li>
     * <li>FeedType: string</li>
     * <li>PurgeAndReplace: bool</li>
     *
     * </ul>
     */
    private static $DEFAULT_CONTENT_TYPE;
    public function __construct($data = null)
    {
        self::$DEFAULT_CONTENT_TYPE = new MarketplaceWebServiceModelContentType(array('ContentType' => 'application/octet-stream'));
        // Here we're setting the content-type field directly to the object, but beware the actual
        // method of construction from associative arrays from the client interface would do something like:
        // $parameters = array ('ContentType' => array('ContentType' => 'application/octet-stream'));
        $this->_fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class), 'FeedContent' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeedType' => array('FieldValue' => null, 'FieldType' => 'string'), 'PurgeAndReplace' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ContentMd5' => array('FieldValue' => null, 'FieldType' => 'string'), 'ContentType' => array('FieldValue' => self::$DEFAULT_CONTENT_TYPE, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelContentType::class));
        parent::__construct($data);
        if (!is_null($this->_fields['ContentType']['FieldValue'])) {
            $this->verifySupportedContentType($this->_fields['ContentType']['FieldValue']);
        }
    }
    private function verifySupportedContentType($supplied)
    {
        if (!($supplied == self::$DEFAULT_CONTENT_TYPE)) {
            throw new MarketplaceWebServiceException(array('Message' => "Unsupported ContentType " . $supplied->getContentType() . " ContentType must be " . self::$DEFAULT_CONTENT_TYPE->getContentType()));
        }
    }
    /**
     * Gets the value of the content type
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelContentType instance
     */
    public function getContentType()
    {
        return $this->_fields['ContentType']['FieldValue'];
    }
    public function setContentType($value)
    {
        $this->verifySupportedContentType($value);
        $this->_fields['ContentType']['FieldValue'] = $value;
        return $this;
    }
    public function isSetContentType()
    {
        return !is_null($this->_fields['ContentType']['FieldValue']);
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
     * @return $this instance
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
     * @return $this instance
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
     * @return $this instance
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
     * Gets the value of the MarketplaceIdList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList MarketplaceIdList
     */
    public function getMarketplaceIdList()
    {
        return $this->_fields['MarketplaceIdList']['FieldValue'];
    }
    /**
     * Sets the value of the MarketplaceIdList.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList MarketplaceIdList
     * @return void
     */
    public function setMarketplaceIdList($value)
    {
        $marketplaceIdList = new MarketplaceWebServiceModelIdList();
        $marketplaceIdList->setId($value['Id']);
        $this->_fields['MarketplaceIdList']['FieldValue'] = $marketplaceIdList;
        return;
    }
    /**
     * Set the value of MarketplaceIdList, return this.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList $MarketplaceIdList
     * @return $this
     */
    public function withMarketplaceIdList($MarketplaceIdList)
    {
        $this->setMarketplaceIdList($MarketplaceIdList);
        return $this;
    }
    /**
     * Checks if MarketplaceIdList  is set
     * 
     * @return bool true if MarketplaceIdList property is set
     */
    public function isSetMarketplaceIdList()
    {
        return !is_null($this->_fields['MarketplaceIdList']['FieldValue']);
    }
    /**
     * Gets the value of the FeedContent property.
     * 
     * @return string FeedContent
     */
    public function getFeedContent()
    {
        return $this->_fields['FeedContent']['FieldValue'];
    }
    /**
     * Sets the value of the FeedContent property.
     * 
     * @param string FeedContent
     * @return $this instance
     */
    public function setFeedContent($value)
    {
        $this->_fields['FeedContent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of FeedContent, return this.
     *
     * @param string $FeedContent
     * @return $this
     */
    public function withFeedContent($FeedContent)
    {
        $this->setFeedContent($FeedContent);
        return $this;
    }
    /**
     * Checks if FeedContent is set
     * 
     * @return bool true if FeedContent  is set
     */
    public function isSetFeedContent()
    {
        return !is_null($this->_fields['FeedContent']['FieldValue']);
    }
    /**
     * Gets the value of the FeedType property.
     * 
     * @return string FeedType
     */
    public function getFeedType()
    {
        return $this->_fields['FeedType']['FieldValue'];
    }
    /**
     * Sets the value of the FeedType property.
     * 
     * @param string FeedType
     * @return $this instance
     */
    public function setFeedType($value)
    {
        $this->_fields['FeedType']['FieldValue'] = $value;
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
        return !is_null($this->_fields['FeedType']['FieldValue']);
    }
    /**
     * Gets the value of the PurgeAndReplace property.
     * 
     * @return bool PurgeAndReplace
     */
    public function getPurgeAndReplace()
    {
        return $this->_fields['PurgeAndReplace']['FieldValue'];
    }
    /**
     * Sets the value of the PurgeAndReplace property.
     * 
     * @param bool PurgeAndReplace
     * @return $this instance
     */
    public function setPurgeAndReplace($value)
    {
        $this->_fields['PurgeAndReplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of PurgeAndReplace, return this.
     *
     * @param bool $PurgeAndReplace
     * @return $this
     */
    public function withPurgeAndReplace($PurgeAndReplace)
    {
        $this->setPurgeAndReplace($PurgeAndReplace);
        return $this;
    }
    /**
     * Checks if PurgeAndReplace is set
     * 
     * @return bool true if PurgeAndReplace  is set
     */
    public function isSetPurgeAndReplace()
    {
        return !is_null($this->_fields['PurgeAndReplace']['FieldValue']);
    }
    /**
     * Gets the value of the ContentMd5 property.
     * 
     * @return bool ContentMd5
     */
    public function getContentMd5()
    {
        return $this->_fields['ContentMd5']['FieldValue'];
    }
    /**
     * Sets the value of the ContentMd5 property.
     * 
     * @param bool ContentMd5
     * @return $this instance
     */
    public function setContentMd5($value)
    {
        $this->_fields['ContentMd5']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ContentMd5, return this.
     *
     * @param bool $ContentMd5
     * @return $this
     */
    public function withContentMd5($ContentMd5)
    {
        $this->setContentMd5($ContentMd5);
        return $this;
    }
    /**
     * Checks if ContentMd5 is set
     * 
     * @return bool true if ContentMd5  is set
     */
    public function isSetContentMd5()
    {
        return !is_null($this->_fields['ContentMd5']['FieldValue']);
    }
}