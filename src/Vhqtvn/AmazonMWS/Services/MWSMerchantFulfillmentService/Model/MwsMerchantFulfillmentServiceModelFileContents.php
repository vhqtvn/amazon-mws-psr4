<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelFileContents
 * 
 * @property	string	$Contents
 * @property	string	$FileType
 * @property	string	$Checksum
 */
class MwsMerchantFulfillmentServiceModelFileContents extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Contents' => array('FieldValue' => null, 'FieldType' => 'string'), 'FileType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Checksum' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Contents property.
     *
     * @return String Contents.
     */
    public function getContents()
    {
        return $this->_fields['Contents']['FieldValue'];
    }
    /**
     * Set the value of the Contents property.
     *
     * @param string contents
     * @return $this 
     */
    public function setContents($value)
    {
        $this->_fields['Contents']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Contents is set.
     *
     * @return true if Contents is set.
     */
    public function isSetContents()
    {
        return !is_null($this->_fields['Contents']['FieldValue']);
    }
    /**
     * Set the value of Contents, return this.
     *
     * @param contents
     *             The new value to set.
     *
     * @return $this .
     */
    public function withContents($value)
    {
        $this->setContents($value);
        return $this;
    }
    /**
     * Get the value of the FileType property.
     *
     * @return String FileType.
     */
    public function getFileType()
    {
        return $this->_fields['FileType']['FieldValue'];
    }
    /**
     * Set the value of the FileType property.
     *
     * @param string fileType
     * @return $this 
     */
    public function setFileType($value)
    {
        $this->_fields['FileType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FileType is set.
     *
     * @return true if FileType is set.
     */
    public function isSetFileType()
    {
        return !is_null($this->_fields['FileType']['FieldValue']);
    }
    /**
     * Set the value of FileType, return this.
     *
     * @param fileType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFileType($value)
    {
        $this->setFileType($value);
        return $this;
    }
    /**
     * Get the value of the Checksum property.
     *
     * @return String Checksum.
     */
    public function getChecksum()
    {
        return $this->_fields['Checksum']['FieldValue'];
    }
    /**
     * Set the value of the Checksum property.
     *
     * @param string checksum
     * @return $this 
     */
    public function setChecksum($value)
    {
        $this->_fields['Checksum']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Checksum is set.
     *
     * @return true if Checksum is set.
     */
    public function isSetChecksum()
    {
        return !is_null($this->_fields['Checksum']['FieldValue']);
    }
    /**
     * Set the value of Checksum, return this.
     *
     * @param checksum
     *             The new value to set.
     *
     * @return $this .
     */
    public function withChecksum($value)
    {
        $this->setChecksum($value);
        return $this;
    }
}