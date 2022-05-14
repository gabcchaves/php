<?php
class Bar {
	private $prop;

	public function __construct() {
		$this->prop = 'Bar instantiated';
	}

	public function get_prop() {
		return $this->prop;
	}
}

// EOF

