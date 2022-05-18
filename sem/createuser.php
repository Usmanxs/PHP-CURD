
<?php

$pass = $_POST['pass'];
$email = $_POST['email'];
$name = $_POST['name'];
$country = $_POST['country'];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

$result = $conn->query("
INSERT INTO users (name,email,password,country)
VALUES('$name','$email','$password','$country');
");


header("Location: users.php");

$conn->close();

echo $pass;