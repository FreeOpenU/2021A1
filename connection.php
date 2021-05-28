<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'd2021a1';
   $dbpass = 'xzsawq21xzsawq21';
   $dbname = 'D2021A1'
   
   $con = new con($dbhost, $dbuser, $dbpass, $dbname);
   
   if ($con -> connect_errno) {
   echo "Failed to connect to MySQL: " . $con -> connect_error;
   exit();
   }
   
   $sql = "SELECT * FROM Form";
   $result -> $con -> query($sql);

   // Fetch all
   $result -> fetch_all(MYSQLI_ASSOC);

   // Free result set
   $result -> free_result();

   $con -> close();
?>