<?php
if(isset($_POST['statement'])){
	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	$con = mysqli_connect('localhost:3306', 'feiyi', 'iamfeiyi21@','2021A2');

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
}
else{
	echo "Please check the NLP result first.";
}
?>