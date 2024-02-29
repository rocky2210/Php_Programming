<?php
class Counter {
    static $count = 0;
    
    public static function increment() {
        self::$count++;
    }
}

Counter::increment();
Counter::increment();
echo Counter::$count;

/*
    Output:
        2
*/
?>