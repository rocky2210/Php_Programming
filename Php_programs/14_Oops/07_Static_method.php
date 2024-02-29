<?php
// Static method

/*
    Static method
        A static method in PHP is a method that belongs to the class itself rather 
        than to instances of the class (objects). Static methods can be called directly 
        on the class without needing to instantiate it. 
*/

class DragonBall{
    public static $count = 7;

    public static function makeaWish(){
        return "<br>I wish for eternal life\n";
    }
}

/*
    The Scope Resolution Operator the double colon, is a token that allows access to a constant, static property, or static method of a class or one of its parents. 
    Moreover, static properties or methods can be overriden via late static binding.
*/
echo DragonBall::$count;
echo DragonBall::makeaWish();

/*
    Output:
        7<br>
        I wish for eternal life
*/
?>