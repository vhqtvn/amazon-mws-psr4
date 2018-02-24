<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelSolutionProviderCreditEvent
 * 
 * @property	string	$ProviderTransactionType
 * @property	string	$SellerOrderId
 * @property	string	$MarketplaceId
 * @property	string	$MarketplaceCountryCode
 * @property	string	$SellerId
 * @property	string	$SellerStoreName
 * @property	string	$ProviderId
 * @property	string	$ProviderStoreName
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$TransactionAmount
 * @property	string	$TransactionCreationDate
 */
class MwsFinancesServiceModelSolutionProviderCreditEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ProviderTransactionType' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerStoreName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProviderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProviderStoreName' => array('FieldValue' => null, 'FieldType' => 'string'), 'TransactionAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'TransactionCreationDate' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the ProviderTransactionType property.
     *
     * @return String ProviderTransactionType.
     */
    public function getProviderTransactionType()
    {
        return $this->_fields['ProviderTransactionType']['FieldValue'];
    }
    /**
     * Set the value of the ProviderTransactionType property.
     *
     * @param string providerTransactionType
     * @return $this 
     */
    public function setProviderTransactionType($value)
    {
        $this->_fields['ProviderTransactionType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProviderTransactionType is set.
     *
     * @return true if ProviderTransactionType is set.
     */
    public function isSetProviderTransactionType()
    {
        return !is_null($this->_fields['ProviderTransactionType']['FieldValue']);
    }
    /**
     * Set the value of ProviderTransactionType, return this.
     *
     * @param providerTransactionType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withProviderTransactionType($value)
    {
        $this->setProviderTransactionType($value);
        return $this;
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
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this 
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }
    /**
     * Get the value of the MarketplaceCountryCode property.
     *
     * @return String MarketplaceCountryCode.
     */
    public function getMarketplaceCountryCode()
    {
        return $this->_fields['MarketplaceCountryCode']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceCountryCode property.
     *
     * @param string marketplaceCountryCode
     * @return $this 
     */
    public function setMarketplaceCountryCode($value)
    {
        $this->_fields['MarketplaceCountryCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceCountryCode is set.
     *
     * @return true if MarketplaceCountryCode is set.
     */
    public function isSetMarketplaceCountryCode()
    {
        return !is_null($this->_fields['MarketplaceCountryCode']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceCountryCode, return this.
     *
     * @param marketplaceCountryCode
     *             The new value to set.
     *
     * @return $this .
     */
    public function withMarketplaceCountryCode($value)
    {
        $this->setMarketplaceCountryCode($value);
        return $this;
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this 
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }
    /**
     * Get the value of the SellerStoreName property.
     *
     * @return String SellerStoreName.
     */
    public function getSellerStoreName()
    {
        return $this->_fields['SellerStoreName']['FieldValue'];
    }
    /**
     * Set the value of the SellerStoreName property.
     *
     * @param string sellerStoreName
     * @return $this 
     */
    public function setSellerStoreName($value)
    {
        $this->_fields['SellerStoreName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerStoreName is set.
     *
     * @return true if SellerStoreName is set.
     */
    public function isSetSellerStoreName()
    {
        return !is_null($this->_fields['SellerStoreName']['FieldValue']);
    }
    /**
     * Set the value of SellerStoreName, return this.
     *
     * @param sellerStoreName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerStoreName($value)
    {
        $this->setSellerStoreName($value);
        return $this;
    }
    /**
     * Get the value of the ProviderId property.
     *
     * @return String ProviderId.
     */
    public function getProviderId()
    {
        return $this->_fields['ProviderId']['FieldValue'];
    }
    /**
     * Set the value of the ProviderId property.
     *
     * @param string providerId
     * @return $this 
     */
    public function setProviderId($value)
    {
        $this->_fields['ProviderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProviderId is set.
     *
     * @return true if ProviderId is set.
     */
    public function isSetProviderId()
    {
        return !is_null($this->_fields['ProviderId']['FieldValue']);
    }
    /**
     * Set the value of ProviderId, return this.
     *
     * @param providerId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withProviderId($value)
    {
        $this->setProviderId($value);
        return $this;
    }
    /**
     * Get the value of the ProviderStoreName property.
     *
     * @return String ProviderStoreName.
     */
    public function getProviderStoreName()
    {
        return $this->_fields['ProviderStoreName']['FieldValue'];
    }
    /**
     * Set the value of the ProviderStoreName property.
     *
     * @param string providerStoreName
     * @return $this 
     */
    public function setProviderStoreName($value)
    {
        $this->_fields['ProviderStoreName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProviderStoreName is set.
     *
     * @return true if ProviderStoreName is set.
     */
    public function isSetProviderStoreName()
    {
        return !is_null($this->_fields['ProviderStoreName']['FieldValue']);
    }
    /**
     * Set the value of ProviderStoreName, return this.
     *
     * @param providerStoreName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withProviderStoreName($value)
    {
        $this->setProviderStoreName($value);
        return $this;
    }
    /**
     * Get the value of the TransactionAmount property.
     *
     * @return Currency TransactionAmount.
     */
    public function getTransactionAmount()
    {
        return $this->_fields['TransactionAmount']['FieldValue'];
    }
    /**
     * Set the value of the TransactionAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency transactionAmount
     * @return $this 
     */
    public function setTransactionAmount($value)
    {
        $this->_fields['TransactionAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransactionAmount is set.
     *
     * @return true if TransactionAmount is set.
     */
    public function isSetTransactionAmount()
    {
        return !is_null($this->_fields['TransactionAmount']['FieldValue']);
    }
    /**
     * Set the value of TransactionAmount, return this.
     *
     * @param transactionAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransactionAmount($value)
    {
        $this->setTransactionAmount($value);
        return $this;
    }
    /**
     * Get the value of the TransactionCreationDate property.
     *
     * @return XMLGregorianCalendar TransactionCreationDate.
     */
    public function getTransactionCreationDate()
    {
        return $this->_fields['TransactionCreationDate']['FieldValue'];
    }
    /**
     * Set the value of the TransactionCreationDate property.
     *
     * @param string transactionCreationDate
     * @return $this 
     */
    public function setTransactionCreationDate($value)
    {
        $this->_fields['TransactionCreationDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransactionCreationDate is set.
     *
     * @return true if TransactionCreationDate is set.
     */
    public function isSetTransactionCreationDate()
    {
        return !is_null($this->_fields['TransactionCreationDate']['FieldValue']);
    }
    /**
     * Set the value of TransactionCreationDate, return this.
     *
     * @param transactionCreationDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTransactionCreationDate($value)
    {
        $this->setTransactionCreationDate($value);
        return $this;
    }
}