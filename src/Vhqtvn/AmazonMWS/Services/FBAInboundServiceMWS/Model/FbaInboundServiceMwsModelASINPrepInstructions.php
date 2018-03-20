<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructions
 * 
 * @property	string	$ASIN
 * @property	string	$BarcodeInstruction
 * @property	string	$PrepGuidance
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepInstructionList	$PrepInstructionList
 */
class FbaInboundServiceMwsModelASINPrepInstructions extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'BarcodeInstruction' => array('FieldValue' => null, 'FieldType' => 'string'), 'PrepGuidance' => array('FieldValue' => null, 'FieldType' => 'string'), 'PrepInstructionList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepInstructionList::class));
        parent::__construct($data);
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
     * Get the value of the BarcodeInstruction property.
     *
     * @return \string BarcodeInstruction.
     */
    public function getBarcodeInstruction()
    {
        return $this->_fields['BarcodeInstruction']['FieldValue'];
    }
    /**
     * Set the value of the BarcodeInstruction property.
     *
     * @param string barcodeInstruction
     * @return $this instance
     */
    public function setBarcodeInstruction($value)
    {
        $this->_fields['BarcodeInstruction']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BarcodeInstruction is set.
     *
     * @return true if BarcodeInstruction is set.
     */
    public function isSetBarcodeInstruction()
    {
        return !is_null($this->_fields['BarcodeInstruction']['FieldValue']);
    }
    /**
     * Set the value of BarcodeInstruction, return this.
     *
     * @param string $BarcodeInstruction
     * @return $this
     */
    public function withBarcodeInstruction($BarcodeInstruction)
    {
        $this->setBarcodeInstruction($BarcodeInstruction);
        return $this;
    }
    /**
     * Get the value of the PrepGuidance property.
     *
     * @return \string PrepGuidance.
     */
    public function getPrepGuidance()
    {
        return $this->_fields['PrepGuidance']['FieldValue'];
    }
    /**
     * Set the value of the PrepGuidance property.
     *
     * @param string prepGuidance
     * @return $this instance
     */
    public function setPrepGuidance($value)
    {
        $this->_fields['PrepGuidance']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PrepGuidance is set.
     *
     * @return true if PrepGuidance is set.
     */
    public function isSetPrepGuidance()
    {
        return !is_null($this->_fields['PrepGuidance']['FieldValue']);
    }
    /**
     * Set the value of PrepGuidance, return this.
     *
     * @param string $PrepGuidance
     * @return $this
     */
    public function withPrepGuidance($PrepGuidance)
    {
        $this->setPrepGuidance($PrepGuidance);
        return $this;
    }
    /**
     * Get the value of the PrepInstructionList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepInstructionList PrepInstructionList.
     */
    public function getPrepInstructionList()
    {
        return $this->_fields['PrepInstructionList']['FieldValue'];
    }
    /**
     * Set the value of the PrepInstructionList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepInstructionList prepInstructionList
     * @return $this instance
     */
    public function setPrepInstructionList($value)
    {
        $this->_fields['PrepInstructionList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PrepInstructionList is set.
     *
     * @return true if PrepInstructionList is set.
     */
    public function isSetPrepInstructionList()
    {
        return !is_null($this->_fields['PrepInstructionList']['FieldValue']);
    }
    /**
     * Set the value of PrepInstructionList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepInstructionList $PrepInstructionList
     * @return $this
     */
    public function withPrepInstructionList($PrepInstructionList)
    {
        $this->setPrepInstructionList($PrepInstructionList);
        return $this;
    }
}