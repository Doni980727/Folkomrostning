<?php 
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO namnin (firstname, lastname, city, email) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[city]', '$_POST[email]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>