<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPromotion
 * 
 * @property	string	$PromotionType
 * @property	string	$PromotionId
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$PromotionAmount
 */
class MwsFinancesServiceModelPromotion extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PromotionType' => array('FieldValue' => null, 'FieldType' => 'string'), 'PromotionId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PromotionAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PromotionType property.
     *
     * @return String PromotionType.
     */
    public function getPromotionType()
    {
        return $this->_fields['PromotionType']['FieldValue'];
    }
    /**
     * Set the value of the PromotionType property.
     *
     * @param string promotionType
     * @return $this 
     */
    public function setPromotionType($value)
    {
        $this->_fields['PromotionType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PromotionType is set.
     *
     * @return true if PromotionType is set.
     */
    public function isSetPromotionType()
    {
        return !is_null($this->_fields['PromotionType']['FieldValue']);
    }
    /**
     * Set the value of PromotionType, return this.
     *
     * @param promotionType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPromotionType($value)
    {
        $this->setPromotionType($value);
        return $this;
    }
    /**
     * Get the value of the PromotionId property.
     *
     * @return String PromotionId.
     */
    public function getPromotionId()
    {
        return $this->_fields['PromotionId']['FieldValue'];
    }
    /**
     * Set the value of the PromotionId property.
     *
     * @param string promotionId
     * @return $this 
     */
    public function setPromotionId($value)
    {
        $this->_fields['PromotionId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PromotionId is set.
     *
     * @return true if PromotionId is set.
     */
    public function isSetPromotionId()
    {
        return !is_null($this->_fields['PromotionId']['FieldValue']);
    }
    /**
     * Set the value of PromotionId, return this.
     *
     * @param promotionId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPromotionId($value)
    {
        $this->setPromotionId($value);
        return $this;
    }
    /**
     * Get the value of the PromotionAmount property.
     *
     * @return Currency PromotionAmount.
     */
    public function getPromotionAmount()
    {
        return $this->_fields['PromotionAmount']['FieldValue'];
    }
    /**
     * Set the value of the PromotionAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency promotionAmount
     * @return $this 
     */
    public function setPromotionAmount($value)
    {
        $this->_fields['PromotionAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PromotionAmount is set.
     *
     * @return true if PromotionAmount is set.
     */
    public function isSetPromotionAmount()
    {
        return !is_null($this->_fields['PromotionAmount']['FieldValue']);
    }
    /**
     * Set the value of PromotionAmount, return this.
     *
     * @param promotionAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPromotionAmount($value)
    {
        $this->setPromotionAmount($value);
        return $this;
    }
}