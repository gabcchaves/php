<?php
// Check if is prime
function isPrime($num) {
  for ($i = 2; $i <= $num/2; $i++) {
    if ($num % $i == 0) return false;
  }
  return true;
}

// Get the nth prime number
function nthPrime($order) {
  [$index, $num] = array(1, 3);
  while (true) {
		if (isPrime($num)) $index++;
		if ($index == $order) return $num;
		$num += 2;
  }
}

echo nthPrime(10001) . PHP_EOL;
