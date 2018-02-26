<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASINResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCategories[]	$Self
 */
class MarketplaceWebServiceProductsModelGetProductCategoriesForASINResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Self' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCategories::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the Self property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCategories[] Self.
     */
    public function getSelf()
    {
        if ($this->_fields['Self']['FieldValue'] == null) {
            $this->_fields['Self']['FieldValue'] = array();
        }
        return $this->_fields['Self']['FieldValue'];
    }
    /**
     * Set the value of the Self property.
     *
     * @param array self
     * @return $this 
     */
    public function setSelf($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Self']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Self.
     */
    public function unsetSelf()
    {
        $this->_fields['Self']['FieldValue'] = array();
    }
    /**
     * Check to see if Self is set.
     *
     * @return true if Self is set.
     */
    public function isSetSelf()
    {
        return !empty($this->_fields['Self']['FieldValue']);
    }
    /**
     * Add values for Self, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelCategories[] $Self_array,...
     * @return $this
     */
    public function withSelf(...$Self_array)
    {
        foreach ($Self_array as $Self) {
            $this->_fields['Self']['FieldValue'][] = $Self;
        }
        return $this;
    }
}