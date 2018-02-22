<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelSKUInboundGuidance
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerSKU: string</li>
 * <li>ASIN: string</li>
 * <li>InboundGuidance: string</li>
 * <li>GuidanceReasonList: \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGuidanceReasonList</li>
 *
 * </ul>
 */
class FbaInboundServiceMwsModelSKUInboundGuidance extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'), 'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'), 'InboundGuidance' => array('FieldValue' => null, 'FieldType' => 'string'), 'GuidanceReasonList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGuidanceReasonList::class));
        parent::__construct($data);
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
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }
    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this 
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }
    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return $this .
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }
    /**
     * Get the value of the InboundGuidance property.
     *
     * @return String InboundGuidance.
     */
    public function getInboundGuidance()
    {
        return $this->_fields['InboundGuidance']['FieldValue'];
    }
    /**
     * Set the value of the InboundGuidance property.
     *
     * @param string inboundGuidance
     * @return $this 
     */
    public function setInboundGuidance($value)
    {
        $this->_fields['InboundGuidance']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InboundGuidance is set.
     *
     * @return true if InboundGuidance is set.
     */
    public function isSetInboundGuidance()
    {
        return !is_null($this->_fields['InboundGuidance']['FieldValue']);
    }
    /**
     * Set the value of InboundGuidance, return this.
     *
     * @param inboundGuidance
     *             The new value to set.
     *
     * @return $this .
     */
    public function withInboundGuidance($value)
    {
        $this->setInboundGuidance($value);
        return $this;
    }
    /**
     * Get the value of the GuidanceReasonList property.
     *
     * @return GuidanceReasonList GuidanceReasonList.
     */
    public function getGuidanceReasonList()
    {
        return $this->_fields['GuidanceReasonList']['FieldValue'];
    }
    /**
     * Set the value of the GuidanceReasonList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGuidanceReasonList guidanceReasonList
     * @return $this 
     */
    public function setGuidanceReasonList($value)
    {
        $this->_fields['GuidanceReasonList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if GuidanceReasonList is set.
     *
     * @return true if GuidanceReasonList is set.
     */
    public function isSetGuidanceReasonList()
    {
        return !is_null($this->_fields['GuidanceReasonList']['FieldValue']);
    }
    /**
     * Set the value of GuidanceReasonList, return this.
     *
     * @param guidanceReasonList
     *             The new value to set.
     *
     * @return $this .
     */
    public function withGuidanceReasonList($value)
    {
        $this->setGuidanceReasonList($value);
        return $this;
    }
}