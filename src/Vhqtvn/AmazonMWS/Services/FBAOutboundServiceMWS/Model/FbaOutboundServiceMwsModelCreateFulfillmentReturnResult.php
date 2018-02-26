<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelCreateFulfillmentReturnResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList	$ReturnItemList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidReturnItemList	$InvalidReturnItemList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList	$ReturnAuthorizationList
 */
class FbaOutboundServiceMwsModelCreateFulfillmentReturnResult extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ReturnItemList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList::class), 'InvalidReturnItemList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidReturnItemList::class), 'ReturnAuthorizationList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ReturnItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList ReturnItemList.
     */
    public function getReturnItemList()
    {
        return $this->_fields['ReturnItemList']['FieldValue'];
    }
    /**
     * Set the value of the ReturnItemList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList returnItemList
     * @return $this 
     */
    public function setReturnItemList($value)
    {
        $this->_fields['ReturnItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnItemList is set.
     *
     * @return true if ReturnItemList is set.
     */
    public function isSetReturnItemList()
    {
        return !is_null($this->_fields['ReturnItemList']['FieldValue']);
    }
    /**
     * Set the value of ReturnItemList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnItemList $ReturnItemList
     * @return $this
     */
    public function withReturnItemList($ReturnItemList)
    {
        $this->setReturnItemList($ReturnItemList);
        return $this;
    }
    /**
     * Get the value of the InvalidReturnItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidReturnItemList InvalidReturnItemList.
     */
    public function getInvalidReturnItemList()
    {
        return $this->_fields['InvalidReturnItemList']['FieldValue'];
    }
    /**
     * Set the value of the InvalidReturnItemList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidReturnItemList invalidReturnItemList
     * @return $this 
     */
    public function setInvalidReturnItemList($value)
    {
        $this->_fields['InvalidReturnItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InvalidReturnItemList is set.
     *
     * @return true if InvalidReturnItemList is set.
     */
    public function isSetInvalidReturnItemList()
    {
        return !is_null($this->_fields['InvalidReturnItemList']['FieldValue']);
    }
    /**
     * Set the value of InvalidReturnItemList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelInvalidReturnItemList $InvalidReturnItemList
     * @return $this
     */
    public function withInvalidReturnItemList($InvalidReturnItemList)
    {
        $this->setInvalidReturnItemList($InvalidReturnItemList);
        return $this;
    }
    /**
     * Get the value of the ReturnAuthorizationList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList ReturnAuthorizationList.
     */
    public function getReturnAuthorizationList()
    {
        return $this->_fields['ReturnAuthorizationList']['FieldValue'];
    }
    /**
     * Set the value of the ReturnAuthorizationList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList returnAuthorizationList
     * @return $this 
     */
    public function setReturnAuthorizationList($value)
    {
        $this->_fields['ReturnAuthorizationList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReturnAuthorizationList is set.
     *
     * @return true if ReturnAuthorizationList is set.
     */
    public function isSetReturnAuthorizationList()
    {
        return !is_null($this->_fields['ReturnAuthorizationList']['FieldValue']);
    }
    /**
     * Set the value of ReturnAuthorizationList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelReturnAuthorizationList $ReturnAuthorizationList
     * @return $this
     */
    public function withReturnAuthorizationList($ReturnAuthorizationList)
    {
        $this->setReturnAuthorizationList($ReturnAuthorizationList);
        return $this;
    }
}