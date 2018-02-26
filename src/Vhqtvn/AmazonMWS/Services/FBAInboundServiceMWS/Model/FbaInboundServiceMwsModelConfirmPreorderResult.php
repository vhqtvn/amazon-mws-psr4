<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelConfirmPreorderResult
 * 
 * @property	string	$ConfirmedNeedByDate
 * @property	string	$ConfirmedFulfillableDate
 */
class FbaInboundServiceMwsModelConfirmPreorderResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ConfirmedNeedByDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'ConfirmedFulfillableDate' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ConfirmedNeedByDate property.
     *
     * @return String ConfirmedNeedByDate.
     */
    public function getConfirmedNeedByDate()
    {
        return $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }
    /**
     * Set the value of the ConfirmedNeedByDate property.
     *
     * @param string confirmedNeedByDate
     * @return $this 
     */
    public function setConfirmedNeedByDate($value)
    {
        $this->_fields['ConfirmedNeedByDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConfirmedNeedByDate is set.
     *
     * @return true if ConfirmedNeedByDate is set.
     */
    public function isSetConfirmedNeedByDate()
    {
        return !is_null($this->_fields['ConfirmedNeedByDate']['FieldValue']);
    }
    /**
     * Set the value of ConfirmedNeedByDate, return this.
     *
     * @param string $ConfirmedNeedByDate
     * @return $this
     */
    public function withConfirmedNeedByDate($ConfirmedNeedByDate)
    {
        $this->setConfirmedNeedByDate($ConfirmedNeedByDate);
        return $this;
    }
    /**
     * Get the value of the ConfirmedFulfillableDate property.
     *
     * @return String ConfirmedFulfillableDate.
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }
    /**
     * Set the value of the ConfirmedFulfillableDate property.
     *
     * @param string confirmedFulfillableDate
     * @return $this 
     */
    public function setConfirmedFulfillableDate($value)
    {
        $this->_fields['ConfirmedFulfillableDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ConfirmedFulfillableDate is set.
     *
     * @return true if ConfirmedFulfillableDate is set.
     */
    public function isSetConfirmedFulfillableDate()
    {
        return !is_null($this->_fields['ConfirmedFulfillableDate']['FieldValue']);
    }
    /**
     * Set the value of ConfirmedFulfillableDate, return this.
     *
     * @param string $ConfirmedFulfillableDate
     * @return $this
     */
    public function withConfirmedFulfillableDate($ConfirmedFulfillableDate)
    {
        $this->setConfirmedFulfillableDate($ConfirmedFulfillableDate);
        return $this;
    }
}