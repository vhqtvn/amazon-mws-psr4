<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList
 *
 *
 * @prop	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCarton[]	MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCarton	
 */
class MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList extends MarketplaceWebServiceModel{
    /**
     * Construct new MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList
     *
     * @param mixed $data DOMElement or Associative Array to construct from. 
     *
     * Valid properties:
     * <ul>
     *
     * <li> Carton: MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList</li>
     *
     * </ul>
     */
    public function __construct($data = null){
        $this->_fields = array(
            "Carton" => array('FieldValue' => array(), 'FieldType' => array(MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList::class)),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the Carton .
     * 
     * @return MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList[] Carton.
     */
    public function getCarton()
    {
        return $this->_fields["Carton"]["FieldValue"];
    }
    /**
     * Sets the value of the Carton.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList|MarketplaceWebServiceModelFBAFeedsCartonContentsRequestCartonList[] Carton
     * @return $this 
     */
    public function setCarton($carton)
    {
        if (!$this->_isNumericArray($carton)) {
            $carton = array($carton);
        }
        $this->_fields["Carton"]["FieldValue"] = $carton;
        return $this;
    }
    /**
     * Add values for Carton, return this.
     *
     * @param \string[] $Carton_array,...
     * @return $this
     */
    public function withCarton(...$Carton_array)
    {
        foreach ($Carton_array as $carton) {
            $this->_fields["Carton"]["FieldValue"][] = $carton;
        }
        return $this;
    }
    /**
     * Checks if Carton list is non-empty
     * 
     * @return bool true if Carton list is non-empty
     */
    public function isSetCarton()
    {
        return count($this->_fields["Carton"]["FieldValue"]) > 0;
    }

}
