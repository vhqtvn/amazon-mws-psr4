<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentItem
 * 
 * @property	string	$ShipmentId
 * @property	string	$SellerSKU
 * @property	string	$FulfillmentNetworkSKU
 * @property	int	$QuantityShipped
 * @property	int	$QuantityReceived
 * @property	int	$QuantityInCase
 * @property	string	$ReleaseDate
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList	$PrepDetailsList
 */
class FbaInboundServiceMwsModelInboundShipmentItem extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentNetworkSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'), 'QuantityReceived' => array('FieldValue' => null, 'FieldType' => 'int'), 'QuantityInCase' => array('FieldValue' => null, 'FieldType' => 'int'), 'ReleaseDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'PrepDetailsList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentId property.
     *
     * @return \string ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }
    /**
     * Set the value of ShipmentId, return this.
     *
     * @param string $ShipmentId
     * @return $this
     */
    public function withShipmentId($ShipmentId)
    {
        $this->setShipmentId($ShipmentId);
        return $this;
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
     * Get the value of the FulfillmentNetworkSKU property.
     *
     * @return \string FulfillmentNetworkSKU.
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentNetworkSKU property.
     *
     * @param string fulfillmentNetworkSKU
     * @return $this instance
     */
    public function setFulfillmentNetworkSKU($value)
    {
        $this->_fields['FulfillmentNetworkSKU']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentNetworkSKU is set.
     *
     * @return true if FulfillmentNetworkSKU is set.
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return !is_null($this->_fields['FulfillmentNetworkSKU']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentNetworkSKU, return this.
     *
     * @param string $FulfillmentNetworkSKU
     * @return $this
     */
    public function withFulfillmentNetworkSKU($FulfillmentNetworkSKU)
    {
        $this->setFulfillmentNetworkSKU($FulfillmentNetworkSKU);
        return $this;
    }
    /**
     * Get the value of the QuantityShipped property.
     *
     * @return int QuantityShipped.
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }
    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @return $this instance
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set.
     */
    public function isSetQuantityShipped()
    {
        return !is_null($this->_fields['QuantityShipped']['FieldValue']);
    }
    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param int $QuantityShipped
     * @return $this
     */
    public function withQuantityShipped($QuantityShipped)
    {
        $this->setQuantityShipped($QuantityShipped);
        return $this;
    }
    /**
     * Get the value of the QuantityReceived property.
     *
     * @return \int QuantityReceived.
     */
    public function getQuantityReceived()
    {
        return $this->_fields['QuantityReceived']['FieldValue'];
    }
    /**
     * Set the value of the QuantityReceived property.
     *
     * @param int quantityReceived
     * @return $this instance
     */
    public function setQuantityReceived($value)
    {
        $this->_fields['QuantityReceived']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityReceived is set.
     *
     * @return true if QuantityReceived is set.
     */
    public function isSetQuantityReceived()
    {
        return !is_null($this->_fields['QuantityReceived']['FieldValue']);
    }
    /**
     * Set the value of QuantityReceived, return this.
     *
     * @param int $QuantityReceived
     * @return $this
     */
    public function withQuantityReceived($QuantityReceived)
    {
        $this->setQuantityReceived($QuantityReceived);
        return $this;
    }
    /**
     * Get the value of the QuantityInCase property.
     *
     * @return \int QuantityInCase.
     */
    public function getQuantityInCase()
    {
        return $this->_fields['QuantityInCase']['FieldValue'];
    }
    /**
     * Set the value of the QuantityInCase property.
     *
     * @param int quantityInCase
     * @return $this instance
     */
    public function setQuantityInCase($value)
    {
        $this->_fields['QuantityInCase']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if QuantityInCase is set.
     *
     * @return true if QuantityInCase is set.
     */
    public function isSetQuantityInCase()
    {
        return !is_null($this->_fields['QuantityInCase']['FieldValue']);
    }
    /**
     * Set the value of QuantityInCase, return this.
     *
     * @param int $QuantityInCase
     * @return $this
     */
    public function withQuantityInCase($QuantityInCase)
    {
        $this->setQuantityInCase($QuantityInCase);
        return $this;
    }
    /**
     * Get the value of the ReleaseDate property.
     *
     * @return \string ReleaseDate.
     */
    public function getReleaseDate()
    {
        return $this->_fields['ReleaseDate']['FieldValue'];
    }
    /**
     * Set the value of the ReleaseDate property.
     *
     * @param string releaseDate
     * @return $this instance
     */
    public function setReleaseDate($value)
    {
        $this->_fields['ReleaseDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ReleaseDate is set.
     *
     * @return true if ReleaseDate is set.
     */
    public function isSetReleaseDate()
    {
        return !is_null($this->_fields['ReleaseDate']['FieldValue']);
    }
    /**
     * Set the value of ReleaseDate, return this.
     *
     * @param string $ReleaseDate
     * @return $this
     */
    public function withReleaseDate($ReleaseDate)
    {
        $this->setReleaseDate($ReleaseDate);
        return $this;
    }
    /**
     * Get the value of the PrepDetailsList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList PrepDetailsList.
     */
    public function getPrepDetailsList()
    {
        return $this->_fields['PrepDetailsList']['FieldValue'];
    }
    /**
     * Set the value of the PrepDetailsList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList prepDetailsList
     * @return $this instance
     */
    public function setPrepDetailsList($value)
    {
        $this->_fields['PrepDetailsList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PrepDetailsList is set.
     *
     * @return true if PrepDetailsList is set.
     */
    public function isSetPrepDetailsList()
    {
        return !is_null($this->_fields['PrepDetailsList']['FieldValue']);
    }
    /**
     * Set the value of PrepDetailsList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList $PrepDetailsList
     * @return $this
     */
    public function withPrepDetailsList($PrepDetailsList)
    {
        $this->setPrepDetailsList($PrepDetailsList);
        return $this;
    }
}