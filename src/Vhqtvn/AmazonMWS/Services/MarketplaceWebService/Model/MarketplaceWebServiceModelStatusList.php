<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList
 * 
 * @property	string	$Status
 */
class MarketplaceWebServiceModelStatusList extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Status: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Status' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Status .
     * 
     * @return array of string Status
     */
    public function getStatus()
    {
        return $this->fields['Status']['FieldValue'];
    }
    /**
     * Sets the value of the Status.
     * 
     * @param string or an array of string Status
     * @return $this 
     */
    public function setStatus($status)
    {
        if (!$this->isNumericArray($status)) {
            $status = array($status);
        }
        $this->fields['Status']['FieldValue'] = $status;
        return $this;
    }
    /**
     * Sets single or multiple values of Status list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withStatus($status1, $status2)</code>
     * 
     * @param string  $stringArgs one or more Status
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelStatusList  instance
     */
    public function withStatus($stringArgs)
    {
        foreach (func_get_args() as $status) {
            $this->fields['Status']['FieldValue'][] = $status;
        }
        return $this;
    }
    /**
     * Checks if Status list is non-empty
     * 
     * @return bool true if Status list is non-empty
     */
    public function isSetStatus()
    {
        return count($this->fields['Status']['FieldValue']) > 0;
    }
}