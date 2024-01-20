<?php

/**
 * Polymorphism allows objects of different classes to be treated as objects of the same class. 
 * In Naruto, various characters can use the Rasengan.
 */

class Jutsu{
    public function useJutsu(){
        return "Using a generic jutsu\n";
    }
}

class NarutoRasengan extends Jutsu{
    public function useJutsu(){
        return "Naruto uses Rasengan!\n";
    }
}

class BorutoRasengan extends Jutsu{
    public function useJutsu(){
        return "Boruto uses Ragengan!\n";
    }
}


$jutsu = new jutsu();
$narutoRasengan = new NarutoRasengan();
$borutoRasengan = new BorutoRasengan();

echo $jutsu->useJutsu();
echo $narutoRasengan->useJutsu();
echo $borutoRasengan->useJutsu();
?>