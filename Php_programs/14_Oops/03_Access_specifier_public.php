<?php
/**
 * The public access modifier allows class properties and methods to be accessed from outside the class. 
 * It has the least restrictive visibility.
 */

class JujutsuKaisenCharacter{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function intro(){
        return "Hi, I'm {$this->name} from Jujutsu Kaisen!\n";
    }
}

$gojo = new JujutsuKaisenCharacter("Satoru Gojo");
echo $gojo->intro();
?>