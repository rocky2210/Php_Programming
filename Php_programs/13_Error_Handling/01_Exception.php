<?php

// An exception is an object that describes an error or unexpected behaviour of a PHP script.
// Exceptions are thrown by many PHP functions and classes.
// User defined functions and classes can also throw exceptions.
// Exceptions are a good way to stop a function when it comes across data that it cannot use.


//! Throwing an exception

// function divide($dividend, $divisor){
//     if($divisor == 0){
//         throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }
// echo divide(5,0);
?>

<?php
// The try ..catch statement

// function divide($dividend, $divisor) {
//     if($divisor == 0) {
//     throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(5, 0);
// } catch(Exception $e) {
//     echo "Unable to divide.";
// }
?>

<?php

// Try.. catch .. finally statement

function divide($dividend, $divisor) {
    if($divisor == 0) {
    throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch(Exception $e) {
    echo "Unable to divide.";
} finally {
    echo "Process complete.";
}
?>