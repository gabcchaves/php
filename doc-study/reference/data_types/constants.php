<?php
// Ways of declaring real constants:
const FOO = 10; 		// Works inside and outside of a class definition.
define('C', '10'); 	// Works outside of a class definition.

class Bar {
    const BAR = 10;
    public static function getBar() {
        return self::BAR;
    }
}

$obj = new Bar();
echo $obj->getBar() . PHP_EOL;
