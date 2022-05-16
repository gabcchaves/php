<?php
/* Static properties and methods do not require
 * class instantiation to be accessed via their
 * appropriate means. */

class Foo {
	public static $id = 1;

	public static function printHi() {
		print 'Hi' . PHP_EOL;
	}
}

print Foo::$id . PHP_EOL;
Foo::printHi();

// EOF

