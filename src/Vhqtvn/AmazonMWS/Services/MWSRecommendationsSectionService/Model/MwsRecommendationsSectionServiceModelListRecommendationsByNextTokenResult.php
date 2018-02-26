<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelInventoryRecommendation[]	$InventoryRecommendations
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelSelectionRecommendation[]	$SelectionRecommendations
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPricingRecommendation[]	$PricingRecommendations
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelFulfillmentRecommendation[]	$FulfillmentRecommendations
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListingQualityRecommendation[]	$ListingQualityRecommendations
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGlobalSellingRecommendation[]	$GlobalSellingRecommendations
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelAdvertisingRecommendation[]	$AdvertisingRecommendations
 * @property	string	$NextToken
 */
class MwsRecommendationsSectionServiceModelListRecommendationsByNextTokenResult extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('InventoryRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelInventoryRecommendation::class), 'ListMemberName' => 'member'), 'SelectionRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelSelectionRecommendation::class), 'ListMemberName' => 'member'), 'PricingRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPricingRecommendation::class), 'ListMemberName' => 'member'), 'FulfillmentRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelFulfillmentRecommendation::class), 'ListMemberName' => 'member'), 'ListingQualityRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListingQualityRecommendation::class), 'ListMemberName' => 'member'), 'GlobalSellingRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGlobalSellingRecommendation::class), 'ListMemberName' => 'member'), 'AdvertisingRecommendations' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelAdvertisingRecommendation::class), 'ListMemberName' => 'member'), 'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the InventoryRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelInventoryRecommendation[] InventoryRecommendations.
     */
    public function getInventoryRecommendations()
    {
        if ($this->_fields['InventoryRecommendations']['FieldValue'] == null) {
            $this->_fields['InventoryRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['InventoryRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the InventoryRecommendations property.
     *
     * @param array inventoryRecommendations
     * @return $this 
     */
    public function setInventoryRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['InventoryRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear InventoryRecommendations.
     */
    public function unsetInventoryRecommendations()
    {
        $this->_fields['InventoryRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if InventoryRecommendations is set.
     *
     * @return true if InventoryRecommendations is set.
     */
    public function isSetInventoryRecommendations()
    {
        return !empty($this->_fields['InventoryRecommendations']['FieldValue']);
    }
    /**
     * Add values for InventoryRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelInventoryRecommendation[] $InventoryRecommendations_array,...
     * @return $this
     */
    public function withInventoryRecommendations(...$InventoryRecommendations_array)
    {
        foreach ($InventoryRecommendations_array as $InventoryRecommendations) {
            $this->_fields['InventoryRecommendations']['FieldValue'][] = $InventoryRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the SelectionRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelSelectionRecommendation[] SelectionRecommendations.
     */
    public function getSelectionRecommendations()
    {
        if ($this->_fields['SelectionRecommendations']['FieldValue'] == null) {
            $this->_fields['SelectionRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['SelectionRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the SelectionRecommendations property.
     *
     * @param array selectionRecommendations
     * @return $this 
     */
    public function setSelectionRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SelectionRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SelectionRecommendations.
     */
    public function unsetSelectionRecommendations()
    {
        $this->_fields['SelectionRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if SelectionRecommendations is set.
     *
     * @return true if SelectionRecommendations is set.
     */
    public function isSetSelectionRecommendations()
    {
        return !empty($this->_fields['SelectionRecommendations']['FieldValue']);
    }
    /**
     * Add values for SelectionRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelSelectionRecommendation[] $SelectionRecommendations_array,...
     * @return $this
     */
    public function withSelectionRecommendations(...$SelectionRecommendations_array)
    {
        foreach ($SelectionRecommendations_array as $SelectionRecommendations) {
            $this->_fields['SelectionRecommendations']['FieldValue'][] = $SelectionRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the PricingRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPricingRecommendation[] PricingRecommendations.
     */
    public function getPricingRecommendations()
    {
        if ($this->_fields['PricingRecommendations']['FieldValue'] == null) {
            $this->_fields['PricingRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['PricingRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the PricingRecommendations property.
     *
     * @param array pricingRecommendations
     * @return $this 
     */
    public function setPricingRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PricingRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear PricingRecommendations.
     */
    public function unsetPricingRecommendations()
    {
        $this->_fields['PricingRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if PricingRecommendations is set.
     *
     * @return true if PricingRecommendations is set.
     */
    public function isSetPricingRecommendations()
    {
        return !empty($this->_fields['PricingRecommendations']['FieldValue']);
    }
    /**
     * Add values for PricingRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelPricingRecommendation[] $PricingRecommendations_array,...
     * @return $this
     */
    public function withPricingRecommendations(...$PricingRecommendations_array)
    {
        foreach ($PricingRecommendations_array as $PricingRecommendations) {
            $this->_fields['PricingRecommendations']['FieldValue'][] = $PricingRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the FulfillmentRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelFulfillmentRecommendation[] FulfillmentRecommendations.
     */
    public function getFulfillmentRecommendations()
    {
        if ($this->_fields['FulfillmentRecommendations']['FieldValue'] == null) {
            $this->_fields['FulfillmentRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['FulfillmentRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentRecommendations property.
     *
     * @param array fulfillmentRecommendations
     * @return $this 
     */
    public function setFulfillmentRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FulfillmentRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FulfillmentRecommendations.
     */
    public function unsetFulfillmentRecommendations()
    {
        $this->_fields['FulfillmentRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if FulfillmentRecommendations is set.
     *
     * @return true if FulfillmentRecommendations is set.
     */
    public function isSetFulfillmentRecommendations()
    {
        return !empty($this->_fields['FulfillmentRecommendations']['FieldValue']);
    }
    /**
     * Add values for FulfillmentRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelFulfillmentRecommendation[] $FulfillmentRecommendations_array,...
     * @return $this
     */
    public function withFulfillmentRecommendations(...$FulfillmentRecommendations_array)
    {
        foreach ($FulfillmentRecommendations_array as $FulfillmentRecommendations) {
            $this->_fields['FulfillmentRecommendations']['FieldValue'][] = $FulfillmentRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the ListingQualityRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListingQualityRecommendation[] ListingQualityRecommendations.
     */
    public function getListingQualityRecommendations()
    {
        if ($this->_fields['ListingQualityRecommendations']['FieldValue'] == null) {
            $this->_fields['ListingQualityRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['ListingQualityRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the ListingQualityRecommendations property.
     *
     * @param array listingQualityRecommendations
     * @return $this 
     */
    public function setListingQualityRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ListingQualityRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ListingQualityRecommendations.
     */
    public function unsetListingQualityRecommendations()
    {
        $this->_fields['ListingQualityRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if ListingQualityRecommendations is set.
     *
     * @return true if ListingQualityRecommendations is set.
     */
    public function isSetListingQualityRecommendations()
    {
        return !empty($this->_fields['ListingQualityRecommendations']['FieldValue']);
    }
    /**
     * Add values for ListingQualityRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelListingQualityRecommendation[] $ListingQualityRecommendations_array,...
     * @return $this
     */
    public function withListingQualityRecommendations(...$ListingQualityRecommendations_array)
    {
        foreach ($ListingQualityRecommendations_array as $ListingQualityRecommendations) {
            $this->_fields['ListingQualityRecommendations']['FieldValue'][] = $ListingQualityRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the GlobalSellingRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGlobalSellingRecommendation[] GlobalSellingRecommendations.
     */
    public function getGlobalSellingRecommendations()
    {
        if ($this->_fields['GlobalSellingRecommendations']['FieldValue'] == null) {
            $this->_fields['GlobalSellingRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['GlobalSellingRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the GlobalSellingRecommendations property.
     *
     * @param array globalSellingRecommendations
     * @return $this 
     */
    public function setGlobalSellingRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GlobalSellingRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear GlobalSellingRecommendations.
     */
    public function unsetGlobalSellingRecommendations()
    {
        $this->_fields['GlobalSellingRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if GlobalSellingRecommendations is set.
     *
     * @return true if GlobalSellingRecommendations is set.
     */
    public function isSetGlobalSellingRecommendations()
    {
        return !empty($this->_fields['GlobalSellingRecommendations']['FieldValue']);
    }
    /**
     * Add values for GlobalSellingRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelGlobalSellingRecommendation[] $GlobalSellingRecommendations_array,...
     * @return $this
     */
    public function withGlobalSellingRecommendations(...$GlobalSellingRecommendations_array)
    {
        foreach ($GlobalSellingRecommendations_array as $GlobalSellingRecommendations) {
            $this->_fields['GlobalSellingRecommendations']['FieldValue'][] = $GlobalSellingRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the AdvertisingRecommendations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelAdvertisingRecommendation[] AdvertisingRecommendations.
     */
    public function getAdvertisingRecommendations()
    {
        if ($this->_fields['AdvertisingRecommendations']['FieldValue'] == null) {
            $this->_fields['AdvertisingRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['AdvertisingRecommendations']['FieldValue'];
    }
    /**
     * Set the value of the AdvertisingRecommendations property.
     *
     * @param array advertisingRecommendations
     * @return $this 
     */
    public function setAdvertisingRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['AdvertisingRecommendations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear AdvertisingRecommendations.
     */
    public function unsetAdvertisingRecommendations()
    {
        $this->_fields['AdvertisingRecommendations']['FieldValue'] = array();
    }
    /**
     * Check to see if AdvertisingRecommendations is set.
     *
     * @return true if AdvertisingRecommendations is set.
     */
    public function isSetAdvertisingRecommendations()
    {
        return !empty($this->_fields['AdvertisingRecommendations']['FieldValue']);
    }
    /**
     * Add values for AdvertisingRecommendations, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelAdvertisingRecommendation[] $AdvertisingRecommendations_array,...
     * @return $this
     */
    public function withAdvertisingRecommendations(...$AdvertisingRecommendations_array)
    {
        foreach ($AdvertisingRecommendations_array as $AdvertisingRecommendations) {
            $this->_fields['AdvertisingRecommendations']['FieldValue'][] = $AdvertisingRecommendations;
        }
        return $this;
    }
    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param string $NextToken
     * @return $this
     */
    public function withNextToken($NextToken)
    {
        $this->setNextToken($NextToken);
        return $this;
    }
}