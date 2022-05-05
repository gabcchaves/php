<?php
/* Enumerations */

// Declaration
enum Weekday {
    case Sunday;
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
};

// Accessing is elements
$day = Weekday::Sunday;

echo var_dump($day) . PHP_EOL;
