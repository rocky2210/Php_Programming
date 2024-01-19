<?php

/*
JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.
*/

// This example shows how to encode an associative array into a json object
$age = array("Peter"=>35,"Ben"=>37,"Joe"=>43);
echo json_encode($age);

$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br><hr>";
?>


<?php
// Json decode() function is used to decode a JSON object into a PHP object or an associative array.
$jsonobj = '{"peter":35,"Ben":37,"joe":43}';
var_dump(json_decode($jsonobj));
echo "<br>";
// The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays
var_dump(json_decode($jsonobj, true));
echo "<br><hr>";

?>


<?php
// looping through the values of a php associative array
$jsonobj = '{"peter":35,"Ben":37,"joe":43}';
$arr = json_decode($jsonobj,true);
foreach($arr as $key => $value){
    echo $key. "=>". $value. "<br>";
}
?>