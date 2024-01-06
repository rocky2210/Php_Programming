<?php

$a = 10;
$b = 4;

echo "Addition a + b: ".$a+$b."<br>\n";
echo "Substraction a - b: ".$a-$b."<br>\n";
echo "Multiplication a * b: ".$a*$b."<br>\n";
echo "Division a / b: ".$a/$b."<br>\n";
echo "Modulus a % b: ".$a%$b."<br>\n";
echo "Exponentiation a ** b: ".$a**$b."<br>\n";

?>
<hr>
<?php
//Increment and decrement operator
$g = 10;
echo "pre increment: ".++$g ."<br>\n"; //11
echo "pre decrement: ".--$g ."<br>\n"; //10
echo "post increment: ". $g++ ."<br>\n"; //prints 10 and then 10 +1;
echo "post decrement: ".$g-- ."<br>\n"; //prints 11 and then 11 - 1
echo $g."<br>\n";

// Output
/*
    Addition a + b: 14<br>
    Substraction a - b: 6<br>
    Multiplication a * b: 40<br>
    Division a / b: 2.5<br>
    Modulus a % b: 2<br>
    Exponentiation a ** b: 10000<br>
    <hr>
    pre increment: 11<br>
    pre decrement: 10<br>
    post increment: 10<br>
    post decrement: 11<br>
    10<br>
 */

?>