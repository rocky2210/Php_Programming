<?php

$servername = "127.0.0.1";
$username = "rocky";
$password = "12345";
$dbname = "mysql_database";

$conn = new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

$sql = "SELECT id, firstname, lastname from phptable";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()){
        // echo "id:".$row["id"]. "Name: ".$row["firstname"]. " ".$row["lastname"]. "<br>";
        echo "<tr><td>".$row["id"]."</td><td>" . $row["firstname"]. " ". $row["lastname"]."</td></tr>";
    }
    echo "</tables>";
}else{
    echo "0 results";
}

$conn->close();