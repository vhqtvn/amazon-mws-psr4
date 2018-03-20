<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventGroupsRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	int	$MaxResultsPerPage
 * @property	string	$FinancialEventGroupStartedAfter
 * @property	string	$FinancialEventGroupStartedBefore
 */
class MwsFinancesServiceModelListFinancialEventGroupsRequest extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'), 'FinancialEventGroupStartedAfter' => array('FieldValue' => null, 'FieldType' => 'string'), 'FinancialEventGroupStartedBefore' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return \string SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param string $SellerId
     * @return $this
     */
    public function withSellerId($SellerId)
    {
        $this->setSellerId($SellerId);
        return $this;
    }
    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return \string MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }
    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Get the value of the MaxResultsPerPage property.
     *
     * @return \int MaxResultsPerPage.
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }
    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @return $this instance
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return true if MaxResultsPerPage is set.
     */
    public function isSetMaxResultsPerPage()
    {
        return !is_null($this->_fields['MaxResultsPerPage']['FieldValue']);
    }
    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param int $MaxResultsPerPage
     * @return $this
     */
    public function withMaxResultsPerPage($MaxResultsPerPage)
    {
        $this->setMaxResultsPerPage($MaxResultsPerPage);
        return $this;
    }
    /**
     * Get the value of the FinancialEventGroupStartedAfter property.
     *
     * @return \DateTime FinancialEventGroupStartedAfter.
     */
    public function getFinancialEventGroupStartedAfter()
    {
        return $this->_fields['FinancialEventGroupStartedAfter']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupStartedAfter property.
     *
     * @param string financialEventGroupStartedAfter
     * @return $this instance
     */
    public function setFinancialEventGroupStartedAfter($value)
    {
        $this->_fields['FinancialEventGroupStartedAfter']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinancialEventGroupStartedAfter is set.
     *
     * @return true if FinancialEventGroupStartedAfter is set.
     */
    public function isSetFinancialEventGroupStartedAfter()
    {
        return !is_null($this->_fields['FinancialEventGroupStartedAfter']['FieldValue']);
    }
    /**
     * Set the value of FinancialEventGroupStartedAfter, return this.
     *
     * @param string $FinancialEventGroupStartedAfter
     * @return $this
     */
    public function withFinancialEventGroupStartedAfter($FinancialEventGroupStartedAfter)
    {
        $this->setFinancialEventGroupStartedAfter($FinancialEventGroupStartedAfter);
        return $this;
    }
    /**
     * Get the value of the FinancialEventGroupStartedBefore property.
     *
     * @return \DateTime FinancialEventGroupStartedBefore.
     */
    public function getFinancialEventGroupStartedBefore()
    {
        return $this->_fields['FinancialEventGroupStartedBefore']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupStartedBefore property.
     *
     * @param string financialEventGroupStartedBefore
     * @return $this instance
     */
    public function setFinancialEventGroupStartedBefore($value)
    {
        $this->_fields['FinancialEventGroupStartedBefore']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinancialEventGroupStartedBefore is set.
     *
     * @return true if FinancialEventGroupStartedBefore is set.
     */
    public function isSetFinancialEventGroupStartedBefore()
    {
        return !is_null($this->_fields['FinancialEventGroupStartedBefore']['FieldValue']);
    }
    /**
     * Set the value of FinancialEventGroupStartedBefore, return this.
     *
     * @param string $FinancialEventGroupStartedBefore
     * @return $this
     */
    public function withFinancialEventGroupStartedBefore($FinancialEventGroupStartedBefore)
    {
        $this->setFinancialEventGroupStartedBefore($FinancialEventGroupStartedBefore);
        return $this;
    }
}