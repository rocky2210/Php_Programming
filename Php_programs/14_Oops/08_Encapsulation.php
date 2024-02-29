<?php
// Encapsulation

/*
    Encapsulation:
        Encapsulation is one of the fundamental principles of object-oriented programming (OOP)
        and refers to the bundling of data (attributes) and methods (functions) that operate on 
        the data into a single unit or class. The main purpose of encapsulation is to hide the 
        internal state of an object and to only allow access to it through well-defined interfaces.
*/
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

/*
    Output:
        One for All
*/