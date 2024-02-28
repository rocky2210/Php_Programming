<?php
// Spread operator

/*
    Spread operator:
        The spread operator offers better performance than the array_merge() 
        function because it is a language construct whereas the array_merge() is a function call.
*/
$even = [2,4,6];
$odd = [1,3,5];
$all = [...$odd,...$even];

print_r($all);


/*
    Output:
        Array
        (
            [0] => 1
            [1] => 3
            [2] => 5
            [3] => 2
            [4] => 4
            [5] => 6
        )
*/