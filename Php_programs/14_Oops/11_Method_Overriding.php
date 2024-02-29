<?php
// Method Overriding

/*
    Method overriding:
        Method overriding is a concept in object-oriented programming (OOP) 
        where a subclass provides a specific implementation of a method that 
        is already defined in its superclass. This allows a subclass to customize 
        or extend the behavior of inherited methods from its superclass.

        This is similar to how Boruto improves upon the Rasengan in Naruto.

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

/*
    Output:
        Boruto uses an improved Rasengan
*/
?>