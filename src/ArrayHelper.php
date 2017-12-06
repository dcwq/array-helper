<?php

namespace dcwq;

/**
 * Class ArrayHelper
 */

class ArrayHelper
{
    /**
     * @var
     */
    private static $flatten_depth;

    /**
     * Flat multidimensional nested array of integers
     *
     * @param array $array
     * @param int $depth
     * @return array
     * @throws \Exception
     */
    public static function flatten(array $array, $depth = -1)
    {
        self::$flatten_depth = $depth;

        if (self::$flatten_depth === 0) {
            return $array;
        }

        if (self::$flatten_depth !== -1) {
            --self::$flatten_depth;
        }

        $flattened = [];

        foreach ($array as $element) {

            //check is integer
            if (!is_array($element) && !is_int($element)) {
                throw new \Exception('Only integer values');
            }

            $flattened = array_merge(
                $flattened,
                is_array($element) ? self::flatten($element, self::$flatten_depth) : [$element]
            );
        }

        return $flattened;
    }
}
