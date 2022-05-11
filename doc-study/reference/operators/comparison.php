<?php
$a = $b = 10;

// Equal
echo +($a == $b) . PHP_EOL;

// Identical (also the same type)
echo +($a === $b) . PHP_EOL;

// Different
echo +($a != $b) . PHP_EOL;
echo +($a <> $b) . PHP_EOL;

// Not identical
echo +($a !== $b) . PHP_EOL;

// Less than
echo +($a < $b) . PHP_EOL;

// Greater than
echo +($a > $b) . PHP_EOL;

// Less than or equal
echo +($a <= $b) . PHP_EOL;

// Greater than or equal
echo +($a >= $b) . PHP_EOL;

// Spaceship
$a = 3;
echo +($a <=> $b) . PHP_EOL;
$b = 1;
echo +($a <=> $b) . PHP_EOL;

// EOF

