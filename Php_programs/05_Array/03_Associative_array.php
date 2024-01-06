<?php

//associative array
//this array that use named keys that you assign to them

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