<?php
// Access specifiers public

/*
        Access specifiers:
        Access specifiers, also known as access modifiers, are keywords in object-oriented programming languages 
        like PHP that define the accessibility or visibility of properties and methods within a class. 
        In PHP, there are three main access specifiers:

        public: 
            Public properties and methods can be accessed from outside the class, 
            both from within the class itself and from external code.

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

/*
    Output:
        Hi, I'm Satoru Gojo from Jujutsu Kaisen!
*/
?>