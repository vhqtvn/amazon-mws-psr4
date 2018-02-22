<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelRelationshipList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Any: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProductsModelRelationshipList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Any' => array('FieldValue' => array(), 'FieldType' => array('object')));
        parent::__construct($data);
    }
    /**
     * Get the value of the Any property.
     *
     * @return List<Object> Any.
     */
    public function getAny()
    {
        if ($this->_fields['Any']['FieldValue'] == null) {
            $this->_fields['Any']['FieldValue'] = array();
        }
        return $this->_fields['Any']['FieldValue'];
    }
    /**
     * Set the value of the Any property.
     *
     * @param array any
     * @return $this 
     */
    public function setAny($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Any']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Any.
     */
    public function unsetAny()
    {
        $this->_fields['Any']['FieldValue'] = array();
    }
    /**
     * Check to see if Any is set.
     *
     * @return true if Any is set.
     */
    public function isSetAny()
    {
        return !empty($this->_fields['Any']['FieldValue']);
    }
    /**
     * Add values for Any, return this.
     *
     * @param any
     *             New values to add.
     *
     * @return $this .
     */
    public function withAny()
    {
        foreach (func_get_args() as $Any) {
            $this->_fields['Any']['FieldValue'][] = $Any;
        }
        return $this;
    }
}