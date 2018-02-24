<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultResult
 * 
 */
class MarketplaceWebServiceModelGetFeedSubmissionResultResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionResultResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('ContentMd5' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    public function getContentMd5()
    {
        return $this->fields['ContentMd5']['FieldValue'];
    }
    public function setContentMd5($value)
    {
        $this->fields['ContentMd5']['FieldValue'] = $value;
    }
    public function isSetContentMd5()
    {
        return !is_null($this->fields['ContentMd5']['FieldValue']);
    }
    public function withContentMd5($value)
    {
        $this->setContentMd5($value);
        return $this;
    }
}