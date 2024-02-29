<?php

/*
    Trait:
        A trait is a mechanism in PHP that allows developers to reuse sets of methods in multiple independent classes.
        It's similar to a class, but unlike classes, traits cannot be instantiated on their own. 


        In One Piece, think of "Haki" as a trait, which different characters can develop and use.
*/
trait Haki {
    public function useHaki() {
        return "Haki - Conqueror's or Observation!\n";
    }
}

class Luffy {
    use Haki;
}

class Zoro {
    use Haki;
}

$luffy = new Luffy();
$zoro = new Zoro();

echo $luffy->useHaki(); // Output: Haki - Conqueror's or Observation!
echo $zoro->useHaki(); // Output: Haki - Conqueror's or Observation!

/*
    Output:
        Haki - Conqueror's or Observation!
        Haki - Conqueror's or Observation!
*/
?>