<?php
// Check if number is prime
function isPrime($number) {
  for ($i = 2; $i <= $number/2; $i++) {
    if ($number % $i == 0) return false;
  }
  return true;
}

// Sum the primes below given ceil
function sumPrimes($ceil) {
  $sum = 2;
  for ($i = 3; $i < $ceil; $i += 2) {
    if (isPrime($i)) $sum += $i;
  }
  return $sum;
}

echo sumPrimes(2*10**6) . PHP_EOL;
