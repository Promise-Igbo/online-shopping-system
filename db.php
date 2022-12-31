<?php

$servername = "newapp30-server.mysql.database.azure.com";
$username = "dtlzlnttri";
$password = "8VBXQ7ZQ4WR85YV4$";
$db = "newapp30-database";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
