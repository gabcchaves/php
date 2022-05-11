<?php
// Basic assignments
$a = 3;
$a = ($b = 4) + 5; // $a is 9 now

// Combined operators on assignment
$a = 3;
$a += 3; // $a = $a + 3
$a -= 3; // $a = $a - 3
$a *= 3; // $a = $a * 3
$a /= 3; // $a = $a / 3

$a = 'Bom ';
$a .= 'dia!'; // $a = "Bom dia!"

// Reference assignment (like pointers)
$a = 3;
$b = &$a; // $b points to $a

print "$a\n"; // Prints 3
print "$b\n"; // Prints 3 as well

$a = 4;

print "$a\n"; // Prints 4
print "$b\n"; // Prints 4 as well

// EOF

