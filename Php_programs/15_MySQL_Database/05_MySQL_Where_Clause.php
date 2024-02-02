<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT id,firstname,lastname from phptable where firstname = 'inu'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    while( $row = $result->fetch_assoc()){
    echo "ID : ". $row['id']. " Name : " . $row['firstname'] . " ". $row['lastname']. "<br>";
    }
}else{
    echo "results 0";
}

$conn->close();