<?php

define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
define('OUT_PATH', BASE_PATH . '/src/Vhqtvn/AmazonMWS/Services/MarketplaceWebService/Model/FBAFeeds');
define('PREFIX', "MarketplaceWebServiceModelFBAFeeds");

@passthru("rm -f '" . escapeshellarg(OUT_PATH . "/*") . "'");
@mkdir(OUT_PATH);

$type_map = [
    'xsd:positiveInteger' => [
        'type' => 'int',
        'desc' => 'positive number',
    ],
    'IDNumber' => [
        'type' => 'int',
        'desc' => 'ID Number',
    ],
    'String' => [
        'type' => 'string',
        'desc' => 'max 50 characters',
    ],
    'xsd:nonNegativeInteger' => [
        'type' => 'int',
        'desc' => 'non-negative number',
    ],
    'PositiveCurrencyAmount' => [
        'type' => 'float',
        'desc' => 'Positive Currency Amount'
    ],
    'xsd:date' => [
        'type' => 'string',
        'desc' => 'Date'
    ],
    'xsd:dateTime' => [
        'type' => 'string',
        'desc' => 'DateTime'
    ],
    'xsd:string' => [
        'type' => 'string',
    ],
    'xsd:boolean' => [
        'type' => 'boolean',
    ],
    'FortyStringNotNull' => [
        'type' => 'string',
        'desc' => '1-40 chars, required'
    ],
    'StringNotNull' => [
        'type' => 'string',
        'desc' => 'required',
    ],
    'SKUType' => [
        'type' => 'string',
        'desc' => '1-40 chars'
    ],
    'AddressTypeSupportNonCity' => [
        'type' => PREFIX . 'AddressTypeSupportNonCity',
    ],
    'AdjustmentBuyerPrice' => [
        'type' => PREFIX . 'AdjustmentBuyerPrice',
    ],
    'AdjustmentCurrencyAmount' => [
        'type' => 'float',
        'desc' => 'Adjustment Currency Amount'
    ],
    'PromotionApplicationType' => [
        'type' => 'enum',
        'class' => PREFIX . 'PromotionApplicationTypeEnum'
    ],
    'AdjustmentDirectPaymentType' => [
        'type' => PREFIX . 'AdjustmentDirectPaymentType',
    ],
];

$doc = new DOMDocument();
$doc->loadXML(file_get_contents(BASE_PATH . "/amazon-libraries/xsd/amzn-base.xsd"));
$xpath = new DOMXPath($doc);
$xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

foreach ($xpath->evaluate("/xs:schema/xs:element") as $e) {
    if (in_array($e->getAttribute("name"), ['AddressTypeSupportNonCity', 'PromotionApplicationType', 'CarrierCode'])) {
        traverse("", $e);
    }
}


foreach (glob(BASE_PATH . "/amazon-libraries/xsd/*.xsd") as $xsd) {
    if (in_array(basename($xsd), ['amzn-base.xsd', 'AutoAccessory.xsd', 'Override.xsd', 'Price.xsd', 'Product.xsd', 'ProductImage.xsd', 'Relationship.xsd'])) continue;
    echo "$xsd\n";
    $doc = new DOMDocument();
    $doc->loadXML(file_get_contents($xsd));
    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

    $prefix = substr(basename($xsd), 0, -4);

    foreach ($xpath->evaluate("/xs:schema/xs:simpleType") as $e) {
        var_dump($e->getAttribute("name"));
        $t = handle_simpletype($prefix . $e->getAttribute("name"), $e);
        $type_map[$t['name']] = $t;
    }

    foreach ($xpath->evaluate("/xs:schema/xs:element") as $e) {
        var_dump($e->getAttribute("name"));
        traverse("", $e);
    }
}

