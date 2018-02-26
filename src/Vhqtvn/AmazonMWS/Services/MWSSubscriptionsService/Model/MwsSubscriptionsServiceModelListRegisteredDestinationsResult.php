<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelListRegisteredDestinationsResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestinationList	$DestinationList
 */
class MwsSubscriptionsServiceModelListRegisteredDestinationsResult extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DestinationList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestinationList::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the DestinationList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestinationList DestinationList.
     */
    public function getDestinationList()
    {
        return $this->_fields['DestinationList']['FieldValue'];
    }
    /**
     * Set the value of the DestinationList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestinationList destinationList
     * @return $this 
     */
    public function setDestinationList($value)
    {
        $this->_fields['DestinationList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DestinationList is set.
     *
     * @return true if DestinationList is set.
     */
    public function isSetDestinationList()
    {
        return !is_null($this->_fields['DestinationList']['FieldValue']);
    }
    /**
     * Set the value of DestinationList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelDestinationList $DestinationList
     * @return $this
     */
    public function withDestinationList($DestinationList)
    {
        $this->setDestinationList($DestinationList);
        return $this;
    }
}