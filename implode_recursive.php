<?php

/**
 * recursive version of implode()
 *
 * @param string $glue
 * @param array $pieces
 * @return string
 */
function implode_recursive($glue, array $pieces) {
    $result = array();
    array_walk_recursive($pieces, function($value) use(&$result) {
        $result[] = $value;
    });
    return implode($glue, $result);
}

