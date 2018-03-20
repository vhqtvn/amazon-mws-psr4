<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementItem
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[]	$itemChargeList
 * @property	string	$productDescription
 * @property	string	$quantity
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
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] itemChargeList.
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] $itemChargeList_array,...
     * @return $this
     */
    public function withitemChargeList(...$itemChargeList_array)
    {
        foreach ($itemChargeList_array as $itemChargeList) {
            $this->_fields['itemChargeList']['FieldValue'][] = $itemChargeList;
        }
        return $this;
    }
    /**
     * Get the value of the productDescription property.
     *
     * @return \string productDescription.
     */
    public function getproductDescription()
    {
        return $this->_fields['productDescription']['FieldValue'];
    }
    /**
     * Set the value of the productDescription property.
     *
     * @param string productDescription
     * @return $this instance
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
     * @param string $productDescription
     * @return $this
     */
    public function withproductDescription($productDescription)
    {
        $this->setproductDescription($productDescription);
        return $this;
    }
    /**
     * Get the value of the quantity property.
     *
     * @return \string quantity.
     */
    public function getquantity()
    {
        return $this->_fields['quantity']['FieldValue'];
    }
    /**
     * Set the value of the quantity property.
     *
     * @param string quantity
     * @return $this instance
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
     * @param string $quantity
     * @return $this
     */
    public function withquantity($quantity)
    {
        $this->setquantity($quantity);
        return $this;
    }
}