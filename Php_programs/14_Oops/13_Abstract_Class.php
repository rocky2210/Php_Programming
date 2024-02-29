<?php
/*
    Abstract Class:
        An abstract class in PHP is a class that cannot be instantiated 
        directly. It serves as a blueprint for other classes and may contain 
        one or more abstract methods, which are declared but not implemented in the abstract class. 
        Abstract classes are often used when you want to define a common interface for a group of related classes, but you don't want instances of the abstract class itself.

        In Dragon Ball, think of "Z Fighter" as an abstract class with fighters like Goku and Vegeta as child classes.
*/

abstract class ZFighter {
    abstract public function useSpecialAttack();
}

class Goku extends ZFighter {
    public function useSpecialAttack() {
        return "Kamehameha!";
    }
}

class Vegeta extends ZFighter {
    public function useSpecialAttack() {
        return "Final Flash!";
    }
}

$goku = new Goku();
$vegeta = new Vegeta();

echo $goku->useSpecialAttack(); // Output: Kamehameha!
echo $vegeta->useSpecialAttack(); // Output: Final Flash!

/*
    Output:
        Kamehameha!
        Final Flash!
*/
?>