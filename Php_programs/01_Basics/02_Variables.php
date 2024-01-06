<?php
// 

/*Variables are the containers for storing the data values
A variable is a symbolic name or identifier that is used 
to store and represent a value in memory
*/

// Declaring variable
$var = "Hello";
printf("Value of variable: %s",$var);
echo "<br>\n";

$name = "rocky";
$age = 21;
// Concatination
print "Your name is $name"."<br>\n"."Your age is $age"."<br>\n";

// Constant = readonly variable
define("PI",3.14);
echo "Value of pi is :" .PI ."<br>\n";

const HELLO = 1.5;
echo HELLO." constant\n";


// Define function defines a constant at runtime
// const keyword defines a constant at compile time
?>