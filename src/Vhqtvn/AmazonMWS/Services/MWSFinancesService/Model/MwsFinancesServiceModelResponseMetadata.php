<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelResponseMetadata
 * 
 * @property	string	$RequestId
 */
class MwsFinancesServiceModelResponseMetadata extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('RequestId' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the RequestId property.
     *
     * @return \string RequestId.
     */
    public function getRequestId()
    {
        return $this->_fields['RequestId']['FieldValue'];
    }
    /**
     * Set the value of the RequestId property.
     *
     * @param string requestId
     * @return $this instance
     */
    public function setRequestId($value)
    {
        $this->_fields['RequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RequestId is set.
     *
     * @return true if RequestId is set.
     */
    public function isSetRequestId()
    {
        return !is_null($this->_fields['RequestId']['FieldValue']);
    }
    /**
     * Set the value of RequestId, return this.
     *
     * @param string $RequestId
     * @return $this
     */
    public function withRequestId($RequestId)
    {
        $this->setRequestId($RequestId);
        return $this;
    }
}