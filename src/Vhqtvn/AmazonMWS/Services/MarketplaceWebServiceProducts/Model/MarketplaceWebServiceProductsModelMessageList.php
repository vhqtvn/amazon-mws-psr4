<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessageList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessage[]	$Message
 */
class MarketplaceWebServiceProductsModelMessageList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Message' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessage::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the Message property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessage[] Message.
     */
    public function getMessage()
    {
        if ($this->_fields['Message']['FieldValue'] == null) {
            $this->_fields['Message']['FieldValue'] = array();
        }
        return $this->_fields['Message']['FieldValue'];
    }
    /**
     * Set the value of the Message property.
     *
     * @param array message
     * @return $this instance
     */
    public function setMessage($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Message']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Message.
     */
    public function unsetMessage()
    {
        $this->_fields['Message']['FieldValue'] = array();
    }
    /**
     * Check to see if Message is set.
     *
     * @return true if Message is set.
     */
    public function isSetMessage()
    {
        return !empty($this->_fields['Message']['FieldValue']);
    }
    /**
     * Add values for Message, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMessage[] $Message_array,...
     * @return $this
     */
    public function withMessage(...$Message_array)
    {
        foreach ($Message_array as $Message) {
            $this->_fields['Message']['FieldValue'][] = $Message;
        }
        return $this;
    }
}