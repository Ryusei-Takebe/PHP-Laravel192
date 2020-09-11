<?php

class Animal {
    public $name = "";
    public $age = "";
    public $suffix = "";
    
    function __construct($name, $age, $suffix = "") {
        $this->name = $name;
        $this->age = $age;
        $this->suffix = $suffix; 
    }
    
    function say() {
        print $this->name . "です。" . $this->age . "です。" . PHP_EOL; 
    }
}

// 以下の2行は動作確認のための記述です。確認できたらコメントアウトしておきましょう。
$animal = new Animal("田中 太郎", 25);
$animal->say();
?>