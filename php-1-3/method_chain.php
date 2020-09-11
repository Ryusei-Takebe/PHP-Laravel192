<?php

class MethodChain {
    public $result = 1;

    function add($add_num) {
        $this->result += $add_num;
        return $this;
    }

    function sub($sub_num) {
        $this->result -= $sub_num;
        return $this;
    }

    function mul($mul_num) {
        $this->result *= $mul_num;
        return $this;
    }

    function div($div_num) {
        $this->result /= $div_num;
        return $this;
    }
}

$mc = new MethodChain();

$mc->add(4)->sub(1)->mul(6)->div(3);

print $mc->result . PHP_EOL;