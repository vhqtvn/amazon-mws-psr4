<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxCollection
 * 
 * Properties:
 * <ul>
 * 
 * <li>Model: string</li>
 * <li>ResponsibleParty: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrdersModelTaxCollection extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Model' => array('FieldValue' => null, 'FieldType' => 'string'), 'ResponsibleParty' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Model property.
     *
     * @return String Model.
     */
    public function getModel()
    {
        return $this->_fields['Model']['FieldValue'];
    }
    /**
     * Set the value of the Model property.
     *
     * @param string model
     * @return $this 
     */
    public function setModel($value)
    {
        $this->_fields['Model']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Model is set.
     *
     * @return true if Model is set.
     */
    public function isSetModel()
    {
        return !is_null($this->_fields['Model']['FieldValue']);
    }
    /**
     * Set the value of Model, return this.
     *
     * @param model
     *             The new value to set.
     *
     * @return $this .
     */
    public function withModel($value)
    {
        $this->setModel($value);
        return $this;
    }
    /**
     * Get the value of the ResponsibleParty property.
     *
     * @return String ResponsibleParty.
     */
    public function getResponsibleParty()
    {
        return $this->_fields['ResponsibleParty']['FieldValue'];
    }
    /**
     * Set the value of the ResponsibleParty property.
     *
     * @param string responsibleParty
     * @return $this 
     */
    public function setResponsibleParty($value)
    {
        $this->_fields['ResponsibleParty']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ResponsibleParty is set.
     *
     * @return true if ResponsibleParty is set.
     */
    public function isSetResponsibleParty()
    {
        return !is_null($this->_fields['ResponsibleParty']['FieldValue']);
    }
    /**
     * Set the value of ResponsibleParty, return this.
     *
     * @param responsibleParty
     *             The new value to set.
     *
     * @return $this .
     */
    public function withResponsibleParty($value)
    {
        $this->setResponsibleParty($value);
        return $this;
    }
}