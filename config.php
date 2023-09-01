<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "iubcomp"; 

// Connect to the database (replace with your credentials)
$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

