<?php
// Associative array

/*
    Associative array:
        An associative array in PHP is a type of array that uses named keys instead of numeric indices to access its elements. 
        Each element in an associative array is associated with a specific key-value pair, 
        allowing for more meaningful and descriptive data storage.
*/

$age = array("rocky" => "21", "ben10" => "25", "goku" => "35");
echo "Rocky is ". $age['rocky']. "years old.<br>\n\n";

foreach($age as $x => $x_value){
    echo "key = ".$x. ", value = ".$x_value;
    echo "<br>\n";
}

/*
    Output
        Rocky is 21years old.<br>
        
        key = rocky, value = 21<br>
        key = ben10, value = 25<br>
        key = goku, value = 35<br>
*/
?>