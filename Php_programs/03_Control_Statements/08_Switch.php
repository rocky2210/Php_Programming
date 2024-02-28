<?php
// Switch case

/*
    Switch case:
        the switch statement is used to perform different actions based on the value of a variable or expression. 
        It's an alternative to using multiple if statements when you need to compare a variable to multiple values
*/

$day = 4;

switch ($day) {
    case 1:
        echo("Monday <br>\n");
        break;
    case 2;
        echo("Tuesday <br>\n");
        break;
    case 3:
        echo("Wednesday \n <br>");
        break;
    case 4:
        echo("Thursday \n<br>");
        break;
    case 5;
        echo("Friday \n <br>");
        break;
    case 6:
        echo("Friday");
        break;
    case 7:
        echo("Sunday \n <br>");
        break;
    default:
        break;
    }

/*
    Output:
        Thursday 
*/

?>