<?php

class Fruit{

    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }

    protected function set_color($n){
        $this->color = $n;
    }

    private function set_weight($n){
        $this->weight = $n;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
// $apple->set_color("Red");//error
// $apple->set_weight("300");//error

?>