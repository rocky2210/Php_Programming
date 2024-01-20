<?php
/**
 * Abstraction allows you to define methods without providing their implementation.
 * Think of it as defining a hero's special move without implementing it.
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
?>