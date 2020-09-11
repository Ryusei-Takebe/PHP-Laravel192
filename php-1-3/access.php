<?php
class A {
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';

    function test() {
        print $this->public;  // アクセス可能
        print $this->protected;  // アクセス可能
        print $this->private;  // アクセス可能
    }
}

// B は A とは無関係のクラス
class B {
    function test() {
        $a = new A();

        print $a->public;  // アクセス可能
        print $a->protected;  // アクセス不可能、エラー発生
        print $a->private;  // アクセス不可能、エラー発生
    }
}

// C は A と継承関係にあるクラス
class C extends A {
    function test() {
        $a = new A();

        print $a->public;  // アクセス可能
        print $a->protected;  // アクセス可能
        print $a->private;  // アクセス不可能、エラー発生
    }
}

$a = new A();
$a->test();  // エラー無し

$b = new B();
$b->test();  // $a ->protected でエラー発生

$c = new C();
$c->test();  // $a ->private でエラー発生