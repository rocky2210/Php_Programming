<?php

$user = [
    'username' => 'admin',
    'email' => 'rocky@gmail.com',
    'is_active' => '1',
];
$properties = array_keys($user);

print_r($properties);

/*
    Use the PHP array_keys() function to get all the keys or 
    a subset of keys in an array.
*/

/*
    Output:
        Array
        (
            [0] => username
            [1] => email
            [2] => is_active
        )
*/

?>