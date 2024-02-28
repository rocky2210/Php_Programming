<?php
// Do while loop

/*
    Do while loop:
        he do-while loop is similar to the while loop, but with one crucial difference: the do-while loop executes its code block at 
        least once, even if the condition is initially false
*/

$a = 10;
do{
    echo "Inu $a <br>\n";
    $a += 10;
}while($a < 100)


/* 
    Output:
        Inu 10 <br>
        Inu 20 <br>
        Inu 30 <br>
        Inu 40 <br>
        Inu 50 <br>
        Inu 60 <br>
        Inu 70 <br>
        Inu 80 <br>
        Inu 90 <br>
*/

?>