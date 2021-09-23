<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

// Connect to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

?>
