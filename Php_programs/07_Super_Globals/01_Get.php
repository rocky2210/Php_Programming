<html>
<body>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>

<?php
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';


/*
PHP $_GET
PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
$_GET can also collect data sent in the URL.
*/

?>