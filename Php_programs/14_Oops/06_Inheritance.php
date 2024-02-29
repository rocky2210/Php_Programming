<?php
// Inheritance 

/*
    Inheritance:
        Inheritance is a fundamental concept in object-oriented programming (OOP) that allows a class (subclass or child class) 
        to inherit properties and methods from another class (superclass or parent class). This promotes code reusability and 
        allows for creating hierarchical relationships between classes.
*/

class MagicUse{
    protected $magicType;

    public function __construct($magicType){
        $this->magicType = $magicType;
    }

    public function useMagic(){
        return "Using {$this->magicType} magic!\n";
    }
}

// Create a subclass that inherits from magicuser
class AntiMagicUser extends MagicUse{
    public function useMagic(){
        return "I'm Asta, an anti-Magic User!\n";
    }
}

$asta = new AntimagicUSer("Anti-Magic");
echo $asta->useMagic();

/*
    Output:
        I'm Asta, an anti-Magic User!
*/
?>