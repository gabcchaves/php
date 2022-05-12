<?php

/* Basic function */
function print_something() {
	print 'Hello, ' . `whoami` . PHP_EOL;
}

print_something();

/* Define a function based on a condition */
$b = true;
if ($b) {
	function foo() {
		print 'Function called.' . PHP_EOL;
	}
}

if (function_exists('foo')) foo();

/* Function inside of functions */
function parent() {
	print 'parent() invoked.' . PHP_EOL;
	function child() {
		print 'child() invoked' . PHP_EOL;
	}
	child();
	// Number of arguments
	print func_num_args() . PHP_EOL;
}

parent();
child();

/* Recursive functions */
function recursive($a) {
	if ($a < 20):
		echo "$a ";
		recursive($a + 1);
	endif;
}

recursive(1);
print PHP_EOL;

// EOF

