<?php
// A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.

// Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function

function my_callback($item){
    return strlen($item);
}

$strings = ["Goku","Vegeta","Gohan","Goten"];
$lengths = array_map("my_callback",$strings);
print_r($lengths);

/*
    Output:
        Array
        (
            [0] => 4
            [1] => 6
            [2] => 5
            [3] => 5
        )
*/
echo "<br><br>"
?>


<!-- User defined function -->
<?php
function exclaim($str){
    return $str . "! ";
}

function ask($str){
    return $str . "? ";
}

function printFormatted($str, $format){
    echo $format($str);
}

printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");

/*
    Output:
        Hello world! Hello world?
*/
?>