<?php
// Sessions

/*
    Sessions:
        sessions are a way to store information across multiple pages during a user's visit to a website. 
        Sessions are commonly used for tasks such as user authentication, storing user preferences, and maintaining shopping cart data. 
*/

// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
<!-- The session_start() function must be the very first thing in your document. Before any HTML tags. -->


<?php
echo "<br>";
print_r($_SESSION);

/*
How does it work? How does it know it's me?

Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. 
Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, 
if not, it starts a new session
*/
?>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
echo "<br>";
print_r($_SESSION);
echo "<br>";

?>


<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
print_r($_SESSION);

?>

</body>
</html>