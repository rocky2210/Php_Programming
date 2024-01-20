<?php

// The __construct method is called when an object is created. It is commonly used for initializing object properties.
class DragonBallCharacter {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$goku = new DragonBallCharacter("Goku");
echo $goku->name; // Output: Goku

?>