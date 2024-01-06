<?php 

//foreach loop - loops through a block of code for each element in an array
//foreach loop works only on array, and is used to loop through each key/value pair in array

$colors = array("red","green","blue","yellow","cyan","orange");

foreach ($colors as $value) {
    echo "$value <br> \n";
}

// Output
    // red <br> 
    // green <br>
    // blue <br>
    // yellow <br>
    // cyan <br>
    // orange <br>
?>