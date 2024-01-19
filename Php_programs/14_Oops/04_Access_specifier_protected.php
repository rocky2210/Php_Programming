<?php
/*
 * The protected access modifier allows class properties and 
 * methods to be accessed within the class itself and in its subclasses. 
 * It restricts access from outside the class.
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
?>