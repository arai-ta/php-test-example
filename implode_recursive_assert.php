<?php

require './implode_recursive.php';

$test = array(
    "hoge",
    "fuga",
    array(
        array(
            1,
            2,
        ),
        "foo",
        "bar",
        array(),
        "qux",
    ),
    "piyo",
);

assert('implode_recursive(",", array()) === ""');
assert('implode_recursive(",", $test)   === "hoge,fuga,1,2,foo,bar,qux,piyo"');
assert('implode_recursive("",  $test)   === "hogefuga12foobarquxpiyo"');

