<?php
//String operators

$txt1 = "Hello"; 
$txt2 = " world!";
echo $txt1 . $txt2 ."<br>\n";   //concatenation

$txt1 = "Hello";
$txt2 = " world! :)";
$txt1 .= $txt2;
echo $txt1;             //concatenation assignment
echo "<br>\n"

/*
    Output:
        Hello world!<br>
        Hello world! :)<br>
*/
?>
