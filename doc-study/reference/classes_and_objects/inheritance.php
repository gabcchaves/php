<?php
/* Not permited to overwrite a read/write
 * property with a readonly one. */
//class A { public int $prop; }
//class B extends B { public readonly int $prop; } // Wrong

class Foo {
	protected int $id;

	public function __construct() {
		$this->id = 1;
	}
}

class Bar extends Foo {
	public function __construct() {
		parent::__construct();
		print "$this->id\n";
	}
}

$bar = new Bar();

// EOF

