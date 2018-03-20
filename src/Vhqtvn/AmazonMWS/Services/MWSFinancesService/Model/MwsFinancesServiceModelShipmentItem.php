<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelShipmentItem
 * 
 * @property	string	$SellerSKU
 * @property	string	$OrderItemId
 * @property	string	$OrderAdjustmentItemId
 * @property	int	$QuantityShipped
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[]	$ItemChargeList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[]	$ItemChargeAdjustmentList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$ItemFeeList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[]	$ItemFeeAdjustmentList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelTaxWithheldComponent[]	$ItemTaxWithheldList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion[]	$PromotionList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion[]	$PromotionAdjustmentList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$CostOfPointsGranted
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$CostOfPointsReturned
 */
class MwsFinancesServiceModelShipmentItem extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'OrderAdjustmentItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'), 'ItemChargeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'), 'ItemChargeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'), 'ItemFeeList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'ItemFeeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ListMemberName' => 'FeeComponent'), 'ItemTaxWithheldList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelTaxWithheldComponent::class), 'ListMemberName' => 'TaxWithheldComponent'), 'PromotionList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion::class), 'ListMemberName' => 'Promotion'), 'PromotionAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion::class), 'ListMemberName' => 'Promotion'), 'CostOfPointsGranted' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'CostOfPointsReturned' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return \string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param string $SellerSKU
     * @return $this
     */
    public function withSellerSKU($SellerSKU)
    {
        $this->setSellerSKU($SellerSKU);
        return $this;
    }
    /**
     * Get the value of the OrderItemId property.
     *
     * @return \string OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return $this instance
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
        return !is_null($this->_fields['OrderItemId']['FieldValue']);
    }
    /**
     * Set the value of OrderItemId, return this.
     *
     * @param string $OrderItemId
     * @return $this
     */
    public function withOrderItemId($OrderItemId)
    {
        $this->setOrderItemId($OrderItemId);
        return $this;
    }
    /**
     * Get the value of the OrderAdjustmentItemId property.
     *
     * @return \string OrderAdjustmentItemId.
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->_fields['OrderAdjustmentItemId']['FieldValue'];
    }
    /**
     * Set the value of the OrderAdjustmentItemId property.
     *
     * @param string orderAdjustmentItemId
     * @return $this instance
     */
    public function setOrderAdjustmentItemId($value)
    {
        $this->_fields['OrderAdjustmentItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderAdjustmentItemId is set.
     *
     * @return true if OrderAdjustmentItemId is set.
     */
    public function isSetOrderAdjustmentItemId()
    {
        return !is_null($this->_fields['OrderAdjustmentItemId']['FieldValue']);
    }
    /**
     * Set the value of OrderAdjustmentItemId, return this.
     *
     * @param string $OrderAdjustmentItemId
     * @return $this
     */
    public function withOrderAdjustmentItemId($OrderAdjustmentItemId)
    {
        $this->setOrderAdjustmentItemId($OrderAdjustmentItemId);
        return $this;
    }
    /**
     * Get the value of the QuantityShipped property.
     *
     * @return \int QuantityShipped.
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }
    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @return $this instance
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set.
     */
    public function isSetQuantityShipped()
    {
        return !is_null($this->_fields['QuantityShipped']['FieldValue']);
    }
    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param int $QuantityShipped
     * @return $this
     */
    public function withQuantityShipped($QuantityShipped)
    {
        $this->setQuantityShipped($QuantityShipped);
        return $this;
    }
    /**
     * Get the value of the ItemChargeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] ItemChargeList.
     */
    public function getItemChargeList()
    {
        if ($this->_fields['ItemChargeList']['FieldValue'] == null) {
            $this->_fields['ItemChargeList']['FieldValue'] = array();
        }
        return $this->_fields['ItemChargeList']['FieldValue'];
    }
    /**
     * Set the value of the ItemChargeList property.
     *
     * @param array itemChargeList
     * @return $this instance
     */
    public function setItemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ItemChargeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ItemChargeList.
     */
    public function unsetItemChargeList()
    {
        $this->_fields['ItemChargeList']['FieldValue'] = array();
    }
    /**
     * Check to see if ItemChargeList is set.
     *
     * @return true if ItemChargeList is set.
     */
    public function isSetItemChargeList()
    {
        return !empty($this->_fields['ItemChargeList']['FieldValue']);
    }
    /**
     * Add values for ItemChargeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] $ItemChargeList_array,...
     * @return $this
     */
    public function withItemChargeList(...$ItemChargeList_array)
    {
        foreach ($ItemChargeList_array as $ItemChargeList) {
            $this->_fields['ItemChargeList']['FieldValue'][] = $ItemChargeList;
        }
        return $this;
    }
    /**
     * Get the value of the ItemChargeAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] ItemChargeAdjustmentList.
     */
    public function getItemChargeAdjustmentList()
    {
        if ($this->_fields['ItemChargeAdjustmentList']['FieldValue'] == null) {
            $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ItemChargeAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the ItemChargeAdjustmentList property.
     *
     * @param array itemChargeAdjustmentList
     * @return $this instance
     */
    public function setItemChargeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ItemChargeAdjustmentList.
     */
    public function unsetItemChargeAdjustmentList()
    {
        $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if ItemChargeAdjustmentList is set.
     *
     * @return true if ItemChargeAdjustmentList is set.
     */
    public function isSetItemChargeAdjustmentList()
    {
        return !empty($this->_fields['ItemChargeAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for ItemChargeAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] $ItemChargeAdjustmentList_array,...
     * @return $this
     */
    public function withItemChargeAdjustmentList(...$ItemChargeAdjustmentList_array)
    {
        foreach ($ItemChargeAdjustmentList_array as $ItemChargeAdjustmentList) {
            $this->_fields['ItemChargeAdjustmentList']['FieldValue'][] = $ItemChargeAdjustmentList;
        }
        return $this;
    }
    /**
     * Get the value of the ItemFeeList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] ItemFeeList.
     */
    public function getItemFeeList()
    {
        if ($this->_fields['ItemFeeList']['FieldValue'] == null) {
            $this->_fields['ItemFeeList']['FieldValue'] = array();
        }
        return $this->_fields['ItemFeeList']['FieldValue'];
    }
    /**
     * Set the value of the ItemFeeList property.
     *
     * @param array itemFeeList
     * @return $this instance
     */
    public function setItemFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ItemFeeList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ItemFeeList.
     */
    public function unsetItemFeeList()
    {
        $this->_fields['ItemFeeList']['FieldValue'] = array();
    }
    /**
     * Check to see if ItemFeeList is set.
     *
     * @return true if ItemFeeList is set.
     */
    public function isSetItemFeeList()
    {
        return !empty($this->_fields['ItemFeeList']['FieldValue']);
    }
    /**
     * Add values for ItemFeeList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $ItemFeeList_array,...
     * @return $this
     */
    public function withItemFeeList(...$ItemFeeList_array)
    {
        foreach ($ItemFeeList_array as $ItemFeeList) {
            $this->_fields['ItemFeeList']['FieldValue'][] = $ItemFeeList;
        }
        return $this;
    }
    /**
     * Get the value of the ItemFeeAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] ItemFeeAdjustmentList.
     */
    public function getItemFeeAdjustmentList()
    {
        if ($this->_fields['ItemFeeAdjustmentList']['FieldValue'] == null) {
            $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ItemFeeAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the ItemFeeAdjustmentList property.
     *
     * @param array itemFeeAdjustmentList
     * @return $this instance
     */
    public function setItemFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ItemFeeAdjustmentList.
     */
    public function unsetItemFeeAdjustmentList()
    {
        $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if ItemFeeAdjustmentList is set.
     *
     * @return true if ItemFeeAdjustmentList is set.
     */
    public function isSetItemFeeAdjustmentList()
    {
        return !empty($this->_fields['ItemFeeAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for ItemFeeAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent[] $ItemFeeAdjustmentList_array,...
     * @return $this
     */
    public function withItemFeeAdjustmentList(...$ItemFeeAdjustmentList_array)
    {
        foreach ($ItemFeeAdjustmentList_array as $ItemFeeAdjustmentList) {
            $this->_fields['ItemFeeAdjustmentList']['FieldValue'][] = $ItemFeeAdjustmentList;
        }
        return $this;
    }
    /**
     * Get the value of the ItemTaxWithheldList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelTaxWithheldComponent[] ItemTaxWithheldList.
     */
    public function getItemTaxWithheldList()
    {
        if ($this->_fields['ItemTaxWithheldList']['FieldValue'] == null) {
            $this->_fields['ItemTaxWithheldList']['FieldValue'] = array();
        }
        return $this->_fields['ItemTaxWithheldList']['FieldValue'];
    }
    /**
     * Set the value of the ItemTaxWithheldList property.
     *
     * @param array itemTaxWithheldList
     * @return $this instance
     */
    public function setItemTaxWithheldList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ItemTaxWithheldList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ItemTaxWithheldList.
     */
    public function unsetItemTaxWithheldList()
    {
        $this->_fields['ItemTaxWithheldList']['FieldValue'] = array();
    }
    /**
     * Check to see if ItemTaxWithheldList is set.
     *
     * @return true if ItemTaxWithheldList is set.
     */
    public function isSetItemTaxWithheldList()
    {
        return !empty($this->_fields['ItemTaxWithheldList']['FieldValue']);
    }
    /**
     * Add values for ItemTaxWithheldList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelTaxWithheldComponent[] $ItemTaxWithheldList_array,...
     * @return $this
     */
    public function withItemTaxWithheldList(...$ItemTaxWithheldList_array)
    {
        foreach ($ItemTaxWithheldList_array as $ItemTaxWithheldList) {
            $this->_fields['ItemTaxWithheldList']['FieldValue'][] = $ItemTaxWithheldList;
        }
        return $this;
    }
    /**
     * Get the value of the PromotionList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion[] PromotionList.
     */
    public function getPromotionList()
    {
        if ($this->_fields['PromotionList']['FieldValue'] == null) {
            $this->_fields['PromotionList']['FieldValue'] = array();
        }
        return $this->_fields['PromotionList']['FieldValue'];
    }
    /**
     * Set the value of the PromotionList property.
     *
     * @param array promotionList
     * @return $this instance
     */
    public function setPromotionList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PromotionList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PromotionList.
     */
    public function unsetPromotionList()
    {
        $this->_fields['PromotionList']['FieldValue'] = array();
    }
    /**
     * Check to see if PromotionList is set.
     *
     * @return true if PromotionList is set.
     */
    public function isSetPromotionList()
    {
        return !empty($this->_fields['PromotionList']['FieldValue']);
    }
    /**
     * Add values for PromotionList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion[] $PromotionList_array,...
     * @return $this
     */
    public function withPromotionList(...$PromotionList_array)
    {
        foreach ($PromotionList_array as $PromotionList) {
            $this->_fields['PromotionList']['FieldValue'][] = $PromotionList;
        }
        return $this;
    }
    /**
     * Get the value of the PromotionAdjustmentList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion[] PromotionAdjustmentList.
     */
    public function getPromotionAdjustmentList()
    {
        if ($this->_fields['PromotionAdjustmentList']['FieldValue'] == null) {
            $this->_fields['PromotionAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['PromotionAdjustmentList']['FieldValue'];
    }
    /**
     * Set the value of the PromotionAdjustmentList property.
     *
     * @param array promotionAdjustmentList
     * @return $this instance
     */
    public function setPromotionAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PromotionAdjustmentList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PromotionAdjustmentList.
     */
    public function unsetPromotionAdjustmentList()
    {
        $this->_fields['PromotionAdjustmentList']['FieldValue'] = array();
    }
    /**
     * Check to see if PromotionAdjustmentList is set.
     *
     * @return true if PromotionAdjustmentList is set.
     */
    public function isSetPromotionAdjustmentList()
    {
        return !empty($this->_fields['PromotionAdjustmentList']['FieldValue']);
    }
    /**
     * Add values for PromotionAdjustmentList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion[] $PromotionAdjustmentList_array,...
     * @return $this
     */
    public function withPromotionAdjustmentList(...$PromotionAdjustmentList_array)
    {
        foreach ($PromotionAdjustmentList_array as $PromotionAdjustmentList) {
            $this->_fields['PromotionAdjustmentList']['FieldValue'][] = $PromotionAdjustmentList;
        }
        return $this;
    }
    /**
     * Get the value of the CostOfPointsGranted property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency CostOfPointsGranted.
     */
    public function getCostOfPointsGranted()
    {
        return $this->_fields['CostOfPointsGranted']['FieldValue'];
    }
    /**
     * Set the value of the CostOfPointsGranted property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency costOfPointsGranted
     * @return $this instance
     */
    public function setCostOfPointsGranted($value)
    {
        $this->_fields['CostOfPointsGranted']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CostOfPointsGranted is set.
     *
     * @return true if CostOfPointsGranted is set.
     */
    public function isSetCostOfPointsGranted()
    {
        return !is_null($this->_fields['CostOfPointsGranted']['FieldValue']);
    }
    /**
     * Set the value of CostOfPointsGranted, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $CostOfPointsGranted
     * @return $this
     */
    public function withCostOfPointsGranted($CostOfPointsGranted)
    {
        $this->setCostOfPointsGranted($CostOfPointsGranted);
        return $this;
    }
    /**
     * Get the value of the CostOfPointsReturned property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency CostOfPointsReturned.
     */
    public function getCostOfPointsReturned()
    {
        return $this->_fields['CostOfPointsReturned']['FieldValue'];
    }
    /**
     * Set the value of the CostOfPointsReturned property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency costOfPointsReturned
     * @return $this instance
     */
    public function setCostOfPointsReturned($value)
    {
        $this->_fields['CostOfPointsReturned']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CostOfPointsReturned is set.
     *
     * @return true if CostOfPointsReturned is set.
     */
    public function isSetCostOfPointsReturned()
    {
        return !is_null($this->_fields['CostOfPointsReturned']['FieldValue']);
    }
    /**
     * Set the value of CostOfPointsReturned, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $CostOfPointsReturned
     * @return $this
     */
    public function withCostOfPointsReturned($CostOfPointsReturned)
    {
        $this->setCostOfPointsReturned($CostOfPointsReturned);
        return $this;
    }
}