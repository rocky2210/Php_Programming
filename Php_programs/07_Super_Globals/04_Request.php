<html>
    <body>
        
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name : <input type = "text" name = "fname">
    <input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // collect value of input field
    $name = $_REQUEST['fname'];
    if(empty($name)){
        echo "Name is empty";
    }
    else{
        echo $name;
    }
}

/*
    PHP $_REQUEST:
        $_REQUEST is a superglobal array that contains the contents of both $_GET, $_POST, and $_COOKIE. 
        It is used to collect data sent from both the GET and POST methods, as well as cookies, and combines 
        them into a single associative array.
*/
?>
    </body>
</html>