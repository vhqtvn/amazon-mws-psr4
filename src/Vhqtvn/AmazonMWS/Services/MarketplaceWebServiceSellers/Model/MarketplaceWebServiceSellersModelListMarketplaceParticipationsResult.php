<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaceParticipationsResult
 * 
 * @property	string	$NextToken
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations	$ListParticipations
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces	$ListMarketplaces
 */
class MarketplaceWebServiceSellersModelListMarketplaceParticipationsResult extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'ListParticipations' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations::class), 'ListMarketplaces' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the NextToken property.
     *
     * @return \string NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this instance
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
    /**
     * Get the value of the ListParticipations property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations ListParticipations.
     */
    public function getListParticipations()
    {
        return $this->_fields['ListParticipations']['FieldValue'];
    }
    /**
     * Set the value of the ListParticipations property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations listParticipations
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations $ListParticipations
     * @return $this
     */
    public function withListParticipations($ListParticipations)
    {
        $this->setListParticipations($ListParticipations);
        return $this;
    }
    /**
     * Get the value of the ListMarketplaces property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces ListMarketplaces.
     */
    public function getListMarketplaces()
    {
        return $this->_fields['ListMarketplaces']['FieldValue'];
    }
    /**
     * Set the value of the ListMarketplaces property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces listMarketplaces
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListMarketplaces $ListMarketplaces
     * @return $this
     */
    public function withListMarketplaces($ListMarketplaces)
    {
        $this->setListMarketplaces($ListMarketplaces);
        return $this;
    }
}