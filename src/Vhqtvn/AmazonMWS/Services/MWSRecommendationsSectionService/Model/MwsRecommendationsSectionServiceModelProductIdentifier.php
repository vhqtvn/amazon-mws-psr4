<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier
 * 
 * @property	string	$Asin
 * @property	string	$Sku
 * @property	string	$Upc
 */
class MwsRecommendationsSectionServiceModelProductIdentifier extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Asin' => array('FieldValue' => null, 'FieldType' => 'string'), 'Sku' => array('FieldValue' => null, 'FieldType' => 'string'), 'Upc' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Asin property.
     *
     * @return String Asin.
     */
    public function getAsin()
    {
        return $this->_fields['Asin']['FieldValue'];
    }
    /**
     * Set the value of the Asin property.
     *
     * @param string asin
     * @return $this 
     */
    public function setAsin($value)
    {
        $this->_fields['Asin']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Asin is set.
     *
     * @return true if Asin is set.
     */
    public function isSetAsin()
    {
        return !is_null($this->_fields['Asin']['FieldValue']);
    }
    /**
     * Set the value of Asin, return this.
     *
     * @param string $Asin
     * @return $this
     */
    public function withAsin($Asin)
    {
        $this->setAsin($Asin);
        return $this;
    }
    /**
     * Get the value of the Sku property.
     *
     * @return String Sku.
     */
    public function getSku()
    {
        return $this->_fields['Sku']['FieldValue'];
    }
    /**
     * Set the value of the Sku property.
     *
     * @param string sku
     * @return $this 
     */
    public function setSku($value)
    {
        $this->_fields['Sku']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Sku is set.
     *
     * @return true if Sku is set.
     */
    public function isSetSku()
    {
        return !is_null($this->_fields['Sku']['FieldValue']);
    }
    /**
     * Set the value of Sku, return this.
     *
     * @param string $Sku
     * @return $this
     */
    public function withSku($Sku)
    {
        $this->setSku($Sku);
        return $this;
    }
    /**
     * Get the value of the Upc property.
     *
     * @return String Upc.
     */
    public function getUpc()
    {
        return $this->_fields['Upc']['FieldValue'];
    }
    /**
     * Set the value of the Upc property.
     *
     * @param string upc
     * @return $this 
     */
    public function setUpc($value)
    {
        $this->_fields['Upc']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Upc is set.
     *
     * @return true if Upc is set.
     */
    public function isSetUpc()
    {
        return !is_null($this->_fields['Upc']['FieldValue']);
    }
    /**
     * Set the value of Upc, return this.
     *
     * @param string $Upc
     * @return $this
     */
    public function withUpc($Upc)
    {
        $this->setUpc($Upc);
        return $this;
    }
}