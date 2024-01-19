<?php
// Inheritance allows a class to inherit properties and methods from another class

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
?>