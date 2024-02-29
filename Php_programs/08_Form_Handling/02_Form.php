<!-- 

Think SECURITY when processing PHP forms!

    These pages will show how to process PHP forms with security in mind. 
    Proper validation of form data is important to protect your form from hackers and spammers!

-->

<form method = "post" action = <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    Name: <input type="text" name= "name"><br>
    E mail: <input type="text" name= "email"><br>
    comment: <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>

    Gender: 
    <input type="radio" name="gender" id="" value = "male">Female
    <input type="radio" name="gender" id="" value = "female">Male
    <input type="submit" value="">
</form>

<?php
// Define variable and set to empty values
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $comment = test_input($_POST["comment"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>