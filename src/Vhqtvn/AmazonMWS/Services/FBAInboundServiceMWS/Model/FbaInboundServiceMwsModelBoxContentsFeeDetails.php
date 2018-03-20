<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails
 * 
 * @property	int	$TotalUnits
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$FeePerUnit
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$TotalFee
 */
class FbaInboundServiceMwsModelBoxContentsFeeDetails extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TotalUnits' => array('FieldValue' => null, 'FieldType' => 'int'), 'FeePerUnit' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class), 'TotalFee' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the TotalUnits property.
     *
     * @return \int TotalUnits.
     */
    public function getTotalUnits()
    {
        return $this->_fields['TotalUnits']['FieldValue'];
    }
    /**
     * Set the value of the TotalUnits property.
     *
     * @param int totalUnits
     * @return $this instance
     */
    public function setTotalUnits($value)
    {
        $this->_fields['TotalUnits']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalUnits is set.
     *
     * @return true if TotalUnits is set.
     */
    public function isSetTotalUnits()
    {
        return !is_null($this->_fields['TotalUnits']['FieldValue']);
    }
    /**
     * Set the value of TotalUnits, return this.
     *
     * @param int $TotalUnits
     * @return $this
     */
    public function withTotalUnits($TotalUnits)
    {
        $this->setTotalUnits($TotalUnits);
        return $this;
    }
    /**
     * Get the value of the FeePerUnit property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount FeePerUnit.
     */
    public function getFeePerUnit()
    {
        return $this->_fields['FeePerUnit']['FieldValue'];
    }
    /**
     * Set the value of the FeePerUnit property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount feePerUnit
     * @return $this instance
     */
    public function setFeePerUnit($value)
    {
        $this->_fields['FeePerUnit']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeePerUnit is set.
     *
     * @return true if FeePerUnit is set.
     */
    public function isSetFeePerUnit()
    {
        return !is_null($this->_fields['FeePerUnit']['FieldValue']);
    }
    /**
     * Set the value of FeePerUnit, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount $FeePerUnit
     * @return $this
     */
    public function withFeePerUnit($FeePerUnit)
    {
        $this->setFeePerUnit($FeePerUnit);
        return $this;
    }
    /**
     * Get the value of the TotalFee property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount TotalFee.
     */
    public function getTotalFee()
    {
        return $this->_fields['TotalFee']['FieldValue'];
    }
    /**
     * Set the value of the TotalFee property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount totalFee
     * @return $this instance
     */
    public function setTotalFee($value)
    {
        $this->_fields['TotalFee']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalFee is set.
     *
     * @return true if TotalFee is set.
     */
    public function isSetTotalFee()
    {
        return !is_null($this->_fields['TotalFee']['FieldValue']);
    }
    /**
     * Set the value of TotalFee, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount $TotalFee
     * @return $this
     */
    public function withTotalFee($TotalFee)
    {
        $this->setTotalFee($TotalFee);
        return $this;
    }
}