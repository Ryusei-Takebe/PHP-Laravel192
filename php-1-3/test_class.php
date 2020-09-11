<?php

Class Slime {
    //オブジェクトの変数（値）
    public $type = "スライム";
    public $hp = 10;
    public $power = 3;
    
    //オブジェクトの関数（処理）
    function attack($character_name) {
        print $this->type . "が" . $character_name . "を攻撃して" . $this->power . "ポイントのダメージを与えた！" . PHP_EOL;
    }
}

$slime_A = new Slime();

$slime_A->attack("主人公"); //スライムがダメージを与えたってやつ

print_r($slime_A);  //Slime Object( )ってやつ

