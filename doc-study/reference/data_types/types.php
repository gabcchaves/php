<?php
    /* Scalar types */
    $boolean = true;
    $string = "Some string";
    $string1 = "Some other string";
    $integer = 12;
    $float = 12.5;

	// Print the type of each variable
    echo gettype($boolean) . PHP_EOL;
    echo gettype($string) . PHP_EOL;
    echo gettype($string1) . PHP_EOL;
    echo gettype($integer) . PHP_EOL;
    echo gettype($float) . PHP_EOL;

    // Numeric strings
    $foo = 1 + '1.5';
    echo $foo . PHP_EOL;
