<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequest
 * 
 * @property	string	$MarketplaceId
 * @property	string	$IdType
 * @property	string	$IdValue
 * @property	bool	$IsAmazonFulfilled
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees	$PriceToEstimateFees
 * @property	string	$Identifier
 */
class MarketplaceWebServiceProductsModelFeesEstimateRequest extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'IdType' => array('FieldValue' => null, 'FieldType' => 'string'), 'IdValue' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsAmazonFulfilled' => array('FieldValue' => null, 'FieldType' => 'bool'), 'PriceToEstimateFees' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees::class), 'Identifier' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
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
     * Get the value of the IdType property.
     *
     * @return String IdType.
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }
    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @return $this 
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set.
     */
    public function isSetIdType()
    {
        return !is_null($this->_fields['IdType']['FieldValue']);
    }
    /**
     * Set the value of IdType, return this.
     *
     * @param idType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIdType($value)
    {
        $this->setIdType($value);
        return $this;
    }
    /**
     * Get the value of the IdValue property.
     *
     * @return String IdValue.
     */
    public function getIdValue()
    {
        return $this->_fields['IdValue']['FieldValue'];
    }
    /**
     * Set the value of the IdValue property.
     *
     * @param string idValue
     * @return $this 
     */
    public function setIdValue($value)
    {
        $this->_fields['IdValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IdValue is set.
     *
     * @return true if IdValue is set.
     */
    public function isSetIdValue()
    {
        return !is_null($this->_fields['IdValue']['FieldValue']);
    }
    /**
     * Set the value of IdValue, return this.
     *
     * @param idValue
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIdValue($value)
    {
        $this->setIdValue($value);
        return $this;
    }
    /**
     * Check the value of IsAmazonFulfilled.
     *
     * @return true if IsAmazonFulfilled is set to true.
     */
    public function isIsAmazonFulfilled()
    {
        return !is_null($this->_fields['IsAmazonFulfilled']['FieldValue']) && $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }
    /**
     * Get the value of the IsAmazonFulfilled property.
     *
     * @return Boolean IsAmazonFulfilled.
     */
    public function getIsAmazonFulfilled()
    {
        return $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }
    /**
     * Set the value of the IsAmazonFulfilled property.
     *
     * @param bool isAmazonFulfilled
     * @return $this 
     */
    public function setIsAmazonFulfilled($value)
    {
        $this->_fields['IsAmazonFulfilled']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsAmazonFulfilled is set.
     *
     * @return true if IsAmazonFulfilled is set.
     */
    public function isSetIsAmazonFulfilled()
    {
        return !is_null($this->_fields['IsAmazonFulfilled']['FieldValue']);
    }
    /**
     * Set the value of IsAmazonFulfilled, return this.
     *
     * @param isAmazonFulfilled
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIsAmazonFulfilled($value)
    {
        $this->setIsAmazonFulfilled($value);
        return $this;
    }
    /**
     * Get the value of the PriceToEstimateFees property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees PriceToEstimateFees.
     */
    public function getPriceToEstimateFees()
    {
        return $this->_fields['PriceToEstimateFees']['FieldValue'];
    }
    /**
     * Set the value of the PriceToEstimateFees property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees priceToEstimateFees
     * @return $this 
     */
    public function setPriceToEstimateFees($value)
    {
        $this->_fields['PriceToEstimateFees']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PriceToEstimateFees is set.
     *
     * @return true if PriceToEstimateFees is set.
     */
    public function isSetPriceToEstimateFees()
    {
        return !is_null($this->_fields['PriceToEstimateFees']['FieldValue']);
    }
    /**
     * Set the value of PriceToEstimateFees, return this.
     *
     * @param priceToEstimateFees
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPriceToEstimateFees($value)
    {
        $this->setPriceToEstimateFees($value);
        return $this;
    }
    /**
     * Get the value of the Identifier property.
     *
     * @return String Identifier.
     */
    public function getIdentifier()
    {
        return $this->_fields['Identifier']['FieldValue'];
    }
    /**
     * Set the value of the Identifier property.
     *
     * @param string identifier
     * @return $this 
     */
    public function setIdentifier($value)
    {
        $this->_fields['Identifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Identifier is set.
     *
     * @return true if Identifier is set.
     */
    public function isSetIdentifier()
    {
        return !is_null($this->_fields['Identifier']['FieldValue']);
    }
    /**
     * Set the value of Identifier, return this.
     *
     * @param identifier
     *             The new value to set.
     *
     * @return $this .
     */
    public function withIdentifier($value)
    {
        $this->setIdentifier($value);
        return $this;
    }
}