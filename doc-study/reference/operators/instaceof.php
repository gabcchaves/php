<?php
/* Check if object is instance of a class */
class A {}
class B {}

$a = new A();

var_dump($a instanceof A); // True
var_dump($a instanceof B); // False

/* The object is also an instance of the parent
 * of its instanciated class. */
class C {}
class D extends C {}
$b = new D();
var_dump($b instanceof D); // True
var_dump($b instanceof C); // True

/* Check if and object is not an instance of a class */
var_dump (!($b instanceof A)); // True

/* Check if object is instance of a class
 * that implements a certain interface. */
interface Controller {}
class Device implements Controller {}
$c = new Device;
var_dump($c instanceof Device); 		// True
var_dump($c instanceof Controller); // True

/* Using other variables */
$name = 'Device';
$a = new Device;
$b = 'Device';
var_dump($a instanceof Device); // True
var_dump($a instanceof $b);			// True

// EOF

