<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelTaxWithheldComponent
 * 
 * @property	string	$TaxCollectionModel
 * @property	array	$TaxesWithheld
 */
class MwsFinancesServiceModelTaxWithheldComponent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TaxCollectionModel' => array('FieldValue' => null, 'FieldType' => 'string'), 'TaxesWithheld' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'ListMemberName' => 'ChargeComponent'));
        parent::__construct($data);
    }
    /**
     * Get the value of the TaxCollectionModel property.
     *
     * @return String TaxCollectionModel.
     */
    public function getTaxCollectionModel()
    {
        return $this->_fields['TaxCollectionModel']['FieldValue'];
    }
    /**
     * Set the value of the TaxCollectionModel property.
     *
     * @param string taxCollectionModel
     * @return $this 
     */
    public function setTaxCollectionModel($value)
    {
        $this->_fields['TaxCollectionModel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TaxCollectionModel is set.
     *
     * @return true if TaxCollectionModel is set.
     */
    public function isSetTaxCollectionModel()
    {
        return !is_null($this->_fields['TaxCollectionModel']['FieldValue']);
    }
    /**
     * Set the value of TaxCollectionModel, return this.
     *
     * @param string $TaxCollectionModel
     * @return $this
     */
    public function withTaxCollectionModel($TaxCollectionModel)
    {
        $this->setTaxCollectionModel($TaxCollectionModel);
        return $this;
    }
    /**
     * Get the value of the TaxesWithheld property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent[] TaxesWithheld.
     */
    public function getTaxesWithheld()
    {
        if ($this->_fields['TaxesWithheld']['FieldValue'] == null) {
            $this->_fields['TaxesWithheld']['FieldValue'] = array();
        }
        return $this->_fields['TaxesWithheld']['FieldValue'];
    }
    /**
     * Set the value of the TaxesWithheld property.
     *
     * @param array taxesWithheld
     * @return $this 
     */
    public function setTaxesWithheld($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TaxesWithheld']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear TaxesWithheld.
     */
    public function unsetTaxesWithheld()
    {
        $this->_fields['TaxesWithheld']['FieldValue'] = array();
    }
    /**
     * Check to see if TaxesWithheld is set.
     *
     * @return true if TaxesWithheld is set.
     */
    public function isSetTaxesWithheld()
    {
        return !empty($this->_fields['TaxesWithheld']['FieldValue']);
    }
    /**
     * Add values for TaxesWithheld, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent $TaxesWithheld_array,...
     * @return $this
     */
    public function withTaxesWithheld(...$TaxesWithheld_array)
    {
        foreach ($TaxesWithheld_array as $TaxesWithheld) {
            $this->_fields['TaxesWithheld']['FieldValue'][] = $TaxesWithheld;
        }
        return $this;
    }
}