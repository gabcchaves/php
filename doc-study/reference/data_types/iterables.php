<?php
// Pseudo-type that accepts
// any array or object that implements
// the Transversable interface.

// To iterate through them, foreach is used.


$iterable = [1, 2, 3, 4, 5, 6, 7];
function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        echo $value . PHP_EOL;
    }
}

foo($iterable);
