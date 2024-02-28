<?php
// Array

/*
    Array:
        an array is a data structure that can hold multiple values under a single name. 
        It is one of the most commonly used data types for storing and manipulating collections of data. 
        Arrays can store values of any data type, including integers, floats, strings, and even other arrays.
*/

// Creating a array
$arr = array("10","20","30","40","50"); // also known as indexed array
echo $arr[0];
echo "<br>\n";

// Changing a value in array
$arr[0] = 33;  // another method of indexed array
echo $arr[0];
echo "<br>\n";

for($i = 0; $i < 5; $i++){
    print("arr[$i] is : $arr[$i] <br>\n");
}

// count - get the length of the array
echo count($arr);
echo "<br>\n";

/*
    Output:
        10<br>
        33<br>
        arr[0] is : 33 <br>
        arr[1] is : 20 <br>
        arr[2] is : 30 <br>
        arr[3] is : 40 <br>
        arr[4] is : 50 <br>
        5<br>
*/
?>