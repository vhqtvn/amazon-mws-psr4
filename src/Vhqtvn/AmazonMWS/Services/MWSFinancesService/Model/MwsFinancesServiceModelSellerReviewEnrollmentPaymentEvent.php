<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerReviewEnrollmentPaymentEvent
 * 
 * @property	string	$PostedDate
 * @property	string	$EnrollmentId
 * @property	string	$ParentASIN
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent	$FeeComponent
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent	$ChargeComponent
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$TotalAmount
 */
class MwsFinancesServiceModelSellerReviewEnrollmentPaymentEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'EnrollmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ParentASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeComponent' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ChargeComponent' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'TotalAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
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
     * @param string $PostedDate
     * @return $this
     */
    public function withPostedDate($PostedDate)
    {
        $this->setPostedDate($PostedDate);
        return $this;
    }
    /**
     * Get the value of the EnrollmentId property.
     *
     * @return String EnrollmentId.
     */
    public function getEnrollmentId()
    {
        return $this->_fields['EnrollmentId']['FieldValue'];
    }
    /**
     * Set the value of the EnrollmentId property.
     *
     * @param string enrollmentId
     * @return $this 
     */
    public function setEnrollmentId($value)
    {
        $this->_fields['EnrollmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EnrollmentId is set.
     *
     * @return true if EnrollmentId is set.
     */
    public function isSetEnrollmentId()
    {
        return !is_null($this->_fields['EnrollmentId']['FieldValue']);
    }
    /**
     * Set the value of EnrollmentId, return this.
     *
     * @param string $EnrollmentId
     * @return $this
     */
    public function withEnrollmentId($EnrollmentId)
    {
        $this->setEnrollmentId($EnrollmentId);
        return $this;
    }
    /**
     * Get the value of the ParentASIN property.
     *
     * @return String ParentASIN.
     */
    public function getParentASIN()
    {
        return $this->_fields['ParentASIN']['FieldValue'];
    }
    /**
     * Set the value of the ParentASIN property.
     *
     * @param string parentASIN
     * @return $this 
     */
    public function setParentASIN($value)
    {
        $this->_fields['ParentASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ParentASIN is set.
     *
     * @return true if ParentASIN is set.
     */
    public function isSetParentASIN()
    {
        return !is_null($this->_fields['ParentASIN']['FieldValue']);
    }
    /**
     * Set the value of ParentASIN, return this.
     *
     * @param string $ParentASIN
     * @return $this
     */
    public function withParentASIN($ParentASIN)
    {
        $this->setParentASIN($ParentASIN);
        return $this;
    }
    /**
     * Get the value of the FeeComponent property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent FeeComponent.
     */
    public function getFeeComponent()
    {
        return $this->_fields['FeeComponent']['FieldValue'];
    }
    /**
     * Set the value of the FeeComponent property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent feeComponent
     * @return $this 
     */
    public function setFeeComponent($value)
    {
        $this->_fields['FeeComponent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeComponent is set.
     *
     * @return true if FeeComponent is set.
     */
    public function isSetFeeComponent()
    {
        return !is_null($this->_fields['FeeComponent']['FieldValue']);
    }
    /**
     * Set the value of FeeComponent, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent $FeeComponent
     * @return $this
     */
    public function withFeeComponent($FeeComponent)
    {
        $this->setFeeComponent($FeeComponent);
        return $this;
    }
    /**
     * Get the value of the ChargeComponent property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent ChargeComponent.
     */
    public function getChargeComponent()
    {
        return $this->_fields['ChargeComponent']['FieldValue'];
    }
    /**
     * Set the value of the ChargeComponent property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent chargeComponent
     * @return $this 
     */
    public function setChargeComponent($value)
    {
        $this->_fields['ChargeComponent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ChargeComponent is set.
     *
     * @return true if ChargeComponent is set.
     */
    public function isSetChargeComponent()
    {
        return !is_null($this->_fields['ChargeComponent']['FieldValue']);
    }
    /**
     * Set the value of ChargeComponent, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent $ChargeComponent
     * @return $this
     */
    public function withChargeComponent($ChargeComponent)
    {
        $this->setChargeComponent($ChargeComponent);
        return $this;
    }
    /**
     * Get the value of the TotalAmount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency TotalAmount.
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }
    /**
     * Set the value of the TotalAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency totalAmount
     * @return $this 
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set.
     */
    public function isSetTotalAmount()
    {
        return !is_null($this->_fields['TotalAmount']['FieldValue']);
    }
    /**
     * Set the value of TotalAmount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $TotalAmount
     * @return $this
     */
    public function withTotalAmount($TotalAmount)
    {
        $this->setTotalAmount($TotalAmount);
        return $this;
    }
}