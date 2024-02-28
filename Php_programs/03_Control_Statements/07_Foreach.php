<?php 
// Foreach loop

/* 
    Foreach loop:
        The foreach loop is used to iterate over arrays or objects. 
        It allows you to loop through each key-value pair in an array or each property-value pair in an object.
*/

$colors = array("red","green","blue","yellow","cyan","orange");

foreach ($colors as $value) {
    echo "$value <br> \n";
}

/*
    Output:
        red <br> 
        green <br>
        blue <br>
        yellow <br>
        cyan <br>
        orange <br>
*/
?>