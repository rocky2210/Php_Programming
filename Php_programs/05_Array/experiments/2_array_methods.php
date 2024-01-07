<?php

echo "-----------\n";
// 1. array_intersect_key — Computes the intersection of arrays using keys for comparison
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));
echo "-----------\n";


//2. array_intersect_uassoc — Computes the intersection of arrays with additional index check, compares indexes by a callback function
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
echo "-----------\n";


//3. array_intersect_ukey — Computes the intersection of arrays using a callback function on the keys for comparison
function key_compare_func($key1, $key2)
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

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));
echo "-----------\n";


// 4. array_intersect — Computes the intersection of arrays
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);
echo "-----------\n";


// 5. array_is_list — Checks whether a given array is a list
var_dump(array_is_list([])); // true
var_dump(array_is_list(['apple', 2, 3])); // true
var_dump(array_is_list([0 => 'apple', 'orange'])); // true

// The array does not start at 0
var_dump(array_is_list([1 => 'apple', 'orange'])); // false

// The keys are not in the correct order
var_dump(array_is_list([1 => 'apple', 0 => 'orange'])); // false

// Non-integer keys
var_dump(array_is_list([0 => 'apple', 'foo' => 'bar'])); // false

// Non-consecutive keys
var_dump(array_is_list([0 => 'apple', 2 => 'bar'])); // false
echo "-----------\n";


// 6. array_key_exists — Checks if the given key or index exists in the array
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array\n";
}
echo "-----------\n";


// 7. array_key_first — Gets the first key of an array
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$firstKey = array_key_first($array);
var_dump($firstKey);
echo "-----------\n";


// 8. array_keys — Return all the keys or a subset of the keys of an array
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
                "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
echo "-----------\n";


// 9. array_map — Applies the callback to the elements of the given arrays
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
echo "-----------\n";


// 10. array_merge — Merge one or more arrays
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "-----------\n";


// 11. array_merge_recursive — Merge one or more arrays recursively
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
echo "-----------\n";


// 12. array_replace_recursive — Replaces elements from passed arrays into the first array recursively
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);
echo "-----------\n";


// 13. array_pad — Pad array to the specified length with a value
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
// result is array(12, 10, 9, 0, 0)

// $result = array_pad($input, -7, -1);
// result is array(-1, -1, -1, -1, 12, 10, 9)

// $result = array_pad($input, 2, "noop");
// not padded
var_dump($result);
echo "-----------\n";


// 14. array_product — Calculate the product of values in an array
$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a) . "\n";
echo "product(array()) = " . array_product(array()) . "\n";
echo "-----------\n";


// array_rand — Pick one or more random keys out of an array
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo "-----------\n";


//15. array_replace — Replaces elements from passed arrays into the first array
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);

?>