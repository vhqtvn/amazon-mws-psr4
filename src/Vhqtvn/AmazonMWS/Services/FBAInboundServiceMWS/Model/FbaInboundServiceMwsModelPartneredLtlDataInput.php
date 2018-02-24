<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataInput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact	$Contact
 * @property	int	$BoxCount
 * @property	string	$SellerFreightClass
 * @property	string	$FreightReadyDate
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList	$PalletList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight	$TotalWeight
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$SellerDeclaredValue
 */
class FbaInboundServiceMwsModelPartneredLtlDataInput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Contact' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact::class), 'BoxCount' => array('FieldValue' => null, 'FieldType' => 'int'), 'SellerFreightClass' => array('FieldValue' => null, 'FieldType' => 'string'), 'FreightReadyDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'PalletList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList::class), 'TotalWeight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight::class), 'SellerDeclaredValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Contact property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact Contact.
     */
    public function getContact()
    {
        return $this->_fields['Contact']['FieldValue'];
    }
    /**
     * Set the value of the Contact property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact contact
     * @return $this 
     */
    public function setContact($value)
    {
        $this->_fields['Contact']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Contact is set.
     *
     * @return true if Contact is set.
     */
    public function isSetContact()
    {
        return !is_null($this->_fields['Contact']['FieldValue']);
    }
    /**
     * Set the value of Contact, return this.
     *
     * @param contact
     *             The new value to set.
     *
     * @return $this .
     */
    public function withContact($value)
    {
        $this->setContact($value);
        return $this;
    }
    /**
     * Get the value of the BoxCount property.
     *
     * @return Long BoxCount.
     */
    public function getBoxCount()
    {
        return $this->_fields['BoxCount']['FieldValue'];
    }
    /**
     * Set the value of the BoxCount property.
     *
     * @param int boxCount
     * @return $this 
     */
    public function setBoxCount($value)
    {
        $this->_fields['BoxCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if BoxCount is set.
     *
     * @return true if BoxCount is set.
     */
    public function isSetBoxCount()
    {
        return !is_null($this->_fields['BoxCount']['FieldValue']);
    }
    /**
     * Set the value of BoxCount, return this.
     *
     * @param boxCount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withBoxCount($value)
    {
        $this->setBoxCount($value);
        return $this;
    }
    /**
     * Get the value of the SellerFreightClass property.
     *
     * @return String SellerFreightClass.
     */
    public function getSellerFreightClass()
    {
        return $this->_fields['SellerFreightClass']['FieldValue'];
    }
    /**
     * Set the value of the SellerFreightClass property.
     *
     * @param string sellerFreightClass
     * @return $this 
     */
    public function setSellerFreightClass($value)
    {
        $this->_fields['SellerFreightClass']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFreightClass is set.
     *
     * @return true if SellerFreightClass is set.
     */
    public function isSetSellerFreightClass()
    {
        return !is_null($this->_fields['SellerFreightClass']['FieldValue']);
    }
    /**
     * Set the value of SellerFreightClass, return this.
     *
     * @param sellerFreightClass
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerFreightClass($value)
    {
        $this->setSellerFreightClass($value);
        return $this;
    }
    /**
     * Get the value of the FreightReadyDate property.
     *
     * @return String FreightReadyDate.
     */
    public function getFreightReadyDate()
    {
        return $this->_fields['FreightReadyDate']['FieldValue'];
    }
    /**
     * Set the value of the FreightReadyDate property.
     *
     * @param string freightReadyDate
     * @return $this 
     */
    public function setFreightReadyDate($value)
    {
        $this->_fields['FreightReadyDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FreightReadyDate is set.
     *
     * @return true if FreightReadyDate is set.
     */
    public function isSetFreightReadyDate()
    {
        return !is_null($this->_fields['FreightReadyDate']['FieldValue']);
    }
    /**
     * Set the value of FreightReadyDate, return this.
     *
     * @param freightReadyDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFreightReadyDate($value)
    {
        $this->setFreightReadyDate($value);
        return $this;
    }
    /**
     * Get the value of the PalletList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList PalletList.
     */
    public function getPalletList()
    {
        return $this->_fields['PalletList']['FieldValue'];
    }
    /**
     * Set the value of the PalletList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList palletList
     * @return $this 
     */
    public function setPalletList($value)
    {
        $this->_fields['PalletList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PalletList is set.
     *
     * @return true if PalletList is set.
     */
    public function isSetPalletList()
    {
        return !is_null($this->_fields['PalletList']['FieldValue']);
    }
    /**
     * Set the value of PalletList, return this.
     *
     * @param palletList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPalletList($value)
    {
        $this->setPalletList($value);
        return $this;
    }
    /**
     * Get the value of the TotalWeight property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight TotalWeight.
     */
    public function getTotalWeight()
    {
        return $this->_fields['TotalWeight']['FieldValue'];
    }
    /**
     * Set the value of the TotalWeight property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight totalWeight
     * @return $this 
     */
    public function setTotalWeight($value)
    {
        $this->_fields['TotalWeight']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalWeight is set.
     *
     * @return true if TotalWeight is set.
     */
    public function isSetTotalWeight()
    {
        return !is_null($this->_fields['TotalWeight']['FieldValue']);
    }
    /**
     * Set the value of TotalWeight, return this.
     *
     * @param totalWeight
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTotalWeight($value)
    {
        $this->setTotalWeight($value);
        return $this;
    }
    /**
     * Get the value of the SellerDeclaredValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount SellerDeclaredValue.
     */
    public function getSellerDeclaredValue()
    {
        return $this->_fields['SellerDeclaredValue']['FieldValue'];
    }
    /**
     * Set the value of the SellerDeclaredValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount sellerDeclaredValue
     * @return $this 
     */
    public function setSellerDeclaredValue($value)
    {
        $this->_fields['SellerDeclaredValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerDeclaredValue is set.
     *
     * @return true if SellerDeclaredValue is set.
     */
    public function isSetSellerDeclaredValue()
    {
        return !is_null($this->_fields['SellerDeclaredValue']['FieldValue']);
    }
    /**
     * Set the value of SellerDeclaredValue, return this.
     *
     * @param sellerDeclaredValue
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerDeclaredValue($value)
    {
        $this->setSellerDeclaredValue($value);
        return $this;
    }
}