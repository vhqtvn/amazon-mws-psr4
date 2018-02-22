<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPayWithAmazonEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerOrderId: string</li>
 * <li>TransactionPostedDate: string</li>
 * <li>BusinessObjectType: string</li>
 * <li>SalesChannel: string</li>
 * <li>Charge: \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent</li>
 * <li>FeeList: array</li>
 * <li>PaymentAmountType: string</li>
 * <li>AmountDescription: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>StoreName: string</li>
 *
 * </ul>
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
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
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
     * @param transactionPostedDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransactionPostedDate($value)
    {
        $this->setTransactionPostedDate($value);
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
     * @param businessObjectType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBusinessObjectType($value)
    {
        $this->setBusinessObjectType($value);
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
     * @param salesChannel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSalesChannel($value)
    {
        $this->setSalesChannel($value);
        return $this;
    }
    /**
     * Get the value of the Charge property.
     *
     * @return ChargeComponent Charge.
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
     * @param charge
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCharge($value)
    {
        $this->setCharge($value);
        return $this;
    }
    /**
     * Get the value of the FeeList property.
     *
     * @return List<FeeComponent> FeeList.
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
     * @param paymentAmountType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPaymentAmountType($value)
    {
        $this->setPaymentAmountType($value);
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
     * @param amountDescription
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmountDescription($value)
    {
        $this->setAmountDescription($value);
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
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
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
     * @param storeName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withStoreName($value)
    {
        $this->setStoreName($value);
        return $this;
    }
}