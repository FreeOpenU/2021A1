<?php

// Connect to the MySQL server
require("config.php");

// Set up variables
$file_dir = "C:\\Users\\s17se\\Desktop\\Intern\\2021A1\\human-corrector form\\tbooks\\med\\Exploring Business.txt";

// Open the file
$myfile = fopen($file_dir, "r") or die("Unable to open file!");

// Import each line into the database
while(!feof($myfile)) {
    $line = mysqli_real_escape_string($conn, fgets($myfile));
    $sql = "INSERT INTO exploringbusiness (sentence) VALUES ('$line');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }
}

// Close the connection and file
$conn->close();
fclose($myfile);

?>