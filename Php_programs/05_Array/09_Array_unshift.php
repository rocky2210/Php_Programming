<?php

$permissions = [
    'edit',
    'delete',
    'view'
];

array_unshift($permissions,'new','appove','reject');

print_r($permissions);

/*
    Use the PHP array_prepend() function to preprend one 
    or more elements to the beginning of an array.
*/

/*
    Output:
        Array
        (
            [0] => new
            [1] => appove
            [2] => reject
            [3] => edit
            [4] => delete
            [5] => view
        )
*/