function traverse($prefix, $xml, $arr_checked = false)
{
    echo "traverse($prefix, $arr_checked)\n";
    $name = $xml->getAttribute("name");
    $type = $xml->getAttribute("type");
    if (!$arr_checked && $xml->hasAttribute("maxOccurs")) {
        $max = $xml->getAttribute('maxOccurs');
        if ($max === 'unbounded' || $max > 1) {
            $item_type = traverse($prefix, $xml, true);
            return generate_list_type($name, $item_type, $max === 'unbounded' ? false : $max);
        }
    }
    if (@$type) {
        global $type_map;
        if (isset($type_map[$type])) {
            return $type_map[$type];
        } else {
            die("Unknow $type");
        }
    }
    $children = filter_nodes($xml->childNodes);
    if (count($children) != 1) {
        var_dump(__LINE__, $prefix, $children, $xml->attributes, $xml->getAttribute("name"));
        exit;
    }
    $child = $children[0];
    if ($child->nodeName === 'xsd:complexType') {
        $children = filter_nodes($child->childNodes);
        if (count($children) != 1) {
            var_dump(__LINE__, $children);
            exit;
        }
        $child = $children[0];
        if ($child->nodeName !== 'xsd:sequence') {
            var_dump(__LINE__, $child->nodeName);
            exit;
        }
        return generate_child($prefix . $name, filter_nodes($child->childNodes));
    } else if ($child->nodeName === 'xsd:simpleType') {
        return handle_simpletype($prefix . $name, $child);
    } else {
        die("Unknow nodename $child->nodeName");
    }
}

function handle_simpletype($prefix, $child, $arr_checked = false)
{
    if (!$arr_checked && $child->hasAttribute("maxOccurs")) {
        $max = $child->getAttribute('maxOccurs');
        if ($max === 'unbounded' || $max > 1) {
            $item_type = handle_simpletype($prefix, $child, true);
            return generate_list_type($item_type);
        }
    }
    $children = filter_nodes($child->childNodes);
    if (count($children) != 1) {
        var_dump(__LINE__, $children);
        exit;
    }
    $child = $children[0];
    if ($child->nodeName !== 'xsd:restriction') {
        var_dump(__LINE__, $child->nodeName);
        exit;
    }
    $base = $child->getAttribute('base');
    return generate_enum($prefix, $base, filter_nodes($child->childNodes));
}

