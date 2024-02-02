<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";

$conn = new mysqli($servername,$username, $password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "UPDATE phptable set lastname= 'bhai' where id=2";

if($conn->query($sql) === True){
    echo "Record updated successfully";
}else{
    echo "Error updating record: ". $conn->error;
}

$conn->close();