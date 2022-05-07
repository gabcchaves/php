<?php
// Calculate nth fibonacci number
function fibo($n) {
    if ($n <= 1) return 1;
    return fibo($n - 1) + fibo($n - 2);
}

// Sum even-valued fibonacci numbers
$sum = 0;
for ($i = 1; fibo($i) <= 4*10**6; $i++) {
	if (fibo($i) % 2 == 0) {
    	$sum += fibo($i);
	}
}

echo $sum . PHP_EOL;