function generate_child($type, $children)
{
    echo "generate_child($type)\n";
    $props = [];

    $handle_child = function ($child) use ($type, &$props) {
        $name = $child->getAttribute('name');
        if (!$name) {
            $ref = $child->getAttribute('ref');
            if (!$ref) die("No name and ref");
            $props[] = [
                'name' => $ref,
                'spec' => check_type_ref($ref)
            ];
            return $ref;
        } else {
            $props [] = [
                'name' => $name,
                'spec' => traverse($type, $child),
            ];
            return $name;
        }
    };

    $choices = [];

    foreach ($children as $child) {
        if ($child->tagName != 'xsd:element') {
            if ($child->tagName == 'xsd:choice') {
                $choice = [];
                foreach (filter_nodes($child->childNodes) as $choice_child) {
                    if ($choice_child->tagName != 'xsd:element') {
                        die("ZUnknown {$choice_child->tagName}");
                    }
                    $choice[] = $handle_child($choice_child);
                }
                $choices [] = $choice;
            } else {
                die("Unknown ___ {$child->nodeName}");
            }
        } else {
            $handle_child($child);
        }
    }

    $content = "<?php\n\n";
    $content .= "namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;\n\n";
    $content .= "use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;\n\n";
    $content .= "/**\n";
    $content .= " * $type\n";
    $content .= " *\n";
    $content .= " *\n";
    foreach ($props as $prop) {
        $xtype = $prop['spec']['type'];
        if (is_array($xtype)) {
            $content .= " * @prop\t{$xtype[0]}[]\t{$prop['name']}\t" . @$prop['spec']['desc'] . "\n";
        } else {
            $content .= " * @prop\t$xtype\t{$prop['name']}\t" . @$prop['spec']['desc'] . "\n";
        }
    }
    $content .= " */\n";
    $content .= "class " . PREFIX . "$type extends MarketplaceWebServiceModel{\n";
    $content .= '    public function __construct($data = null){' . "\n";
    $content .= '        $this->_fields = array(' . "\n";
    foreach ($props as $prop) {
        $xtype = $prop['spec']['type'];
        if (is_array($xtype)) {
            $a = norm_type($xtype[0]);
            $content .= '            ' . json_encode($prop['name']) . " => array('FieldValue' => array(), 'FieldType' => array($a)),\n";
        } else {
            $a = norm_type($xtype);
            $content .= '            ' . json_encode($prop['name']) . " => array('FieldValue' => null, 'FieldType' => $a),\n";
        }
    }
    $content .= '        );' . "\n";
    $content .= '        parent::__construct($data);' . "\n";
    $content .= '    }' . "\n";

    foreach ($props as $prop) {
        $xtype = $prop['spec']['type'];
        if (is_array($xtype)) {
            die("????");
        } else {
            $a = ($xtype);
            $content .= '    /**' . "\n";
            $content .= '     * Gets the value of the ' . $prop['name'] . ' property.' . "\n";
            $content .= '     * ' . "\n";
            $content .= '     * @return ' . $a . ' ' . $prop['name'] . "\n";
            $content .= '     */' . "\n";
            $content .= '    public function get' . $prop['name'] . '()' . "\n";
            $content .= '    {' . "\n";
            $content .= '        return $this->_fields["' . $prop['name'] . '"]["FieldValue"];' . "\n";
            $content .= '    }' . "\n";
            $content .= '    /**' . "\n";
            $content .= '     * Sets the value of the ' . $prop['name'] . ' property.' . "\n";
            $content .= '     * ' . "\n";
            $content .= '     * @param ' . $a . ' ' . $prop['name'] . ' ' . @$prop['spec']['desc'] . "\n";
            $content .= '     * @return $this ' . "\n";
            $content .= '     */' . "\n";
            $content .= '    public function set' . $prop['name'] . '($value)' . "\n";
            $content .= '    {' . "\n";
            $content .= '        $this->_fields["' . $prop['name'] . '"]["FieldValue"] = $value;' . "\n";
            $content .= '        return $this;' . "\n";
            $content .= '    }' . "\n";
            $content .= '    /**' . "\n";
            $content .= '     * Set the value of ' . $prop['name'] . ', return this.' . "\n";
            $content .= '     *' . "\n";
            $content .= '     * @param ' . $a . ' $' . $prop['name'] . ' ' . @$prop['spec']['desc'] . "\n";
            $content .= '     * @return $this' . "\n";
            $content .= '     */' . "\n";
            $content .= '    public function with' . $prop['name'] . '($' . $prop['name'] . ')' . "\n";
            $content .= '    {' . "\n";
            $content .= '        $this->set' . $prop['name'] . '($' . $prop['name'] . ');' . "\n";
            $content .= '        return $this;' . "\n";
            $content .= '    }' . "\n";
            $content .= '    /**' . "\n";
            $content .= '     * Checks if ' . $prop['name'] . ' is set' . "\n";
            $content .= '     * ' . "\n";
            $content .= '     * @return bool true if ' . $prop['name'] . '  is set' . "\n";
            $content .= '     */' . "\n";
            $content .= '    public function isSet' . $prop['name'] . '()' . "\n";
            $content .= '    {' . "\n";
            $content .= '        return !is_null($this->_fields["' . $prop['name'] . '"]["FieldValue"]);' . "\n";
            $content .= '    }' . "\n";
        }
    }

    if (substr($type, -7) == 'Request') {
        echo "** Request $type\n";
        $content .= '    /**' . "\n";
        $content .= '     * XML Representation for this object' . "\n";
        $content .= '     *' . "\n";
        $content .= '     * @return string XML for this object' . "\n";
        $content .= '     */' . "\n";
        $content .= '    public function toXML()' . "\n";
        $content .= '    {' . "\n";
        $content .= '        $xml = "";' . "\n";
        $content .= '        $xml .= "<' . $type . ' xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";' . "\n";
        $content .= '        $xml .= $this->_toXMLFragment();' . "\n";
        $content .= '        $xml .= "</' . $type . '>";' . "\n";
        $content .= '        return $xml;' . "\n";
        $content .= '    }' . "\n";
    }

    $content .= "}\n";

    $type = PREFIX . $type . "";
    $out = OUT_PATH . "/$type.php";
    file_put_contents($out, $content);

    return [
        'type' => $type,
    ];
}

