<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * CartonContentsRequestCartonItem
 *
 *
 * @prop	string	SKU	1-40 characters
 * @prop	int	QuantityShipped	positive number
 * @prop	int	QuantityInCase	positive number
 * @prop	string	ExpirationDate	Date
 */
class MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonItem extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "SKU" => array('FieldValue' => null, 'FieldType' => 'string'),
            "QuantityShipped" => array('FieldValue' => null, 'FieldType' => 'int'),
            "QuantityInCase" => array('FieldValue' => null, 'FieldType' => 'int'),
            "ExpirationDate" => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Gets the value of the QuantityShipped property.
     * 
     * @return int QuantityShipped
     */
    public function getQuantityShipped()
    {
        return $this->_fields["QuantityShipped"]["FieldValue"];
    }
    /**
     * Sets the value of the QuantityShipped property.
     * 
     * @param int QuantityShipped positive number
     * @return $this 
     */
    public function setQuantityShipped($value)
    {
        $this->_fields["QuantityShipped"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param int $QuantityShipped positive number
     * @return $this
     */
    public function withQuantityShipped($QuantityShipped)
    {
        $this->setQuantityShipped($QuantityShipped);
        return $this;
    }
    /**
     * Checks if QuantityShipped is set
     * 
     * @return bool true if QuantityShipped  is set
     */
    public function isSetQuantityShipped()
    {
        return !is_null($this->_fields["QuantityShipped"]["FieldValue"]);
    }
    /**
     * Gets the value of the QuantityInCase property.
     * 
     * @return int QuantityInCase
     */
    public function getQuantityInCase()
    {
        return $this->_fields["QuantityInCase"]["FieldValue"];
    }
    /**
     * Sets the value of the QuantityInCase property.
     * 
     * @param int QuantityInCase positive number
     * @return $this 
     */
    public function setQuantityInCase($value)
    {
        $this->_fields["QuantityInCase"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of QuantityInCase, return this.
     *
     * @param int $QuantityInCase positive number
     * @return $this
     */
    public function withQuantityInCase($QuantityInCase)
    {
        $this->setQuantityInCase($QuantityInCase);
        return $this;
    }
    /**
     * Checks if QuantityInCase is set
     * 
     * @return bool true if QuantityInCase  is set
     */
    public function isSetQuantityInCase()
    {
        return !is_null($this->_fields["QuantityInCase"]["FieldValue"]);
    }
    /**
     * Gets the value of the ExpirationDate property.
     * 
     * @return string ExpirationDate
     */
    public function getExpirationDate()
    {
        return $this->_fields["ExpirationDate"]["FieldValue"];
    }
    /**
     * Sets the value of the ExpirationDate property.
     * 
     * @param string ExpirationDate Date
     * @return $this 
     */
    public function setExpirationDate($value)
    {
        $this->_fields["ExpirationDate"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of ExpirationDate, return this.
     *
     * @param string $ExpirationDate Date
     * @return $this
     */
    public function withExpirationDate($ExpirationDate)
    {
        $this->setExpirationDate($ExpirationDate);
        return $this;
    }
    /**
     * Checks if ExpirationDate is set
     * 
     * @return bool true if ExpirationDate  is set
     */
    public function isSetExpirationDate()
    {
        return !is_null($this->_fields["ExpirationDate"]["FieldValue"]);
    }
}
