<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKU
 * 
 * @property	string	$SellerSKU
 * @property	string	$ErrorReason
 */
class FbaInboundServiceMwsModelInvalidSKU extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'ErrorReason' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the ErrorReason property.
     *
     * @return \string ErrorReason.
     */
    public function getErrorReason()
    {
        return $this->_fields['ErrorReason']['FieldValue'];
    }
    /**
     * Set the value of the ErrorReason property.
     *
     * @param string errorReason
     * @return $this instance
     */
    public function setErrorReason($value)
    {
        $this->_fields['ErrorReason']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ErrorReason is set.
     *
     * @return true if ErrorReason is set.
     */
    public function isSetErrorReason()
    {
        return !is_null($this->_fields['ErrorReason']['FieldValue']);
    }
    /**
     * Set the value of ErrorReason, return this.
     *
     * @param string $ErrorReason
     * @return $this
     */
    public function withErrorReason($ErrorReason)
    {
        $this->setErrorReason($ErrorReason);
        return $this;
    }
}