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
    PHP $_GET:
        PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
        This array contains key-value pairs where the keys are the names of the form controls (input fields) and the values are the corresponding input data provided by the user.
        $_GET can also collect data sent in the URL.
*/

?>