<?php

echo "-----------\n";
// 1. array_change_key_case()- Changes the case of all keys in an array
$input = array ("fiRst"=> 1, "SecOnd"=>4);
print_r(array_change_key_case($input,CASE_UPPER));
print_r(array_change_key_case($input,CASE_LOWER));
/*
    Output:
        Array
        (
            [FIRST] => 1
            [SECOND] => 4
        )
        Array
        (
            [first] => 1
            [second] => 4
        )
*/
echo "-----------\n";



// 2. array_chunk — Split an array into chunks
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 3 ,true));

/*
    Output:
        Array
        (
            [0] => Array
                (
                    [0] => a
                    [1] => b
                )

            [1] => Array
                (
                    [0] => c
                    [1] => d
                )

            [2] => Array
                (
                    [0] => e
                )

        )
        Array
        (
            [0] => Array
                (
                    [0] => a
                    [1] => b
                    [2] => c
                )

            [1] => Array
                (
                    [3] => d
                    [4] => e
                )

        )
*/
echo "-----------\n";



// 3. array_column — Return the values from a single column in the input array
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$first_names = array_column($records, 'first_name');
print_r($first_names);
/*
    Output:
        Array
        (
            [0] => John
            [1] => Sally
            [2] => Jane
            [3] => Peter
        )
*/

echo "-----------\n";



// 4. array_combine — Creates an array by using one array for keys and another for its values
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);

/*
    Output:
        Array
        (
            [green] => avocado
            [red] => apple
            [yellow] => banana
        )
*/
echo "-----------\n";



// 5. array_count_values — Counts the occurrences of each distinct value in an array
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

/*
    Output:
        Array
        (
            [1] => 2
            [hello] => 2
            [world] => 1
        )
*/
echo "-----------\n";



// 6. array_diff_assoc — Computes the difference of arrays with additional index check
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);

/*
    Output:
        Array
        (
            [b] => brown
            [c] => blue
            [0] => red
        )
*/

echo "-----------\n";



// 7. array_diff_key — Computes the difference of arrays using keys for comparison
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

var_dump(array_diff_key($array1, $array2));

/*
    Output:
        array(2) {
        ["blue"]=>
        int(1)
        ["red"]=>
        int(2)
        }
*/
echo "-----------\n";




// 8.array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function

function key_compare_func($a, $b)
{
    return $a <=> $b;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);

/*
    Output:
        Array
        (
            [b] => brown
            [c] => blue
            [0] => red
        )
*/
echo "-----------\n";



// 9. array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison
function key_compare_function($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_function'));

/*
    Output:
        array(2) {
        ["red"]=>
        int(2)
        ["purple"]=>
        int(4)
        }
*/
echo "-----------\n";



//10. array_diff — Computes the difference of arrays
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);

/*
    Output:
        Array
        (
            [1] => blue
        )
*/
echo "-----------\n";


// 11. array_fill_keys — Fill an array with values, specifying keys
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);

/*
    Output:
        Array
        (
            [foo] => banana
            [5] => banana
            [10] => banana
            [bar] => banana
        )
*/
echo "-----------\n";



// 12. array_fill — Fill an array with values
$a = array_fill(5, 6, 'apple');
print_r($a);

/*
    Output:
        Array
        (
            [5] => apple
            [6] => apple
            [7] => apple
            [8] => apple
            [9] => apple
            [10] => apple
        )
*/
echo "-----------\n";



// 13. array_filter — Filters elements of an array using a callback function
function test_odd($var){
    return($var & 1);
}

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));

/*
    Output:
        Array
        (
            [0] => 1
            [1] => 3
            [3] => 3
        )
*/
echo "-----------\n";



// 14. array_flip — Exchanges all keys with their associated values in an array
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);

/*
    Output:
        Array
        (
            [oranges] => 0
            [apples] => 1
            [pears] => 2
        )
*/
echo "-----------\n";



// 15. array_intersect_assoc — Computes the intersection of arrays with additional index check
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);
/*
    Output:
        Array
        (
            [a] => green
        )
*/
echo "-----------\n";
