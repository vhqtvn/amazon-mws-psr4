<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\MarketplaceWebServiceOrdersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelPointsGrantedDetail
 * 
 * @property	int	$PointsNumber
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney	$PointsMonetaryValue
 */
class MarketplaceWebServiceOrdersModelPointsGrantedDetail extends MarketplaceWebServiceOrdersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PointsNumber' => array('FieldValue' => null, 'FieldType' => 'int'), 'PointsMonetaryValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PointsNumber property.
     *
     * @return Integer PointsNumber.
     */
    public function getPointsNumber()
    {
        return $this->_fields['PointsNumber']['FieldValue'];
    }
    /**
     * Set the value of the PointsNumber property.
     *
     * @param int pointsNumber
     * @return $this 
     */
    public function setPointsNumber($value)
    {
        $this->_fields['PointsNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PointsNumber is set.
     *
     * @return true if PointsNumber is set.
     */
    public function isSetPointsNumber()
    {
        return !is_null($this->_fields['PointsNumber']['FieldValue']);
    }
    /**
     * Set the value of PointsNumber, return this.
     *
     * @param pointsNumber
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPointsNumber($value)
    {
        $this->setPointsNumber($value);
        return $this;
    }
    /**
     * Get the value of the PointsMonetaryValue property.
     *
     * @return Money PointsMonetaryValue.
     */
    public function getPointsMonetaryValue()
    {
        return $this->_fields['PointsMonetaryValue']['FieldValue'];
    }
    /**
     * Set the value of the PointsMonetaryValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceOrders\Model\MarketplaceWebServiceOrdersModelMoney pointsMonetaryValue
     * @return $this 
     */
    public function setPointsMonetaryValue($value)
    {
        $this->_fields['PointsMonetaryValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PointsMonetaryValue is set.
     *
     * @return true if PointsMonetaryValue is set.
     */
    public function isSetPointsMonetaryValue()
    {
        return !is_null($this->_fields['PointsMonetaryValue']['FieldValue']);
    }
    /**
     * Set the value of PointsMonetaryValue, return this.
     *
     * @param pointsMonetaryValue
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPointsMonetaryValue($value)
    {
        $this->setPointsMonetaryValue($value);
        return $this;
    }
}