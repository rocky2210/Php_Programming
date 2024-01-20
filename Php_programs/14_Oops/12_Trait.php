<?php

/**
 * A trait is like a reusable set of methods that can be applied to classes.
 * In One Piece, think of "Haki" as a trait, which different characters can develop and use.
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
?>