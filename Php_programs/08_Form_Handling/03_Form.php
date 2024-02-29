<!-- 

how to make input fields required and create error messages if needed.
-->
<?php
// Define variable and set to empty values
$name = $email = $comment = $gender = "";

// Error messages and input testing
$nameErr = $emailErr = $commentErr = $genderErr = "";

// input fields are validated with regular expression
$validName="/^[a-zA-Z ]*$/";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if(!preg_match($validName, $name)){
            $nameErr = "Only letters and white are allowed";
        }
    }

    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
        // check if email address is well formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email";
        }
    }

    if(empty($_POST["comment"])){
        $commentErr = "Comment is required";
    }else{
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span style = "color:red;">* required field</span></p>
<form method = "post" action = <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    Name: <input type="text" name= "name"><span style = "color:red;">* <?php echo $nameErr;?></span><br>
    E mail: <input type="text" name= "email"><span style = "color:red;">* <?php echo $emailErr;?></span><br>
    comment: <textarea name="comment" id="comment" cols="40" rows="5"></textarea><span style = "color:red;">* <?php echo $commentErr;?></span><br>

    Gender: 
    <input type="radio" name="gender" id="" value = "male">male
    <input type="radio" name="gender" id="" value = "female">FeMale
    <span style = "color:red;">* <?php echo $genderErr;?></span><br>
    <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>