<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * Header
 *
 *
 * @prop	string	DocumentVersion	Must match pattern \d{1,2}\.\d{1,2}
 * @prop	string	MerchantIdentifier	max 50 characters
 * @prop	string	OverrideReleaseId	Must match pattern \d{1,4}\.\d{1,4}
 */
class MarketplaceWebServiceModelFBAFeedsHeader extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "DocumentVersion" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantIdentifier" => array('FieldValue' => null, 'FieldType' => 'string'),
            "OverrideReleaseId" => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the DocumentVersion property.
     * 
     * @return string DocumentVersion
     */
    public function getDocumentVersion()
    {
        return $this->_fields["DocumentVersion"]["FieldValue"];
    }
    /**
     * Sets the value of the DocumentVersion property.
     * 
     * @param string DocumentVersion Must match pattern \d{1,2}\.\d{1,2}
     * @return $this 
     */
    public function setDocumentVersion($value)
    {
        $this->_fields["DocumentVersion"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of DocumentVersion, return this.
     *
     * @param string $DocumentVersion Must match pattern \d{1,2}\.\d{1,2}
     * @return $this
     */
    public function withDocumentVersion($DocumentVersion)
    {
        $this->setDocumentVersion($DocumentVersion);
        return $this;
    }
    /**
     * Checks if DocumentVersion is set
     * 
     * @return bool true if DocumentVersion  is set
     */
    public function isSetDocumentVersion()
    {
        return !is_null($this->_fields["DocumentVersion"]["FieldValue"]);
    }
    /**
     * Gets the value of the MerchantIdentifier property.
     * 
     * @return string MerchantIdentifier
     */
    public function getMerchantIdentifier()
    {
        return $this->_fields["MerchantIdentifier"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantIdentifier property.
     * 
     * @param string MerchantIdentifier max 50 characters
     * @return $this 
     */
    public function setMerchantIdentifier($value)
    {
        $this->_fields["MerchantIdentifier"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantIdentifier, return this.
     *
     * @param string $MerchantIdentifier max 50 characters
     * @return $this
     */
    public function withMerchantIdentifier($MerchantIdentifier)
    {
        $this->setMerchantIdentifier($MerchantIdentifier);
        return $this;
    }
    /**
     * Checks if MerchantIdentifier is set
     * 
     * @return bool true if MerchantIdentifier  is set
     */
    public function isSetMerchantIdentifier()
    {
        return !is_null($this->_fields["MerchantIdentifier"]["FieldValue"]);
    }
    /**
     * Gets the value of the OverrideReleaseId property.
     * 
     * @return string OverrideReleaseId
     */
    public function getOverrideReleaseId()
    {
        return $this->_fields["OverrideReleaseId"]["FieldValue"];
    }
    /**
     * Sets the value of the OverrideReleaseId property.
     * 
     * @param string OverrideReleaseId Must match pattern \d{1,4}\.\d{1,4}
     * @return $this 
     */
    public function setOverrideReleaseId($value)
    {
        $this->_fields["OverrideReleaseId"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of OverrideReleaseId, return this.
     *
     * @param string $OverrideReleaseId Must match pattern \d{1,4}\.\d{1,4}
     * @return $this
     */
    public function withOverrideReleaseId($OverrideReleaseId)
    {
        $this->setOverrideReleaseId($OverrideReleaseId);
        return $this;
    }
    /**
     * Checks if OverrideReleaseId is set
     * 
     * @return bool true if OverrideReleaseId  is set
     */
    public function isSetOverrideReleaseId()
    {
        return !is_null($this->_fields["OverrideReleaseId"]["FieldValue"]);
    }
}
