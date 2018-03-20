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
     * @return \string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this instance
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
     * @param string $SellerSKU
     * @return $this
     */
    public function withSellerSKU($SellerSKU)
    {
        $this->setSellerSKU($SellerSKU);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return \string ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this instance
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
     * @param string $ASIN
     * @return $this
     */
    public function withASIN($ASIN)
    {
        $this->setASIN($ASIN);
        return $this;
    }
    /**
     * Get the value of the Condition property.
     *
     * @return \string Condition.
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }
    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @return $this instance
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
     * @param string $Condition
     * @return $this
     */
    public function withCondition($Condition)
    {
        $this->setCondition($Condition);
        return $this;
    }
    /**
     * Get the value of the Quantity property.
     *
     * @return \int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }
    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return $this instance
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
     * @param int $Quantity
     * @return $this
     */
    public function withQuantity($Quantity)
    {
        $this->setQuantity($Quantity);
        return $this;
    }
    /**
     * Get the value of the QuantityInCase property.
     *
     * @return \int QuantityInCase.
     */
    public function getQuantityInCase()
    {
        return $this->_fields['QuantityInCase']['FieldValue'];
    }
    /**
     * Set the value of the QuantityInCase property.
     *
     * @param int quantityInCase
     * @return $this instance
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
     * @param int $QuantityInCase
     * @return $this
     */
    public function withQuantityInCase($QuantityInCase)
    {
        $this->setQuantityInCase($QuantityInCase);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList $PrepDetailsList
     * @return $this
     */
    public function withPrepDetailsList($PrepDetailsList)
    {
        $this->setPrepDetailsList($PrepDetailsList);
        return $this;
    }
}