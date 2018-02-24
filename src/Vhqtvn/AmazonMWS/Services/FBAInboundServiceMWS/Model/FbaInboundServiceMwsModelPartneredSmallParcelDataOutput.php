<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelDataOutput
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageOutputList	$PackageList
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate	$PartneredEstimate
 */
class FbaInboundServiceMwsModelPartneredSmallParcelDataOutput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PackageList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageOutputList::class), 'PartneredEstimate' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredEstimate::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PackageList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageOutputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }
    /**
     * Set the value of the PackageList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPartneredSmallParcelPackageOutputList packageList
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
     * @return $this 
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
     * @param partneredEstimate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPartneredEstimate($value)
    {
        $this->setPartneredEstimate($value);
        return $this;
    }
}