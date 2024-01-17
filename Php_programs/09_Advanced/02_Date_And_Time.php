<?php


// The PHP date() function is used to format a date and/or a time.

// Get a date
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

?>
<br>


<!-- Copy right using date function -->
&copy; 2010-<?php echo date("Y");?><br><br>

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

// Note that the PHP date() function will return the current date/time of the server!
?><br><br>


<!-- Get time zone -->
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?><br><br>

<!-- Create a Date from a string with strtotime -->
<?php
// PHP is quite clever about converting a string to a date, so you can put in various values

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>