function generate_list_type($name, $org_type, $max)
{
    $elm_type = $org_type['type'];
    $type = $elm_type . 'List';

    $name_low = lcfirst($name);

    $content = "<?php\n\n";
    $content .= "namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;\n\n";
    $content .= "use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;\n\n";
    $content .= "/**\n";
    $content .= " * $type\n";
    $content .= " *\n";
    $content .= " *\n";
    $content .= " * @prop\t{$elm_type}[]\t{$elm_type}\t" . ($max ? "Max $max elements" : "") . "\n";
    $content .= " */\n";
    $content .= "class $type extends MarketplaceWebServiceModel{\n";
    $content .= "    /**\n";
    $content .= "     * Construct new $type\n";
    $content .= "     *\n";
    $content .= "     * @param mixed \$data DOMElement or Associative Array to construct from. \n";
    $content .= "     *\n";
    $content .= "     * Valid properties:\n";
    $content .= "     * <ul>\n";
    $content .= "     *\n";
    $content .= "     * <li> $name: $type</li>\n";
    $content .= "     *\n";
    $content .= "     * </ul>\n";
    $content .= "     */\n";
    $content .= '    public function __construct($data = null){' . "\n";
    $content .= '        $this->_fields = array(' . "\n";
    $content .= '            ' . json_encode($name) . " => array('FieldValue' => array(), 'FieldType' => array(" . norm_type($type) . ")),\n";
    $content .= '        );' . "\n";
    $content .= '        parent::__construct($data);' . "\n";
    $content .= '    }' . "\n";
    $content .= '    /**' . "\n";
    $content .= '     * Gets the value of the ' . $name . ' .' . "\n";
    $content .= '     * ' . "\n";
    $content .= '     * @return ' . $type . '[] ' . $name . '.' . "\n";
    $content .= '     */' . "\n";
    $content .= '    public function get' . $name . '()' . "\n";
    $content .= '    {' . "\n";
    $content .= '        return $this->_fields["' . $name . '"]["FieldValue"];' . "\n";
    $content .= '    }' . "\n";
    $content .= '    /**' . "\n";
    $content .= '     * Sets the value of the ' . $name . '.' . "\n";
    $content .= '     * ' . "\n";
    $content .= '     * @param ' . $type . '|' . $type . '[] ' . $name . '' . "\n";
    $content .= '     * @return $this ' . "\n";
    $content .= '     */' . "\n";
    $content .= '    public function set' . $name . '($' . $name_low . ')' . "\n";
    $content .= '    {' . "\n";
    $content .= '        if (!$this->_isNumericArray($' . $name_low . ')) {' . "\n";
    $content .= '            $' . $name_low . ' = array($' . $name_low . ');' . "\n";
    $content .= '        }' . "\n";
    if ($max) {
        $content .= '        if(count($' . $name_low . ') > ' . $max . ') throw new \InvalidArgumentException("Maximum number of ' . $name . ' is ' . $max . '");' . "\n";
    }
    $content .= '        $this->_fields["' . $name . '"]["FieldValue"] = $' . $name_low . ';' . "\n";
    $content .= '        return $this;' . "\n";
    $content .= '    }' . "\n";
    $content .= '    /**' . "\n";
    $content .= '     * Add values for ' . $name . ', return this.' . "\n";
    $content .= '     *' . "\n";
    $content .= '     * @param \string[] $' . $name . '_array,...' . "\n";
    $content .= '     * @return $this' . "\n";
    $content .= '     */' . "\n";
    $content .= '    public function with' . $name . '(...$' . $name . '_array)' . "\n";
    $content .= '    {' . "\n";
    $content .= '        foreach ($' . $name . '_array as $' . $name_low . ') {' . "\n";
    $content .= '            $this->_fields["' . $name . '"]["FieldValue"][] = $' . $name_low . ';' . "\n";
    $content .= '        }' . "\n";
    if ($max) {
        $content .= '        if(count($' . $name . '_array) > ' . $max . ') throw new \InvalidArgumentException("Maximum number of ' . $name . ' is ' . $max . '");' . "\n";
    }
    $content .= '        return $this;' . "\n";
    $content .= '    }' . "\n";
    $content .= '    /**' . "\n";
    $content .= '     * Checks if ' . $name . ' list is non-empty' . "\n";
    $content .= '     * ' . "\n";
    $content .= '     * @return bool true if ' . $name . ' list is non-empty' . "\n";
    $content .= '     */' . "\n";
    $content .= '    public function isSet' . $name . '()' . "\n";
    $content .= '    {' . "\n";
    $content .= '        return count($this->_fields["' . $name . '"]["FieldValue"]) > 0;' . "\n";
    $content .= '    }' . "\n";
    $content .= "\n";
    $content .= "}\n";

    $out = OUT_PATH . "/$type.php";
    file_put_contents($out, $content);

    return [
        'type' => $type,
    ];
}

