<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanRequestItem
 * 
 * @property	string	$SellerSKU
 * @property	string	$ASIN
 * @property	string	$Condition
 * @property	int	$Quantity
 * @property	int	$QuantityInCase
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList	$PrepDetailsList
 */
class FbaInboundServiceMwsModelInboundShipmentPlanRequestItem extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'Condition' => array('FieldValue' => null, 'FieldType' => 'string'), 'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'QuantityInCase' => array('FieldValue' => null, 'FieldType' => 'int'), 'PrepDetailsList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this 
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }
    /**
     * Get the value of the Condition property.
     *
     * @return String Condition.
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }
    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @return $this 
     */
    public function setCondition($value)
    {
        $this->_fields['Condition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Condition is set.
     *
     * @return true if Condition is set.
     */
    public function isSetCondition()
    {
        return !is_null($this->_fields['Condition']['FieldValue']);
    }
    /**
     * Set the value of Condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCondition($value)
    {
        $this->setCondition($value);
        return $this;
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
     * Get the value of the QuantityInCase property.
     *
     * @return Integer QuantityInCase.
     */
    public function getQuantityInCase()
    {
        return $this->_fields['QuantityInCase']['FieldValue'];
    }
    /**
     * Set the value of the QuantityInCase property.
     *
     * @param int quantityInCase
     * @return $this 
     */
    public function setQuantityInCase($value)
    {
        $this->_fields['QuantityInCase']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityInCase is set.
     *
     * @return true if QuantityInCase is set.
     */
    public function isSetQuantityInCase()
    {
        return !is_null($this->_fields['QuantityInCase']['FieldValue']);
    }
    /**
     * Set the value of QuantityInCase, return this.
     *
     * @param quantityInCase
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantityInCase($value)
    {
        $this->setQuantityInCase($value);
        return $this;
    }
    /**
     * Get the value of the PrepDetailsList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList PrepDetailsList.
     */
    public function getPrepDetailsList()
    {
        return $this->_fields['PrepDetailsList']['FieldValue'];
    }
    /**
     * Set the value of the PrepDetailsList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList prepDetailsList
     * @return $this 
     */
    public function setPrepDetailsList($value)
    {
        $this->_fields['PrepDetailsList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PrepDetailsList is set.
     *
     * @return true if PrepDetailsList is set.
     */
    public function isSetPrepDetailsList()
    {
        return !is_null($this->_fields['PrepDetailsList']['FieldValue']);
    }
    /**
     * Set the value of PrepDetailsList, return this.
     *
     * @param prepDetailsList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPrepDetailsList($value)
    {
        $this->setPrepDetailsList($value);
        return $this;
    }
}