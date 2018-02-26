<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\FbaInventoryServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInventoryServiceMWS\Model\FbaInventoryServiceMwsModelTimepoint
 * 
 * @property	string	$TimepointType
 * @property	string	$DateTime
 */
class FbaInventoryServiceMwsModelTimepoint extends FbaInventoryServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TimepointType' => array('FieldValue' => null, 'FieldType' => 'string'), 'DateTime' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the TimepointType property.
     *
     * @return String TimepointType.
     */
    public function getTimepointType()
    {
        return $this->_fields['TimepointType']['FieldValue'];
    }
    /**
     * Set the value of the TimepointType property.
     *
     * @param string timepointType
     * @return $this 
     */
    public function setTimepointType($value)
    {
        $this->_fields['TimepointType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TimepointType is set.
     *
     * @return true if TimepointType is set.
     */
    public function isSetTimepointType()
    {
        return !is_null($this->_fields['TimepointType']['FieldValue']);
    }
    /**
     * Set the value of TimepointType, return this.
     *
     * @param string $TimepointType
     * @return $this
     */
    public function withTimepointType($TimepointType)
    {
        $this->setTimepointType($TimepointType);
        return $this;
    }
    /**
     * Get the value of the DateTime property.
     *
     * @return XMLGregorianCalendar DateTime.
     */
    public function getDateTime()
    {
        return $this->_fields['DateTime']['FieldValue'];
    }
    /**
     * Set the value of the DateTime property.
     *
     * @param string dateTime
     * @return $this 
     */
    public function setDateTime($value)
    {
        $this->_fields['DateTime']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DateTime is set.
     *
     * @return true if DateTime is set.
     */
    public function isSetDateTime()
    {
        return !is_null($this->_fields['DateTime']['FieldValue']);
    }
    /**
     * Set the value of DateTime, return this.
     *
     * @param string $DateTime
     * @return $this
     */
    public function withDateTime($DateTime)
    {
        $this->setDateTime($DateTime);
        return $this;
    }
}