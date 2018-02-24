<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupplyDetail
 * 
 * @property	int	$Quantity
 * @property	string	$SupplyType
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint	$EarliestAvailableToPick
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint	$LatestAvailableToPick
 */
class FbaInventoryServiceMwsModelInventorySupplyDetail extends FbaInventoryServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Quantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'SupplyType' => array('FieldValue' => null, 'FieldType' => 'string'), 'EarliestAvailableToPick' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint::class), 'LatestAvailableToPick' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Quantity property.
     *
     * @return Integer Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }
    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return $this 
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }
    /**
     * Get the value of the SupplyType property.
     *
     * @return String SupplyType.
     */
    public function getSupplyType()
    {
        return $this->_fields['SupplyType']['FieldValue'];
    }
    /**
     * Set the value of the SupplyType property.
     *
     * @param string supplyType
     * @return $this 
     */
    public function setSupplyType($value)
    {
        $this->_fields['SupplyType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SupplyType is set.
     *
     * @return true if SupplyType is set.
     */
    public function isSetSupplyType()
    {
        return !is_null($this->_fields['SupplyType']['FieldValue']);
    }
    /**
     * Set the value of SupplyType, return this.
     *
     * @param supplyType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSupplyType($value)
    {
        $this->setSupplyType($value);
        return $this;
    }
    /**
     * Get the value of the EarliestAvailableToPick property.
     *
     * @return Timepoint EarliestAvailableToPick.
     */
    public function getEarliestAvailableToPick()
    {
        return $this->_fields['EarliestAvailableToPick']['FieldValue'];
    }
    /**
     * Set the value of the EarliestAvailableToPick property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint earliestAvailableToPick
     * @return $this 
     */
    public function setEarliestAvailableToPick($value)
    {
        $this->_fields['EarliestAvailableToPick']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EarliestAvailableToPick is set.
     *
     * @return true if EarliestAvailableToPick is set.
     */
    public function isSetEarliestAvailableToPick()
    {
        return !is_null($this->_fields['EarliestAvailableToPick']['FieldValue']);
    }
    /**
     * Set the value of EarliestAvailableToPick, return this.
     *
     * @param earliestAvailableToPick
     *             The new value to set.
     *
     * @return $this .
     */
    public function withEarliestAvailableToPick($value)
    {
        $this->setEarliestAvailableToPick($value);
        return $this;
    }
    /**
     * Get the value of the LatestAvailableToPick property.
     *
     * @return Timepoint LatestAvailableToPick.
     */
    public function getLatestAvailableToPick()
    {
        return $this->_fields['LatestAvailableToPick']['FieldValue'];
    }
    /**
     * Set the value of the LatestAvailableToPick property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint latestAvailableToPick
     * @return $this 
     */
    public function setLatestAvailableToPick($value)
    {
        $this->_fields['LatestAvailableToPick']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LatestAvailableToPick is set.
     *
     * @return true if LatestAvailableToPick is set.
     */
    public function isSetLatestAvailableToPick()
    {
        return !is_null($this->_fields['LatestAvailableToPick']['FieldValue']);
    }
    /**
     * Set the value of LatestAvailableToPick, return this.
     *
     * @param latestAvailableToPick
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLatestAvailableToPick($value)
    {
        $this->setLatestAvailableToPick($value);
        return $this;
    }
}