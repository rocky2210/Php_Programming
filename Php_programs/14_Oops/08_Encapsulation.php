<?php
// Encapsulation restricts access to the internal details of a class, similar to how a character's abilities or secrets are hidden.
class Hero{
    private $quirk;

    public function __construct($quirk){
        $this->quirk = $quirk;  // Cannot access outside a class
    }

    public function getQuirk(){
        return $this->quirk;    // now available outside a class
    }
}

$deku = new Hero("One for All");
// $dekuu->quirk;
//This will give an error : echo $deku->quirk;
echo $deku->getQuirk();