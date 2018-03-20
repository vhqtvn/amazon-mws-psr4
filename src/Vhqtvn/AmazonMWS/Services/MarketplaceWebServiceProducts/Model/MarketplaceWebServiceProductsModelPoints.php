<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints
 * 
 * @property	int	$PointsNumber
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$PointsMonetaryValue
 */
class MarketplaceWebServiceProductsModelPoints extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PointsNumber' => array('FieldValue' => null, 'FieldType' => 'int'), 'PointsMonetaryValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PointsNumber property.
     *
     * @return \int PointsNumber.
     */
    public function getPointsNumber()
    {
        return $this->_fields['PointsNumber']['FieldValue'];
    }
    /**
     * Set the value of the PointsNumber property.
     *
     * @param int pointsNumber
     * @return $this instance
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
     * @param int $PointsNumber
     * @return $this
     */
    public function withPointsNumber($PointsNumber)
    {
        $this->setPointsNumber($PointsNumber);
        return $this;
    }
    /**
     * Get the value of the PointsMonetaryValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType PointsMonetaryValue.
     */
    public function getPointsMonetaryValue()
    {
        return $this->_fields['PointsMonetaryValue']['FieldValue'];
    }
    /**
     * Set the value of the PointsMonetaryValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType pointsMonetaryValue
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $PointsMonetaryValue
     * @return $this
     */
    public function withPointsMonetaryValue($PointsMonetaryValue)
    {
        $this->setPointsMonetaryValue($PointsMonetaryValue);
        return $this;
    }
}