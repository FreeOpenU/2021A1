<?php
$servername = "localhost";
$username = "d2021a";
$password = "xzsawq21xzsawq21";
$dbname = "D2021A1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$broad_topic = mysqli_real_escape_string($conn, $_POST['broadtopic_field']);
$sql = "INSERT INTO Form (broad_topic) VALUES ('$broad_topic')";
$result = $conn->query($sql);

if ($result === TRUE) {
  // output data of each row
  echo "Data inserted succesfully";
 
} else {
  echo "Error";
}
$conn->close();
?>