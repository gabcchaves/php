<?php
abstract class Foo {
	// Child class shall define these methods
	abstract protected function print_something();
	abstract protected function print_something_else();

	// A common method
	public function call_both_methods() {
		$this->print_something();
		$this->print_something_else();
	}
}

class Bar extends Foo {
	protected function print_something() {
		print "Something\n";
	}

	protected function print_something_else() {
		print "Something else\n";
	}
}

$foobar = new Bar();
$foobar->call_both_methods();

// EOF

