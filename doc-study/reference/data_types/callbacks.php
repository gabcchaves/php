<?php
// Simple callback function
function callbackFunction() {
    echo 'Hello';
}

// Simple callback method
class Foo {
    static function callbackMethod() {
        echo 'Hello';
    }
}

// Simple callback
call_user_func('callbackFunction');

// Static method call
call_user_func(array('Foo', 'callbackMethod'));
call_user_func('Foo::callbackMethod');

// Object method
$obj = new Foo();
call_user_func(array($obj, 'callbackMethod'));

// Relative callback (access parent class method)
class A {
    public static function quem() {
        echo 'A\n';
    }
}

class B extends A {
    public static function quem() {
        echo 'B\n';
    }
}

call_user_func(array('B', 'parent::quem')); // A
