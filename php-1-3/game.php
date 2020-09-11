<?php

namespace TechAcademy\RPG;

require_once "hero.php";
require_once "slime.php";

use TechAcademy\RPG\Characters\Hero;

class Game {
    static function start() {
        //useしていないので名前空間が必要
        \TechAcademy\RPG\Characters\Slime::description();
        
        //useしたHeroだけは名前空間が必要なし
        Hero::description();
        
        //相対的な名前空間でもよい
        //このファイルの名前空間はTechAcademy\RPGなので以降を補足すればよい
        //相対的な名前空間の場合には最初の\は入れない
        $slime_A = new Characters\Slime(10, 3, 0, "A");
        $hero = new Hero(1000, 30, 20);
        
        $slime_A->attack($hero);
        $hero->magic_attack($slime_A);
    }
}

Game::start();