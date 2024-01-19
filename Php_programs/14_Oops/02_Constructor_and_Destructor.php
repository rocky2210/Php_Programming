<?php
/*
Constructors initialize objects, while destructors perform cleanup.
*/

class BlackClover{
    public $name;
    public $power;

    public function __construct($name, $power){
        $this->name = $name;
        $this->power = $power;
        echo "Constructed\n";
    }

    public function __destruct(){
        echo "{$this->name} posses {$this->power} Magic.\n";
        echo "destructed\n";
    }
}

$asta = new BlackClover("Asta","Anti");
unset($asta);   // This unset triggers the destructor
$yuno = new BlackClover("Yuno","Star");
?>