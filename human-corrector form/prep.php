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
//reading text file
$file= fopen("textfile.txt", "r");
//$append ="";
while (!feof($file)){
  $content = fgets($file);
  $arrayOfTxt = explode('\n',$content);
  foreach($arrayOfTxt as $value){
    
    $sq = "INSERT INTO Form (text) VALUES ('$value')";
    
}
$result = $conn->query($sq);
}
if ($result) {
  echo "Text entered";
} 
$query = "SELECT text FROM Form";

$res = $conn->query($query) ;

/* fetch object array */
while ($row = $res->fetch_array()) {
  
}
//$data = file_get_contents('http://66.76.242.198:9888/%27');
$conn->close();
?>