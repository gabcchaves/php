<?php
class Foo {
	public function __construct() {
		print "In constructor\n";
	}

	public function __destruct() {
		print "Destroying " . __CLASS__ . "\n";
	}
}

// EOF

