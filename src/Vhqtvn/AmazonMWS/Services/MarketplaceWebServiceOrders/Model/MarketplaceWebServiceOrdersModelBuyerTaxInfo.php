<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelBuyerTaxInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>CompanyLegalName: string</li>
 * <li>TaxingRegion: string</li>
 * <li>TaxClassifications: array</li>
 *
 * </ul>
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
     * @return String CompanyLegalName.
     */
    public function getCompanyLegalName()
    {
        return $this->_fields['CompanyLegalName']['FieldValue'];
    }
    /**
     * Set the value of the CompanyLegalName property.
     *
     * @param string companyLegalName
     * @return $this 
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
     * @param companyLegalName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCompanyLegalName($value)
    {
        $this->setCompanyLegalName($value);
        return $this;
    }
    /**
     * Get the value of the TaxingRegion property.
     *
     * @return String TaxingRegion.
     */
    public function getTaxingRegion()
    {
        return $this->_fields['TaxingRegion']['FieldValue'];
    }
    /**
     * Set the value of the TaxingRegion property.
     *
     * @param string taxingRegion
     * @return $this 
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
     * @param taxingRegion
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTaxingRegion($value)
    {
        $this->setTaxingRegion($value);
        return $this;
    }
    /**
     * Get the value of the TaxClassifications property.
     *
     * @return List<TaxClassification> TaxClassifications.
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
     * @return $this 
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
     * @param taxClassifications
     *             New values to add.
     *
     * @return $this .
     */
    public function withTaxClassifications()
    {
        foreach (func_get_args() as $TaxClassifications) {
            $this->_fields['TaxClassifications']['FieldValue'][] = $TaxClassifications;
        }
        return $this;
    }
}