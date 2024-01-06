<?php

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
?>