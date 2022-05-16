<?php
class A {
	const CONST_VALUE = 'Valor constante';
}

$classname = 'A';
print $classname::CONST_VALUE . "\n";
print A::CONST_VALUE . "\n";

class B extends A {
	public static $static_prop = 'Variável estática';	

	public function __construct() {
		print parent::CONST_VALUE . "\n";
		print self::$static_prop . "\n";
	}
}

$b = new B();

// EOF

