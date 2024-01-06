<?php

$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15),
);

echo $cars[0][0].": In stock: ".$cars[0][1]." Sold : ".$cars[0][2]."<br>\n";
echo $cars[1][0].": In stock: ".$cars[1][1]." Sold : ".$cars[1][2]."<br>\n";
echo $cars[2][0].": In stock: ".$cars[2][1]." Sold : ".$cars[2][2]."<br>\n";
echo $cars[3][0].": In stock: ".$cars[3][1]." Sold : ".$cars[3][2]."<br>\n";

// Looping
for ($i = 0; $i < 4; $i++){
    echo "<p><b> Row number $i </br><p>\n";
    echo "<ul>";
    for($j = 0; $j < 3;$j++){
        echo "<li>".$cars[$i][$j]."</li>";
    }
    echo "</ul> ";
}

/*
    Output: 
        Volvo: In stock: 22 Sold : 18<br>
        BMW: In stock: 15 Sold : 13<br>
        Saab: In stock: 5 Sold : 2<br>
        Land Rover: In stock: 17 Sold : 15<br>
        <p><b> Row number 0 </br><p>
        <ul><li>Volvo</li><li>22</li><li>18</li></ul> <p><b> Row number 1 </br><p>
        <ul><li>BMW</li><li>15</li><li>13</li></ul> <p><b> Row number 2 </br><p>
        <ul><li>Saab</li><li>5</li><li>2</li></ul> <p><b> Row number 3 </br><p>
        <ul><li>Land Rover</li><li>17</li><li>15</li></ul>
 */
?>

