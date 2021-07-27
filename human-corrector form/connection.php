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
$conword1 = array($_POST['statement_field']);
$author = $conn -> real_escape_string($_POST['author']);
$word = $conn -> real_escape_string($_POST['word_field']);
$wordmean = $conn -> real_escape_string($_POST['word_meaning']);
$wordsyn = array($_POST['wordsyn_field']);
$para = $_POST['para_field'];
$dict = array($_POST['diction_field']);
$tone = array($_POST['tone_field']);

//print_r($_POST);

foreach($conword1 as $v1){
  $conwrd= implode(", ",$v1); 
}
foreach($wordsyn as $v2){
  $syn= implode(", ",$v2); 
}
foreach($dict as $v3){
  $diction= implode(", ",$v3); 
}
foreach($tone as $v4){
  $tne= implode(", ",$v4); 
}
foreach($array as $v5){
  $txt = implode("\n",$v5);
}
$sql = "INSERT INTO Form (broad_topic, subject, chapter, topics, choices, sentence1, relationship, sentence2, connection, conn_word1, author, word, wrd_mean, word_syn, para, dict, tone) VALUES ('$broadtopic','$subjec', '$chapt', '$topic', '$choice', '$sen1','$rel', '$sen2', '$connect' , '$conwrd', '$author', '$word' , '$wordmean' , '$syn' , '$para' , '$diction' , '$tne');";


if ($conn -> query($sql)) {
  echo "Data inserted succesfully";
} else {
  echo "Error";
  echo("Error description: " . $conn -> error);
}

$conn->close();
?>