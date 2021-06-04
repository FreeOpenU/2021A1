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

$sql = "SELECT * FROM Form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
echo '<pre>'; print_r($row); echo '</pre>';
echo $row;
  }
 echo "results";
} else {
  echo "0 results";
}
$conn->close();
?>