<?php

// The preg_match() function will tell you whether a string contains matches of a pattern.
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);
echo "<br>";

// The preg_match_all() function will tell you how many matches were found for a pattern in a string.

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
echo "<br>";


// The preg_replace() function will replace all of the matches of the pattern in a string with another string.
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

?>