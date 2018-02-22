<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\MarketplaceWebServiceSellersModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelListParticipations
 * 
 * Properties:
 * <ul>
 * 
 * <li>Participation: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceSellersModelListParticipations extends MarketplaceWebServiceSellersModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Participation' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceSellers\Model\MarketplaceWebServiceSellersModelParticipation::class)));
        parent::__construct($data);
    }
    /**
     * Get the value of the Participation property.
     *
     * @return List<Participation> Participation.
     */
    public function getParticipation()
    {
        if ($this->_fields['Participation']['FieldValue'] == null) {
            $this->_fields['Participation']['FieldValue'] = array();
        }
        return $this->_fields['Participation']['FieldValue'];
    }
    /**
     * Set the value of the Participation property.
     *
     * @param array participation
     * @return $this 
     */
    public function setParticipation($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Participation']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear Participation.
     */
    public function unsetParticipation()
    {
        $this->_fields['Participation']['FieldValue'] = array();
    }
    /**
     * Check to see if Participation is set.
     *
     * @return true if Participation is set.
     */
    public function isSetParticipation()
    {
        return !empty($this->_fields['Participation']['FieldValue']);
    }
    /**
     * Add values for Participation, return this.
     *
     * @param participation
     *             New values to add.
     *
     * @return $this .
     */
    public function withParticipation()
    {
        foreach (func_get_args() as $Participation) {
            $this->_fields['Participation']['FieldValue'][] = $Participation;
        }
        return $this;
    }
}