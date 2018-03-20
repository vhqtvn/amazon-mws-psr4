<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCODSettings
 * 
 * @property	bool	$IsCODRequired
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$CODCharge
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$CODChargeTax
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$ShippingCharge
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency	$ShippingChargeTax
 */
class FbaOutboundServiceMwsModelCODSettings extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('IsCODRequired' => array('FieldValue' => null, 'FieldType' => 'bool'), 'CODCharge' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'CODChargeTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'ShippingCharge' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class), 'ShippingChargeTax' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Check the value of IsCODRequired.
     *
     * @return true if IsCODRequired is set to true.
     */
    public function isIsCODRequired()
    {
        return $this->_fields['IsCODRequired']['FieldValue'];
    }
    /**
     * Get the value of the IsCODRequired property.
     *
     * @return boolean IsCODRequired.
     */
    public function getIsCODRequired()
    {
        return $this->_fields['IsCODRequired']['FieldValue'];
    }
    /**
     * Set the value of the IsCODRequired property.
     *
     * @param bool isCODRequired
     * @return $this instance
     */
    public function setIsCODRequired($value)
    {
        $this->_fields['IsCODRequired']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsCODRequired is set.
     *
     * @return true if IsCODRequired is set.
     */
    public function isSetIsCODRequired()
    {
        return !is_null($this->_fields['IsCODRequired']['FieldValue']);
    }
    /**
     * Set the value of IsCODRequired, return this.
     *
     * @param bool $IsCODRequired
     * @return $this
     */
    public function withIsCODRequired($IsCODRequired)
    {
        $this->setIsCODRequired($IsCODRequired);
        return $this;
    }
    /**
     * Get the value of the CODCharge property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency CODCharge.
     */
    public function getCODCharge()
    {
        return $this->_fields['CODCharge']['FieldValue'];
    }
    /**
     * Set the value of the CODCharge property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency codCharge
     * @return $this instance
     */
    public function setCODCharge($value)
    {
        $this->_fields['CODCharge']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CODCharge is set.
     *
     * @return true if CODCharge is set.
     */
    public function isSetCODCharge()
    {
        return !is_null($this->_fields['CODCharge']['FieldValue']);
    }
    /**
     * Set the value of CODCharge, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $CODCharge
     * @return $this
     */
    public function withCODCharge($CODCharge)
    {
        $this->setCODCharge($CODCharge);
        return $this;
    }
    /**
     * Get the value of the CODChargeTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency CODChargeTax.
     */
    public function getCODChargeTax()
    {
        return $this->_fields['CODChargeTax']['FieldValue'];
    }
    /**
     * Set the value of the CODChargeTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency codChargeTax
     * @return $this instance
     */
    public function setCODChargeTax($value)
    {
        $this->_fields['CODChargeTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CODChargeTax is set.
     *
     * @return true if CODChargeTax is set.
     */
    public function isSetCODChargeTax()
    {
        return !is_null($this->_fields['CODChargeTax']['FieldValue']);
    }
    /**
     * Set the value of CODChargeTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $CODChargeTax
     * @return $this
     */
    public function withCODChargeTax($CODChargeTax)
    {
        $this->setCODChargeTax($CODChargeTax);
        return $this;
    }
    /**
     * Get the value of the ShippingCharge property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency ShippingCharge.
     */
    public function getShippingCharge()
    {
        return $this->_fields['ShippingCharge']['FieldValue'];
    }
    /**
     * Set the value of the ShippingCharge property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency shippingCharge
     * @return $this instance
     */
    public function setShippingCharge($value)
    {
        $this->_fields['ShippingCharge']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingCharge is set.
     *
     * @return true if ShippingCharge is set.
     */
    public function isSetShippingCharge()
    {
        return !is_null($this->_fields['ShippingCharge']['FieldValue']);
    }
    /**
     * Set the value of ShippingCharge, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $ShippingCharge
     * @return $this
     */
    public function withShippingCharge($ShippingCharge)
    {
        $this->setShippingCharge($ShippingCharge);
        return $this;
    }
    /**
     * Get the value of the ShippingChargeTax property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency ShippingChargeTax.
     */
    public function getShippingChargeTax()
    {
        return $this->_fields['ShippingChargeTax']['FieldValue'];
    }
    /**
     * Set the value of the ShippingChargeTax property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency shippingChargeTax
     * @return $this instance
     */
    public function setShippingChargeTax($value)
    {
        $this->_fields['ShippingChargeTax']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingChargeTax is set.
     *
     * @return true if ShippingChargeTax is set.
     */
    public function isSetShippingChargeTax()
    {
        return !is_null($this->_fields['ShippingChargeTax']['FieldValue']);
    }
    /**
     * Set the value of ShippingChargeTax, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCurrency $ShippingChargeTax
     * @return $this
     */
    public function withShippingChargeTax($ShippingChargeTax)
    {
        $this->setShippingChargeTax($ShippingChargeTax);
        return $this;
    }
}