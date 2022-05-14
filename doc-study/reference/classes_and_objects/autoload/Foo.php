<?php
class Foo {
	private $prop;

	public function __construct() {
		$this->prop = 'Foo instantiated';
	}

	public function get_prop() {
		return $this->prop;
	}
}

// EOF

