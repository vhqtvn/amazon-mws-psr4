<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelNonPartneredLtlDataInput
 * 
 * @property	string	$CarrierName
 * @property	string	$ProNumber
 */
class FbaInboundServiceMwsModelNonPartneredLtlDataInput extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'), 'ProNumber' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
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
    /**
     * Get the value of the ProNumber property.
     *
     * @return \string ProNumber.
     */
    public function getProNumber()
    {
        return $this->_fields['ProNumber']['FieldValue'];
    }
    /**
     * Set the value of the ProNumber property.
     *
     * @param string proNumber
     * @return $this instance
     */
    public function setProNumber($value)
    {
        $this->_fields['ProNumber']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ProNumber is set.
     *
     * @return true if ProNumber is set.
     */
    public function isSetProNumber()
    {
        return !is_null($this->_fields['ProNumber']['FieldValue']);
    }
    /**
     * Set the value of ProNumber, return this.
     *
     * @param string $ProNumber
     * @return $this
     */
    public function withProNumber($ProNumber)
    {
        $this->setProNumber($ProNumber);
        return $this;
    }
}