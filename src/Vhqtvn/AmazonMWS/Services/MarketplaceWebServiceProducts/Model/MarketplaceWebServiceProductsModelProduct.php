<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelProduct
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType	$Identifiers
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelAttributeSetList	$AttributeSets
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelRelationshipList	$Relationships
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePricingType	$CompetitivePricing
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankList	$SalesRankings
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingList	$LowestOfferListings
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOffersList	$Offers
 */
class MarketplaceWebServiceProductsModelProduct extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Identifiers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType::class), 'AttributeSets' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelAttributeSetList::class), 'Relationships' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelRelationshipList::class), 'CompetitivePricing' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePricingType::class), 'SalesRankings' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankList::class), 'LowestOfferListings' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingList::class), 'Offers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOffersList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Identifiers property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType Identifiers.
     */
    public function getIdentifiers()
    {
        return $this->_fields['Identifiers']['FieldValue'];
    }
    /**
     * Set the value of the Identifiers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType identifiers
     * @return $this instance
     */
    public function setIdentifiers($value)
    {
        $this->_fields['Identifiers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Identifiers is set.
     *
     * @return true if Identifiers is set.
     */
    public function isSetIdentifiers()
    {
        return !is_null($this->_fields['Identifiers']['FieldValue']);
    }
    /**
     * Set the value of Identifiers, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelIdentifierType $Identifiers
     * @return $this
     */
    public function withIdentifiers($Identifiers)
    {
        $this->setIdentifiers($Identifiers);
        return $this;
    }
    /**
     * Get the value of the AttributeSets property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelAttributeSetList AttributeSets.
     */
    public function getAttributeSets()
    {
        return $this->_fields['AttributeSets']['FieldValue'];
    }
    /**
     * Set the value of the AttributeSets property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelAttributeSetList attributeSets
     * @return $this instance
     */
    public function setAttributeSets($value)
    {
        $this->_fields['AttributeSets']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AttributeSets is set.
     *
     * @return true if AttributeSets is set.
     */
    public function isSetAttributeSets()
    {
        return !is_null($this->_fields['AttributeSets']['FieldValue']);
    }
    /**
     * Set the value of AttributeSets, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelAttributeSetList $AttributeSets
     * @return $this
     */
    public function withAttributeSets($AttributeSets)
    {
        $this->setAttributeSets($AttributeSets);
        return $this;
    }
    /**
     * Get the value of the Relationships property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelRelationshipList Relationships.
     */
    public function getRelationships()
    {
        return $this->_fields['Relationships']['FieldValue'];
    }
    /**
     * Set the value of the Relationships property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelRelationshipList relationships
     * @return $this instance
     */
    public function setRelationships($value)
    {
        $this->_fields['Relationships']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Relationships is set.
     *
     * @return true if Relationships is set.
     */
    public function isSetRelationships()
    {
        return !is_null($this->_fields['Relationships']['FieldValue']);
    }
    /**
     * Set the value of Relationships, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelRelationshipList $Relationships
     * @return $this
     */
    public function withRelationships($Relationships)
    {
        $this->setRelationships($Relationships);
        return $this;
    }
    /**
     * Get the value of the CompetitivePricing property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePricingType CompetitivePricing.
     */
    public function getCompetitivePricing()
    {
        return $this->_fields['CompetitivePricing']['FieldValue'];
    }
    /**
     * Set the value of the CompetitivePricing property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePricingType competitivePricing
     * @return $this instance
     */
    public function setCompetitivePricing($value)
    {
        $this->_fields['CompetitivePricing']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CompetitivePricing is set.
     *
     * @return true if CompetitivePricing is set.
     */
    public function isSetCompetitivePricing()
    {
        return !is_null($this->_fields['CompetitivePricing']['FieldValue']);
    }
    /**
     * Set the value of CompetitivePricing, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePricingType $CompetitivePricing
     * @return $this
     */
    public function withCompetitivePricing($CompetitivePricing)
    {
        $this->setCompetitivePricing($CompetitivePricing);
        return $this;
    }
    /**
     * Get the value of the SalesRankings property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankList SalesRankings.
     */
    public function getSalesRankings()
    {
        return $this->_fields['SalesRankings']['FieldValue'];
    }
    /**
     * Set the value of the SalesRankings property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankList salesRankings
     * @return $this instance
     */
    public function setSalesRankings($value)
    {
        $this->_fields['SalesRankings']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesRankings is set.
     *
     * @return true if SalesRankings is set.
     */
    public function isSetSalesRankings()
    {
        return !is_null($this->_fields['SalesRankings']['FieldValue']);
    }
    /**
     * Set the value of SalesRankings, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSalesRankList $SalesRankings
     * @return $this
     */
    public function withSalesRankings($SalesRankings)
    {
        $this->setSalesRankings($SalesRankings);
        return $this;
    }
    /**
     * Get the value of the LowestOfferListings property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingList LowestOfferListings.
     */
    public function getLowestOfferListings()
    {
        return $this->_fields['LowestOfferListings']['FieldValue'];
    }
    /**
     * Set the value of the LowestOfferListings property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingList lowestOfferListings
     * @return $this instance
     */
    public function setLowestOfferListings($value)
    {
        $this->_fields['LowestOfferListings']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LowestOfferListings is set.
     *
     * @return true if LowestOfferListings is set.
     */
    public function isSetLowestOfferListings()
    {
        return !is_null($this->_fields['LowestOfferListings']['FieldValue']);
    }
    /**
     * Set the value of LowestOfferListings, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingList $LowestOfferListings
     * @return $this
     */
    public function withLowestOfferListings($LowestOfferListings)
    {
        $this->setLowestOfferListings($LowestOfferListings);
        return $this;
    }
    /**
     * Get the value of the Offers property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOffersList Offers.
     */
    public function getOffers()
    {
        return $this->_fields['Offers']['FieldValue'];
    }
    /**
     * Set the value of the Offers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOffersList offers
     * @return $this instance
     */
    public function setOffers($value)
    {
        $this->_fields['Offers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Offers is set.
     *
     * @return true if Offers is set.
     */
    public function isSetOffers()
    {
        return !is_null($this->_fields['Offers']['FieldValue']);
    }
    /**
     * Set the value of Offers, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelOffersList $Offers
     * @return $this
     */
    public function withOffers($Offers)
    {
        $this->setOffers($Offers);
        return $this;
    }
}