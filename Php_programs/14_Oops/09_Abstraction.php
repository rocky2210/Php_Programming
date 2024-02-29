<?php
// Abstraction

/*
    Abstraction:
        Abstraction is a fundamental concept in object-oriented programming (OOP) that involves hiding the complex i
        mplementation details of a system and exposing only the essential features of an object. It allows programmers 
        to focus on what an object does rather than how it does it.Abstraction provides a simplified and high-level
        view of the system, making it easier to understand and work with.

        Think of it as defining a hero's special move without implementing it.
*/
abstract class HakiUser{
    abstract public function useHaki();
}

class Luffy extends HakiUser {
    public function useHaki(){
        return "Luffy uses Conqueror's Haki!\n";
    }
}

$luffy = new Luffy();
echo $luffy->useHaki();

/*
    Output:
        Luffy uses Conqueror's Haki!
*/
?>