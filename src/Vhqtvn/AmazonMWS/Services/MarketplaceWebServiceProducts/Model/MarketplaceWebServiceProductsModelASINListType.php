<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelASINListType
 * 
 * @property	\[]	$ASIN
 */
class MarketplaceWebServiceProductsModelASINListType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ASIN' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelString[] ASIN.
     */
    public function getASIN()
    {
        if ($this->_fields['ASIN']['FieldValue'] == null) {
            $this->_fields['ASIN']['FieldValue'] = array();
        }
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param array asin
     * @return $this 
     */
    public function setASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ASIN.
     */
    public function unsetASIN()
    {
        $this->_fields['ASIN']['FieldValue'] = array();
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !empty($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Add values for ASIN, return this.
     *
     * @param \[] $ASIN_array,...
     * @return $this
     */
    public function withASIN(...$ASIN_array)
    {
        foreach ($ASIN_array as $ASIN) {
            $this->_fields['ASIN']['FieldValue'][] = $ASIN;
        }
        return $this;
    }
}