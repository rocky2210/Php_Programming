<?php
// Access specifier protected

/*
    protected: 
        Protected properties and methods can only be accessed from within 
        the class itself and from subclasses (classes that extend the parent class).
*/

class JujutsuKaisenCursed{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function reveaName(){
        return "My true name is {$this->name}.\n";
    }
}

class SpecialGradeCursedSpirit extends JujutsuKaisenCursed{

    public function performSpecialAttack(){
        return "I'm using a special attack as a special grade cursed spirit!\n";
    }
}

$rynomenSukuna = new SpecialGradeCursedSpirit("Rynomen Sukuna");
echo $rynomenSukuna->reveaName();
echo $rynomenSukuna->performSpecialAttack();

/*
    Output:
        My true name is Rynomen Sukuna.
        I'm using a special attack as a special grade cursed spirit!
*/
?>