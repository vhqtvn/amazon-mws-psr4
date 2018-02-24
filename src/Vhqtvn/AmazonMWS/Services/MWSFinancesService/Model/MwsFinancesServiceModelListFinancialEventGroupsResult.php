<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsResult
 * 
 * @property	string	$NextToken
 * @property	array	$FinancialEventGroupList
 */
class MwsFinancesServiceModelListFinancialEventGroupsResult extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FinancialEventGroupList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFinancialEventGroup::class), 'ListMemberName' => 'FinancialEventGroup'));
        parent::__construct($data);
    }
    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this 
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return $this .
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
    /**
     * Get the value of the FinancialEventGroupList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFinancialEventGroup[] FinancialEventGroupList.
     */
    public function getFinancialEventGroupList()
    {
        if ($this->_fields['FinancialEventGroupList']['FieldValue'] == null) {
            $this->_fields['FinancialEventGroupList']['FieldValue'] = array();
        }
        return $this->_fields['FinancialEventGroupList']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupList property.
     *
     * @param array financialEventGroupList
     * @return $this 
     */
    public function setFinancialEventGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FinancialEventGroupList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear FinancialEventGroupList.
     */
    public function unsetFinancialEventGroupList()
    {
        $this->_fields['FinancialEventGroupList']['FieldValue'] = array();
    }
    /**
     * Check to see if FinancialEventGroupList is set.
     *
     * @return true if FinancialEventGroupList is set.
     */
    public function isSetFinancialEventGroupList()
    {
        return !empty($this->_fields['FinancialEventGroupList']['FieldValue']);
    }
    /**
     * Add values for FinancialEventGroupList, return this.
     *
     * @param financialEventGroupList
     *             New values to add.
     *
     * @return $this .
     */
    public function withFinancialEventGroupList()
    {
        foreach (func_get_args() as $FinancialEventGroupList) {
            $this->_fields['FinancialEventGroupList']['FieldValue'][] = $FinancialEventGroupList;
        }
        return $this;
    }
}