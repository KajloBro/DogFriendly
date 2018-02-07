<?php

$servername = "localhost";
$username = "root";
$password = "";
$tablename = "dog_friendly";

$conn = new mysqli($servername, $username, $password, $tablename);
$conn->set_charset("utf8");

if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

?>

