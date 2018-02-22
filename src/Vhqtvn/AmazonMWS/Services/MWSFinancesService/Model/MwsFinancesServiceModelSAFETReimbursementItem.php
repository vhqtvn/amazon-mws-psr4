<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>itemChargeList: array</li>
 * <li>productDescription: string</li>
 * <li>quantity: string</li>
 *
 * </ul>
 */
class MwsFinancesServiceModelSAFETReimbursementItem extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('itemChargeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'), 'productDescription' => array('FieldValue' => null, 'FieldType' => 'string'), 'quantity' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the itemChargeList property.
     *
     * @return List<ChargeComponent> itemChargeList.
     */
    public function getitemChargeList()
    {
        if ($this->_fields['itemChargeList']['FieldValue'] == null) {
            $this->_fields['itemChargeList']['FieldValue'] = array();
        }
        return $this->_fields['itemChargeList']['FieldValue'];
    }
    /**
     * Set the value of the itemChargeList property.
     *
     * @param array itemChargeList
     * @return $this 
     */
    public function setitemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['itemChargeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear itemChargeList.
     */
    public function unsetitemChargeList()
    {
        $this->_fields['itemChargeList']['FieldValue'] = array();
    }
    /**
     * Check to see if itemChargeList is set.
     *
     * @return true if itemChargeList is set.
     */
    public function isSetitemChargeList()
    {
        return !empty($this->_fields['itemChargeList']['FieldValue']);
    }
    /**
     * Add values for itemChargeList, return this.
     *
     * @param itemChargeList
     *             New values to add.
     *
     * @return $this .
     */
    public function withitemChargeList()
    {
        foreach (func_get_args() as $itemChargeList) {
            $this->_fields['itemChargeList']['FieldValue'][] = $itemChargeList;
        }
        return $this;
    }
    /**
     * Get the value of the productDescription property.
     *
     * @return String productDescription.
     */
    public function getproductDescription()
    {
        return $this->_fields['productDescription']['FieldValue'];
    }
    /**
     * Set the value of the productDescription property.
     *
     * @param string productDescription
     * @return $this 
     */
    public function setproductDescription($value)
    {
        $this->_fields['productDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if productDescription is set.
     *
     * @return true if productDescription is set.
     */
    public function isSetproductDescription()
    {
        return !is_null($this->_fields['productDescription']['FieldValue']);
    }
    /**
     * Set the value of productDescription, return this.
     *
     * @param productDescription
     *             The new value to set.
     *
     * @return $this .
     */
    public function withproductDescription($value)
    {
        $this->setproductDescription($value);
        return $this;
    }
    /**
     * Get the value of the quantity property.
     *
     * @return String quantity.
     */
    public function getquantity()
    {
        return $this->_fields['quantity']['FieldValue'];
    }
    /**
     * Set the value of the quantity property.
     *
     * @param string quantity
     * @return $this 
     */
    public function setquantity($value)
    {
        $this->_fields['quantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if quantity is set.
     *
     * @return true if quantity is set.
     */
    public function isSetquantity()
    {
        return !is_null($this->_fields['quantity']['FieldValue']);
    }
    /**
     * Set the value of quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withquantity($value)
    {
        $this->setquantity($value);
        return $this;
    }
}