<?php
// Polymorphism

/*
    Polymorphism:
        Polymorphism is a fundamental concept in object-oriented programming (OOP) that 
        allows objects of different classes to be treated as objects of a common superclass. 
        It enables a single interface to be used for entities of different types, providing 
        flexibility and extensibility to your code.

        In Naruto, various characters can use the Rasengan.
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

/*
    Output:
        Using a generic jutsu
        Naruto uses Rasengan!
        Boruto uses Ragengan!
*/
?>