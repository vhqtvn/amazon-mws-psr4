<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupply
 * 
 * @property	string	$SellerSKU
 * @property	string	$FNSKU
 * @property	string	$ASIN
 * @property	string	$Condition
 * @property	int	$TotalSupplyQuantity
 * @property	int	$InStockSupplyQuantity
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint	$EarliestAvailability
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupplyDetailList	$SupplyDetail
 */
class FbaInventoryServiceMwsModelInventorySupply extends FbaInventoryServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'FNSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'Condition' => array('FieldValue' => null, 'FieldType' => 'string'), 'TotalSupplyQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'InStockSupplyQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'EarliestAvailability' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint::class), 'SupplyDetail' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupplyDetailList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return \string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }
    /**
     * Set the value of SellerSKU, return this.
     *
     * @param string $SellerSKU
     * @return $this
     */
    public function withSellerSKU($SellerSKU)
    {
        $this->setSellerSKU($SellerSKU);
        return $this;
    }
    /**
     * Get the value of the FNSKU property.
     *
     * @return \string FNSKU.
     */
    public function getFNSKU()
    {
        return $this->_fields['FNSKU']['FieldValue'];
    }
    /**
     * Set the value of the FNSKU property.
     *
     * @param string fnsku
     * @return $this instance
     */
    public function setFNSKU($value)
    {
        $this->_fields['FNSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FNSKU is set.
     *
     * @return true if FNSKU is set.
     */
    public function isSetFNSKU()
    {
        return !is_null($this->_fields['FNSKU']['FieldValue']);
    }
    /**
     * Set the value of FNSKU, return this.
     *
     * @param string $FNSKU
     * @return $this
     */
    public function withFNSKU($FNSKU)
    {
        $this->setFNSKU($FNSKU);
        return $this;
    }
    /**
     * Get the value of the ASIN property.
     *
     * @return \string ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param string $ASIN
     * @return $this
     */
    public function withASIN($ASIN)
    {
        $this->setASIN($ASIN);
        return $this;
    }
    /**
     * Get the value of the Condition property.
     *
     * @return \string Condition.
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }
    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @return $this instance
     */
    public function setCondition($value)
    {
        $this->_fields['Condition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Condition is set.
     *
     * @return true if Condition is set.
     */
    public function isSetCondition()
    {
        return !is_null($this->_fields['Condition']['FieldValue']);
    }
    /**
     * Set the value of Condition, return this.
     *
     * @param string $Condition
     * @return $this
     */
    public function withCondition($Condition)
    {
        $this->setCondition($Condition);
        return $this;
    }
    /**
     * Get the value of the TotalSupplyQuantity property.
     *
     * @return \int TotalSupplyQuantity.
     */
    public function getTotalSupplyQuantity()
    {
        return $this->_fields['TotalSupplyQuantity']['FieldValue'];
    }
    /**
     * Set the value of the TotalSupplyQuantity property.
     *
     * @param int totalSupplyQuantity
     * @return $this instance
     */
    public function setTotalSupplyQuantity($value)
    {
        $this->_fields['TotalSupplyQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalSupplyQuantity is set.
     *
     * @return true if TotalSupplyQuantity is set.
     */
    public function isSetTotalSupplyQuantity()
    {
        return !is_null($this->_fields['TotalSupplyQuantity']['FieldValue']);
    }
    /**
     * Set the value of TotalSupplyQuantity, return this.
     *
     * @param int $TotalSupplyQuantity
     * @return $this
     */
    public function withTotalSupplyQuantity($TotalSupplyQuantity)
    {
        $this->setTotalSupplyQuantity($TotalSupplyQuantity);
        return $this;
    }
    /**
     * Get the value of the InStockSupplyQuantity property.
     *
     * @return \int InStockSupplyQuantity.
     */
    public function getInStockSupplyQuantity()
    {
        return $this->_fields['InStockSupplyQuantity']['FieldValue'];
    }
    /**
     * Set the value of the InStockSupplyQuantity property.
     *
     * @param int inStockSupplyQuantity
     * @return $this instance
     */
    public function setInStockSupplyQuantity($value)
    {
        $this->_fields['InStockSupplyQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InStockSupplyQuantity is set.
     *
     * @return true if InStockSupplyQuantity is set.
     */
    public function isSetInStockSupplyQuantity()
    {
        return !is_null($this->_fields['InStockSupplyQuantity']['FieldValue']);
    }
    /**
     * Set the value of InStockSupplyQuantity, return this.
     *
     * @param int $InStockSupplyQuantity
     * @return $this
     */
    public function withInStockSupplyQuantity($InStockSupplyQuantity)
    {
        $this->setInStockSupplyQuantity($InStockSupplyQuantity);
        return $this;
    }
    /**
     * Get the value of the EarliestAvailability property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint EarliestAvailability.
     */
    public function getEarliestAvailability()
    {
        return $this->_fields['EarliestAvailability']['FieldValue'];
    }
    /**
     * Set the value of the EarliestAvailability property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint earliestAvailability
     * @return $this instance
     */
    public function setEarliestAvailability($value)
    {
        $this->_fields['EarliestAvailability']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EarliestAvailability is set.
     *
     * @return true if EarliestAvailability is set.
     */
    public function isSetEarliestAvailability()
    {
        return !is_null($this->_fields['EarliestAvailability']['FieldValue']);
    }
    /**
     * Set the value of EarliestAvailability, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint $EarliestAvailability
     * @return $this
     */
    public function withEarliestAvailability($EarliestAvailability)
    {
        $this->setEarliestAvailability($EarliestAvailability);
        return $this;
    }
    /**
     * Get the value of the SupplyDetail property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupplyDetailList SupplyDetail.
     */
    public function getSupplyDetail()
    {
        return $this->_fields['SupplyDetail']['FieldValue'];
    }
    /**
     * Set the value of the SupplyDetail property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupplyDetailList supplyDetail
     * @return $this instance
     */
    public function setSupplyDetail($value)
    {
        $this->_fields['SupplyDetail']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SupplyDetail is set.
     *
     * @return true if SupplyDetail is set.
     */
    public function isSetSupplyDetail()
    {
        return !is_null($this->_fields['SupplyDetail']['FieldValue']);
    }
    /**
     * Set the value of SupplyDetail, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelInventorySupplyDetailList $SupplyDetail
     * @return $this
     */
    public function withSupplyDetail($SupplyDetail)
    {
        $this->setSupplyDetail($SupplyDetail);
        return $this;
    }
}