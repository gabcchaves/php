<?php
$a = array(1, 2, 3);
$b = array(4, 5, 6);

// Union
echo var_dump($a + $b);	// $a U $b
echo var_dump($b + $a);	// $b U $a	

// Equality
echo +($a == $b) . PHP_EOL;

// Identity
echo +($a === $b) . PHP_EOL;

// Inequality
echo +($a != $b) . PHP_EOL;
echo +($a <> $b) . PHP_EOL;

// No identity
echo +($a !== $b) . PHP_EOL;

// EOF

