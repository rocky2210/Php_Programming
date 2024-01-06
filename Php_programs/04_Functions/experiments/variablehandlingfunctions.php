<?php

// boolval - Get the boolean value of a variable
echo "0: ".(boolval(0) ?"true":"false")."\n";
// output : 0: false
echo "-----------\n";

// doubleval - alias of floatval
$b = "1234.5678Hello";
echo doubleval($b) . "<br>\n";
// output : 1234.5678<br>
echo "-----------\n";

// is_countable - Verify that the contents of a variable is a countable value
$b = array("red", "green", "blue");
echo "b is " . is_countable($b) . "<br>\n";
// output: b is 1<br>
echo "-----------\n";

// empty - determine whether a variable is empty
$a = 0;
if( empty($a)){
    echo "Variable 'a' is empty. <br>\n";
}
// output: Variable 'a' is empty. <br>
echo "-----------\n";

// floatval - Get float value of a variable
$a = "1234.56789";
echo floatval($a) . "<br>\n";
// output: 1234.56789<br>
echo "-----------\n";

// gettype - get the type of a variable
$a = 3;
echo gettype($a). "<br>\n";
// output: integer<br>
echo "------------\n";

// is_scalar - Finds whether a variable is a scaler
$a = "Hello";
echo "a is ".is_scalar($a)."<br>\n";
// Output : a is 1
echo "------------\n";

/**
 * intval — Get the integer value of a variable
 * is_array — Finds whether a variable is an array
 * is_bool — Finds out whether a variable is a boolean
 * is_callable — Verify that a value can be called as a function from the current scope.
 * is_countable — Verify that the contents of a variable is a countable value
 * is_double — Alias of is_float
 * is_float — Finds whether the type of a variable is float
 * is_int — Find whether the type of a variable is integer
 * is_integer — Alias of is_int
 * is_iterable — Verify that the contents of a variable is an iterable value
 * is_long — Alias of is_int
 * is_null — Finds whether a variable is null
 * is_numeric — Finds whether a variable is a number or a numeric string
 * is_object — Finds whether a variable is an object
 * is_real — Alias of is_float
 * is_resource — Finds whether a variable is a resource
 * is_string — Find whether the type of a variable is string
 * isset — Determine if a variable is declared and is different than null
 * print_r — Prints human-readable information about a variable
 * serialize — Generates a storable representation of a value
 * settype — Set the type of a variable
 * strval — Get string value of a variable
 * unserialize — Creates a PHP value from a stored representation
 * unset — Unset a given variable
 * var_dump — Dumps information about a variable
 * var_export — Outputs or returns a parsable string representation of a variable
 */
?>



