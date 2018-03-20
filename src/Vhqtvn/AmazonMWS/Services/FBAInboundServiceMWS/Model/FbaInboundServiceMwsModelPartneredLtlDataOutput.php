<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredLtlDataOutput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact	$Contact
 * @property	int	$BoxCount
 * @property	string	$SellerFreightClass
 * @property	string	$FreightReadyDate
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList	$PalletList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight	$TotalWeight
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$SellerDeclaredValue
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount	$AmazonCalculatedValue
 * @property	string	$PreviewPickupDate
 * @property	string	$PreviewDeliveryDate
 * @property	string	$PreviewFreightClass
 * @property	string	$AmazonReferenceId
 * @property	bool	$IsBillOfLadingAvailable
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate	$PartneredEstimate
 * @property	string	$CarrierName
 */
class FbaInboundServiceMwsModelPartneredLtlDataOutput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Contact' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact::class), 'BoxCount' => array('FieldValue' => null, 'FieldType' => 'int'), 'SellerFreightClass' => array('FieldValue' => null, 'FieldType' => 'string'), 'FreightReadyDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'PalletList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList::class), 'TotalWeight' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight::class), 'SellerDeclaredValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class), 'AmazonCalculatedValue' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount::class), 'PreviewPickupDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'PreviewDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'PreviewFreightClass' => array('FieldValue' => null, 'FieldType' => 'string'), 'AmazonReferenceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsBillOfLadingAvailable' => array('FieldValue' => null, 'FieldType' => 'bool'), 'PartneredEstimate' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate::class), 'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelContact $Contact
     * @return $this
     */
    public function withContact($Contact)
    {
        $this->setContact($Contact);
        return $this;
    }
    /**
     * Get the value of the BoxCount property.
     *
     * @return int BoxCount.
     */
    public function getBoxCount()
    {
        return $this->_fields['BoxCount']['FieldValue'];
    }
    /**
     * Set the value of the BoxCount property.
     *
     * @param int boxCount
     * @return $this instance
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
     * @param int $BoxCount
     * @return $this
     */
    public function withBoxCount($BoxCount)
    {
        $this->setBoxCount($BoxCount);
        return $this;
    }
    /**
     * Get the value of the SellerFreightClass property.
     *
     * @return \string SellerFreightClass.
     */
    public function getSellerFreightClass()
    {
        return $this->_fields['SellerFreightClass']['FieldValue'];
    }
    /**
     * Set the value of the SellerFreightClass property.
     *
     * @param string sellerFreightClass
     * @return $this instance
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
     * @param string $SellerFreightClass
     * @return $this
     */
    public function withSellerFreightClass($SellerFreightClass)
    {
        $this->setSellerFreightClass($SellerFreightClass);
        return $this;
    }
    /**
     * Get the value of the FreightReadyDate property.
     *
     * @return \string FreightReadyDate.
     */
    public function getFreightReadyDate()
    {
        return $this->_fields['FreightReadyDate']['FieldValue'];
    }
    /**
     * Set the value of the FreightReadyDate property.
     *
     * @param string freightReadyDate
     * @return $this instance
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
     * @param string $FreightReadyDate
     * @return $this
     */
    public function withFreightReadyDate($FreightReadyDate)
    {
        $this->setFreightReadyDate($FreightReadyDate);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPalletList $PalletList
     * @return $this
     */
    public function withPalletList($PalletList)
    {
        $this->setPalletList($PalletList);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelWeight $TotalWeight
     * @return $this
     */
    public function withTotalWeight($TotalWeight)
    {
        $this->setTotalWeight($TotalWeight);
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
     * @return $this instance
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount $SellerDeclaredValue
     * @return $this
     */
    public function withSellerDeclaredValue($SellerDeclaredValue)
    {
        $this->setSellerDeclaredValue($SellerDeclaredValue);
        return $this;
    }
    /**
     * Get the value of the AmazonCalculatedValue property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount AmazonCalculatedValue.
     */
    public function getAmazonCalculatedValue()
    {
        return $this->_fields['AmazonCalculatedValue']['FieldValue'];
    }
    /**
     * Set the value of the AmazonCalculatedValue property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount amazonCalculatedValue
     * @return $this instance
     */
    public function setAmazonCalculatedValue($value)
    {
        $this->_fields['AmazonCalculatedValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonCalculatedValue is set.
     *
     * @return true if AmazonCalculatedValue is set.
     */
    public function isSetAmazonCalculatedValue()
    {
        return !is_null($this->_fields['AmazonCalculatedValue']['FieldValue']);
    }
    /**
     * Set the value of AmazonCalculatedValue, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAmount $AmazonCalculatedValue
     * @return $this
     */
    public function withAmazonCalculatedValue($AmazonCalculatedValue)
    {
        $this->setAmazonCalculatedValue($AmazonCalculatedValue);
        return $this;
    }
    /**
     * Get the value of the PreviewPickupDate property.
     *
     * @return \string PreviewPickupDate.
     */
    public function getPreviewPickupDate()
    {
        return $this->_fields['PreviewPickupDate']['FieldValue'];
    }
    /**
     * Set the value of the PreviewPickupDate property.
     *
     * @param string previewPickupDate
     * @return $this instance
     */
    public function setPreviewPickupDate($value)
    {
        $this->_fields['PreviewPickupDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PreviewPickupDate is set.
     *
     * @return true if PreviewPickupDate is set.
     */
    public function isSetPreviewPickupDate()
    {
        return !is_null($this->_fields['PreviewPickupDate']['FieldValue']);
    }
    /**
     * Set the value of PreviewPickupDate, return this.
     *
     * @param string $PreviewPickupDate
     * @return $this
     */
    public function withPreviewPickupDate($PreviewPickupDate)
    {
        $this->setPreviewPickupDate($PreviewPickupDate);
        return $this;
    }
    /**
     * Get the value of the PreviewDeliveryDate property.
     *
     * @return \string PreviewDeliveryDate.
     */
    public function getPreviewDeliveryDate()
    {
        return $this->_fields['PreviewDeliveryDate']['FieldValue'];
    }
    /**
     * Set the value of the PreviewDeliveryDate property.
     *
     * @param string previewDeliveryDate
     * @return $this instance
     */
    public function setPreviewDeliveryDate($value)
    {
        $this->_fields['PreviewDeliveryDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PreviewDeliveryDate is set.
     *
     * @return true if PreviewDeliveryDate is set.
     */
    public function isSetPreviewDeliveryDate()
    {
        return !is_null($this->_fields['PreviewDeliveryDate']['FieldValue']);
    }
    /**
     * Set the value of PreviewDeliveryDate, return this.
     *
     * @param string $PreviewDeliveryDate
     * @return $this
     */
    public function withPreviewDeliveryDate($PreviewDeliveryDate)
    {
        $this->setPreviewDeliveryDate($PreviewDeliveryDate);
        return $this;
    }
    /**
     * Get the value of the PreviewFreightClass property.
     *
     * @return \string PreviewFreightClass.
     */
    public function getPreviewFreightClass()
    {
        return $this->_fields['PreviewFreightClass']['FieldValue'];
    }
    /**
     * Set the value of the PreviewFreightClass property.
     *
     * @param string previewFreightClass
     * @return $this instance
     */
    public function setPreviewFreightClass($value)
    {
        $this->_fields['PreviewFreightClass']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PreviewFreightClass is set.
     *
     * @return true if PreviewFreightClass is set.
     */
    public function isSetPreviewFreightClass()
    {
        return !is_null($this->_fields['PreviewFreightClass']['FieldValue']);
    }
    /**
     * Set the value of PreviewFreightClass, return this.
     *
     * @param string $PreviewFreightClass
     * @return $this
     */
    public function withPreviewFreightClass($PreviewFreightClass)
    {
        $this->setPreviewFreightClass($PreviewFreightClass);
        return $this;
    }
    /**
     * Get the value of the AmazonReferenceId property.
     *
     * @return \string AmazonReferenceId.
     */
    public function getAmazonReferenceId()
    {
        return $this->_fields['AmazonReferenceId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonReferenceId property.
     *
     * @param string amazonReferenceId
     * @return $this instance
     */
    public function setAmazonReferenceId($value)
    {
        $this->_fields['AmazonReferenceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonReferenceId is set.
     *
     * @return true if AmazonReferenceId is set.
     */
    public function isSetAmazonReferenceId()
    {
        return !is_null($this->_fields['AmazonReferenceId']['FieldValue']);
    }
    /**
     * Set the value of AmazonReferenceId, return this.
     *
     * @param string $AmazonReferenceId
     * @return $this
     */
    public function withAmazonReferenceId($AmazonReferenceId)
    {
        $this->setAmazonReferenceId($AmazonReferenceId);
        return $this;
    }
    /**
     * Check the value of IsBillOfLadingAvailable.
     *
     * @return true if IsBillOfLadingAvailable is set to true.
     */
    public function isIsBillOfLadingAvailable()
    {
        return $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }
    /**
     * Get the value of the IsBillOfLadingAvailable property.
     *
     * @return boolean IsBillOfLadingAvailable.
     */
    public function getIsBillOfLadingAvailable()
    {
        return $this->_fields['IsBillOfLadingAvailable']['FieldValue'];
    }
    /**
     * Set the value of the IsBillOfLadingAvailable property.
     *
     * @param bool isBillOfLadingAvailable
     * @return $this instance
     */
    public function setIsBillOfLadingAvailable($value)
    {
        $this->_fields['IsBillOfLadingAvailable']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsBillOfLadingAvailable is set.
     *
     * @return true if IsBillOfLadingAvailable is set.
     */
    public function isSetIsBillOfLadingAvailable()
    {
        return !is_null($this->_fields['IsBillOfLadingAvailable']['FieldValue']);
    }
    /**
     * Set the value of IsBillOfLadingAvailable, return this.
     *
     * @param bool $IsBillOfLadingAvailable
     * @return $this
     */
    public function withIsBillOfLadingAvailable($IsBillOfLadingAvailable)
    {
        $this->setIsBillOfLadingAvailable($IsBillOfLadingAvailable);
        return $this;
    }
    /**
     * Get the value of the PartneredEstimate property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate PartneredEstimate.
     */
    public function getPartneredEstimate()
    {
        return $this->_fields['PartneredEstimate']['FieldValue'];
    }
    /**
     * Set the value of the PartneredEstimate property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate partneredEstimate
     * @return $this instance
     */
    public function setPartneredEstimate($value)
    {
        $this->_fields['PartneredEstimate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PartneredEstimate is set.
     *
     * @return true if PartneredEstimate is set.
     */
    public function isSetPartneredEstimate()
    {
        return !is_null($this->_fields['PartneredEstimate']['FieldValue']);
    }
    /**
     * Set the value of PartneredEstimate, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate $PartneredEstimate
     * @return $this
     */
    public function withPartneredEstimate($PartneredEstimate)
    {
        $this->setPartneredEstimate($PartneredEstimate);
        return $this;
    }
    /**
     * Get the value of the CarrierName property.
     *
     * @return \string CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }
    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return $this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }
    /**
     * Set the value of CarrierName, return this.
     *
     * @param string $CarrierName
     * @return $this
     */
    public function withCarrierName($CarrierName)
    {
        $this->setCarrierName($CarrierName);
        return $this;
    }
}