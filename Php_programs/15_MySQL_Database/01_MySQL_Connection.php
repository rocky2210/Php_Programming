<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}else{
    echo "Connected successfully";
}

// Creating database
$sql = "CREATE DATABASE `dummy`";
if($conn->query($sql) === True){
    echo "Database created successfully";
}else{
    echo "Error creating database: ". $conn->error;
}

// Close the connection
$conn->close();