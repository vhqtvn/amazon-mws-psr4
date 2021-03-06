<?php

namespace Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model;

use Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\MwsRecommendationsSectionServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelInventoryRecommendation
 * 
 * @property	string	$LastUpdated
 * @property	\Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier	$ItemIdentifier
 * @property	string	$ItemName
 * @property	string	$FulfillmentChannel
 * @property	int	$SalesForTheLast14Days
 * @property	int	$SalesForTheLast30Days
 * @property	int	$AvailableQuantity
 * @property	int	$DaysUntilStockRunsOut
 * @property	int	$InboundQuantity
 * @property	int	$RecommendedInboundQuantity
 * @property	int	$DaysOutOfStockLast30Days
 * @property	int	$LostSalesInLast30Days
 * @property	string	$RecommendationId
 * @property	string	$RecommendationReason
 */
class MwsRecommendationsSectionServiceModelInventoryRecommendation extends MwsRecommendationsSectionServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('LastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'), 'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier::class), 'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'), 'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'), 'SalesForTheLast14Days' => array('FieldValue' => null, 'FieldType' => 'int'), 'SalesForTheLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'), 'AvailableQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'DaysUntilStockRunsOut' => array('FieldValue' => null, 'FieldType' => 'int'), 'InboundQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'RecommendedInboundQuantity' => array('FieldValue' => null, 'FieldType' => 'int'), 'DaysOutOfStockLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'), 'LostSalesInLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'), 'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'), 'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the LastUpdated property.
     *
     * @return \DateTime LastUpdated.
     */
    public function getLastUpdated()
    {
        return $this->_fields['LastUpdated']['FieldValue'];
    }
    /**
     * Set the value of the LastUpdated property.
     *
     * @param string lastUpdated
     * @return $this instance
     */
    public function setLastUpdated($value)
    {
        $this->_fields['LastUpdated']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LastUpdated is set.
     *
     * @return true if LastUpdated is set.
     */
    public function isSetLastUpdated()
    {
        return !is_null($this->_fields['LastUpdated']['FieldValue']);
    }
    /**
     * Set the value of LastUpdated, return this.
     *
     * @param string $LastUpdated
     * @return $this
     */
    public function withLastUpdated($LastUpdated)
    {
        $this->setLastUpdated($LastUpdated);
        return $this;
    }
    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier ItemIdentifier.
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }
    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier itemIdentifier
     * @return $this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set.
     */
    public function isSetItemIdentifier()
    {
        return !is_null($this->_fields['ItemIdentifier']['FieldValue']);
    }
    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSRecommendationsSectionService\Model\MwsRecommendationsSectionServiceModelProductIdentifier $ItemIdentifier
     * @return $this
     */
    public function withItemIdentifier($ItemIdentifier)
    {
        $this->setItemIdentifier($ItemIdentifier);
        return $this;
    }
    /**
     * Get the value of the ItemName property.
     *
     * @return \string ItemName.
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }
    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @return $this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set.
     */
    public function isSetItemName()
    {
        return !is_null($this->_fields['ItemName']['FieldValue']);
    }
    /**
     * Set the value of ItemName, return this.
     *
     * @param string $ItemName
     * @return $this
     */
    public function withItemName($ItemName)
    {
        $this->setItemName($ItemName);
        return $this;
    }
    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return \string FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this instance
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
    }
    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param string $FulfillmentChannel
     * @return $this
     */
    public function withFulfillmentChannel($FulfillmentChannel)
    {
        $this->setFulfillmentChannel($FulfillmentChannel);
        return $this;
    }
    /**
     * Get the value of the SalesForTheLast14Days property.
     *
     * @return \int SalesForTheLast14Days.
     */
    public function getSalesForTheLast14Days()
    {
        return $this->_fields['SalesForTheLast14Days']['FieldValue'];
    }
    /**
     * Set the value of the SalesForTheLast14Days property.
     *
     * @param int salesForTheLast14Days
     * @return $this instance
     */
    public function setSalesForTheLast14Days($value)
    {
        $this->_fields['SalesForTheLast14Days']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesForTheLast14Days is set.
     *
     * @return true if SalesForTheLast14Days is set.
     */
    public function isSetSalesForTheLast14Days()
    {
        return !is_null($this->_fields['SalesForTheLast14Days']['FieldValue']);
    }
    /**
     * Set the value of SalesForTheLast14Days, return this.
     *
     * @param int $SalesForTheLast14Days
     * @return $this
     */
    public function withSalesForTheLast14Days($SalesForTheLast14Days)
    {
        $this->setSalesForTheLast14Days($SalesForTheLast14Days);
        return $this;
    }
    /**
     * Get the value of the SalesForTheLast30Days property.
     *
     * @return \int SalesForTheLast30Days.
     */
    public function getSalesForTheLast30Days()
    {
        return $this->_fields['SalesForTheLast30Days']['FieldValue'];
    }
    /**
     * Set the value of the SalesForTheLast30Days property.
     *
     * @param int salesForTheLast30Days
     * @return $this instance
     */
    public function setSalesForTheLast30Days($value)
    {
        $this->_fields['SalesForTheLast30Days']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SalesForTheLast30Days is set.
     *
     * @return true if SalesForTheLast30Days is set.
     */
    public function isSetSalesForTheLast30Days()
    {
        return !is_null($this->_fields['SalesForTheLast30Days']['FieldValue']);
    }
    /**
     * Set the value of SalesForTheLast30Days, return this.
     *
     * @param int $SalesForTheLast30Days
     * @return $this
     */
    public function withSalesForTheLast30Days($SalesForTheLast30Days)
    {
        $this->setSalesForTheLast30Days($SalesForTheLast30Days);
        return $this;
    }
    /**
     * Get the value of the AvailableQuantity property.
     *
     * @return \int AvailableQuantity.
     */
    public function getAvailableQuantity()
    {
        return $this->_fields['AvailableQuantity']['FieldValue'];
    }
    /**
     * Set the value of the AvailableQuantity property.
     *
     * @param int availableQuantity
     * @return $this instance
     */
    public function setAvailableQuantity($value)
    {
        $this->_fields['AvailableQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AvailableQuantity is set.
     *
     * @return true if AvailableQuantity is set.
     */
    public function isSetAvailableQuantity()
    {
        return !is_null($this->_fields['AvailableQuantity']['FieldValue']);
    }
    /**
     * Set the value of AvailableQuantity, return this.
     *
     * @param int $AvailableQuantity
     * @return $this
     */
    public function withAvailableQuantity($AvailableQuantity)
    {
        $this->setAvailableQuantity($AvailableQuantity);
        return $this;
    }
    /**
     * Get the value of the DaysUntilStockRunsOut property.
     *
     * @return \int DaysUntilStockRunsOut.
     */
    public function getDaysUntilStockRunsOut()
    {
        return $this->_fields['DaysUntilStockRunsOut']['FieldValue'];
    }
    /**
     * Set the value of the DaysUntilStockRunsOut property.
     *
     * @param int daysUntilStockRunsOut
     * @return $this instance
     */
    public function setDaysUntilStockRunsOut($value)
    {
        $this->_fields['DaysUntilStockRunsOut']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DaysUntilStockRunsOut is set.
     *
     * @return true if DaysUntilStockRunsOut is set.
     */
    public function isSetDaysUntilStockRunsOut()
    {
        return !is_null($this->_fields['DaysUntilStockRunsOut']['FieldValue']);
    }
    /**
     * Set the value of DaysUntilStockRunsOut, return this.
     *
     * @param int $DaysUntilStockRunsOut
     * @return $this
     */
    public function withDaysUntilStockRunsOut($DaysUntilStockRunsOut)
    {
        $this->setDaysUntilStockRunsOut($DaysUntilStockRunsOut);
        return $this;
    }
    /**
     * Get the value of the InboundQuantity property.
     *
     * @return \int InboundQuantity.
     */
    public function getInboundQuantity()
    {
        return $this->_fields['InboundQuantity']['FieldValue'];
    }
    /**
     * Set the value of the InboundQuantity property.
     *
     * @param int inboundQuantity
     * @return $this instance
     */
    public function setInboundQuantity($value)
    {
        $this->_fields['InboundQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if InboundQuantity is set.
     *
     * @return true if InboundQuantity is set.
     */
    public function isSetInboundQuantity()
    {
        return !is_null($this->_fields['InboundQuantity']['FieldValue']);
    }
    /**
     * Set the value of InboundQuantity, return this.
     *
     * @param int $InboundQuantity
     * @return $this
     */
    public function withInboundQuantity($InboundQuantity)
    {
        $this->setInboundQuantity($InboundQuantity);
        return $this;
    }
    /**
     * Get the value of the RecommendedInboundQuantity property.
     *
     * @return \int RecommendedInboundQuantity.
     */
    public function getRecommendedInboundQuantity()
    {
        return $this->_fields['RecommendedInboundQuantity']['FieldValue'];
    }
    /**
     * Set the value of the RecommendedInboundQuantity property.
     *
     * @param int recommendedInboundQuantity
     * @return $this instance
     */
    public function setRecommendedInboundQuantity($value)
    {
        $this->_fields['RecommendedInboundQuantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecommendedInboundQuantity is set.
     *
     * @return true if RecommendedInboundQuantity is set.
     */
    public function isSetRecommendedInboundQuantity()
    {
        return !is_null($this->_fields['RecommendedInboundQuantity']['FieldValue']);
    }
    /**
     * Set the value of RecommendedInboundQuantity, return this.
     *
     * @param int $RecommendedInboundQuantity
     * @return $this
     */
    public function withRecommendedInboundQuantity($RecommendedInboundQuantity)
    {
        $this->setRecommendedInboundQuantity($RecommendedInboundQuantity);
        return $this;
    }
    /**
     * Get the value of the DaysOutOfStockLast30Days property.
     *
     * @return \int DaysOutOfStockLast30Days.
     */
    public function getDaysOutOfStockLast30Days()
    {
        return $this->_fields['DaysOutOfStockLast30Days']['FieldValue'];
    }
    /**
     * Set the value of the DaysOutOfStockLast30Days property.
     *
     * @param int daysOutOfStockLast30Days
     * @return $this instance
     */
    public function setDaysOutOfStockLast30Days($value)
    {
        $this->_fields['DaysOutOfStockLast30Days']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DaysOutOfStockLast30Days is set.
     *
     * @return true if DaysOutOfStockLast30Days is set.
     */
    public function isSetDaysOutOfStockLast30Days()
    {
        return !is_null($this->_fields['DaysOutOfStockLast30Days']['FieldValue']);
    }
    /**
     * Set the value of DaysOutOfStockLast30Days, return this.
     *
     * @param int $DaysOutOfStockLast30Days
     * @return $this
     */
    public function withDaysOutOfStockLast30Days($DaysOutOfStockLast30Days)
    {
        $this->setDaysOutOfStockLast30Days($DaysOutOfStockLast30Days);
        return $this;
    }
    /**
     * Get the value of the LostSalesInLast30Days property.
     *
     * @return \int LostSalesInLast30Days.
     */
    public function getLostSalesInLast30Days()
    {
        return $this->_fields['LostSalesInLast30Days']['FieldValue'];
    }
    /**
     * Set the value of the LostSalesInLast30Days property.
     *
     * @param int lostSalesInLast30Days
     * @return $this instance
     */
    public function setLostSalesInLast30Days($value)
    {
        $this->_fields['LostSalesInLast30Days']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LostSalesInLast30Days is set.
     *
     * @return true if LostSalesInLast30Days is set.
     */
    public function isSetLostSalesInLast30Days()
    {
        return !is_null($this->_fields['LostSalesInLast30Days']['FieldValue']);
    }
    /**
     * Set the value of LostSalesInLast30Days, return this.
     *
     * @param int $LostSalesInLast30Days
     * @return $this
     */
    public function withLostSalesInLast30Days($LostSalesInLast30Days)
    {
        $this->setLostSalesInLast30Days($LostSalesInLast30Days);
        return $this;
    }
    /**
     * Get the value of the RecommendationId property.
     *
     * @return \string RecommendationId.
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }
    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @return $this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set.
     */
    public function isSetRecommendationId()
    {
        return !is_null($this->_fields['RecommendationId']['FieldValue']);
    }
    /**
     * Set the value of RecommendationId, return this.
     *
     * @param string $RecommendationId
     * @return $this
     */
    public function withRecommendationId($RecommendationId)
    {
        $this->setRecommendationId($RecommendationId);
        return $this;
    }
    /**
     * Get the value of the RecommendationReason property.
     *
     * @return \string RecommendationReason.
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }
    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @return $this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set.
     */
    public function isSetRecommendationReason()
    {
        return !is_null($this->_fields['RecommendationReason']['FieldValue']);
    }
    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param string $RecommendationReason
     * @return $this
     */
    public function withRecommendationReason($RecommendationReason)
    {
        $this->setRecommendationReason($RecommendationReason);
        return $this;
    }
}