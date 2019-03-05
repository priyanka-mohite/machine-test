<?php

class Calculator {

    public $sum = 0;

    public function sum($arguments) {
        $this->sum = 0;
        switch(count($arguments)) {
        case 1:
        case 2:
            $this->sum = 0;
            break;
        case 3 :
            $arg = explode(",", $arguments[2]);
            foreach($arg as $key => $value) {
                if(is_numeric($value)) {
                    $this->sum+= $value;
                } else {
                    echo "\nThis is not numeric value". $value;
                }
            }
            break;
        }
    }

    public function getSum() {
        return $this->sum;
    }
}

$cal = new Calculator();
$cal->sum($argv);
echo $cal->getSum();