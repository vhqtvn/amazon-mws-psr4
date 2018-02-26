<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPayWithAmazonEvent
 * 
 * @property	string	$SellerOrderId
 * @property	string	$TransactionPostedDate
 * @property	string	$BusinessObjectType
 * @property	string	$SalesChannel
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent	$Charge
 * @property	array	$FeeList
 * @property	string	$PaymentAmountType
 * @property	string	$AmountDescription
 * @property	string	$FulfillmentChannel
 * @property	string	$StoreName
 */
class MwsFinancesServiceModelPayWithAmazonEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'TransactionPostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'BusinessObjectType' => array('FieldValue' => null, 'FieldType' => 'string'), 'SalesChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'Charge' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'FeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'PaymentAmountType' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmountDescription' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'StoreName' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this 
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
        return !is_null($this->_fields['SellerOrderId']['FieldValue']);
    }
    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param string $SellerOrderId
     * @return $this
     */
    public function withSellerOrderId($SellerOrderId)
    {
        $this->setSellerOrderId($SellerOrderId);
        return $this;
    }
    /**
     * Get the value of the TransactionPostedDate property.
     *
     * @return XMLGregorianCalendar TransactionPostedDate.
     */
    public function getTransactionPostedDate()
    {
        return $this->_fields['TransactionPostedDate']['FieldValue'];
    }
    /**
     * Set the value of the TransactionPostedDate property.
     *
     * @param string transactionPostedDate
     * @return $this 
     */
    public function setTransactionPostedDate($value)
    {
        $this->_fields['TransactionPostedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransactionPostedDate is set.
     *
     * @return true if TransactionPostedDate is set.
     */
    public function isSetTransactionPostedDate()
    {
        return !is_null($this->_fields['TransactionPostedDate']['FieldValue']);
    }
    /**
     * Set the value of TransactionPostedDate, return this.
     *
     * @param string $TransactionPostedDate
     * @return $this
     */
    public function withTransactionPostedDate($TransactionPostedDate)
    {
        $this->setTransactionPostedDate($TransactionPostedDate);
        return $this;
    }
    /**
     * Get the value of the BusinessObjectType property.
     *
     * @return String BusinessObjectType.
     */
    public function getBusinessObjectType()
    {
        return $this->_fields['BusinessObjectType']['FieldValue'];
    }
    /**
     * Set the value of the BusinessObjectType property.
     *
     * @param string businessObjectType
     * @return $this 
     */
    public function setBusinessObjectType($value)
    {
        $this->_fields['BusinessObjectType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BusinessObjectType is set.
     *
     * @return true if BusinessObjectType is set.
     */
    public function isSetBusinessObjectType()
    {
        return !is_null($this->_fields['BusinessObjectType']['FieldValue']);
    }
    /**
     * Set the value of BusinessObjectType, return this.
     *
     * @param string $BusinessObjectType
     * @return $this
     */
    public function withBusinessObjectType($BusinessObjectType)
    {
        $this->setBusinessObjectType($BusinessObjectType);
        return $this;
    }
    /**
     * Get the value of the SalesChannel property.
     *
     * @return String SalesChannel.
     */
    public function getSalesChannel()
    {
        return $this->_fields['SalesChannel']['FieldValue'];
    }
    /**
     * Set the value of the SalesChannel property.
     *
     * @param string salesChannel
     * @return $this 
     */
    public function setSalesChannel($value)
    {
        $this->_fields['SalesChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesChannel is set.
     *
     * @return true if SalesChannel is set.
     */
    public function isSetSalesChannel()
    {
        return !is_null($this->_fields['SalesChannel']['FieldValue']);
    }
    /**
     * Set the value of SalesChannel, return this.
     *
     * @param string $SalesChannel
     * @return $this
     */
    public function withSalesChannel($SalesChannel)
    {
        $this->setSalesChannel($SalesChannel);
        return $this;
    }
    /**
     * Get the value of the Charge property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent Charge.
     */
    public function getCharge()
    {
        return $this->_fields['Charge']['FieldValue'];
    }
    /**
     * Set the value of the Charge property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent charge
     * @return $this 
     */
    public function setCharge($value)
    {
        $this->_fields['Charge']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Charge is set.
     *
     * @return true if Charge is set.
     */
    public function isSetCharge()
    {
        return !is_null($this->_fields['Charge']['FieldValue']);
    }
    /**
     * Set the value of Charge, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent $Charge
     * @return $this
     */
    public function withCharge($Charge)
    {
        $this->setCharge($Charge);
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
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent $FeeList_array,...
     * @return $this
     */
    public function withFeeList(...$FeeList_array)
    {
        foreach ($FeeList_array as $FeeList) {
            $this->_fields['FeeList']['FieldValue'][] = $FeeList;
        }
        return $this;
    }
    /**
     * Get the value of the PaymentAmountType property.
     *
     * @return String PaymentAmountType.
     */
    public function getPaymentAmountType()
    {
        return $this->_fields['PaymentAmountType']['FieldValue'];
    }
    /**
     * Set the value of the PaymentAmountType property.
     *
     * @param string paymentAmountType
     * @return $this 
     */
    public function setPaymentAmountType($value)
    {
        $this->_fields['PaymentAmountType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PaymentAmountType is set.
     *
     * @return true if PaymentAmountType is set.
     */
    public function isSetPaymentAmountType()
    {
        return !is_null($this->_fields['PaymentAmountType']['FieldValue']);
    }
    /**
     * Set the value of PaymentAmountType, return this.
     *
     * @param string $PaymentAmountType
     * @return $this
     */
    public function withPaymentAmountType($PaymentAmountType)
    {
        $this->setPaymentAmountType($PaymentAmountType);
        return $this;
    }
    /**
     * Get the value of the AmountDescription property.
     *
     * @return String AmountDescription.
     */
    public function getAmountDescription()
    {
        return $this->_fields['AmountDescription']['FieldValue'];
    }
    /**
     * Set the value of the AmountDescription property.
     *
     * @param string amountDescription
     * @return $this 
     */
    public function setAmountDescription($value)
    {
        $this->_fields['AmountDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmountDescription is set.
     *
     * @return true if AmountDescription is set.
     */
    public function isSetAmountDescription()
    {
        return !is_null($this->_fields['AmountDescription']['FieldValue']);
    }
    /**
     * Set the value of AmountDescription, return this.
     *
     * @param string $AmountDescription
     * @return $this
     */
    public function withAmountDescription($AmountDescription)
    {
        $this->setAmountDescription($AmountDescription);
        return $this;
    }
    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return String FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this 
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param string $FulfillmentChannel
     * @return $this
     */
    public function withFulfillmentChannel($FulfillmentChannel)
    {
        $this->setFulfillmentChannel($FulfillmentChannel);
        return $this;
    }
    /**
     * Get the value of the StoreName property.
     *
     * @return String StoreName.
     */
    public function getStoreName()
    {
        return $this->_fields['StoreName']['FieldValue'];
    }
    /**
     * Set the value of the StoreName property.
     *
     * @param string storeName
     * @return $this 
     */
    public function setStoreName($value)
    {
        $this->_fields['StoreName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if StoreName is set.
     *
     * @return true if StoreName is set.
     */
    public function isSetStoreName()
    {
        return !is_null($this->_fields['StoreName']['FieldValue']);
    }
    /**
     * Set the value of StoreName, return this.
     *
     * @param string $StoreName
     * @return $this
     */
    public function withStoreName($StoreName)
    {
        $this->setStoreName($StoreName);
        return $this;
    }
}