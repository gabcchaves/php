<?php
$a = 3; $b = 2;
// & operator (AND)
echo sprintf("%04b", $a) . " & ";
echo sprintf("%04b", $b) . " = ";
echo sprintf("%04b", $a & $b) . "\n";

// | operator (OR)
echo sprintf("%04b", $a) . " | ";
echo sprintf("%04b", $b) . " = ";
echo sprintf("%04b", $a | $b) . "\n";

// ^ operator (XOR)
echo sprintf("%04b", $a) . " ^ ";
echo sprintf("%04b", $b) . " = ";
echo sprintf("%04b", $a ^ $b) . "\n";

// ~ operator (NOT)
echo sprintf("~%04b", $a) . " = ";
echo sprintf("%04b", ~ $a) . "\n";

// >> operator (shift to left)
echo sprintf("%04b", $a) . " >> ";
echo sprintf("%04b", $b) . " = ";
echo sprintf("%04b", $a >> $b) . "\n";

// >> operator (shift to left)
echo sprintf("%04b", $a) . " << ";
echo sprintf("%04b", $b) . " = ";
echo sprintf("%04b", $a << $b) . "\n";

// EOF

