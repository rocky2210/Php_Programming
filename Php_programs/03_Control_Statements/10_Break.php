<?php
// Break Statement

/*
    Break statement:
            The break statement is used to immediately exit from a loop when a certain condition is met. 
            It can be used within loops such as for, foreach, while, and do-while.
*/

$a = 10;
for($a;$a < 100; $a++){
    echo "$a\n";
    if($a == 20){
        break;
    }
}

/*
    Output:
        10
        11
        12
        13
        14
        15
        16
        17
        18
        19
        20
*/