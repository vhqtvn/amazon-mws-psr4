<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportDocument
 * 
 * @property	string	$PdfDocument
 * @property	string	$Checksum
 */
class FbaInboundServiceMwsModelTransportDocument extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PdfDocument' => array('FieldValue' => null, 'FieldType' => 'string'), 'Checksum' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the PdfDocument property.
     *
     * @return String PdfDocument.
     */
    public function getPdfDocument()
    {
        return $this->_fields['PdfDocument']['FieldValue'];
    }
    /**
     * Set the value of the PdfDocument property.
     *
     * @param string pdfDocument
     * @return $this 
     */
    public function setPdfDocument($value)
    {
        $this->_fields['PdfDocument']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PdfDocument is set.
     *
     * @return true if PdfDocument is set.
     */
    public function isSetPdfDocument()
    {
        return !is_null($this->_fields['PdfDocument']['FieldValue']);
    }
    /**
     * Set the value of PdfDocument, return this.
     *
     * @param pdfDocument
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPdfDocument($value)
    {
        $this->setPdfDocument($value);
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