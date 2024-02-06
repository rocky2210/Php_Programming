<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";

$conn = new mysqli($servername,$username,$password,$dbname);
$sql_template = "INSERT INTO `phpTable` (`firstname`,`lastname`,`email`) VALUES (?,?,?)";
$stmp = $conn->prepare($sql_template);

$smtp->bind_param("sss",$fname, $lname, $email);
$fname = "rado";
$lname = "kutti";
$email = "rado@gmail.com";

$is_inserted = $stmp->execute();

// 
if($is_inserted){
    echo "Data inserted successfully";
}else{
    echo "Something is working : ".$conn->error;
}