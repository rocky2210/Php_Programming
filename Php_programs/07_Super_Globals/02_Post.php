<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

/* 	
	PHP $_POST:
		$_POST is a superglobal array used to collect form data after submitting an HTML form with the HTTP POST method. 
		This array contains key-value pairs where the keys are the names of the form controls (input fields) and the values 
		are the corresponding input data provided by the user
*/
?>

</body>
</html>