<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataInput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageInputList	$PackageList
 * @property	string	$CarrierName
 */
class FbaInboundServiceMwsModelPartneredSmallParcelDataInput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PackageList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageInputList::class), 'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the PackageList property.
     *
     * @return PartneredSmallParcelPackageInputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }
    /**
     * Set the value of the PackageList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageInputList packageList
     * @return $this 
     */
    public function setPackageList($value)
    {
        $this->_fields['PackageList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PackageList is set.
     *
     * @return true if PackageList is set.
     */
    public function isSetPackageList()
    {
        return !is_null($this->_fields['PackageList']['FieldValue']);
    }
    /**
     * Set the value of PackageList, return this.
     *
     * @param packageList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPackageList($value)
    {
        $this->setPackageList($value);
        return $this;
    }
    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }
    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return $this 
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
     * @param carrierName
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }
}