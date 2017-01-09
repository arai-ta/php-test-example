<?php

require_once './implode_recursive.php';

class implode_recursive_test extends PHPUnit\Framework\TestCase
{

    public $test = array(
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

    function test_empty_array() {
        $this->assertEquals("", implode_recursive(",", array()));
    }

    function test_nested_array() {
        $expect = "hoge,fuga,1,2,foo,bar,qux,piyo";
        $this->assertEquals($expect, implode_recursive(",", $this->test));
    }

    function test_nested_array_with_no_glue() {
        $expect = "hogefuga12foobarquxpiyo";
        $this->assertEquals($expect, implode_recursive("", $this->test));
    }

}
