<?php
/* Interfaces specify which methods the class shall implement */
interface Controller {
	public function write($mar, $mbr);
	public function read($mar);
}

class MMU implements Controller {
	private $ram;

	public function __construct() {
		$this->ram = array_fill(0, 128, 0);
	}

	public function write($mar, $mbr) {
		$this->ram[$mar] = $mbr;	
	}

	public function read($mar) {
		return $this->ram[$mar];
	}
}

$mmu = new MMU();
$mmu->write(0, 1);
var_dump($mmu->read(0));

// EOF

