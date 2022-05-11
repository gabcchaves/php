<?php
// Simple expression
$a = 10;

// Function expresion
function get_ten() { return 10; }
$a = get_ten(); // $a = 10;

// Assign the same value to multiple vairables
$a = $b = $c = 10; // All three are equal to 10

// Pre increment
echo ++$a . ' '; // Prints 11
echo $a . PHP_EOL; // Prints 11 

// Post increment
$a = 10;
echo $a++ . ' '; // Prints 10
echo $a . PHP_EOL; // Prints 11


// Ternary expression
echo 1 == 1 ? 'true' : 'false';
