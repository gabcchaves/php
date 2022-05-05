<?php
$foo = 10; // global scope
$bar = 10;

function test() {
    // echo $foo; // Can't access $foo
    global $foo; // Now it can access it
    $GLOBALS['bar']; // This way too
    echo $foo;
}

test();

// Static variables
function n_count() {
    static $count = 0;
    $count++;
    echo $count;
    if ($count < 10) {
        n_count();
    }
}

n_count();
