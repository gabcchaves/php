<?php
$var = function($name = "") {
	print $name . PHP_EOL;
};

$var('Gabriel');

/* Parent scope inheritance */
$msg = 'hi';
$example = function() { var_dump($msg); };
@$example();

// Inherit msg
$example = function() use ($msg) { var_dump($msg); };
$example();

// Inheriting by reference
$example = function() use (&$msg) { var_dump($msg); };
$example();

// Static anonymous functions
class Foo {
	function __construct() {
		$func = static function() {
			var_dump(__CLASS__);
		};
		$func();
	}
}

new Foo();

// EOF

