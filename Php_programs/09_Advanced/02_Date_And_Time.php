<?php


// The PHP date() function is used to format a date and/or a time.

// Get a date
echo "Today is " . date("Y/m/d") . "<br>\n";
echo "Today is " . date("Y.m.d") . "<br>\n";
echo "Today is " . date("Y-m-d") . "<br>\n";
echo "Today is " . date("l");
echo "\n-----\n";

/*
    Output:
        Today is 2024/02/29<br>
        Today is 2024.02.29<br>
        Today is 2024-02-29<br>
        Today is Thursday
*/
?>
<br>


<!-- Copy right using date function -->
&copy; 2010-<?php echo date("Y");?><br><br>
<!-- 
    Output:    
        &copy; 2010-2024<br><br> 
-->


<!-- Get a Time-->
<?php

/*
    H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)
*/

echo "This time is: " . date("h:i:sa");

/*
    Output:
        This time is: 01:11:05pm
*/
echo "\n-----\n";
// Note that the PHP date() function will return the current date/time of the server!
?><br><br>


<!-- Get time zone -->
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
/*
    Output:
        The time is 02:43:40am
*/
echo "\n-----\n";
?><br><br>

<!-- Create a Date from a string with strtotime -->
<?php
// PHP is quite clever about converting a string to a date, so you can put in various values

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
/*
    Output:
        2024-03-01 12:00:00am<br>
*/
echo "\n-----\n";



$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
/*
    Output:
        2024-05-27 10:15:00pm
*/
echo "\n-----\n";



$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
/*
    Output:
        2024-05-27 10:15:00pm
*/
echo "\n-----\n";

?>