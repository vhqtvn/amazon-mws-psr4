<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelImagingServicesFeeEvent
 * 
 * @property	string	$ImagingRequestBillingItemID
 * @property	string	$ASIN
 * @property	string	$PostedDate
 * @property	array	$FeeList
 */
class MwsFinancesServiceModelImagingServicesFeeEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ImagingRequestBillingItemID' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ImagingRequestBillingItemID property.
     *
     * @return String ImagingRequestBillingItemID.
     */
    public function getImagingRequestBillingItemID()
    {
        return $this->_fields['ImagingRequestBillingItemID']['FieldValue'];
    }
    /**
     * Set the value of the ImagingRequestBillingItemID property.
     *
     * @param string imagingRequestBillingItemID
     * @return $this 
     */
    public function setImagingRequestBillingItemID($value)
    {
        $this->_fields['ImagingRequestBillingItemID']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ImagingRequestBillingItemID is set.
     *
     * @return true if ImagingRequestBillingItemID is set.
     */
    public function isSetImagingRequestBillingItemID()
    {
        return !is_null($this->_fields['ImagingRequestBillingItemID']['FieldValue']);
    }
    /**
     * Set the value of ImagingRequestBillingItemID, return this.
     *
     * @param imagingRequestBillingItemID
     *             The new value to set.
     *
     * @return $this .
     */
    public function withImagingRequestBillingItemID($value)
    {
        $this->setImagingRequestBillingItemID($value);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
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
     * @param asin
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this 
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
        return !is_null($this->_fields['PostedDate']['FieldValue']);
    }
    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }
    /**
     * Get the value of the FeeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] FeeList.
     */
    public function getFeeList()
    {
        if ($this->_fields['FeeList']['FieldValue'] == null) {
            $this->_fields['FeeList']['FieldValue'] = array();
        }
        return $this->_fields['FeeList']['FieldValue'];
    }
    /**
     * Set the value of the FeeList property.
     *
     * @param array feeList
     * @return $this 
     */
    public function setFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FeeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FeeList.
     */
    public function unsetFeeList()
    {
        $this->_fields['FeeList']['FieldValue'] = array();
    }
    /**
     * Check to see if FeeList is set.
     *
     * @return true if FeeList is set.
     */
    public function isSetFeeList()
    {
        return !empty($this->_fields['FeeList']['FieldValue']);
    }
    /**
     * Add values for FeeList, return this.
     *
     * @param feeList
     *             New values to add.
     *
     * @return $this .
     */
    public function withFeeList()
    {
        foreach (func_get_args() as $FeeList) {
            $this->_fields['FeeList']['FieldValue'][] = $FeeList;
        }
        return $this;
    }
}