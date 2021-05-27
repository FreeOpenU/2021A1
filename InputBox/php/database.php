<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','inputbox');

// get the post records

$firstN = $_POST['firstN'];
$lastN = $_POST['lastN'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$statement = $_POST['statement'];

// database insert SQL code
$sql = "INSERT INTO `input` (`firstName`, `lastName`, `email`, `phone`, `statement`) VALUES ('$firstN', '$lastN', '$email', '$phone', '$statement')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Statement received!";
}
?>