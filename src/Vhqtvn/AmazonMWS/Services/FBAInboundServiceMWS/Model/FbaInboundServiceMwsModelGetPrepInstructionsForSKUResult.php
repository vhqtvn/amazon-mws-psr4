<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetPrepInstructionsForSKUResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructionsList	$SKUPrepInstructionsList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList	$InvalidSKUList
 */
class FbaInboundServiceMwsModelGetPrepInstructionsForSKUResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SKUPrepInstructionsList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructionsList::class), 'InvalidSKUList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SKUPrepInstructionsList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructionsList SKUPrepInstructionsList.
     */
    public function getSKUPrepInstructionsList()
    {
        return $this->_fields['SKUPrepInstructionsList']['FieldValue'];
    }
    /**
     * Set the value of the SKUPrepInstructionsList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructionsList skuPrepInstructionsList
     * @return $this instance
     */
    public function setSKUPrepInstructionsList($value)
    {
        $this->_fields['SKUPrepInstructionsList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SKUPrepInstructionsList is set.
     *
     * @return true if SKUPrepInstructionsList is set.
     */
    public function isSetSKUPrepInstructionsList()
    {
        return !is_null($this->_fields['SKUPrepInstructionsList']['FieldValue']);
    }
    /**
     * Set the value of SKUPrepInstructionsList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUPrepInstructionsList $SKUPrepInstructionsList
     * @return $this
     */
    public function withSKUPrepInstructionsList($SKUPrepInstructionsList)
    {
        $this->setSKUPrepInstructionsList($SKUPrepInstructionsList);
        return $this;
    }
    /**
     * Get the value of the InvalidSKUList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList InvalidSKUList.
     */
    public function getInvalidSKUList()
    {
        return $this->_fields['InvalidSKUList']['FieldValue'];
    }
    /**
     * Set the value of the InvalidSKUList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList invalidSKUList
     * @return $this instance
     */
    public function setInvalidSKUList($value)
    {
        $this->_fields['InvalidSKUList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvalidSKUList is set.
     *
     * @return true if InvalidSKUList is set.
     */
    public function isSetInvalidSKUList()
    {
        return !is_null($this->_fields['InvalidSKUList']['FieldValue']);
    }
    /**
     * Set the value of InvalidSKUList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList $InvalidSKUList
     * @return $this
     */
    public function withInvalidSKUList($InvalidSKUList)
    {
        $this->setInvalidSKUList($InvalidSKUList);
        return $this;
    }
}