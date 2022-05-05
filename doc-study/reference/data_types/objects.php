<?php
/* OOP */

// Declare class
class Foo {
    function method() {
        echo 'Hi' . PHP_EOL;
    }
}

// Instantiate it
$bar = new Foo();
$bar->method();


// Convert array to object
$array = ['a', 'b', 'c'];
$obj = (object) $array;

echo var_dump($obj) . PHP_EOL;
