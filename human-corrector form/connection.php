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

$broadtopic = $conn -> real_escape_string($_POST['broadtopic_field']);
$subjec = $conn -> real_escape_string($_POST['subject_field']);
$chapt = $conn -> real_escape_string($_POST['chapter_field']);
$topic = $conn -> real_escape_string($_POST['topic_field']);
$choice = $conn -> real_escape_string($_POST['choice_field']);
$sen1 = $conn -> real_escape_string($_POST['sentence1_field']);
$rel = $conn -> real_escape_string($_POST['relationship_field']);
$sen2 = $conn -> real_escape_string($_POST['sentence2_field']);
$connect = $conn -> real_escape_string($_POST['connection_field']);
$conword1 = $conn -> real_escape_string($_POST['statement_field']);

//$count =0;
// if(isset($_POST['add1']))

// {   $count+=1;
//     $n = "s"+$count;
//     $sq = "ALTER TABLE Form ADD "+$n+" varchar(225) NOT NULL AFTER conn_word1;"
//     $txt=$_POST["statement_field"];
//     $c = $conn -> query($sq);
//     $new = $conn -> real_escape_string($_POST['s'+$count]);

// }
$sql = "INSERT INTO Form (broad_topic, subject, chapter, topics, choices, sentence1, relationship, sentence2, connection, conn_word1) VALUES ('$broadtopic','$subjec', '$chapt', '$topic', '$choice', '$sen1','$rel', '$sen2', '$connect' , '$conword1')";
print_r($_POST);
if ($conn -> query($sql)) {
  echo "Data inserted succesfully";
 
} else {
  echo "Error";
  echo("Error description: " . $conn -> error);
}


$conn->close();
?>