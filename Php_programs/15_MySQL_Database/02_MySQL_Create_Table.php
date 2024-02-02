<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}else{
    echo "Connected successfully";
}

// Creating a table
$sql = "CREATE TABLE phpTable (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Check table creation
if($conn->query($sql) === true){
    echo "Table phpTable created successfully";
}else{
    echo "Error creating table: ". $conn->error;
}

// Close the connection
$conn->close();