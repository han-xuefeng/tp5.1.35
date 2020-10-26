<?php

class A {
    public $ifoo = 2;

    public function index(){
        echo '%%%%%%%%%%%%';
    }

    public function test() {
        echo '你好  我的test';
    }
}

$b = function() {
    return $this->ifoo;
};

$ba = Closure::bind($b,new A());
var_dump(get_class_methods($ba));
echo $ba();

$ca = Closure::fromCallable([new A(),'index']);
var_dump($ca);
var_dump(get_class_methods($ca));
$cca = $ca::fromCallable([new A,'test']);
$cca();