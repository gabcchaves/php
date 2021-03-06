<?php
/* Simple class */
class A {
	private $prop;

	function __construct($prop_value = 1) {
		$this->prop = $prop_value;
	}

	public function get_prop() {
		return $this->prop;
	}

	public function set_prop($prop_value) {
		$this->prop = $prop_value;
	}
}

// Instantiating class
$a = new A();

// Invoking object's methods
$a->get_prop();
$a->set_prop(2);

var_dump($a->get_prop());

/* Typed properties */
class B {
	private int $id;
	private ?string $name;

	public function __construct(int $id, ?string $name) {
		// Typed properties need to
		// be initialized before
		// being accessed, otherwise
		// and error is raised.
		$this->id = $id;
		$this->name = $name;
	}

	public function get_id() {
		return $this->id;	
	}

	public function get_name() {
		return $this->name;
	}
}

$b = new B(1, 'Gabriel');
var_dump($b->get_id());
var_dump($b->get_name());

/* Readonly properties */
class C {
	public readonly string $prop;

	public function __construct(string $prop_value) {
		$this->prop = $prop_value;
	}
}

$c = new C('foobar');
var_dump($c->prop);
//$c->prop = 'new value'; // Error raised

// Readonly properties cannot be
// unset.

// EOF

