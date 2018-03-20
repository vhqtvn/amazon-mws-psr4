<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetailList
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetail[]	$FeeDetail
 */
class MarketplaceWebServiceProductsModelFeeDetailList extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('FeeDetail' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetail::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the FeeDetail property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetail[] FeeDetail.
     */
    public function getFeeDetail()
    {
        if ($this->_fields['FeeDetail']['FieldValue'] == null) {
            $this->_fields['FeeDetail']['FieldValue'] = array();
        }
        return $this->_fields['FeeDetail']['FieldValue'];
    }
    /**
     * Set the value of the FeeDetail property.
     *
     * @param array feeDetail
     * @return $this instance
     */
    public function setFeeDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FeeDetail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FeeDetail.
     */
    public function unsetFeeDetail()
    {
        $this->_fields['FeeDetail']['FieldValue'] = array();
    }
    /**
     * Check to see if FeeDetail is set.
     *
     * @return true if FeeDetail is set.
     */
    public function isSetFeeDetail()
    {
        return !empty($this->_fields['FeeDetail']['FieldValue']);
    }
    /**
     * Add values for FeeDetail, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeeDetail[] $FeeDetail_array,...
     * @return $this
     */
    public function withFeeDetail(...$FeeDetail_array)
    {
        foreach ($FeeDetail_array as $FeeDetail) {
            $this->_fields['FeeDetail']['FieldValue'][] = $FeeDetail;
        }
        return $this;
    }
}