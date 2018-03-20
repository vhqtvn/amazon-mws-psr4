<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo
 * 
 * @property	string	$CompanyLegalName
 * @property	string	$TaxingRegion
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxClassification[]	$TaxClassifications
 */
class MarketplaceWebServiceOrdersModelBuyerTaxInfo extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CompanyLegalName' => array('FieldValue' => null, 'FieldType' => 'string'), 'TaxingRegion' => array('FieldValue' => null, 'FieldType' => 'string'), 'TaxClassifications' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxClassification::class), 'ListMemberName' => 'TaxClassification'));
        parent::__construct($data);
    }
    /**
     * Get the value of the CompanyLegalName property.
     *
     * @return \string CompanyLegalName.
     */
    public function getCompanyLegalName()
    {
        return $this->_fields['CompanyLegalName']['FieldValue'];
    }
    /**
     * Set the value of the CompanyLegalName property.
     *
     * @param string companyLegalName
     * @return $this instance
     */
    public function setCompanyLegalName($value)
    {
        $this->_fields['CompanyLegalName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CompanyLegalName is set.
     *
     * @return true if CompanyLegalName is set.
     */
    public function isSetCompanyLegalName()
    {
        return !is_null($this->_fields['CompanyLegalName']['FieldValue']);
    }
    /**
     * Set the value of CompanyLegalName, return this.
     *
     * @param string $CompanyLegalName
     * @return $this
     */
    public function withCompanyLegalName($CompanyLegalName)
    {
        $this->setCompanyLegalName($CompanyLegalName);
        return $this;
    }
    /**
     * Get the value of the TaxingRegion property.
     *
     * @return \string TaxingRegion.
     */
    public function getTaxingRegion()
    {
        return $this->_fields['TaxingRegion']['FieldValue'];
    }
    /**
     * Set the value of the TaxingRegion property.
     *
     * @param string taxingRegion
     * @return $this instance
     */
    public function setTaxingRegion($value)
    {
        $this->_fields['TaxingRegion']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TaxingRegion is set.
     *
     * @return true if TaxingRegion is set.
     */
    public function isSetTaxingRegion()
    {
        return !is_null($this->_fields['TaxingRegion']['FieldValue']);
    }
    /**
     * Set the value of TaxingRegion, return this.
     *
     * @param string $TaxingRegion
     * @return $this
     */
    public function withTaxingRegion($TaxingRegion)
    {
        $this->setTaxingRegion($TaxingRegion);
        return $this;
    }
    /**
     * Get the value of the TaxClassifications property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxClassification[] TaxClassifications.
     */
    public function getTaxClassifications()
    {
        if ($this->_fields['TaxClassifications']['FieldValue'] == null) {
            $this->_fields['TaxClassifications']['FieldValue'] = array();
        }
        return $this->_fields['TaxClassifications']['FieldValue'];
    }
    /**
     * Set the value of the TaxClassifications property.
     *
     * @param array taxClassifications
     * @return $this instance
     */
    public function setTaxClassifications($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TaxClassifications']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear TaxClassifications.
     */
    public function unsetTaxClassifications()
    {
        $this->_fields['TaxClassifications']['FieldValue'] = array();
    }
    /**
     * Check to see if TaxClassifications is set.
     *
     * @return true if TaxClassifications is set.
     */
    public function isSetTaxClassifications()
    {
        return !empty($this->_fields['TaxClassifications']['FieldValue']);
    }
    /**
     * Add values for TaxClassifications, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelTaxClassification[] $TaxClassifications_array,...
     * @return $this
     */
    public function withTaxClassifications(...$TaxClassifications_array)
    {
        foreach ($TaxClassifications_array as $TaxClassifications) {
            $this->_fields['TaxClassifications']['FieldValue'][] = $TaxClassifications;
        }
        return $this;
    }
}