<?php
/**
 * An abstract class can't be instantiated itself but can have abstract methods that must be implemented by child classes. 
 * In Dragon Ball, think of "Z Fighter" as an abstract class with fighters like Goku and Vegeta as child classes.
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

?>