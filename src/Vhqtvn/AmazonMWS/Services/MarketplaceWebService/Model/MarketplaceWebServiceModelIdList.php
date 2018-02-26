<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList
 * 
 * @property	string	$Id
 */
class MarketplaceWebServiceModelIdList extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Id: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Id' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Id .
     * 
     * @return array of string Id
     */
    public function getId()
    {
        return $this->fields['Id']['FieldValue'];
    }
    /**
     * Sets the value of the Id.
     * 
     * @param string or an array of string Id
     * @return $this 
     */
    public function setId($id)
    {
        if (!$this->isNumericArray($id)) {
            $id = array($id);
        }
        $this->fields['Id']['FieldValue'] = $id;
        return $this;
    }
    /**
     * Add values for Id, return this.
     *
     * @param \ $Id_array,...
     * @return $this
     */
    public function withId($stringArgs, ...$Id_array)
    {
        foreach ($Id_array as $id) {
            $this->fields['Id']['FieldValue'][] = $id;
        }
        return $this;
    }
    /**
     * Checks if Id list is non-empty
     * 
     * @return bool true if Id list is non-empty
     */
    public function isSetId()
    {
        return count($this->fields['Id']['FieldValue']) > 0;
    }
}