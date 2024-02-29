<?php

/*
    These methods are used to access and set object properties that are not directly accessible. They 
    provide a way to handle reading and writing to undefined or protected properties.
*/

class MHACharacter {
    private $quirk;

    public function __get($property) {
        if ($property == "quirk") {
            return "Accessing Quirk: " . $this->quirk;
        }
    }

    public function __set($property, $value) {
        if ($property == "quirk") {
            $this->quirk = "Setting Quirk: " . $value;
        }
    }
}

$deku = new MHACharacter();
$deku->quirk = "One For All";
echo $deku->quirk; 

/*  
    Output: 
        Accessing Quirk: Setting Quirk: One For All
*/
?>