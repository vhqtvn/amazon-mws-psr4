<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentId: string</li>
 * <li>SellerSKU: string</li>
 * <li>FulfillmentNetworkSKU: string</li>
 * <li>QuantityShipped: int</li>
 * <li>QuantityReceived: int</li>
 * <li>QuantityInCase: int</li>
 * <li>ReleaseDate: string</li>
 * <li>PrepDetailsList: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList</li>
 *
 * </ul>
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
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this 
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
     * @param shipmentId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }
    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }
    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this 
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
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }
    /**
     * Get the value of the FulfillmentNetworkSKU property.
     *
     * @return String FulfillmentNetworkSKU.
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentNetworkSKU property.
     *
     * @param string fulfillmentNetworkSKU
     * @return $this 
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
     * @param fulfillmentNetworkSKU
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFulfillmentNetworkSKU($value)
    {
        $this->setFulfillmentNetworkSKU($value);
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
     * @return $this 
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
     * @param quantityShipped
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);
        return $this;
    }
    /**
     * Get the value of the QuantityReceived property.
     *
     * @return Integer QuantityReceived.
     */
    public function getQuantityReceived()
    {
        return $this->_fields['QuantityReceived']['FieldValue'];
    }
    /**
     * Set the value of the QuantityReceived property.
     *
     * @param int quantityReceived
     * @return $this 
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
     * @param quantityReceived
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantityReceived($value)
    {
        $this->setQuantityReceived($value);
        return $this;
    }
    /**
     * Get the value of the QuantityInCase property.
     *
     * @return Integer QuantityInCase.
     */
    public function getQuantityInCase()
    {
        return $this->_fields['QuantityInCase']['FieldValue'];
    }
    /**
     * Set the value of the QuantityInCase property.
     *
     * @param int quantityInCase
     * @return $this 
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
     * @param quantityInCase
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantityInCase($value)
    {
        $this->setQuantityInCase($value);
        return $this;
    }
    /**
     * Get the value of the ReleaseDate property.
     *
     * @return String ReleaseDate.
     */
    public function getReleaseDate()
    {
        return $this->_fields['ReleaseDate']['FieldValue'];
    }
    /**
     * Set the value of the ReleaseDate property.
     *
     * @param string releaseDate
     * @return $this 
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
     * @param releaseDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withReleaseDate($value)
    {
        $this->setReleaseDate($value);
        return $this;
    }
    /**
     * Get the value of the PrepDetailsList property.
     *
     * @return PrepDetailsList PrepDetailsList.
     */
    public function getPrepDetailsList()
    {
        return $this->_fields['PrepDetailsList']['FieldValue'];
    }
    /**
     * Set the value of the PrepDetailsList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPrepDetailsList prepDetailsList
     * @return $this 
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
     * @param prepDetailsList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPrepDetailsList($value)
    {
        $this->setPrepDetailsList($value);
        return $this;
    }
}