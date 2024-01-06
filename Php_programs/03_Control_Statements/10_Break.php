<?php

$a = 10;
for($a;$a < 100; $a++){
    echo "$a\n";
    if($a == 20){
        break;
    }
}

// Output
/*
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