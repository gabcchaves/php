<?php
spl_autoload_register(function ($class_name) {
	include $class_name . '.php';
});

$obj1 = new Foo();
$obj2 = new Bar();

var_dump($obj1->get_prop());
var_dump($obj2->get_prop());

// EOF

