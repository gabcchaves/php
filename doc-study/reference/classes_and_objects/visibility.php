<?php
class Foo {
	public string $public_prop;
	private string $private_prop;
	protected string $protected_prop;

	public function __construct() {
		$this->public_prop = 'Public property';
		$this->private_prop = 'Private property';
		$this->protected_prop = 'Protected property';
	}

	public function get_private_prop() {
		return $this->private_prop;
	}
}

class Bar extends Foo {
	public function __construct() {
		parent::__construct();
		var_dump($this->protected_prop);
	}	
}

$foo = new Foo();

var_dump($foo->public_prop);
var_dump($foo->get_private_prop());

$bar = new Bar();

class FooBar {
	public function public_method() {
		print "Invoked public method\n";
	}

	private function private_method() {
		print "Invoked private method\n";
	}

	protected function protected_method() {
		print "Invoked protected method\n";
	}

	public function invoke_private_method() {
		$this->private_method();
	}
}

class FooBaz extends FooBar {
	public function __construct() {
		$this->protected_method();
	}
}

$foobar = new FooBar();
$foobar->public_method();
$foobar->invoke_private_method();
$foobaz = new FooBaz();

// EOF

