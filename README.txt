php-test-example
===================

This is examples on unit testing on php.

* implode_recursive.php : test target function
* implode_recursive_assert.php : test script using `assert()`
* implode_recursive_basic.phpt : test script in `phpt` format
* implode_recursive_phpunit.php : test script unsing PHPUnit

How to run test
-------------------

assert:

    $ php implode_recursive_assert.php

phpt:

    $ pear run-tests

phpunit:

    $ curl -LO https://phar.phpunit.de/phpunit.phar
    $ php phpunit.phar implode_recursive_phpunit.php


