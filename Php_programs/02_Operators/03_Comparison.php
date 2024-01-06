<?php

$d = 10;
$e = 10;
$f = 20;

echo "<r>\n".var_dump($d == $e); //equal
var_dump($d === $e);//identical -returns true both or same and with same value
var_dump($d != $e); //not equal
var_dump($d <> $e); //not equal
var_dump($d !== $e); //not identical
var_dump($d > $f); //greater than
var_dump($d < $f); //less than
var_dump($d >= $f); //greater than or equal to
var_dump($d <= $f); //Less than or equal to

$d = 5;  
$e = 10;
echo ($d <=> $e); // returns -1 because $x is less than $y
echo "<br>\n";
$d = 10;  
$e = 10;
echo ($e <=> $e); // returns 0 because values are equal
echo "<br>\n";
$d = 15;  
$e = 10;
echo ($d <=> $e); // returns +1 because $x is greater than $y


// Output
/*
    bool(true)
    <r>
    bool(true)
    bool(false)
    bool(false)
    bool(false)
    bool(false)
    bool(true)
    bool(false)
    bool(true)
    -1<br>
    0<br>
    1
*/
?>

