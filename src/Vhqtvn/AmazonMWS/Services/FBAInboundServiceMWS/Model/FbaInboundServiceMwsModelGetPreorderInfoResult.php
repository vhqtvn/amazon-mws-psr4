<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPreorderInfoResult
 * 
 * @property	bool	$ShipmentContainsPreorderableItems
 * @property	bool	$ShipmentConfirmedForPreorder
 * @property	string	$NeedByDate
 * @property	string	$ConfirmedFulfillableDate
 */
class FbaInboundServiceMwsModelGetPreorderInfoResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentContainsPreorderableItems' => array('FieldValue' => null, 'FieldType' => 'bool'), 'ShipmentConfirmedForPreorder' => array('FieldValue' => null, 'FieldType' => 'bool'), 'NeedByDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'ConfirmedFulfillableDate' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Check the value of ShipmentContainsPreorderableItems.
     *
     * @return true if ShipmentContainsPreorderableItems is set to true.
     */
    public function isShipmentContainsPreorderableItems()
    {
        return !is_null($this->_fields['ShipmentContainsPreorderableItems']['FieldValue']) && $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }
    /**
     * Get the value of the ShipmentContainsPreorderableItems property.
     *
     * @return Boolean ShipmentContainsPreorderableItems.
     */
    public function getShipmentContainsPreorderableItems()
    {
        return $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentContainsPreorderableItems property.
     *
     * @param bool shipmentContainsPreorderableItems
     * @return $this 
     */
    public function setShipmentContainsPreorderableItems($value)
    {
        $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentContainsPreorderableItems is set.
     *
     * @return true if ShipmentContainsPreorderableItems is set.
     */
    public function isSetShipmentContainsPreorderableItems()
    {
        return !is_null($this->_fields['ShipmentContainsPreorderableItems']['FieldValue']);
    }
    /**
     * Set the value of ShipmentContainsPreorderableItems, return this.
     *
     * @param bool $ShipmentContainsPreorderableItems
     * @return $this
     */
    public function withShipmentContainsPreorderableItems($ShipmentContainsPreorderableItems)
    {
        $this->setShipmentContainsPreorderableItems($ShipmentContainsPreorderableItems);
        return $this;
    }
    /**
     * Check the value of ShipmentConfirmedForPreorder.
     *
     * @return true if ShipmentConfirmedForPreorder is set to true.
     */
    public function isShipmentConfirmedForPreorder()
    {
        return !is_null($this->_fields['ShipmentConfirmedForPreorder']['FieldValue']) && $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }
    /**
     * Get the value of the ShipmentConfirmedForPreorder property.
     *
     * @return Boolean ShipmentConfirmedForPreorder.
     */
    public function getShipmentConfirmedForPreorder()
    {
        return $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentConfirmedForPreorder property.
     *
     * @param bool shipmentConfirmedForPreorder
     * @return $this 
     */
    public function setShipmentConfirmedForPreorder($value)
    {
        $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentConfirmedForPreorder is set.
     *
     * @return true if ShipmentConfirmedForPreorder is set.
     */
    public function isSetShipmentConfirmedForPreorder()
    {
        return !is_null($this->_fields['ShipmentConfirmedForPreorder']['FieldValue']);
    }
    /**
     * Set the value of ShipmentConfirmedForPreorder, return this.
     *
     * @param bool $ShipmentConfirmedForPreorder
     * @return $this
     */
    public function withShipmentConfirmedForPreorder($ShipmentConfirmedForPreorder)
    {
        $this->setShipmentConfirmedForPreorder($ShipmentConfirmedForPreorder);
        return $this;
    }
    /**
     * Get the value of the NeedByDate property.
     *
     * @return String NeedByDate.
     */
    public function getNeedByDate()
    {
        return $this->_fields['NeedByDate']['FieldValue'];
    }
    /**
     * Set the value of the NeedByDate property.
     *
     * @param string needByDate
     * @return $this 
     */
    public function setNeedByDate($value)
    {
        $this->_fields['NeedByDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NeedByDate is set.
     *
     * @return true if NeedByDate is set.
     */
    public function isSetNeedByDate()
    {
        return !is_null($this->_fields['NeedByDate']['FieldValue']);
    }
    /**
     * Set the value of NeedByDate, return this.
     *
     * @param string $NeedByDate
     * @return $this
     */
    public function withNeedByDate($NeedByDate)
    {
        $this->setNeedByDate($NeedByDate);
        return $this;
    }
    /**
     * Get the value of the ConfirmedFulfillableDate property.
     *
     * @return String ConfirmedFulfillableDate.
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }
    /**
     * Set the value of the ConfirmedFulfillableDate property.
     *
     * @param string confirmedFulfillableDate
     * @return $this 
     */
    public function setConfirmedFulfillableDate($value)
    {
        $this->_fields['ConfirmedFulfillableDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConfirmedFulfillableDate is set.
     *
     * @return true if ConfirmedFulfillableDate is set.
     */
    public function isSetConfirmedFulfillableDate()
    {
        return !is_null($this->_fields['ConfirmedFulfillableDate']['FieldValue']);
    }
    /**
     * Set the value of ConfirmedFulfillableDate, return this.
     *
     * @param string $ConfirmedFulfillableDate
     * @return $this
     */
    public function withConfirmedFulfillableDate($ConfirmedFulfillableDate)
    {
        $this->setConfirmedFulfillableDate($ConfirmedFulfillableDate);
        return $this;
    }
}