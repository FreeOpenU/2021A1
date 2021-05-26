<?php
    $dbhost = 'localhost:3036';
    $dbuser = 'd2021a';
    $dbpass = 'xzsawq21xzsawq21';
    
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    
    if(! $conn ) {
       die('Could not connect: ' . mysql_error());
    }
    $sql = 'SELECT broad_topic FROM Form';
   mysql_select_db('D2021A1');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Broad Topic :{$row['broad_topic']}  <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>