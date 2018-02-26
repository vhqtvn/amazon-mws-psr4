<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceType[]	$CompetitivePrice
 */
class MarketplaceWebServiceProductsModelCompetitivePriceList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CompetitivePrice' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceType::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the CompetitivePrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceType[] CompetitivePrice.
     */
    public function getCompetitivePrice()
    {
        if ($this->_fields['CompetitivePrice']['FieldValue'] == null) {
            $this->_fields['CompetitivePrice']['FieldValue'] = array();
        }
        return $this->_fields['CompetitivePrice']['FieldValue'];
    }
    /**
     * Set the value of the CompetitivePrice property.
     *
     * @param array competitivePrice
     * @return $this 
     */
    public function setCompetitivePrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['CompetitivePrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear CompetitivePrice.
     */
    public function unsetCompetitivePrice()
    {
        $this->_fields['CompetitivePrice']['FieldValue'] = array();
    }
    /**
     * Check to see if CompetitivePrice is set.
     *
     * @return true if CompetitivePrice is set.
     */
    public function isSetCompetitivePrice()
    {
        return !empty($this->_fields['CompetitivePrice']['FieldValue']);
    }
    /**
     * Add values for CompetitivePrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCompetitivePriceType[] $CompetitivePrice_array,...
     * @return $this
     */
    public function withCompetitivePrice(...$CompetitivePrice_array)
    {
        foreach ($CompetitivePrice_array as $CompetitivePrice) {
            $this->_fields['CompetitivePrice']['FieldValue'][] = $CompetitivePrice;
        }
        return $this;
    }
}