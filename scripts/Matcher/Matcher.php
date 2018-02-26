<?php
/**
 * Created by IntelliJ IDEA.
 * User: vhnvn
 * Date: 2/26/18
 * Time: 5:31 AM
 */

namespace Scripts\Matcher;

class Matcher
{
    public static function match($node, $pattern)
    {
        try {
            return self::match_($node, $pattern);
        } catch (\Exception $ex) {
            return false;
        }
    }

    private static function match_($node, $pattern)
    {
        if ($pattern === '*') return [];
        if (is_string($node) !== is_string($pattern)) {
            throw new \Exception("Not match");
        }
        if (is_string($node)) {
            if ($node !== $pattern) {
                throw new \Exception("Not match");
            }
            return [];
        }

        if (is_array($node) !== self::is_numeric_array($pattern)) {
            throw new \Exception("Not match");
        }
        $res = [];
        if (is_array($node)) {
            if (count($node) != count($pattern)) {
                throw new \Exception("Not match");
            }
            for ($i = 0, $ie = count($node); $i < $ie; $i++) {
                $res += self::match_($node[$i], $pattern[$i]);
            }
        } else {
            if (!isset($pattern['type']) && !isset($pattern[0])) {
                throw new \Exception("Not match");
            }
            $type = $pattern['type'] ?? $pattern[0];
            if (!($node instanceof $type)) {
                throw new \Exception("Not match");
            }
            if (isset($pattern['var'])) {
                foreach ($pattern['var'] as $k => $v) {
                    $kk = is_numeric($k) ? $v : $k;
                    if (!in_array($kk, $node->getSubNodeNames())) {
                        throw new \Exception("Not match");
                    }
                    $res[$v] = &$node->$kk;
                }
            }
            if (isset($pattern['sub'])) {
                foreach($pattern['sub'] as $subnode => $sub_pattern) {
                    if (!in_array($subnode, $node->getSubNodeNames())) {
                        throw new \Exception("Not match");
                    }
                    $res += self::match_($node->$subnode, $sub_pattern);
                }
            }
        }
        return $res;
    }

    private static function is_numeric_array($arr)
    {
        return is_array($arr) && array_keys($arr) === range(0, count($arr) - 1);
    }
}