<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'd2021a1';
   $dbpass = 'xzsawq21xzsawq21';
   $dbname = 'D2021A1'
   
   $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
   }
   
   mysqli_query($con, "SELECT * FROM Form");
   echo "Affected rows: " . mysqli_affected_rows($con);


   mysqli_close($con);
?>