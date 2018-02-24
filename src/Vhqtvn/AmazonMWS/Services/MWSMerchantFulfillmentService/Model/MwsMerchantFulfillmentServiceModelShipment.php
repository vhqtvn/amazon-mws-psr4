<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShipment
 * 
 * @property	string	$ShipmentId
 * @property	string	$AmazonOrderId
 * @property	string	$SellerOrderId
 * @property	array	$ItemList
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelAddress	$ShipFromAddress
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelAddress	$ShipToAddress
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelPackageDimensions	$PackageDimensions
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelWeight	$Weight
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount	$Insurance
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingService	$ShippingService
 * @property	\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabel	$Label
 * @property	string	$Status
 * @property	string	$TrackingId
 * @property	string	$CreatedDate
 * @property	string	$LastUpdatedDate
 */
class MwsMerchantFulfillmentServiceModelShipment extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemList' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelItem::class), 'ListMemberName' => 'Item'), 'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelAddress::class), 'ShipToAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelAddress::class), 'PackageDimensions' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelPackageDimensions::class), 'Weight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelWeight::class), 'Insurance' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount::class), 'ShippingService' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingService::class), 'Label' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabel::class), 'Status' => array('FieldValue' => null, 'FieldType' => 'string'), 'TrackingId' => array('FieldValue' => null, 'FieldType' => 'string'), 'CreatedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'LastUpdatedDate' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this 
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }
    /**
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }
    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this 
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
        return !is_null($this->_fields['SellerOrderId']['FieldValue']);
    }
    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }
    /**
     * Get the value of the ItemList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelItem[] ItemList.
     */
    public function getItemList()
    {
        if ($this->_fields['ItemList']['FieldValue'] == null) {
            $this->_fields['ItemList']['FieldValue'] = array();
        }
        return $this->_fields['ItemList']['FieldValue'];
    }
    /**
     * Set the value of the ItemList property.
     *
     * @param array itemList
     * @return $this 
     */
    public function setItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ItemList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ItemList.
     */
    public function unsetItemList()
    {
        $this->_fields['ItemList']['FieldValue'] = array();
    }
    /**
     * Check to see if ItemList is set.
     *
     * @return true if ItemList is set.
     */
    public function isSetItemList()
    {
        return !empty($this->_fields['ItemList']['FieldValue']);
    }
    /**
     * Add values for ItemList, return this.
     *
     * @param itemList
     *             New values to add.
     *
     * @return $this .
     */
    public function withItemList()
    {
        foreach (func_get_args() as $ItemList) {
            $this->_fields['ItemList']['FieldValue'][] = $ItemList;
        }
        return $this;
    }
    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return Address ShipFromAddress.
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelAddress shipFromAddress
     * @return $this 
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set.
     */
    public function isSetShipFromAddress()
    {
        return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
    }
    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);
        return $this;
    }
    /**
     * Get the value of the ShipToAddress property.
     *
     * @return Address ShipToAddress.
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipToAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelAddress shipToAddress
     * @return $this 
     */
    public function setShipToAddress($value)
    {
        $this->_fields['ShipToAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipToAddress is set.
     *
     * @return true if ShipToAddress is set.
     */
    public function isSetShipToAddress()
    {
        return !is_null($this->_fields['ShipToAddress']['FieldValue']);
    }
    /**
     * Set the value of ShipToAddress, return this.
     *
     * @param shipToAddress
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShipToAddress($value)
    {
        $this->setShipToAddress($value);
        return $this;
    }
    /**
     * Get the value of the PackageDimensions property.
     *
     * @return PackageDimensions PackageDimensions.
     */
    public function getPackageDimensions()
    {
        return $this->_fields['PackageDimensions']['FieldValue'];
    }
    /**
     * Set the value of the PackageDimensions property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelPackageDimensions packageDimensions
     * @return $this 
     */
    public function setPackageDimensions($value)
    {
        $this->_fields['PackageDimensions']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PackageDimensions is set.
     *
     * @return true if PackageDimensions is set.
     */
    public function isSetPackageDimensions()
    {
        return !is_null($this->_fields['PackageDimensions']['FieldValue']);
    }
    /**
     * Set the value of PackageDimensions, return this.
     *
     * @param packageDimensions
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPackageDimensions($value)
    {
        $this->setPackageDimensions($value);
        return $this;
    }
    /**
     * Get the value of the Weight property.
     *
     * @return Weight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }
    /**
     * Set the value of the Weight property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelWeight weight
     * @return $this 
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set.
     */
    public function isSetWeight()
    {
        return !is_null($this->_fields['Weight']['FieldValue']);
    }
    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set.
     *
     * @return $this .
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }
    /**
     * Get the value of the Insurance property.
     *
     * @return CurrencyAmount Insurance.
     */
    public function getInsurance()
    {
        return $this->_fields['Insurance']['FieldValue'];
    }
    /**
     * Set the value of the Insurance property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelCurrencyAmount insurance
     * @return $this 
     */
    public function setInsurance($value)
    {
        $this->_fields['Insurance']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Insurance is set.
     *
     * @return true if Insurance is set.
     */
    public function isSetInsurance()
    {
        return !is_null($this->_fields['Insurance']['FieldValue']);
    }
    /**
     * Set the value of Insurance, return this.
     *
     * @param insurance
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInsurance($value)
    {
        $this->setInsurance($value);
        return $this;
    }
    /**
     * Get the value of the ShippingService property.
     *
     * @return ShippingService ShippingService.
     */
    public function getShippingService()
    {
        return $this->_fields['ShippingService']['FieldValue'];
    }
    /**
     * Set the value of the ShippingService property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelShippingService shippingService
     * @return $this 
     */
    public function setShippingService($value)
    {
        $this->_fields['ShippingService']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingService is set.
     *
     * @return true if ShippingService is set.
     */
    public function isSetShippingService()
    {
        return !is_null($this->_fields['ShippingService']['FieldValue']);
    }
    /**
     * Set the value of ShippingService, return this.
     *
     * @param shippingService
     *             The new value to set.
     *
     * @return $this .
     */
    public function withShippingService($value)
    {
        $this->setShippingService($value);
        return $this;
    }
    /**
     * Get the value of the Label property.
     *
     * @return Label Label.
     */
    public function getLabel()
    {
        return $this->_fields['Label']['FieldValue'];
    }
    /**
     * Set the value of the Label property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabel label
     * @return $this 
     */
    public function setLabel($value)
    {
        $this->_fields['Label']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Label is set.
     *
     * @return true if Label is set.
     */
    public function isSetLabel()
    {
        return !is_null($this->_fields['Label']['FieldValue']);
    }
    /**
     * Set the value of Label, return this.
     *
     * @param label
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLabel($value)
    {
        $this->setLabel($value);
        return $this;
    }
    /**
     * Get the value of the Status property.
     *
     * @return String Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }
    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return $this 
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
        return !is_null($this->_fields['Status']['FieldValue']);
    }
    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return $this .
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }
    /**
     * Get the value of the TrackingId property.
     *
     * @return String TrackingId.
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }
    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @return $this 
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set.
     */
    public function isSetTrackingId()
    {
        return !is_null($this->_fields['TrackingId']['FieldValue']);
    }
    /**
     * Set the value of TrackingId, return this.
     *
     * @param trackingId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTrackingId($value)
    {
        $this->setTrackingId($value);
        return $this;
    }
    /**
     * Get the value of the CreatedDate property.
     *
     * @return XMLGregorianCalendar CreatedDate.
     */
    public function getCreatedDate()
    {
        return $this->_fields['CreatedDate']['FieldValue'];
    }
    /**
     * Set the value of the CreatedDate property.
     *
     * @param string createdDate
     * @return $this 
     */
    public function setCreatedDate($value)
    {
        $this->_fields['CreatedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CreatedDate is set.
     *
     * @return true if CreatedDate is set.
     */
    public function isSetCreatedDate()
    {
        return !is_null($this->_fields['CreatedDate']['FieldValue']);
    }
    /**
     * Set the value of CreatedDate, return this.
     *
     * @param createdDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCreatedDate($value)
    {
        $this->setCreatedDate($value);
        return $this;
    }
    /**
     * Get the value of the LastUpdatedDate property.
     *
     * @return XMLGregorianCalendar LastUpdatedDate.
     */
    public function getLastUpdatedDate()
    {
        return $this->_fields['LastUpdatedDate']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdatedDate property.
     *
     * @param string lastUpdatedDate
     * @return $this 
     */
    public function setLastUpdatedDate($value)
    {
        $this->_fields['LastUpdatedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdatedDate is set.
     *
     * @return true if LastUpdatedDate is set.
     */
    public function isSetLastUpdatedDate()
    {
        return !is_null($this->_fields['LastUpdatedDate']['FieldValue']);
    }
    /**
     * Set the value of LastUpdatedDate, return this.
     *
     * @param lastUpdatedDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withLastUpdatedDate($value)
    {
        $this->setLastUpdatedDate($value);
        return $this;
    }
}