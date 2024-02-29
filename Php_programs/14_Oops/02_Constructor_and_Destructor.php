<?php
// Constructor:

/*
    Constructors:
    A constructor is a special method within a class that gets called automatically when an object of that class is instantiated. It is typically used to initialize object properties or perform any setup tasks required before using the object.
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

/*
    Output:
        Constructed
        Asta posses Anti Magic.
        destructed
        Constructed
        Yuno posses Star Magic.
        destructed
*/
?>