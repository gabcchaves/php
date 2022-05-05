<?php
$foo = '3';
$foo += 4; // It is now 7
$foo = 10 * '5 animais'; // It is now 50

// Type casting
$foo = 10;
$foo = (bool) $foo; // true
$foo = 10;
$foo = (string) $foo; // "10"
$foo = (float) $foo; // 10.0
$foo = (array) $foo; // array(10.0)
$foo = (object) $foo;
//$foo = (unset) $foo; // null (No longer supported)
