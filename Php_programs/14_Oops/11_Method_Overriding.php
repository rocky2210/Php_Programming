<?php

/**
 * Method overriding allows a subclass to provide its own implementation of a method inherited from a parent class. 
 * This is similar to how Boruto improves upon the Rasengan in Naruto.
 */

class Jutsu{
    public function useJutsu(){
        return "Using a generic jutsu";
    }
}

class BorutoRasengan extends Jutsu{
    public function useJutsu(){
        return "Boruto uses an improved Rasengan\n";
    }
}

$borutoRasengan = new BorutoRasengan();
echo $borutoRasengan->useJutsu();
?>