<?php
// Get the variable type

$i = 'Something';
echo 'Type: ' . gettype($i) . PHP_EOL;
echo 'Is array? '. (int) is_array($i) . PHP_EOL;
echo 'Is float? ' . (int) is_float($i) . PHP_EOL;
echo 'Is integer? ' . (int) is_int($i) . PHP_EOL;
echo 'Is object? ' . (int) is_object($i) . PHP_EOL;
echo 'Is string? ' . (int) is_string($i) . PHP_EOL;
