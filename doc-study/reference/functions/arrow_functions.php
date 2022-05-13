<?php
$y = 4;
$arrow = fn($x) => $x + $y;

var_dump($arrow(3));

/* Nested arrow functions */
$func = fn($x) => fn($y) => $x * $y;
var_dump($func(4)(3));

$func1 = fn($x=4) => fn($y=3) => $x * $y;
var_dump($func1()());

$func2 = fn($a) => fn($b) => fn($c) => $a * $b * $c;
var_dump($func2(3)(3)(3));

/* External scope can't be
 * affected */

$x = 1;

$func3 = fn() => $x++;
var_dump($x);

// EOF


