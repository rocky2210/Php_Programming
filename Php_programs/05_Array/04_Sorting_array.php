<?php

// sorting array

$arr = array(2,1,3);

// sort
sort($arr);
$length = count($arr);  //Counts the length of the array
echo "Sort:";
for ($i=0;$i<$length;$i++){
    echo "$arr[$i]".",";
}
echo "<br>\n----------------\n<br>";

//rsort
rsort($arr);
echo "rsort\n<br>";
for ($i=0;$i < $length;$i++){
    echo "$arr[$i]".",";      
}
echo "<br>\n----------------\n<br>";

//asort
echo "asort\n<br>";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
asort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}
echo "<br>\n----------------\n<br>";

//ksort
echo "ksort\n<br>";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
ksort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}
echo "<br>\n----------------\n<br>";

//arsort
echo "arsort<br>\n";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
arsort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}
echo "<br>\n----------------\n<br>";

//krsort
echo "krsort<br>\n";
$age = array("rocky"=>"35","ben"=>"33","joe"=>"43");
krsort($age);
foreach($age as $x => $x_value){
    echo "key = ".$x . ", Value = ".$x_value;
    echo "<br>\n";
}


?>