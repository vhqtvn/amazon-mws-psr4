<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>ListParticipations: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations</li>
 * <li>ListMarketplaces: \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces</li>
 *
 * </ul>
 */
class MarketplaceWebServiceSellersModelListMarketplaceParticipationsByNextTokenResult extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ListParticipations' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations::class), 'ListMarketplaces' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces::class));
        parent::__construct($data);
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
     * @param nextToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
    /**
     * Get the value of the ListParticipations property.
     *
     * @return ListParticipations ListParticipations.
     */
    public function getListParticipations()
    {
        return $this->_fields['ListParticipations']['FieldValue'];
    }
    /**
     * Set the value of the ListParticipations property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations listParticipations
     * @return $this 
     */
    public function setListParticipations($value)
    {
        $this->_fields['ListParticipations']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListParticipations is set.
     *
     * @return true if ListParticipations is set.
     */
    public function isSetListParticipations()
    {
        return !is_null($this->_fields['ListParticipations']['FieldValue']);
    }
    /**
     * Set the value of ListParticipations, return this.
     *
     * @param listParticipations
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListParticipations($value)
    {
        $this->setListParticipations($value);
        return $this;
    }
    /**
     * Get the value of the ListMarketplaces property.
     *
     * @return ListMarketplaces ListMarketplaces.
     */
    public function getListMarketplaces()
    {
        return $this->_fields['ListMarketplaces']['FieldValue'];
    }
    /**
     * Set the value of the ListMarketplaces property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces listMarketplaces
     * @return $this 
     */
    public function setListMarketplaces($value)
    {
        $this->_fields['ListMarketplaces']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListMarketplaces is set.
     *
     * @return true if ListMarketplaces is set.
     */
    public function isSetListMarketplaces()
    {
        return !is_null($this->_fields['ListMarketplaces']['FieldValue']);
    }
    /**
     * Set the value of ListMarketplaces, return this.
     *
     * @param listMarketplaces
     *             The new value to set.
     *
     * @return $this .
     */
    public function withListMarketplaces($value)
    {
        $this->setListMarketplaces($value);
        return $this;
    }
}