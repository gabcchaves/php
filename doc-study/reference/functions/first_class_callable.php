<?php
class Foo {
	public function method() {}
	public static function static_method() {}
	public function __invoke() {}
}

$obj = new Foo();
$class_name = 'Foo';
$method_name = 'method';
$static_method_name = 'static_method';

$f1 = strlen(...);
$f2 = $obj(...);
$f3 = $obj->method(...);
$f4 = $obj->$method_name(...);
$f5 = Foo::static_method(...);
$f6 = $class_name::$static_method_name(...);

// Traditional callable using
// string, array
$f7 = 'strlen'(...);
$f8 = [$obj, 'method'](...);
$f9 = [Foo::class, 'static_method'](...);

// EOF


