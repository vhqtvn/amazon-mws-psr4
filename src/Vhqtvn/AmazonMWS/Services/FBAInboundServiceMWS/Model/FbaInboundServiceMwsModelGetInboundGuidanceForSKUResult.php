<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetInboundGuidanceForSKUResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidanceList	$SKUInboundGuidanceList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList	$InvalidSKUList
 */
class FbaInboundServiceMwsModelGetInboundGuidanceForSKUResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SKUInboundGuidanceList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidanceList::class), 'InvalidSKUList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SKUInboundGuidanceList property.
     *
     * @return SKUInboundGuidanceList SKUInboundGuidanceList.
     */
    public function getSKUInboundGuidanceList()
    {
        return $this->_fields['SKUInboundGuidanceList']['FieldValue'];
    }
    /**
     * Set the value of the SKUInboundGuidanceList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidanceList skuInboundGuidanceList
     * @return $this 
     */
    public function setSKUInboundGuidanceList($value)
    {
        $this->_fields['SKUInboundGuidanceList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SKUInboundGuidanceList is set.
     *
     * @return true if SKUInboundGuidanceList is set.
     */
    public function isSetSKUInboundGuidanceList()
    {
        return !is_null($this->_fields['SKUInboundGuidanceList']['FieldValue']);
    }
    /**
     * Set the value of SKUInboundGuidanceList, return this.
     *
     * @param skuInboundGuidanceList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSKUInboundGuidanceList($value)
    {
        $this->setSKUInboundGuidanceList($value);
        return $this;
    }
    /**
     * Get the value of the InvalidSKUList property.
     *
     * @return InvalidSKUList InvalidSKUList.
     */
    public function getInvalidSKUList()
    {
        return $this->_fields['InvalidSKUList']['FieldValue'];
    }
    /**
     * Set the value of the InvalidSKUList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInvalidSKUList invalidSKUList
     * @return $this 
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
     * @param invalidSKUList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInvalidSKUList($value)
    {
        $this->setInvalidSKUList($value);
        return $this;
    }
}