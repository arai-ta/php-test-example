--TEST--
implode_recursive() -- basic test for implode_recursive()
--FILE--
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

var_dump(implode_recursive(",", array()));
var_dump(implode_recursive(",", $test));
var_dump(implode_recursive("",  $test));
?>
--EXPECT--
string(0) ""
string(30) "hoge,fuga,1,2,foo,bar,qux,piyo"
string(23) "hogefuga12foobarquxpiyo"
