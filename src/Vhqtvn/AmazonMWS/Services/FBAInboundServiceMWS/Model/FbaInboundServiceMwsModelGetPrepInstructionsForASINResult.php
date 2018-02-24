<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForASINResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructionsList	$ASINPrepInstructionsList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASINList	$InvalidASINList
 */
class FbaInboundServiceMwsModelGetPrepInstructionsForASINResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ASINPrepInstructionsList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructionsList::class), 'InvalidASINList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASINList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ASINPrepInstructionsList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructionsList ASINPrepInstructionsList.
     */
    public function getASINPrepInstructionsList()
    {
        return $this->_fields['ASINPrepInstructionsList']['FieldValue'];
    }
    /**
     * Set the value of the ASINPrepInstructionsList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelASINPrepInstructionsList asinPrepInstructionsList
     * @return $this 
     */
    public function setASINPrepInstructionsList($value)
    {
        $this->_fields['ASINPrepInstructionsList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASINPrepInstructionsList is set.
     *
     * @return true if ASINPrepInstructionsList is set.
     */
    public function isSetASINPrepInstructionsList()
    {
        return !is_null($this->_fields['ASINPrepInstructionsList']['FieldValue']);
    }
    /**
     * Set the value of ASINPrepInstructionsList, return this.
     *
     * @param asinPrepInstructionsList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASINPrepInstructionsList($value)
    {
        $this->setASINPrepInstructionsList($value);
        return $this;
    }
    /**
     * Get the value of the InvalidASINList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASINList InvalidASINList.
     */
    public function getInvalidASINList()
    {
        return $this->_fields['InvalidASINList']['FieldValue'];
    }
    /**
     * Set the value of the InvalidASINList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidASINList invalidASINList
     * @return $this 
     */
    public function setInvalidASINList($value)
    {
        $this->_fields['InvalidASINList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvalidASINList is set.
     *
     * @return true if InvalidASINList is set.
     */
    public function isSetInvalidASINList()
    {
        return !is_null($this->_fields['InvalidASINList']['FieldValue']);
    }
    /**
     * Set the value of InvalidASINList, return this.
     *
     * @param invalidASINList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInvalidASINList($value)
    {
        $this->setInvalidASINList($value);
        return $this;
    }
}