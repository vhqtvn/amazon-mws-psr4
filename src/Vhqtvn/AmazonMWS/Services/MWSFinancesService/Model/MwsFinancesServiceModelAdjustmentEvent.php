<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelAdjustmentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>AdjustmentType: string</li>
 * <li>PostedDate: string</li>
 * <li>AdjustmentAmount: \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency</li>
 * <li>AdjustmentItemList: array</li>
 *
 * </ul>
 */
class MwsFinancesServiceModelAdjustmentEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('AdjustmentType' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'AdjustmentAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'AdjustmentItemList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelAdjustmentItem::class), 'ListMemberName' => 'AdjustmentItem'));
        parent::__construct($data);
    }
    /**
     * Get the value of the AdjustmentType property.
     *
     * @return String AdjustmentType.
     */
    public function getAdjustmentType()
    {
        return $this->_fields['AdjustmentType']['FieldValue'];
    }
    /**
     * Set the value of the AdjustmentType property.
     *
     * @param string adjustmentType
     * @return $this 
     */
    public function setAdjustmentType($value)
    {
        $this->_fields['AdjustmentType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AdjustmentType is set.
     *
     * @return true if AdjustmentType is set.
     */
    public function isSetAdjustmentType()
    {
        return !is_null($this->_fields['AdjustmentType']['FieldValue']);
    }
    /**
     * Set the value of AdjustmentType, return this.
     *
     * @param adjustmentType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAdjustmentType($value)
    {
        $this->setAdjustmentType($value);
        return $this;
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this 
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
        return !is_null($this->_fields['PostedDate']['FieldValue']);
    }
    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }
    /**
     * Get the value of the AdjustmentAmount property.
     *
     * @return Currency AdjustmentAmount.
     */
    public function getAdjustmentAmount()
    {
        return $this->_fields['AdjustmentAmount']['FieldValue'];
    }
    /**
     * Set the value of the AdjustmentAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency adjustmentAmount
     * @return $this 
     */
    public function setAdjustmentAmount($value)
    {
        $this->_fields['AdjustmentAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AdjustmentAmount is set.
     *
     * @return true if AdjustmentAmount is set.
     */
    public function isSetAdjustmentAmount()
    {
        return !is_null($this->_fields['AdjustmentAmount']['FieldValue']);
    }
    /**
     * Set the value of AdjustmentAmount, return this.
     *
     * @param adjustmentAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAdjustmentAmount($value)
    {
        $this->setAdjustmentAmount($value);
        return $this;
    }
    /**
     * Get the value of the AdjustmentItemList property.
     *
     * @return List<AdjustmentItem> AdjustmentItemList.
     */
    public function getAdjustmentItemList()
    {
        if ($this->_fields['AdjustmentItemList']['FieldValue'] == null) {
            $this->_fields['AdjustmentItemList']['FieldValue'] = array();
        }
        return $this->_fields['AdjustmentItemList']['FieldValue'];
    }
    /**
     * Set the value of the AdjustmentItemList property.
     *
     * @param array adjustmentItemList
     * @return $this 
     */
    public function setAdjustmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['AdjustmentItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear AdjustmentItemList.
     */
    public function unsetAdjustmentItemList()
    {
        $this->_fields['AdjustmentItemList']['FieldValue'] = array();
    }
    /**
     * Check to see if AdjustmentItemList is set.
     *
     * @return true if AdjustmentItemList is set.
     */
    public function isSetAdjustmentItemList()
    {
        return !empty($this->_fields['AdjustmentItemList']['FieldValue']);
    }
    /**
     * Add values for AdjustmentItemList, return this.
     *
     * @param adjustmentItemList
     *             New values to add.
     *
     * @return $this .
     */
    public function withAdjustmentItemList()
    {
        foreach (func_get_args() as $AdjustmentItemList) {
            $this->_fields['AdjustmentItemList']['FieldValue'][] = $AdjustmentItemList;
        }
        return $this;
    }
}