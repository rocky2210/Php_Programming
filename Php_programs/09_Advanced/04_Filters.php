<?php

// Validating data = Determine if the data is in proper form.

// Sanitizing data = Remove any illegal character from the data.

/*
PHP filters are used to validate and sanitize external input.
The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.
The filter_list() function can be used to list what the PHP filter extension offers.
*/

?>


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table>
    <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
    </tr>
<?php
    // filter_list — Returns a list of all supported filters
    foreach (filter_list() as $id =>$filter) {
    // filter_id — Returns the filter ID belonging to a named filter
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
}
    ?>
</table>
    <hr>
    <br>
</body>
</html>

<!-- 
Why Use Filters?
Many web applications receive external input. External input/data can be:

User input from a form
Cookies
Web services data
Server variables
Database query results

-->

<?php
// Php filter_var() function
// The filter_var() function both validate and sanitize data.

// The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

// The variable you want to check
// The type of check to use

// Sanitize a string 
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "<h3>Sanitize a string</h3>";
echo $newstr;
echo "<hr><br>";
?>


<?php
// Validate an Integer
echo "<h3>Validate an integer</h3>";
$int = 100;
if(!filter_var($int, FILTER_VALIDATE_INT) == false){
    echo "Integer is valid";
}else{
    echo "Integer is not valid";
}
echo "<hr><br>";

?>

<?php
// Validate an IP address
$ip = "127.0.0.1";
echo "<h3>Validate an Ip address</h3>";
if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
    echo "$ip is a valid IP address";
}else{
    echo "$ip is not a valid IP address";
}
echo "<hr><br>";

?>

<?php
// Validate IPv6 Address
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
echo "<h3>Validate an Ipv6 address</h3>";
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
} else {
    echo("$ip is not a valid IPv6 address");
}
echo "<hr><br>";
?>

<?php
// Remove Characters With ASCII Value > 127
$str = "<h1>Hello WorldÆØÅ!</h1>";
echo "<h3>Sanitize a string</h3>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
echo "<hr><br>";

?>