<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFinancialEvents
 * 
 * @property	array	$ShipmentEventList
 * @property	array	$RefundEventList
 * @property	array	$GuaranteeClaimEventList
 * @property	array	$ChargebackEventList
 * @property	array	$PayWithAmazonEventList
 * @property	array	$ServiceProviderCreditEventList
 * @property	array	$RetrochargeEventList
 * @property	array	$RentalTransactionEventList
 * @property	array	$PerformanceBondRefundEventList
 * @property	array	$ProductAdsPaymentEventList
 * @property	array	$ServiceFeeEventList
 * @property	array	$SellerDealPaymentEventList
 * @property	array	$DebtRecoveryEventList
 * @property	array	$LoanServicingEventList
 * @property	array	$AdjustmentEventList
 * @property	array	$SAFETReimbursementEventList
 * @property	array	$SellerReviewEnrollmentPaymentEventList
 * @property	array	$FBALiquidationEventList
 * @property	array	$CouponPaymentEventList
 * @property	array	$ImagingServicesFeeEventList
 */
class MwsFinancesServiceModelFinancialEvents extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent::class), 'ListMemberName' => 'ShipmentEvent'), 'RefundEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent::class), 'ListMemberName' => 'ShipmentEvent'), 'GuaranteeClaimEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent::class), 'ListMemberName' => 'ShipmentEvent'), 'ChargebackEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent::class), 'ListMemberName' => 'ShipmentEvent'), 'PayWithAmazonEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPayWithAmazonEvent::class), 'ListMemberName' => 'PayWithAmazonEvent'), 'ServiceProviderCreditEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSolutionProviderCreditEvent::class), 'ListMemberName' => 'SolutionProviderCreditEvent'), 'RetrochargeEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRetrochargeEvent::class), 'ListMemberName' => 'RetrochargeEvent'), 'RentalTransactionEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRentalTransactionEvent::class), 'ListMemberName' => 'RentalTransactionEvent'), 'PerformanceBondRefundEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPerformanceBondRefundEvent::class), 'ListMemberName' => 'PerformanceBondRefundEvent'), 'ProductAdsPaymentEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelProductAdsPaymentEvent::class), 'ListMemberName' => 'ProductAdsPaymentEvent'), 'ServiceFeeEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelServiceFeeEvent::class), 'ListMemberName' => 'ServiceFeeEvent'), 'SellerDealPaymentEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerDealPaymentEvent::class), 'ListMemberName' => 'SellerDealPaymentEvent'), 'DebtRecoveryEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryEvent::class), 'ListMemberName' => 'DebtRecoveryEvent'), 'LoanServicingEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelLoanServicingEvent::class), 'ListMemberName' => 'LoanServicingEvent'), 'AdjustmentEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelAdjustmentEvent::class), 'ListMemberName' => 'AdjustmentEvent'), 'SAFETReimbursementEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementEvent::class), 'ListMemberName' => 'SAFETReimbursementEvent'), 'SellerReviewEnrollmentPaymentEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerReviewEnrollmentPaymentEvent::class), 'ListMemberName' => 'SellerReviewEnrollmentPaymentEvent'), 'FBALiquidationEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFBALiquidationEvent::class), 'ListMemberName' => 'FBALiquidationEvent'), 'CouponPaymentEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCouponPaymentEvent::class), 'ListMemberName' => 'CouponPaymentEvent'), 'ImagingServicesFeeEventList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelImagingServicesFeeEvent::class), 'ListMemberName' => 'ImagingServicesFeeEvent'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] ShipmentEventList.
     */
    public function getShipmentEventList()
    {
        if ($this->_fields['ShipmentEventList']['FieldValue'] == null) {
            $this->_fields['ShipmentEventList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentEventList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentEventList property.
     *
     * @param array shipmentEventList
     * @return $this 
     */
    public function setShipmentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ShipmentEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ShipmentEventList.
     */
    public function unsetShipmentEventList()
    {
        $this->_fields['ShipmentEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if ShipmentEventList is set.
     *
     * @return true if ShipmentEventList is set.
     */
    public function isSetShipmentEventList()
    {
        return !empty($this->_fields['ShipmentEventList']['FieldValue']);
    }
    /**
     * Add values for ShipmentEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] $ShipmentEventList_array,...
     * @return $this
     */
    public function withShipmentEventList(...$ShipmentEventList_array)
    {
        foreach ($ShipmentEventList_array as $ShipmentEventList) {
            $this->_fields['ShipmentEventList']['FieldValue'][] = $ShipmentEventList;
        }
        return $this;
    }
    /**
     * Get the value of the RefundEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] RefundEventList.
     */
    public function getRefundEventList()
    {
        if ($this->_fields['RefundEventList']['FieldValue'] == null) {
            $this->_fields['RefundEventList']['FieldValue'] = array();
        }
        return $this->_fields['RefundEventList']['FieldValue'];
    }
    /**
     * Set the value of the RefundEventList property.
     *
     * @param array refundEventList
     * @return $this 
     */
    public function setRefundEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['RefundEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear RefundEventList.
     */
    public function unsetRefundEventList()
    {
        $this->_fields['RefundEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if RefundEventList is set.
     *
     * @return true if RefundEventList is set.
     */
    public function isSetRefundEventList()
    {
        return !empty($this->_fields['RefundEventList']['FieldValue']);
    }
    /**
     * Add values for RefundEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] $RefundEventList_array,...
     * @return $this
     */
    public function withRefundEventList(...$RefundEventList_array)
    {
        foreach ($RefundEventList_array as $RefundEventList) {
            $this->_fields['RefundEventList']['FieldValue'][] = $RefundEventList;
        }
        return $this;
    }
    /**
     * Get the value of the GuaranteeClaimEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] GuaranteeClaimEventList.
     */
    public function getGuaranteeClaimEventList()
    {
        if ($this->_fields['GuaranteeClaimEventList']['FieldValue'] == null) {
            $this->_fields['GuaranteeClaimEventList']['FieldValue'] = array();
        }
        return $this->_fields['GuaranteeClaimEventList']['FieldValue'];
    }
    /**
     * Set the value of the GuaranteeClaimEventList property.
     *
     * @param array guaranteeClaimEventList
     * @return $this 
     */
    public function setGuaranteeClaimEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GuaranteeClaimEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear GuaranteeClaimEventList.
     */
    public function unsetGuaranteeClaimEventList()
    {
        $this->_fields['GuaranteeClaimEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if GuaranteeClaimEventList is set.
     *
     * @return true if GuaranteeClaimEventList is set.
     */
    public function isSetGuaranteeClaimEventList()
    {
        return !empty($this->_fields['GuaranteeClaimEventList']['FieldValue']);
    }
    /**
     * Add values for GuaranteeClaimEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] $GuaranteeClaimEventList_array,...
     * @return $this
     */
    public function withGuaranteeClaimEventList(...$GuaranteeClaimEventList_array)
    {
        foreach ($GuaranteeClaimEventList_array as $GuaranteeClaimEventList) {
            $this->_fields['GuaranteeClaimEventList']['FieldValue'][] = $GuaranteeClaimEventList;
        }
        return $this;
    }
    /**
     * Get the value of the ChargebackEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] ChargebackEventList.
     */
    public function getChargebackEventList()
    {
        if ($this->_fields['ChargebackEventList']['FieldValue'] == null) {
            $this->_fields['ChargebackEventList']['FieldValue'] = array();
        }
        return $this->_fields['ChargebackEventList']['FieldValue'];
    }
    /**
     * Set the value of the ChargebackEventList property.
     *
     * @param array chargebackEventList
     * @return $this 
     */
    public function setChargebackEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ChargebackEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ChargebackEventList.
     */
    public function unsetChargebackEventList()
    {
        $this->_fields['ChargebackEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if ChargebackEventList is set.
     *
     * @return true if ChargebackEventList is set.
     */
    public function isSetChargebackEventList()
    {
        return !empty($this->_fields['ChargebackEventList']['FieldValue']);
    }
    /**
     * Add values for ChargebackEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent[] $ChargebackEventList_array,...
     * @return $this
     */
    public function withChargebackEventList(...$ChargebackEventList_array)
    {
        foreach ($ChargebackEventList_array as $ChargebackEventList) {
            $this->_fields['ChargebackEventList']['FieldValue'][] = $ChargebackEventList;
        }
        return $this;
    }
    /**
     * Get the value of the PayWithAmazonEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPayWithAmazonEvent[] PayWithAmazonEventList.
     */
    public function getPayWithAmazonEventList()
    {
        if ($this->_fields['PayWithAmazonEventList']['FieldValue'] == null) {
            $this->_fields['PayWithAmazonEventList']['FieldValue'] = array();
        }
        return $this->_fields['PayWithAmazonEventList']['FieldValue'];
    }
    /**
     * Set the value of the PayWithAmazonEventList property.
     *
     * @param array payWithAmazonEventList
     * @return $this 
     */
    public function setPayWithAmazonEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PayWithAmazonEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PayWithAmazonEventList.
     */
    public function unsetPayWithAmazonEventList()
    {
        $this->_fields['PayWithAmazonEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if PayWithAmazonEventList is set.
     *
     * @return true if PayWithAmazonEventList is set.
     */
    public function isSetPayWithAmazonEventList()
    {
        return !empty($this->_fields['PayWithAmazonEventList']['FieldValue']);
    }
    /**
     * Add values for PayWithAmazonEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPayWithAmazonEvent[] $PayWithAmazonEventList_array,...
     * @return $this
     */
    public function withPayWithAmazonEventList(...$PayWithAmazonEventList_array)
    {
        foreach ($PayWithAmazonEventList_array as $PayWithAmazonEventList) {
            $this->_fields['PayWithAmazonEventList']['FieldValue'][] = $PayWithAmazonEventList;
        }
        return $this;
    }
    /**
     * Get the value of the ServiceProviderCreditEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSolutionProviderCreditEvent[] ServiceProviderCreditEventList.
     */
    public function getServiceProviderCreditEventList()
    {
        if ($this->_fields['ServiceProviderCreditEventList']['FieldValue'] == null) {
            $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = array();
        }
        return $this->_fields['ServiceProviderCreditEventList']['FieldValue'];
    }
    /**
     * Set the value of the ServiceProviderCreditEventList property.
     *
     * @param array serviceProviderCreditEventList
     * @return $this 
     */
    public function setServiceProviderCreditEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ServiceProviderCreditEventList.
     */
    public function unsetServiceProviderCreditEventList()
    {
        $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if ServiceProviderCreditEventList is set.
     *
     * @return true if ServiceProviderCreditEventList is set.
     */
    public function isSetServiceProviderCreditEventList()
    {
        return !empty($this->_fields['ServiceProviderCreditEventList']['FieldValue']);
    }
    /**
     * Add values for ServiceProviderCreditEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSolutionProviderCreditEvent[] $ServiceProviderCreditEventList_array,...
     * @return $this
     */
    public function withServiceProviderCreditEventList(...$ServiceProviderCreditEventList_array)
    {
        foreach ($ServiceProviderCreditEventList_array as $ServiceProviderCreditEventList) {
            $this->_fields['ServiceProviderCreditEventList']['FieldValue'][] = $ServiceProviderCreditEventList;
        }
        return $this;
    }
    /**
     * Get the value of the RetrochargeEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRetrochargeEvent[] RetrochargeEventList.
     */
    public function getRetrochargeEventList()
    {
        if ($this->_fields['RetrochargeEventList']['FieldValue'] == null) {
            $this->_fields['RetrochargeEventList']['FieldValue'] = array();
        }
        return $this->_fields['RetrochargeEventList']['FieldValue'];
    }
    /**
     * Set the value of the RetrochargeEventList property.
     *
     * @param array retrochargeEventList
     * @return $this 
     */
    public function setRetrochargeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['RetrochargeEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear RetrochargeEventList.
     */
    public function unsetRetrochargeEventList()
    {
        $this->_fields['RetrochargeEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if RetrochargeEventList is set.
     *
     * @return true if RetrochargeEventList is set.
     */
    public function isSetRetrochargeEventList()
    {
        return !empty($this->_fields['RetrochargeEventList']['FieldValue']);
    }
    /**
     * Add values for RetrochargeEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRetrochargeEvent[] $RetrochargeEventList_array,...
     * @return $this
     */
    public function withRetrochargeEventList(...$RetrochargeEventList_array)
    {
        foreach ($RetrochargeEventList_array as $RetrochargeEventList) {
            $this->_fields['RetrochargeEventList']['FieldValue'][] = $RetrochargeEventList;
        }
        return $this;
    }
    /**
     * Get the value of the RentalTransactionEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRentalTransactionEvent[] RentalTransactionEventList.
     */
    public function getRentalTransactionEventList()
    {
        if ($this->_fields['RentalTransactionEventList']['FieldValue'] == null) {
            $this->_fields['RentalTransactionEventList']['FieldValue'] = array();
        }
        return $this->_fields['RentalTransactionEventList']['FieldValue'];
    }
    /**
     * Set the value of the RentalTransactionEventList property.
     *
     * @param array rentalTransactionEventList
     * @return $this 
     */
    public function setRentalTransactionEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['RentalTransactionEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear RentalTransactionEventList.
     */
    public function unsetRentalTransactionEventList()
    {
        $this->_fields['RentalTransactionEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if RentalTransactionEventList is set.
     *
     * @return true if RentalTransactionEventList is set.
     */
    public function isSetRentalTransactionEventList()
    {
        return !empty($this->_fields['RentalTransactionEventList']['FieldValue']);
    }
    /**
     * Add values for RentalTransactionEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRentalTransactionEvent[] $RentalTransactionEventList_array,...
     * @return $this
     */
    public function withRentalTransactionEventList(...$RentalTransactionEventList_array)
    {
        foreach ($RentalTransactionEventList_array as $RentalTransactionEventList) {
            $this->_fields['RentalTransactionEventList']['FieldValue'][] = $RentalTransactionEventList;
        }
        return $this;
    }
    /**
     * Get the value of the PerformanceBondRefundEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPerformanceBondRefundEvent[] PerformanceBondRefundEventList.
     */
    public function getPerformanceBondRefundEventList()
    {
        if ($this->_fields['PerformanceBondRefundEventList']['FieldValue'] == null) {
            $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = array();
        }
        return $this->_fields['PerformanceBondRefundEventList']['FieldValue'];
    }
    /**
     * Set the value of the PerformanceBondRefundEventList property.
     *
     * @param array performanceBondRefundEventList
     * @return $this 
     */
    public function setPerformanceBondRefundEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PerformanceBondRefundEventList.
     */
    public function unsetPerformanceBondRefundEventList()
    {
        $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if PerformanceBondRefundEventList is set.
     *
     * @return true if PerformanceBondRefundEventList is set.
     */
    public function isSetPerformanceBondRefundEventList()
    {
        return !empty($this->_fields['PerformanceBondRefundEventList']['FieldValue']);
    }
    /**
     * Add values for PerformanceBondRefundEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPerformanceBondRefundEvent[] $PerformanceBondRefundEventList_array,...
     * @return $this
     */
    public function withPerformanceBondRefundEventList(...$PerformanceBondRefundEventList_array)
    {
        foreach ($PerformanceBondRefundEventList_array as $PerformanceBondRefundEventList) {
            $this->_fields['PerformanceBondRefundEventList']['FieldValue'][] = $PerformanceBondRefundEventList;
        }
        return $this;
    }
    /**
     * Get the value of the ProductAdsPaymentEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelProductAdsPaymentEvent[] ProductAdsPaymentEventList.
     */
    public function getProductAdsPaymentEventList()
    {
        if ($this->_fields['ProductAdsPaymentEventList']['FieldValue'] == null) {
            $this->_fields['ProductAdsPaymentEventList']['FieldValue'] = array();
        }
        return $this->_fields['ProductAdsPaymentEventList']['FieldValue'];
    }
    /**
     * Set the value of the ProductAdsPaymentEventList property.
     *
     * @param array productAdsPaymentEventList
     * @return $this 
     */
    public function setProductAdsPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ProductAdsPaymentEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ProductAdsPaymentEventList.
     */
    public function unsetProductAdsPaymentEventList()
    {
        $this->_fields['ProductAdsPaymentEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if ProductAdsPaymentEventList is set.
     *
     * @return true if ProductAdsPaymentEventList is set.
     */
    public function isSetProductAdsPaymentEventList()
    {
        return !empty($this->_fields['ProductAdsPaymentEventList']['FieldValue']);
    }
    /**
     * Add values for ProductAdsPaymentEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelProductAdsPaymentEvent[] $ProductAdsPaymentEventList_array,...
     * @return $this
     */
    public function withProductAdsPaymentEventList(...$ProductAdsPaymentEventList_array)
    {
        foreach ($ProductAdsPaymentEventList_array as $ProductAdsPaymentEventList) {
            $this->_fields['ProductAdsPaymentEventList']['FieldValue'][] = $ProductAdsPaymentEventList;
        }
        return $this;
    }
    /**
     * Get the value of the ServiceFeeEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelServiceFeeEvent[] ServiceFeeEventList.
     */
    public function getServiceFeeEventList()
    {
        if ($this->_fields['ServiceFeeEventList']['FieldValue'] == null) {
            $this->_fields['ServiceFeeEventList']['FieldValue'] = array();
        }
        return $this->_fields['ServiceFeeEventList']['FieldValue'];
    }
    /**
     * Set the value of the ServiceFeeEventList property.
     *
     * @param array serviceFeeEventList
     * @return $this 
     */
    public function setServiceFeeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ServiceFeeEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ServiceFeeEventList.
     */
    public function unsetServiceFeeEventList()
    {
        $this->_fields['ServiceFeeEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if ServiceFeeEventList is set.
     *
     * @return true if ServiceFeeEventList is set.
     */
    public function isSetServiceFeeEventList()
    {
        return !empty($this->_fields['ServiceFeeEventList']['FieldValue']);
    }
    /**
     * Add values for ServiceFeeEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelServiceFeeEvent[] $ServiceFeeEventList_array,...
     * @return $this
     */
    public function withServiceFeeEventList(...$ServiceFeeEventList_array)
    {
        foreach ($ServiceFeeEventList_array as $ServiceFeeEventList) {
            $this->_fields['ServiceFeeEventList']['FieldValue'][] = $ServiceFeeEventList;
        }
        return $this;
    }
    /**
     * Get the value of the SellerDealPaymentEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerDealPaymentEvent[] SellerDealPaymentEventList.
     */
    public function getSellerDealPaymentEventList()
    {
        if ($this->_fields['SellerDealPaymentEventList']['FieldValue'] == null) {
            $this->_fields['SellerDealPaymentEventList']['FieldValue'] = array();
        }
        return $this->_fields['SellerDealPaymentEventList']['FieldValue'];
    }
    /**
     * Set the value of the SellerDealPaymentEventList property.
     *
     * @param array sellerDealPaymentEventList
     * @return $this 
     */
    public function setSellerDealPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SellerDealPaymentEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SellerDealPaymentEventList.
     */
    public function unsetSellerDealPaymentEventList()
    {
        $this->_fields['SellerDealPaymentEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if SellerDealPaymentEventList is set.
     *
     * @return true if SellerDealPaymentEventList is set.
     */
    public function isSetSellerDealPaymentEventList()
    {
        return !empty($this->_fields['SellerDealPaymentEventList']['FieldValue']);
    }
    /**
     * Add values for SellerDealPaymentEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerDealPaymentEvent[] $SellerDealPaymentEventList_array,...
     * @return $this
     */
    public function withSellerDealPaymentEventList(...$SellerDealPaymentEventList_array)
    {
        foreach ($SellerDealPaymentEventList_array as $SellerDealPaymentEventList) {
            $this->_fields['SellerDealPaymentEventList']['FieldValue'][] = $SellerDealPaymentEventList;
        }
        return $this;
    }
    /**
     * Get the value of the DebtRecoveryEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryEvent[] DebtRecoveryEventList.
     */
    public function getDebtRecoveryEventList()
    {
        if ($this->_fields['DebtRecoveryEventList']['FieldValue'] == null) {
            $this->_fields['DebtRecoveryEventList']['FieldValue'] = array();
        }
        return $this->_fields['DebtRecoveryEventList']['FieldValue'];
    }
    /**
     * Set the value of the DebtRecoveryEventList property.
     *
     * @param array debtRecoveryEventList
     * @return $this 
     */
    public function setDebtRecoveryEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['DebtRecoveryEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear DebtRecoveryEventList.
     */
    public function unsetDebtRecoveryEventList()
    {
        $this->_fields['DebtRecoveryEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if DebtRecoveryEventList is set.
     *
     * @return true if DebtRecoveryEventList is set.
     */
    public function isSetDebtRecoveryEventList()
    {
        return !empty($this->_fields['DebtRecoveryEventList']['FieldValue']);
    }
    /**
     * Add values for DebtRecoveryEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDebtRecoveryEvent[] $DebtRecoveryEventList_array,...
     * @return $this
     */
    public function withDebtRecoveryEventList(...$DebtRecoveryEventList_array)
    {
        foreach ($DebtRecoveryEventList_array as $DebtRecoveryEventList) {
            $this->_fields['DebtRecoveryEventList']['FieldValue'][] = $DebtRecoveryEventList;
        }
        return $this;
    }
    /**
     * Get the value of the LoanServicingEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelLoanServicingEvent[] LoanServicingEventList.
     */
    public function getLoanServicingEventList()
    {
        if ($this->_fields['LoanServicingEventList']['FieldValue'] == null) {
            $this->_fields['LoanServicingEventList']['FieldValue'] = array();
        }
        return $this->_fields['LoanServicingEventList']['FieldValue'];
    }
    /**
     * Set the value of the LoanServicingEventList property.
     *
     * @param array loanServicingEventList
     * @return $this 
     */
    public function setLoanServicingEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['LoanServicingEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear LoanServicingEventList.
     */
    public function unsetLoanServicingEventList()
    {
        $this->_fields['LoanServicingEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if LoanServicingEventList is set.
     *
     * @return true if LoanServicingEventList is set.
     */
    public function isSetLoanServicingEventList()
    {
        return !empty($this->_fields['LoanServicingEventList']['FieldValue']);
    }
    /**
     * Add values for LoanServicingEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelLoanServicingEvent[] $LoanServicingEventList_array,...
     * @return $this
     */
    public function withLoanServicingEventList(...$LoanServicingEventList_array)
    {
        foreach ($LoanServicingEventList_array as $LoanServicingEventList) {
            $this->_fields['LoanServicingEventList']['FieldValue'][] = $LoanServicingEventList;
        }
        return $this;
    }
    /**
     * Get the value of the AdjustmentEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelAdjustmentEvent[] AdjustmentEventList.
     */
    public function getAdjustmentEventList()
    {
        if ($this->_fields['AdjustmentEventList']['FieldValue'] == null) {
            $this->_fields['AdjustmentEventList']['FieldValue'] = array();
        }
        return $this->_fields['AdjustmentEventList']['FieldValue'];
    }
    /**
     * Set the value of the AdjustmentEventList property.
     *
     * @param array adjustmentEventList
     * @return $this 
     */
    public function setAdjustmentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['AdjustmentEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear AdjustmentEventList.
     */
    public function unsetAdjustmentEventList()
    {
        $this->_fields['AdjustmentEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if AdjustmentEventList is set.
     *
     * @return true if AdjustmentEventList is set.
     */
    public function isSetAdjustmentEventList()
    {
        return !empty($this->_fields['AdjustmentEventList']['FieldValue']);
    }
    /**
     * Add values for AdjustmentEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelAdjustmentEvent[] $AdjustmentEventList_array,...
     * @return $this
     */
    public function withAdjustmentEventList(...$AdjustmentEventList_array)
    {
        foreach ($AdjustmentEventList_array as $AdjustmentEventList) {
            $this->_fields['AdjustmentEventList']['FieldValue'][] = $AdjustmentEventList;
        }
        return $this;
    }
    /**
     * Get the value of the SAFETReimbursementEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementEvent[] SAFETReimbursementEventList.
     */
    public function getSAFETReimbursementEventList()
    {
        if ($this->_fields['SAFETReimbursementEventList']['FieldValue'] == null) {
            $this->_fields['SAFETReimbursementEventList']['FieldValue'] = array();
        }
        return $this->_fields['SAFETReimbursementEventList']['FieldValue'];
    }
    /**
     * Set the value of the SAFETReimbursementEventList property.
     *
     * @param array safetReimbursementEventList
     * @return $this 
     */
    public function setSAFETReimbursementEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SAFETReimbursementEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SAFETReimbursementEventList.
     */
    public function unsetSAFETReimbursementEventList()
    {
        $this->_fields['SAFETReimbursementEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if SAFETReimbursementEventList is set.
     *
     * @return true if SAFETReimbursementEventList is set.
     */
    public function isSetSAFETReimbursementEventList()
    {
        return !empty($this->_fields['SAFETReimbursementEventList']['FieldValue']);
    }
    /**
     * Add values for SAFETReimbursementEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSAFETReimbursementEvent[] $SAFETReimbursementEventList_array,...
     * @return $this
     */
    public function withSAFETReimbursementEventList(...$SAFETReimbursementEventList_array)
    {
        foreach ($SAFETReimbursementEventList_array as $SAFETReimbursementEventList) {
            $this->_fields['SAFETReimbursementEventList']['FieldValue'][] = $SAFETReimbursementEventList;
        }
        return $this;
    }
    /**
     * Get the value of the SellerReviewEnrollmentPaymentEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerReviewEnrollmentPaymentEvent[] SellerReviewEnrollmentPaymentEventList.
     */
    public function getSellerReviewEnrollmentPaymentEventList()
    {
        if ($this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] == null) {
            $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] = array();
        }
        return $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'];
    }
    /**
     * Set the value of the SellerReviewEnrollmentPaymentEventList property.
     *
     * @param array sellerReviewEnrollmentPaymentEventList
     * @return $this 
     */
    public function setSellerReviewEnrollmentPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SellerReviewEnrollmentPaymentEventList.
     */
    public function unsetSellerReviewEnrollmentPaymentEventList()
    {
        $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if SellerReviewEnrollmentPaymentEventList is set.
     *
     * @return true if SellerReviewEnrollmentPaymentEventList is set.
     */
    public function isSetSellerReviewEnrollmentPaymentEventList()
    {
        return !empty($this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue']);
    }
    /**
     * Add values for SellerReviewEnrollmentPaymentEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSellerReviewEnrollmentPaymentEvent[] $SellerReviewEnrollmentPaymentEventList_array,...
     * @return $this
     */
    public function withSellerReviewEnrollmentPaymentEventList(...$SellerReviewEnrollmentPaymentEventList_array)
    {
        foreach ($SellerReviewEnrollmentPaymentEventList_array as $SellerReviewEnrollmentPaymentEventList) {
            $this->_fields['SellerReviewEnrollmentPaymentEventList']['FieldValue'][] = $SellerReviewEnrollmentPaymentEventList;
        }
        return $this;
    }
    /**
     * Get the value of the FBALiquidationEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFBALiquidationEvent[] FBALiquidationEventList.
     */
    public function getFBALiquidationEventList()
    {
        if ($this->_fields['FBALiquidationEventList']['FieldValue'] == null) {
            $this->_fields['FBALiquidationEventList']['FieldValue'] = array();
        }
        return $this->_fields['FBALiquidationEventList']['FieldValue'];
    }
    /**
     * Set the value of the FBALiquidationEventList property.
     *
     * @param array fbaLiquidationEventList
     * @return $this 
     */
    public function setFBALiquidationEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FBALiquidationEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FBALiquidationEventList.
     */
    public function unsetFBALiquidationEventList()
    {
        $this->_fields['FBALiquidationEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if FBALiquidationEventList is set.
     *
     * @return true if FBALiquidationEventList is set.
     */
    public function isSetFBALiquidationEventList()
    {
        return !empty($this->_fields['FBALiquidationEventList']['FieldValue']);
    }
    /**
     * Add values for FBALiquidationEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFBALiquidationEvent[] $FBALiquidationEventList_array,...
     * @return $this
     */
    public function withFBALiquidationEventList(...$FBALiquidationEventList_array)
    {
        foreach ($FBALiquidationEventList_array as $FBALiquidationEventList) {
            $this->_fields['FBALiquidationEventList']['FieldValue'][] = $FBALiquidationEventList;
        }
        return $this;
    }
    /**
     * Get the value of the CouponPaymentEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCouponPaymentEvent[] CouponPaymentEventList.
     */
    public function getCouponPaymentEventList()
    {
        if ($this->_fields['CouponPaymentEventList']['FieldValue'] == null) {
            $this->_fields['CouponPaymentEventList']['FieldValue'] = array();
        }
        return $this->_fields['CouponPaymentEventList']['FieldValue'];
    }
    /**
     * Set the value of the CouponPaymentEventList property.
     *
     * @param array couponPaymentEventList
     * @return $this 
     */
    public function setCouponPaymentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['CouponPaymentEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear CouponPaymentEventList.
     */
    public function unsetCouponPaymentEventList()
    {
        $this->_fields['CouponPaymentEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if CouponPaymentEventList is set.
     *
     * @return true if CouponPaymentEventList is set.
     */
    public function isSetCouponPaymentEventList()
    {
        return !empty($this->_fields['CouponPaymentEventList']['FieldValue']);
    }
    /**
     * Add values for CouponPaymentEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCouponPaymentEvent[] $CouponPaymentEventList_array,...
     * @return $this
     */
    public function withCouponPaymentEventList(...$CouponPaymentEventList_array)
    {
        foreach ($CouponPaymentEventList_array as $CouponPaymentEventList) {
            $this->_fields['CouponPaymentEventList']['FieldValue'][] = $CouponPaymentEventList;
        }
        return $this;
    }
    /**
     * Get the value of the ImagingServicesFeeEventList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelImagingServicesFeeEvent[] ImagingServicesFeeEventList.
     */
    public function getImagingServicesFeeEventList()
    {
        if ($this->_fields['ImagingServicesFeeEventList']['FieldValue'] == null) {
            $this->_fields['ImagingServicesFeeEventList']['FieldValue'] = array();
        }
        return $this->_fields['ImagingServicesFeeEventList']['FieldValue'];
    }
    /**
     * Set the value of the ImagingServicesFeeEventList property.
     *
     * @param array imagingServicesFeeEventList
     * @return $this 
     */
    public function setImagingServicesFeeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ImagingServicesFeeEventList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ImagingServicesFeeEventList.
     */
    public function unsetImagingServicesFeeEventList()
    {
        $this->_fields['ImagingServicesFeeEventList']['FieldValue'] = array();
    }
    /**
     * Check to see if ImagingServicesFeeEventList is set.
     *
     * @return true if ImagingServicesFeeEventList is set.
     */
    public function isSetImagingServicesFeeEventList()
    {
        return !empty($this->_fields['ImagingServicesFeeEventList']['FieldValue']);
    }
    /**
     * Add values for ImagingServicesFeeEventList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelImagingServicesFeeEvent[] $ImagingServicesFeeEventList_array,...
     * @return $this
     */
    public function withImagingServicesFeeEventList(...$ImagingServicesFeeEventList_array)
    {
        foreach ($ImagingServicesFeeEventList_array as $ImagingServicesFeeEventList) {
            $this->_fields['ImagingServicesFeeEventList']['FieldValue'][] = $ImagingServicesFeeEventList;
        }
        return $this;
    }
}