<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendationsResult
 * 
 * @property	string	$InventoryRecommendationsLastUpdated
 * @property	string	$SelectionRecommendationsLastUpdated
 * @property	string	$FulfillmentRecommendationsLastUpdated
 * @property	string	$PricingRecommendationsLastUpdated
 * @property	string	$GlobalSellingRecommendationsLastUpdated
 * @property	string	$AdvertisingRecommendationsLastUpdated
 */
class MwsRecommendationsSectionServiceModelGetLastUpdatedTimeForRecommendationsResult extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InventoryRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'SelectionRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'PricingRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'GlobalSellingRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'AdvertisingRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the InventoryRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar InventoryRecommendationsLastUpdated.
     */
    public function getInventoryRecommendationsLastUpdated()
    {
        return $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the InventoryRecommendationsLastUpdated property.
     *
     * @param string inventoryRecommendationsLastUpdated
     * @return $this 
     */
    public function setInventoryRecommendationsLastUpdated($value)
    {
        $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InventoryRecommendationsLastUpdated is set.
     *
     * @return true if InventoryRecommendationsLastUpdated is set.
     */
    public function isSetInventoryRecommendationsLastUpdated()
    {
        return !is_null($this->_fields['InventoryRecommendationsLastUpdated']['FieldValue']);
    }
    /**
     * Set the value of InventoryRecommendationsLastUpdated, return this.
     *
     * @param string $InventoryRecommendationsLastUpdated
     * @return $this
     */
    public function withInventoryRecommendationsLastUpdated($InventoryRecommendationsLastUpdated)
    {
        $this->setInventoryRecommendationsLastUpdated($InventoryRecommendationsLastUpdated);
        return $this;
    }
    /**
     * Get the value of the SelectionRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar SelectionRecommendationsLastUpdated.
     */
    public function getSelectionRecommendationsLastUpdated()
    {
        return $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the SelectionRecommendationsLastUpdated property.
     *
     * @param string selectionRecommendationsLastUpdated
     * @return $this 
     */
    public function setSelectionRecommendationsLastUpdated($value)
    {
        $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SelectionRecommendationsLastUpdated is set.
     *
     * @return true if SelectionRecommendationsLastUpdated is set.
     */
    public function isSetSelectionRecommendationsLastUpdated()
    {
        return !is_null($this->_fields['SelectionRecommendationsLastUpdated']['FieldValue']);
    }
    /**
     * Set the value of SelectionRecommendationsLastUpdated, return this.
     *
     * @param string $SelectionRecommendationsLastUpdated
     * @return $this
     */
    public function withSelectionRecommendationsLastUpdated($SelectionRecommendationsLastUpdated)
    {
        $this->setSelectionRecommendationsLastUpdated($SelectionRecommendationsLastUpdated);
        return $this;
    }
    /**
     * Get the value of the FulfillmentRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar FulfillmentRecommendationsLastUpdated.
     */
    public function getFulfillmentRecommendationsLastUpdated()
    {
        return $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentRecommendationsLastUpdated property.
     *
     * @param string fulfillmentRecommendationsLastUpdated
     * @return $this 
     */
    public function setFulfillmentRecommendationsLastUpdated($value)
    {
        $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentRecommendationsLastUpdated is set.
     *
     * @return true if FulfillmentRecommendationsLastUpdated is set.
     */
    public function isSetFulfillmentRecommendationsLastUpdated()
    {
        return !is_null($this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentRecommendationsLastUpdated, return this.
     *
     * @param string $FulfillmentRecommendationsLastUpdated
     * @return $this
     */
    public function withFulfillmentRecommendationsLastUpdated($FulfillmentRecommendationsLastUpdated)
    {
        $this->setFulfillmentRecommendationsLastUpdated($FulfillmentRecommendationsLastUpdated);
        return $this;
    }
    /**
     * Get the value of the PricingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar PricingRecommendationsLastUpdated.
     */
    public function getPricingRecommendationsLastUpdated()
    {
        return $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the PricingRecommendationsLastUpdated property.
     *
     * @param string pricingRecommendationsLastUpdated
     * @return $this 
     */
    public function setPricingRecommendationsLastUpdated($value)
    {
        $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PricingRecommendationsLastUpdated is set.
     *
     * @return true if PricingRecommendationsLastUpdated is set.
     */
    public function isSetPricingRecommendationsLastUpdated()
    {
        return !is_null($this->_fields['PricingRecommendationsLastUpdated']['FieldValue']);
    }
    /**
     * Set the value of PricingRecommendationsLastUpdated, return this.
     *
     * @param string $PricingRecommendationsLastUpdated
     * @return $this
     */
    public function withPricingRecommendationsLastUpdated($PricingRecommendationsLastUpdated)
    {
        $this->setPricingRecommendationsLastUpdated($PricingRecommendationsLastUpdated);
        return $this;
    }
    /**
     * Get the value of the GlobalSellingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar GlobalSellingRecommendationsLastUpdated.
     */
    public function getGlobalSellingRecommendationsLastUpdated()
    {
        return $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the GlobalSellingRecommendationsLastUpdated property.
     *
     * @param string globalSellingRecommendationsLastUpdated
     * @return $this 
     */
    public function setGlobalSellingRecommendationsLastUpdated($value)
    {
        $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GlobalSellingRecommendationsLastUpdated is set.
     *
     * @return true if GlobalSellingRecommendationsLastUpdated is set.
     */
    public function isSetGlobalSellingRecommendationsLastUpdated()
    {
        return !is_null($this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue']);
    }
    /**
     * Set the value of GlobalSellingRecommendationsLastUpdated, return this.
     *
     * @param string $GlobalSellingRecommendationsLastUpdated
     * @return $this
     */
    public function withGlobalSellingRecommendationsLastUpdated($GlobalSellingRecommendationsLastUpdated)
    {
        $this->setGlobalSellingRecommendationsLastUpdated($GlobalSellingRecommendationsLastUpdated);
        return $this;
    }
    /**
     * Get the value of the AdvertisingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar AdvertisingRecommendationsLastUpdated.
     */
    public function getAdvertisingRecommendationsLastUpdated()
    {
        return $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the AdvertisingRecommendationsLastUpdated property.
     *
     * @param string advertisingRecommendationsLastUpdated
     * @return $this 
     */
    public function setAdvertisingRecommendationsLastUpdated($value)
    {
        $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AdvertisingRecommendationsLastUpdated is set.
     *
     * @return true if AdvertisingRecommendationsLastUpdated is set.
     */
    public function isSetAdvertisingRecommendationsLastUpdated()
    {
        return !is_null($this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue']);
    }
    /**
     * Set the value of AdvertisingRecommendationsLastUpdated, return this.
     *
     * @param string $AdvertisingRecommendationsLastUpdated
     * @return $this
     */
    public function withAdvertisingRecommendationsLastUpdated($AdvertisingRecommendationsLastUpdated)
    {
        $this->setAdvertisingRecommendationsLastUpdated($AdvertisingRecommendationsLastUpdated);
        return $this;
    }
}