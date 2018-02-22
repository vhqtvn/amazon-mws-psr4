<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdListType
 * 
 * Properties:
 * <ul>
 * 
 * <li>Id: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelIdListType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Id' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Get the value of the Id property.
     *
     * @return List<String> Id.
     */
    public function getId()
    {
        if ($this->_fields['Id']['FieldValue'] == null) {
            $this->_fields['Id']['FieldValue'] = array();
        }
        return $this->_fields['Id']['FieldValue'];
    }
    /**
     * Set the value of the Id property.
     *
     * @param array id
     * @return $this 
     */
    public function setId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Id']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Id.
     */
    public function unsetId()
    {
        $this->_fields['Id']['FieldValue'] = array();
    }
    /**
     * Check to see if Id is set.
     *
     * @return true if Id is set.
     */
    public function isSetId()
    {
        return !empty($this->_fields['Id']['FieldValue']);
    }
    /**
     * Add values for Id, return this.
     *
     * @param id
     *             New values to add.
     *
     * @return $this .
     */
    public function withId()
    {
        foreach (func_get_args() as $Id) {
            $this->_fields['Id']['FieldValue'][] = $Id;
        }
        return $this;
    }
}