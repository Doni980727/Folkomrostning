<!doctype html>
<html lang="sv">

<head>

	<meta charset="utf-8">
	<title>Folkomröstning</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="script.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

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

$sql = "SELECT id, firstname, lastname, city, email FROM namnin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table class='table table-striped'><tr><th>ID</th><th>Name</th><th>City</th><th>Email</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>" . $row["city"]. "</td><td>" . $row["email"]. "</td></tr>";
     }
     echo "</table>";
     echo "<a href='index.html' class='btn btn-default' role='button'>Till starsidan</a>";
 }   
else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>