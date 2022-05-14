<?php
class A {
	const CONSTANTE = 3.14; // Default visibility is public

	public function __construct() {
		print self::CONSTANTE . "\n";		
	}
}

echo A::CONSTANTE . "\n";

// EOF


