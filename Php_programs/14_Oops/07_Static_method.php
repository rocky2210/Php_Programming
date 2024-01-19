<?php

// Static methods and properties belong to the class, not to instances

class DragonBall{
    public static $count = 7;

    public static function makeaWish(){
        return "<br>I wish for eternal life\n";
    }
}

/**
 * The Scope Resolution Operator the double colon, is a token that allows access to a constant, static property, or static method of a class or one of its parents. 
 * Moreover, static properties or methods can be overriden via late static binding.
 */
echo DragonBall::$count;
echo DragonBall::makeaWish();

?>