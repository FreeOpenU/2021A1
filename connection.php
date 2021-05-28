<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'd2021a1';
   $dbpass = 'xzsawq21xzsawq21';
   $dbname = 'D2021A1'
   
   $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   
   if ($con -> connect_errno) {
   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
   exit();
   }
   
   $sql = "SELECT * FROM Form";
   $result -> $mysqli -> query($sql);

   // Fetch all
   $result -> fetch_all(MYSQLI_ASSOC);

   // Free result set
   $result -> free_result();

   $mysqli -> close();
?>