function check_type_ref($ref)
{
    switch ($ref) {
        case 'SKU':
            return [
                'type' => 'string',
                'desc' => '1-40 characters',
            ];
        case 'PromotionClaimCode':
            return [
                'type' => 'string',
                'desc' => '6-12 characters',
            ];
        case 'MerchantPromotionID':
            return [
                'type' => 'string',
                'desc' => 'max 80 characters',
            ];
        case 'CarrierCode':
            return [
                'type' => 'enum',
                'class' => PREFIX . 'CarrierCodeEnum',
            ];
        case     'ShipOption':
            return [
                'type' => 'string',
                'desc' => '1-50 chars, required'
            ];
        case 'AmazonOrderID':
        case 'AmazonOrderItemCode':
        case 'MerchantOrderID':
        case 'MerchantOrderItemID':
        case 'FulfillmentCenterID':
            return [
                'type' => 'string',
            ];
    }
    die("Unknown ref name $ref");
}

function generate_enum($type, $base, $children)
{
    $values = [];
    foreach ($children as $child) {
        if ($child->nodeName !== 'xsd:enumeration') {
            if ($child->nodeName == 'xsd:pattern') {
                return [
                    'type' => 'string',
                    'desc' => "Must match pattern {$child->getAttribute('value')}"
                ];
            }
            die("??? {$child->nodeName}");
        }
        $values[] = $child->getAttribute('value');
    }

    $type = PREFIX . $type . "Enum";

    $out = OUT_PATH . "/$type.php";
    var_dump($out);
    assert(!file_exists($out));
    $content = "<?php\n\n";
    $content .= "namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;\n\n";
    $content .= "class {$type}{\n";
    $nn = [];
    $vv = [];
    foreach ($values as $value) {
        if (@$vv[$value]) continue;
        $vv[$value] = true;
        $name = strtoupper(preg_replace('@[^0-9A-Za-z]@', '', $value));
        if (@$nn[$name]) {
            die("Duplicate $name");
        }
        $nn[$name] = 1;

        if ($base === 'xsd:string' || $base === 'xsd:normalizedString') {

        } else if ($base === 'xsd:positiveInteger') {
            $value = intval($value);
        } else {
            die("Unknow base $base");
        }

        $content .= "    const K_$name = " . json_encode($value) . ";\n";
    }
    $content .= "\n\n";
    $content .= "    const VALUES = [\n";
    foreach ($nn as $n => $_) {
        $content .= "        self::K_$n,\n";
    }
    $content .= "    ];\n\n";
    $content .= "}\n";
    file_put_contents($out, $content);

    return [
        'type' => 'string',
        'desc' => "one of $type::K_*"
    ];
}

function filter_nodes($nodes)
{
    $r = [];
    foreach ($nodes as $node) {
        if ($node->nodeType == 1 && $node->nodeName !== 'xsd:annotation') $r[] = $node;
    }
    return $r;
}

function norm_type($t)
{
    global $type_map;
    foreach ($type_map as $tt) {
        if ($tt['type'] == $t) return "'$t'";
    }
    return "$t::class";
}