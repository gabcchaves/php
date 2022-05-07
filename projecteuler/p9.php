<?php
// a + b + c = 1000, find abc
function pytTripleProd() {
	$c = 0;
	for ($a = 1; $a <= 1000; $a++) {
  	for ($b = 1; $b <= 1000; $b++) {
    	$c = 1000 - $a - $b;
    	if ($a**2 + $b**2 == $c**2)
    		return array_product([$a, $b, $c]);
  	}
	}
}

echo pytTripleProd() . PHP_EOL;
