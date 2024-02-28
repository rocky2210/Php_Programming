<?php
// Sorting array

$arr = array(2,1,3);

// sort -   Sorts an array in ascending order based on the values.
sort($arr);
$length = count($arr);  //Counts the length of the array
echo "Sort:";
for ($i=0;$i<$length;$i++){
    echo "$arr[$i]".",";
}
echo "<br>\n----------------\n<br>";



//rsort -   Sorts an array in descending order based on the values.
rsort($arr);
echo "rsort\n<br>";
for ($i=0;$i < $length;$i++){
    echo "$arr[$i]".",";      
}
echo "<br>\n----------------\n<br>";



//asort -   Sorts an associative array in ascending order based on the values, preserving key-value pairs.
echo "asort\n<br>";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
asort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}
echo "<br>\n----------------\n<br>";



//ksort -   Sorts an associative array in ascending order based on the keys.
echo "ksort\n<br>";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
ksort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}
echo "<br>\n----------------\n<br>";



//arsort -  Sorts an associative array in descending order based on the values, preserving key-value pairs.
echo "arsort<br>\n";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
arsort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}
echo "<br>\n----------------\n<br>";



//krsort -  Sorts an associative array in descending order based on the keys.
echo "krsort<br>\n";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
krsort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}



/*
    Output:
        Sort:1,2,3,<br>
        ----------------
        <br>rsort
        <br>3,2,1,<br>
        ----------------
        <br>asort
        <br>key = ben, Value = 33<br>
        key = rocky, Value = 35<br>
        key = joe, Value = 43<br>
        <br>
        ----------------
        <br>ksort
        <br>key = ben, Value = 33<br>
        key = joe, Value = 43<br>
        key = rocky, Value = 35<br>
        <br>
        ----------------
        <br>arsort<br>
        key = joe, Value = 43<br>
        key = rocky, Value = 35<br>
        key = ben, Value = 33<br>
        <br>
        ----------------
        <br>krsort<br>
        key = rocky, Value = 35<br>
        key = joe, Value = 43<br>
        key = ben, Value = 33<br>
*/

?>