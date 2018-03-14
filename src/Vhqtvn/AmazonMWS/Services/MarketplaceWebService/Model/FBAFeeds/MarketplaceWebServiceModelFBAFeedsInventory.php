<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * Inventory
 *
 *
 * @prop	string	SKU	1-40 characters
 * @prop	string	FulfillmentCenterID	
 * @prop	boolean	Available	
 * @prop	int	Quantity	non-negative number
 * @prop	string	Lookup	one of MarketplaceWebServiceModelFBAFeedsInventoryLookupEnum::K_*
 * @prop	string	RestockDate	Date
 * @prop	int	FulfillmentLatency	positive number
 * @prop	string	SwitchFulfillmentTo	one of MarketplaceWebServiceModelFBAFeedsInventorySwitchFulfillmentToEnum::K_*
 */
class MarketplaceWebServiceModelFBAFeedsInventory extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "SKU" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentCenterID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Available" => array('FieldValue' => null, 'FieldType' => 'boolean'),
            "Quantity" => array('FieldValue' => null, 'FieldType' => 'int'),
            "Lookup" => array('FieldValue' => null, 'FieldType' => 'string'),
            "RestockDate" => array('FieldValue' => null, 'FieldType' => 'string'),
            "FulfillmentLatency" => array('FieldValue' => null, 'FieldType' => 'int'),
            "SwitchFulfillmentTo" => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the SKU property.
     * 
     * @return string SKU
     */
    public function getSKU()
    {
        return $this->_fields["SKU"]["FieldValue"];
    }
    /**
     * Sets the value of the SKU property.
     * 
     * @param string SKU 1-40 characters
     * @return $this 
     */
    public function setSKU($value)
    {
        $this->_fields["SKU"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of SKU, return this.
     *
     * @param string $SKU 1-40 characters
     * @return $this
     */
    public function withSKU($SKU)
    {
        $this->setSKU($SKU);
        return $this;
    }
    /**
     * Checks if SKU is set
     * 
     * @return bool true if SKU  is set
     */
    public function isSetSKU()
    {
        return !is_null($this->_fields["SKU"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentCenterID property.
     * 
     * @return string FulfillmentCenterID
     */
    public function getFulfillmentCenterID()
    {
        return $this->_fields["FulfillmentCenterID"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentCenterID property.
     * 
     * @param string FulfillmentCenterID 
     * @return $this 
     */
    public function setFulfillmentCenterID($value)
    {
        $this->_fields["FulfillmentCenterID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of FulfillmentCenterID, return this.
     *
     * @param string $FulfillmentCenterID 
     * @return $this
     */
    public function withFulfillmentCenterID($FulfillmentCenterID)
    {
        $this->setFulfillmentCenterID($FulfillmentCenterID);
        return $this;
    }
    /**
     * Checks if FulfillmentCenterID is set
     * 
     * @return bool true if FulfillmentCenterID  is set
     */
    public function isSetFulfillmentCenterID()
    {
        return !is_null($this->_fields["FulfillmentCenterID"]["FieldValue"]);
    }
    /**
     * Gets the value of the Available property.
     * 
     * @return boolean Available
     */
    public function getAvailable()
    {
        return $this->_fields["Available"]["FieldValue"];
    }
    /**
     * Sets the value of the Available property.
     * 
     * @param boolean Available 
     * @return $this 
     */
    public function setAvailable($value)
    {
        $this->_fields["Available"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Available, return this.
     *
     * @param boolean $Available 
     * @return $this
     */
    public function withAvailable($Available)
    {
        $this->setAvailable($Available);
        return $this;
    }
    /**
     * Checks if Available is set
     * 
     * @return bool true if Available  is set
     */
    public function isSetAvailable()
    {
        return !is_null($this->_fields["Available"]["FieldValue"]);
    }
    /**
     * Gets the value of the Quantity property.
     * 
     * @return int Quantity
     */
    public function getQuantity()
    {
        return $this->_fields["Quantity"]["FieldValue"];
    }
    /**
     * Sets the value of the Quantity property.
     * 
     * @param int Quantity non-negative number
     * @return $this 
     */
    public function setQuantity($value)
    {
        $this->_fields["Quantity"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param int $Quantity non-negative number
     * @return $this
     */
    public function withQuantity($Quantity)
    {
        $this->setQuantity($Quantity);
        return $this;
    }
    /**
     * Checks if Quantity is set
     * 
     * @return bool true if Quantity  is set
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields["Quantity"]["FieldValue"]);
    }
    /**
     * Gets the value of the Lookup property.
     * 
     * @return string Lookup
     */
    public function getLookup()
    {
        return $this->_fields["Lookup"]["FieldValue"];
    }
    /**
     * Sets the value of the Lookup property.
     * 
     * @param string Lookup one of MarketplaceWebServiceModelFBAFeedsInventoryLookupEnum::K_*
     * @return $this 
     */
    public function setLookup($value)
    {
        $this->_fields["Lookup"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Lookup, return this.
     *
     * @param string $Lookup one of MarketplaceWebServiceModelFBAFeedsInventoryLookupEnum::K_*
     * @return $this
     */
    public function withLookup($Lookup)
    {
        $this->setLookup($Lookup);
        return $this;
    }
    /**
     * Checks if Lookup is set
     * 
     * @return bool true if Lookup  is set
     */
    public function isSetLookup()
    {
        return !is_null($this->_fields["Lookup"]["FieldValue"]);
    }
    /**
     * Gets the value of the RestockDate property.
     * 
     * @return string RestockDate
     */
    public function getRestockDate()
    {
        return $this->_fields["RestockDate"]["FieldValue"];
    }
    /**
     * Sets the value of the RestockDate property.
     * 
     * @param string RestockDate Date
     * @return $this 
     */
    public function setRestockDate($value)
    {
        $this->_fields["RestockDate"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of RestockDate, return this.
     *
     * @param string $RestockDate Date
     * @return $this
     */
    public function withRestockDate($RestockDate)
    {
        $this->setRestockDate($RestockDate);
        return $this;
    }
    /**
     * Checks if RestockDate is set
     * 
     * @return bool true if RestockDate  is set
     */
    public function isSetRestockDate()
    {
        return !is_null($this->_fields["RestockDate"]["FieldValue"]);
    }
    /**
     * Gets the value of the FulfillmentLatency property.
     * 
     * @return int FulfillmentLatency
     */
    public function getFulfillmentLatency()
    {
        return $this->_fields["FulfillmentLatency"]["FieldValue"];
    }
    /**
     * Sets the value of the FulfillmentLatency property.
     * 
     * @param int FulfillmentLatency positive number
     * @return $this 
     */
    public function setFulfillmentLatency($value)
    {
        $this->_fields["FulfillmentLatency"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of FulfillmentLatency, return this.
     *
     * @param int $FulfillmentLatency positive number
     * @return $this
     */
    public function withFulfillmentLatency($FulfillmentLatency)
    {
        $this->setFulfillmentLatency($FulfillmentLatency);
        return $this;
    }
    /**
     * Checks if FulfillmentLatency is set
     * 
     * @return bool true if FulfillmentLatency  is set
     */
    public function isSetFulfillmentLatency()
    {
        return !is_null($this->_fields["FulfillmentLatency"]["FieldValue"]);
    }
    /**
     * Gets the value of the SwitchFulfillmentTo property.
     * 
     * @return string SwitchFulfillmentTo
     */
    public function getSwitchFulfillmentTo()
    {
        return $this->_fields["SwitchFulfillmentTo"]["FieldValue"];
    }
    /**
     * Sets the value of the SwitchFulfillmentTo property.
     * 
     * @param string SwitchFulfillmentTo one of MarketplaceWebServiceModelFBAFeedsInventorySwitchFulfillmentToEnum::K_*
     * @return $this 
     */
    public function setSwitchFulfillmentTo($value)
    {
        $this->_fields["SwitchFulfillmentTo"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of SwitchFulfillmentTo, return this.
     *
     * @param string $SwitchFulfillmentTo one of MarketplaceWebServiceModelFBAFeedsInventorySwitchFulfillmentToEnum::K_*
     * @return $this
     */
    public function withSwitchFulfillmentTo($SwitchFulfillmentTo)
    {
        $this->setSwitchFulfillmentTo($SwitchFulfillmentTo);
        return $this;
    }
    /**
     * Checks if SwitchFulfillmentTo is set
     * 
     * @return bool true if SwitchFulfillmentTo  is set
     */
    public function isSetSwitchFulfillmentTo()
    {
        return !is_null($this->_fields["SwitchFulfillmentTo"]["FieldValue"]);
    }
}
