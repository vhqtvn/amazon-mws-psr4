<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelRentalTransactionEvent
 * 
 * @property	string	$AmazonOrderId
 * @property	string	$RentalEventType
 * @property	int	$ExtensionLength
 * @property	string	$PostedDate
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[]	$RentalChargeList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$RentalFeeList
 * @property	string	$MarketplaceName
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$RentalInitialValue
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$RentalReimbursement
 */
class MwsFinancesServiceModelRentalTransactionEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RentalEventType' => array('FieldValue' => null, 'FieldType' => 'string'), 'ExtensionLength' => array('FieldValue' => null, 'FieldType' => 'int'), 'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'RentalChargeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'), 'RentalFeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'MarketplaceName' => array('FieldValue' => null, 'FieldType' => 'string'), 'RentalInitialValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'RentalReimbursement' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this 
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param string $AmazonOrderId
     * @return $this
     */
    public function withAmazonOrderId($AmazonOrderId)
    {
        $this->setAmazonOrderId($AmazonOrderId);
        return $this;
    }
    /**
     * Get the value of the RentalEventType property.
     *
     * @return String RentalEventType.
     */
    public function getRentalEventType()
    {
        return $this->_fields['RentalEventType']['FieldValue'];
    }
    /**
     * Set the value of the RentalEventType property.
     *
     * @param string rentalEventType
     * @return $this 
     */
    public function setRentalEventType($value)
    {
        $this->_fields['RentalEventType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RentalEventType is set.
     *
     * @return true if RentalEventType is set.
     */
    public function isSetRentalEventType()
    {
        return !is_null($this->_fields['RentalEventType']['FieldValue']);
    }
    /**
     * Set the value of RentalEventType, return this.
     *
     * @param string $RentalEventType
     * @return $this
     */
    public function withRentalEventType($RentalEventType)
    {
        $this->setRentalEventType($RentalEventType);
        return $this;
    }
    /**
     * Get the value of the ExtensionLength property.
     *
     * @return Integer ExtensionLength.
     */
    public function getExtensionLength()
    {
        return $this->_fields['ExtensionLength']['FieldValue'];
    }
    /**
     * Set the value of the ExtensionLength property.
     *
     * @param int extensionLength
     * @return $this 
     */
    public function setExtensionLength($value)
    {
        $this->_fields['ExtensionLength']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ExtensionLength is set.
     *
     * @return true if ExtensionLength is set.
     */
    public function isSetExtensionLength()
    {
        return !is_null($this->_fields['ExtensionLength']['FieldValue']);
    }
    /**
     * Set the value of ExtensionLength, return this.
     *
     * @param int $ExtensionLength
     * @return $this
     */
    public function withExtensionLength($ExtensionLength)
    {
        $this->setExtensionLength($ExtensionLength);
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
     * @param string $PostedDate
     * @return $this
     */
    public function withPostedDate($PostedDate)
    {
        $this->setPostedDate($PostedDate);
        return $this;
    }
    /**
     * Get the value of the RentalChargeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] RentalChargeList.
     */
    public function getRentalChargeList()
    {
        if ($this->_fields['RentalChargeList']['FieldValue'] == null) {
            $this->_fields['RentalChargeList']['FieldValue'] = array();
        }
        return $this->_fields['RentalChargeList']['FieldValue'];
    }
    /**
     * Set the value of the RentalChargeList property.
     *
     * @param array rentalChargeList
     * @return $this 
     */
    public function setRentalChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['RentalChargeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear RentalChargeList.
     */
    public function unsetRentalChargeList()
    {
        $this->_fields['RentalChargeList']['FieldValue'] = array();
    }
    /**
     * Check to see if RentalChargeList is set.
     *
     * @return true if RentalChargeList is set.
     */
    public function isSetRentalChargeList()
    {
        return !empty($this->_fields['RentalChargeList']['FieldValue']);
    }
    /**
     * Add values for RentalChargeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] $RentalChargeList_array,...
     * @return $this
     */
    public function withRentalChargeList(...$RentalChargeList_array)
    {
        foreach ($RentalChargeList_array as $RentalChargeList) {
            $this->_fields['RentalChargeList']['FieldValue'][] = $RentalChargeList;
        }
        return $this;
    }
    /**
     * Get the value of the RentalFeeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] RentalFeeList.
     */
    public function getRentalFeeList()
    {
        if ($this->_fields['RentalFeeList']['FieldValue'] == null) {
            $this->_fields['RentalFeeList']['FieldValue'] = array();
        }
        return $this->_fields['RentalFeeList']['FieldValue'];
    }
    /**
     * Set the value of the RentalFeeList property.
     *
     * @param array rentalFeeList
     * @return $this 
     */
    public function setRentalFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['RentalFeeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear RentalFeeList.
     */
    public function unsetRentalFeeList()
    {
        $this->_fields['RentalFeeList']['FieldValue'] = array();
    }
    /**
     * Check to see if RentalFeeList is set.
     *
     * @return true if RentalFeeList is set.
     */
    public function isSetRentalFeeList()
    {
        return !empty($this->_fields['RentalFeeList']['FieldValue']);
    }
    /**
     * Add values for RentalFeeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $RentalFeeList_array,...
     * @return $this
     */
    public function withRentalFeeList(...$RentalFeeList_array)
    {
        foreach ($RentalFeeList_array as $RentalFeeList) {
            $this->_fields['RentalFeeList']['FieldValue'][] = $RentalFeeList;
        }
        return $this;
    }
    /**
     * Get the value of the MarketplaceName property.
     *
     * @return String MarketplaceName.
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @return $this 
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set.
     */
    public function isSetMarketplaceName()
    {
        return !is_null($this->_fields['MarketplaceName']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param string $MarketplaceName
     * @return $this
     */
    public function withMarketplaceName($MarketplaceName)
    {
        $this->setMarketplaceName($MarketplaceName);
        return $this;
    }
    /**
     * Get the value of the RentalInitialValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency RentalInitialValue.
     */
    public function getRentalInitialValue()
    {
        return $this->_fields['RentalInitialValue']['FieldValue'];
    }
    /**
     * Set the value of the RentalInitialValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency rentalInitialValue
     * @return $this 
     */
    public function setRentalInitialValue($value)
    {
        $this->_fields['RentalInitialValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RentalInitialValue is set.
     *
     * @return true if RentalInitialValue is set.
     */
    public function isSetRentalInitialValue()
    {
        return !is_null($this->_fields['RentalInitialValue']['FieldValue']);
    }
    /**
     * Set the value of RentalInitialValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $RentalInitialValue
     * @return $this
     */
    public function withRentalInitialValue($RentalInitialValue)
    {
        $this->setRentalInitialValue($RentalInitialValue);
        return $this;
    }
    /**
     * Get the value of the RentalReimbursement property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency RentalReimbursement.
     */
    public function getRentalReimbursement()
    {
        return $this->_fields['RentalReimbursement']['FieldValue'];
    }
    /**
     * Set the value of the RentalReimbursement property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency rentalReimbursement
     * @return $this 
     */
    public function setRentalReimbursement($value)
    {
        $this->_fields['RentalReimbursement']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RentalReimbursement is set.
     *
     * @return true if RentalReimbursement is set.
     */
    public function isSetRentalReimbursement()
    {
        return !is_null($this->_fields['RentalReimbursement']['FieldValue']);
    }
    /**
     * Set the value of RentalReimbursement, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $RentalReimbursement
     * @return $this
     */
    public function withRentalReimbursement($RentalReimbursement)
    {
        $this->setRentalReimbursement($RentalReimbursement);
        return $this;
    }
}