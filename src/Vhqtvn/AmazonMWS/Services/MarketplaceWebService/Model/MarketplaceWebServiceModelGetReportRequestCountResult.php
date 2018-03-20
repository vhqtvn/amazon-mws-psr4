<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCountResult
 * 
 * @property	int	$Count
 */
class MarketplaceWebServiceModelGetReportRequestCountResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportRequestCountResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Count: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('Count' => array('FieldValue' => null, 'FieldType' => 'int'));
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
}