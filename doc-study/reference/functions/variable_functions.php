<?php
function foo() {
	print 'foo' . PHP_EOL;
}

function bar($arg = '') {
	print $arg . PHP_EOL;
}

$func = 'foo';
$func();

$func = 'bar';
$func("$func");

/* Variable methods */
class A {
	function do_something() {
		$funcname = 'bar';
		$this->$funcname(); // Invokes bar() method
	}
	function bar() {
		print 'Bar' . PHP_EOL;
	}
}

$foo = new A();
$funcname = 'do_something';
$foo->$funcname();

/* Complex callables */
class Foo {
	static function bar() {
		echo "bar\n";
	}
	static function baz() {
		echo "baz\n";
	}
}

$func = array("Foo", "bar");
$func(); // Invokes Foo::bar()

$func = array("Foo", "baz");
$func(); // Invokes Foo::baz()

$func = "Foo::bar";
$func(); // Invokes Foo::bar()

// EOF

