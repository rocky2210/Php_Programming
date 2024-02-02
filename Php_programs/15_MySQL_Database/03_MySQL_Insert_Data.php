<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO phpTable (firstname, lastname, email) VALUES ('rocky', 'asta', 'rocky@gmail.com');";
$sql .= "INSERT INTO phpTable (firstname, lastname, email) VALUES ('inu', 'madu', 'inu@gmail.com');";

if($conn->multi_query($sql) === True){
    $last_id = $conn->insert_id;
    echo "New record created successfully . Last inserted ID is : ".$last_id;
}else{
    echo "Error: ". $sql . "<br>" .$conn->error;
}

$conn->close();