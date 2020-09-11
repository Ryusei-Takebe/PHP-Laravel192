<?php
    $max = 100;
    $result = 1;
    
    //FizzBuzz関数の定義
    function FizzBuzz($result) {
        if($result % 15 == 0) {
            return "FizzBuzz" . PHP_EOL;
        } else if($result % 5 == 0) {
            return "Buzz" . PHP_EOL;
        } else if($result % 3 == 0) {
            return "Fizz" . PHP_EOL;
        } else {
            return $result . PHP_EOL;
        }
        
    }
    
    for($i = $result; $i <= $max; $i++) {
        print FizzBuzz($i);
    }
?>