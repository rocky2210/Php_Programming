<?php declare(strict_types= 1); // strict requirement

function addNumbers(int $a, int $b){
    return $a + $b;     // returns the value
}

echo addNumbers(5,5)." /<br>\n";

function setHeight(int $mini = 50){
    echo "The height is $mini <br>\n";
}
setHeight(20);
setHeight(); // prints default value 

// strict requirement
function addNumber(float $a, float $b): float{ // to declare a type for the function return
    return $a + $b;
}

echo addNumber(1.2,5.3)." <br>\n";

// passing arguments by reference using '&' operator
function add_five(&$value){
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;

// PHP traditionally has been a loosely typed language, 
// meaning that variable types are automatically converted as needed. 
// However, starting from PHP 7, you can declare strict typing in a script using the declare statement. 
// This is done with the strict_types directive.
// When strict_types is set to 1, PHP will enforce strict type checking for function argument types and return types. 
// This means that if a function is declared to accept an integer, passing a string will result in a type error.

?>

