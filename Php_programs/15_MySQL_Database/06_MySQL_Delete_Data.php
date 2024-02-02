<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";

$conn = new mysqli($servername,$username, $password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

// Delete a data
$sql = "DELETE from phptable where id=4";

if($conn->query($sql) === true){
    echo "Record deleted successfully";
}else{
    echo "Error deleting record:" . $conn->error; 
}

$conn->close();