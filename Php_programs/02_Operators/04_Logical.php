<?php
$h =10;
$i = 5;

//and &&
if ($h == 10 and $i == 5) {
    echo "AND <br>\n";
}
if ($h == 10 && $i == 5) {
    echo "&& <br>\n";
}

//or ||
if ($h == 10 or $i == 50) {
    echo "OR <br>\n";
}
if ($h == 10 || $i == 50) {
    echo "|| <br>\n";
}

//xor 
if ($h == 10 xor $i == 5) {
    echo "XOR <br>\n";
}

//NOT !
if (!($h == 10)) {
    echo "NOT <br>\n";
}

// Output
/*
AND <br>
&& <br>
OR <br>
|| <br>
*/
?>