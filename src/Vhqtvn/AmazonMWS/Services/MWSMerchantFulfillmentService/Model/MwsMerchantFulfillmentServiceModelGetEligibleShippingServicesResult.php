<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelGetEligibleShippingServicesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShippingServiceList: array</li>
 * <li>TemporarilyUnavailableCarrierList: array</li>
 * <li>TermsAndConditionsNotAcceptedCarrierList: array</li>
 *
 * </ul>
 */
class MwsMerchantFulfillmentServiceModelGetEligibleShippingServicesResult extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShippingServiceList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingService::class), 'ListMemberName' => 'ShippingService'), 'TemporarilyUnavailableCarrierList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelTemporarilyUnavailableCarrier::class), 'ListMemberName' => 'TemporarilyUnavailableCarrier'), 'TermsAndConditionsNotAcceptedCarrierList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelTermsAndConditionsNotAcceptedCarrier::class), 'ListMemberName' => 'TermsAndConditionsNotAcceptedCarrier'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShippingServiceList property.
     *
     * @return List<ShippingService> ShippingServiceList.
     */
    public function getShippingServiceList()
    {
        if ($this->_fields['ShippingServiceList']['FieldValue'] == null) {
            $this->_fields['ShippingServiceList']['FieldValue'] = array();
        }
        return $this->_fields['ShippingServiceList']['FieldValue'];
    }
    /**
     * Set the value of the ShippingServiceList property.
     *
     * @param array shippingServiceList
     * @return $this 
     */
    public function setShippingServiceList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ShippingServiceList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ShippingServiceList.
     */
    public function unsetShippingServiceList()
    {
        $this->_fields['ShippingServiceList']['FieldValue'] = array();
    }
    /**
     * Check to see if ShippingServiceList is set.
     *
     * @return true if ShippingServiceList is set.
     */
    public function isSetShippingServiceList()
    {
        return !empty($this->_fields['ShippingServiceList']['FieldValue']);
    }
    /**
     * Add values for ShippingServiceList, return this.
     *
     * @param shippingServiceList
     *             New values to add.
     *
     * @return $this .
     */
    public function withShippingServiceList()
    {
        foreach (func_get_args() as $ShippingServiceList) {
            $this->_fields['ShippingServiceList']['FieldValue'][] = $ShippingServiceList;
        }
        return $this;
    }
    /**
     * Get the value of the TemporarilyUnavailableCarrierList property.
     *
     * @return List<TemporarilyUnavailableCarrier> TemporarilyUnavailableCarrierList.
     */
    public function getTemporarilyUnavailableCarrierList()
    {
        if ($this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] == null) {
            $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] = array();
        }
        return $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'];
    }
    /**
     * Set the value of the TemporarilyUnavailableCarrierList property.
     *
     * @param array temporarilyUnavailableCarrierList
     * @return $this 
     */
    public function setTemporarilyUnavailableCarrierList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear TemporarilyUnavailableCarrierList.
     */
    public function unsetTemporarilyUnavailableCarrierList()
    {
        $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'] = array();
    }
    /**
     * Check to see if TemporarilyUnavailableCarrierList is set.
     *
     * @return true if TemporarilyUnavailableCarrierList is set.
     */
    public function isSetTemporarilyUnavailableCarrierList()
    {
        return !empty($this->_fields['TemporarilyUnavailableCarrierList']['FieldValue']);
    }
    /**
     * Add values for TemporarilyUnavailableCarrierList, return this.
     *
     * @param temporarilyUnavailableCarrierList
     *             New values to add.
     *
     * @return $this .
     */
    public function withTemporarilyUnavailableCarrierList()
    {
        foreach (func_get_args() as $TemporarilyUnavailableCarrierList) {
            $this->_fields['TemporarilyUnavailableCarrierList']['FieldValue'][] = $TemporarilyUnavailableCarrierList;
        }
        return $this;
    }
    /**
     * Get the value of the TermsAndConditionsNotAcceptedCarrierList property.
     *
     * @return List<TermsAndConditionsNotAcceptedCarrier> TermsAndConditionsNotAcceptedCarrierList.
     */
    public function getTermsAndConditionsNotAcceptedCarrierList()
    {
        if ($this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] == null) {
            $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] = array();
        }
        return $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'];
    }
    /**
     * Set the value of the TermsAndConditionsNotAcceptedCarrierList property.
     *
     * @param array termsAndConditionsNotAcceptedCarrierList
     * @return $this 
     */
    public function setTermsAndConditionsNotAcceptedCarrierList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear TermsAndConditionsNotAcceptedCarrierList.
     */
    public function unsetTermsAndConditionsNotAcceptedCarrierList()
    {
        $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'] = array();
    }
    /**
     * Check to see if TermsAndConditionsNotAcceptedCarrierList is set.
     *
     * @return true if TermsAndConditionsNotAcceptedCarrierList is set.
     */
    public function isSetTermsAndConditionsNotAcceptedCarrierList()
    {
        return !empty($this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue']);
    }
    /**
     * Add values for TermsAndConditionsNotAcceptedCarrierList, return this.
     *
     * @param termsAndConditionsNotAcceptedCarrierList
     *             New values to add.
     *
     * @return $this .
     */
    public function withTermsAndConditionsNotAcceptedCarrierList()
    {
        foreach (func_get_args() as $TermsAndConditionsNotAcceptedCarrierList) {
            $this->_fields['TermsAndConditionsNotAcceptedCarrierList']['FieldValue'][] = $TermsAndConditionsNotAcceptedCarrierList;
        }
        return $this;
    }
}