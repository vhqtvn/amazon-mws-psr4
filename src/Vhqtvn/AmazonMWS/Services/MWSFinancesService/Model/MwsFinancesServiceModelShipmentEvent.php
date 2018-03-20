<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentEvent
 * 
 * @property	string	$AmazonOrderId
 * @property	string	$SellerOrderId
 * @property	string	$MarketplaceName
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[]	$OrderChargeList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[]	$OrderChargeAdjustmentList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$ShipmentFeeList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$ShipmentFeeAdjustmentList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$OrderFeeList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$OrderFeeAdjustmentList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDirectPayment[]	$DirectPaymentList
 * @property	string	$PostedDate
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem[]	$ShipmentItemList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem[]	$ShipmentItemAdjustmentList
 */
class MwsFinancesServiceModelShipmentEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceName' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderChargeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'), 'OrderChargeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'), 'ShipmentFeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'ShipmentFeeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'OrderFeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'OrderFeeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'DirectPaymentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDirectPayment::class), 'ListMemberName' => 'DirectPayment'), 'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipmentItemList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem::class), 'ListMemberName' => 'ShipmentItem'), 'ShipmentItemAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem::class), 'ListMemberName' => 'ShipmentItem'));
        parent::__construct($data);
    }
    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return \string AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this instance
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
     * Get the value of the SellerOrderId property.
     *
     * @return \string SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this instance
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
     * Get the value of the MarketplaceName property.
     *
     * @return \string MarketplaceName.
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @return $this instance
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
     * Get the value of the OrderChargeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] OrderChargeList.
     */
    public function getOrderChargeList()
    {
        if ($this->_fields['OrderChargeList']['FieldValue'] == null) {
            $this->_fields['OrderChargeList']['FieldValue'] = array();
        }
        return $this->_fields['OrderChargeList']['FieldValue'];
    }
    /**
     * Set the value of the OrderChargeList property.
     *
     * @param array orderChargeList
     * @return $this instance
     */
    public function setOrderChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderChargeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OrderChargeList.
     */
    public function unsetOrderChargeList()
    {
        $this->_fields['OrderChargeList']['FieldValue'] = array();
    }
    /**
     * Check to see if OrderChargeList is set.
     *
     * @return true if OrderChargeList is set.
     */
    public function isSetOrderChargeList()
    {
        return !empty($this->_fields['OrderChargeList']['FieldValue']);
    }
    /**
     * Add values for OrderChargeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] $OrderChargeList_array,...
     * @return $this
     */
    public function withOrderChargeList(...$OrderChargeList_array)
    {
        foreach ($OrderChargeList_array as $OrderChargeList) {
            $this->_fields['OrderChargeList']['FieldValue'][] = $OrderChargeList;
        }
        return $this;
    }
    /**
     * Get the value of the OrderChargeAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] OrderChargeAdjustmentList.
     */
    public function getOrderChargeAdjustmentList()
    {
        if ($this->_fields['OrderChargeAdjustmentList']['FieldValue'] == null) {
            $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['OrderChargeAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the OrderChargeAdjustmentList property.
     *
     * @param array orderChargeAdjustmentList
     * @return $this instance
     */
    public function setOrderChargeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OrderChargeAdjustmentList.
     */
    public function unsetOrderChargeAdjustmentList()
    {
        $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if OrderChargeAdjustmentList is set.
     *
     * @return true if OrderChargeAdjustmentList is set.
     */
    public function isSetOrderChargeAdjustmentList()
    {
        return !empty($this->_fields['OrderChargeAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for OrderChargeAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] $OrderChargeAdjustmentList_array,...
     * @return $this
     */
    public function withOrderChargeAdjustmentList(...$OrderChargeAdjustmentList_array)
    {
        foreach ($OrderChargeAdjustmentList_array as $OrderChargeAdjustmentList) {
            $this->_fields['OrderChargeAdjustmentList']['FieldValue'][] = $OrderChargeAdjustmentList;
        }
        return $this;
    }
    /**
     * Get the value of the ShipmentFeeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] ShipmentFeeList.
     */
    public function getShipmentFeeList()
    {
        if ($this->_fields['ShipmentFeeList']['FieldValue'] == null) {
            $this->_fields['ShipmentFeeList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentFeeList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentFeeList property.
     *
     * @param array shipmentFeeList
     * @return $this instance
     */
    public function setShipmentFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ShipmentFeeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ShipmentFeeList.
     */
    public function unsetShipmentFeeList()
    {
        $this->_fields['ShipmentFeeList']['FieldValue'] = array();
    }
    /**
     * Check to see if ShipmentFeeList is set.
     *
     * @return true if ShipmentFeeList is set.
     */
    public function isSetShipmentFeeList()
    {
        return !empty($this->_fields['ShipmentFeeList']['FieldValue']);
    }
    /**
     * Add values for ShipmentFeeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $ShipmentFeeList_array,...
     * @return $this
     */
    public function withShipmentFeeList(...$ShipmentFeeList_array)
    {
        foreach ($ShipmentFeeList_array as $ShipmentFeeList) {
            $this->_fields['ShipmentFeeList']['FieldValue'][] = $ShipmentFeeList;
        }
        return $this;
    }
    /**
     * Get the value of the ShipmentFeeAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] ShipmentFeeAdjustmentList.
     */
    public function getShipmentFeeAdjustmentList()
    {
        if ($this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] == null) {
            $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentFeeAdjustmentList property.
     *
     * @param array shipmentFeeAdjustmentList
     * @return $this instance
     */
    public function setShipmentFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ShipmentFeeAdjustmentList.
     */
    public function unsetShipmentFeeAdjustmentList()
    {
        $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if ShipmentFeeAdjustmentList is set.
     *
     * @return true if ShipmentFeeAdjustmentList is set.
     */
    public function isSetShipmentFeeAdjustmentList()
    {
        return !empty($this->_fields['ShipmentFeeAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for ShipmentFeeAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $ShipmentFeeAdjustmentList_array,...
     * @return $this
     */
    public function withShipmentFeeAdjustmentList(...$ShipmentFeeAdjustmentList_array)
    {
        foreach ($ShipmentFeeAdjustmentList_array as $ShipmentFeeAdjustmentList) {
            $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'][] = $ShipmentFeeAdjustmentList;
        }
        return $this;
    }
    /**
     * Get the value of the OrderFeeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] OrderFeeList.
     */
    public function getOrderFeeList()
    {
        if ($this->_fields['OrderFeeList']['FieldValue'] == null) {
            $this->_fields['OrderFeeList']['FieldValue'] = array();
        }
        return $this->_fields['OrderFeeList']['FieldValue'];
    }
    /**
     * Set the value of the OrderFeeList property.
     *
     * @param array orderFeeList
     * @return $this instance
     */
    public function setOrderFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderFeeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OrderFeeList.
     */
    public function unsetOrderFeeList()
    {
        $this->_fields['OrderFeeList']['FieldValue'] = array();
    }
    /**
     * Check to see if OrderFeeList is set.
     *
     * @return true if OrderFeeList is set.
     */
    public function isSetOrderFeeList()
    {
        return !empty($this->_fields['OrderFeeList']['FieldValue']);
    }
    /**
     * Add values for OrderFeeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $OrderFeeList_array,...
     * @return $this
     */
    public function withOrderFeeList(...$OrderFeeList_array)
    {
        foreach ($OrderFeeList_array as $OrderFeeList) {
            $this->_fields['OrderFeeList']['FieldValue'][] = $OrderFeeList;
        }
        return $this;
    }
    /**
     * Get the value of the OrderFeeAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] OrderFeeAdjustmentList.
     */
    public function getOrderFeeAdjustmentList()
    {
        if ($this->_fields['OrderFeeAdjustmentList']['FieldValue'] == null) {
            $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['OrderFeeAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the OrderFeeAdjustmentList property.
     *
     * @param array orderFeeAdjustmentList
     * @return $this instance
     */
    public function setOrderFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear OrderFeeAdjustmentList.
     */
    public function unsetOrderFeeAdjustmentList()
    {
        $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if OrderFeeAdjustmentList is set.
     *
     * @return true if OrderFeeAdjustmentList is set.
     */
    public function isSetOrderFeeAdjustmentList()
    {
        return !empty($this->_fields['OrderFeeAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for OrderFeeAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $OrderFeeAdjustmentList_array,...
     * @return $this
     */
    public function withOrderFeeAdjustmentList(...$OrderFeeAdjustmentList_array)
    {
        foreach ($OrderFeeAdjustmentList_array as $OrderFeeAdjustmentList) {
            $this->_fields['OrderFeeAdjustmentList']['FieldValue'][] = $OrderFeeAdjustmentList;
        }
        return $this;
    }
    /**
     * Get the value of the DirectPaymentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDirectPayment[] DirectPaymentList.
     */
    public function getDirectPaymentList()
    {
        if ($this->_fields['DirectPaymentList']['FieldValue'] == null) {
            $this->_fields['DirectPaymentList']['FieldValue'] = array();
        }
        return $this->_fields['DirectPaymentList']['FieldValue'];
    }
    /**
     * Set the value of the DirectPaymentList property.
     *
     * @param array directPaymentList
     * @return $this instance
     */
    public function setDirectPaymentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['DirectPaymentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear DirectPaymentList.
     */
    public function unsetDirectPaymentList()
    {
        $this->_fields['DirectPaymentList']['FieldValue'] = array();
    }
    /**
     * Check to see if DirectPaymentList is set.
     *
     * @return true if DirectPaymentList is set.
     */
    public function isSetDirectPaymentList()
    {
        return !empty($this->_fields['DirectPaymentList']['FieldValue']);
    }
    /**
     * Add values for DirectPaymentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDirectPayment[] $DirectPaymentList_array,...
     * @return $this
     */
    public function withDirectPaymentList(...$DirectPaymentList_array)
    {
        foreach ($DirectPaymentList_array as $DirectPaymentList) {
            $this->_fields['DirectPaymentList']['FieldValue'][] = $DirectPaymentList;
        }
        return $this;
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return \DateTime PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this instance
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
     * Get the value of the ShipmentItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem[] ShipmentItemList.
     */
    public function getShipmentItemList()
    {
        if ($this->_fields['ShipmentItemList']['FieldValue'] == null) {
            $this->_fields['ShipmentItemList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentItemList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentItemList property.
     *
     * @param array shipmentItemList
     * @return $this instance
     */
    public function setShipmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ShipmentItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ShipmentItemList.
     */
    public function unsetShipmentItemList()
    {
        $this->_fields['ShipmentItemList']['FieldValue'] = array();
    }
    /**
     * Check to see if ShipmentItemList is set.
     *
     * @return true if ShipmentItemList is set.
     */
    public function isSetShipmentItemList()
    {
        return !empty($this->_fields['ShipmentItemList']['FieldValue']);
    }
    /**
     * Add values for ShipmentItemList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem[] $ShipmentItemList_array,...
     * @return $this
     */
    public function withShipmentItemList(...$ShipmentItemList_array)
    {
        foreach ($ShipmentItemList_array as $ShipmentItemList) {
            $this->_fields['ShipmentItemList']['FieldValue'][] = $ShipmentItemList;
        }
        return $this;
    }
    /**
     * Get the value of the ShipmentItemAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem[] ShipmentItemAdjustmentList.
     */
    public function getShipmentItemAdjustmentList()
    {
        if ($this->_fields['ShipmentItemAdjustmentList']['FieldValue'] == null) {
            $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentItemAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentItemAdjustmentList property.
     *
     * @param array shipmentItemAdjustmentList
     * @return $this instance
     */
    public function setShipmentItemAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ShipmentItemAdjustmentList.
     */
    public function unsetShipmentItemAdjustmentList()
    {
        $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if ShipmentItemAdjustmentList is set.
     *
     * @return true if ShipmentItemAdjustmentList is set.
     */
    public function isSetShipmentItemAdjustmentList()
    {
        return !empty($this->_fields['ShipmentItemAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for ShipmentItemAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem[] $ShipmentItemAdjustmentList_array,...
     * @return $this
     */
    public function withShipmentItemAdjustmentList(...$ShipmentItemAdjustmentList_array)
    {
        foreach ($ShipmentItemAdjustmentList_array as $ShipmentItemAdjustmentList) {
            $this->_fields['ShipmentItemAdjustmentList']['FieldValue'][] = $ShipmentItemAdjustmentList;
        }
        return $this;
    }
}