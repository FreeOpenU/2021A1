<?php
if(isset($_POST['statement'])){
	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	$con = mysqli_connect('localhost:3306', 'feiyi', 'iamfeiyi21@!','2021A2');

		// get the post records

	$firstN = $_POST['firstN'];
	$lastN = $_POST['lastN'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$statement = $_POST['statement'];

	$cmd = 'curl --data "' . $statement . '" http://66.76.242.198:9888/';
	$output = shell_exec($cmd);

	//echo $output;

	// database insert SQL code
	$sql = "INSERT INTO `input` (`firstName`, `lastName`, `email`, `phone`, `statement`, `result`) 
			VALUES ('$firstN', '$lastN', '$email', '$phone', '$statement', '$output')";

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