<?php
// Access specifier private

/*
    private: 
        Private properties and methods can only be accessed from within 
        the class itself. They are not accessible from outside the class or from subclasses.
*/
class JujutsuKaisenCursedObject{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    private function hideName(){
        return "I'm a hidden cursed object with the name {$this->name}\n";
    }

    public function interactWithJujutsuUser(){
        // we can access the private method within the class
        return $this->hideName();
    }
}

$cursedobject = new JujutsuKaisenCursedObject("Forbidden Item");
echo $cursedobject->interactWithJujutsuUser();

// This will result in an error because we can't access the private property directly.
// echo $cursedobject->name;
// echo $cursedobject->hideName();

/*
    Output:
        I'm a hidden cursed object with the name Forbidden Item
*/
?>