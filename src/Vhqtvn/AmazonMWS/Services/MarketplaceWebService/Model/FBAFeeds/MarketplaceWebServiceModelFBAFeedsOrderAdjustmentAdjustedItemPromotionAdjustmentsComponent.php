<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderAdjustmentAdjustedItemPromotionAdjustmentsComponent
 *
 *
 * @prop	enum	Type	
 * @prop	float	Amount	Adjustment Currency Amount
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponent extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "Type" => array('FieldValue' => null, 'FieldType' => 'enum'),
            "Amount" => array('FieldValue' => null, 'FieldType' => 'float'),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Type property.
     * 
     * @return enum Type
     */
    public function getType()
    {
        return $this->_fields["Type"]["FieldValue"];
    }
    /**
     * Sets the value of the Type property.
     * 
     * @param enum Type 
     * @return $this 
     */
    public function setType($value)
    {
        $this->_fields["Type"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Type, return this.
     *
     * @param enum $Type 
     * @return $this
     */
    public function withType($Type)
    {
        $this->setType($Type);
        return $this;
    }
    /**
     * Checks if Type is set
     * 
     * @return bool true if Type  is set
     */
    public function isSetType()
    {
        return !is_null($this->_fields["Type"]["FieldValue"]);
    }
    /**
     * Gets the value of the Amount property.
     * 
     * @return float Amount
     */
    public function getAmount()
    {
        return $this->_fields["Amount"]["FieldValue"];
    }
    /**
     * Sets the value of the Amount property.
     * 
     * @param float Amount Adjustment Currency Amount
     * @return $this 
     */
    public function setAmount($value)
    {
        $this->_fields["Amount"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Amount, return this.
     *
     * @param float $Amount Adjustment Currency Amount
     * @return $this
     */
    public function withAmount($Amount)
    {
        $this->setAmount($Amount);
        return $this;
    }
    /**
     * Checks if Amount is set
     * 
     * @return bool true if Amount  is set
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields["Amount"]["FieldValue"]);
    }
}
