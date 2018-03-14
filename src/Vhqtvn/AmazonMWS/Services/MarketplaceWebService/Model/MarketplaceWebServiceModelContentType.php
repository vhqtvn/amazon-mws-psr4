<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

/**
 * MarketplaceWebService_Model_ContentType
 *
 * Defines the content type, encoding and character set used to send
 * a feed to MWS
 * 
 * @param Associative Array or leave as default types.
 * Valid Properties:
 * <ul>
 * 
 * <li>ContentType: string - Possible types: OctetStream</li>
 *
 * </ul>
 */
/* 
 * The only content type that MWS currently supports is octet-stream
 */
class MarketplaceWebServiceModelContentType extends MarketplaceWebServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ContentType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Parameters' => array('FieldValue' => null, 'FieldType' => array('string')));
        parent::__construct($data);
    }
    public function getContentType()
    {
        return $this->_fields['ContentType']['FieldValue'];
    }
    public function isSetContentType()
    {
        return !is_null($this->_fields['ContentType']['FieldValue']);
    }
    public function setContentType($value)
    {
        $this->_fields['ContentType']['FieldValue'] = $value;
        return $this;
    }
    public function getParameters()
    {
        return $this->_fields['Parameters']['FieldValue'];
    }
    public function setParameters($parameters)
    {
        $this->_fields['Parameters']['FieldValue'] = $parameters;
        return $this;
    }
    public function isSetParameters()
    {
        return count($this->_fields['Parameters']['FieldValue']) > 0;
    }
    public function toString()
    {
        $contentType = $this->getContentType();
        return $this->isSetParameters() ? $contentType . ';' . implode(';', $this->getParameters()) : $contentType;
    }
}