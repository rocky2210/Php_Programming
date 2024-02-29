<?php
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

/*
    PHP $GLOBALS:
        $_GLOBALS is a superglobal array that contains references to all variables that 
        are currently defined in the global scope of the script. This means that any variable 
        declared outside of a function or class is automatically a part of $_GLOBALS.
*/
?>