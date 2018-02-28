<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelSellerSKUListType
 * 
 * @property	\[]	$SellerSKU
 */
class MarketplaceWebServiceProductsModelSellerSKUListType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelString[] SellerSKU.
     */
    public function getSellerSKU()
    {
        if ($this->_fields['SellerSKU']['FieldValue'] == null) {
            $this->_fields['SellerSKU']['FieldValue'] = array();
        }
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param array sellerSKU
     * @return $this 
     */
    public function setSellerSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear SellerSKU.
     */
    public function unsetSellerSKU()
    {
        $this->_fields['SellerSKU']['FieldValue'] = array();
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !empty($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Add values for SellerSKU, return this.
     *
     * @param \string[] $SellerSKU_array,...
     * @return $this
     */
    public function withSellerSKU(...$SellerSKU_array)
    {
        foreach ($SellerSKU_array as $SellerSKU) {
            $this->_fields['SellerSKU']['FieldValue'][] = $SellerSKU;
        }
        return $this;
    }
}