<?php

// bytehost server
//$servername = "sql300.byethost18.com";
//$username = "b18_21658726";
//$password = "KzXn5QmPh";
//$tablename = "b18_21658726_dog_friendly";

// local server (WAMP)
$servername = "localhost";
$username = "root";
$password = "";
$tablename = "dog_friendly";

// server
//$servername = "";
//$username = "";
//$password = "";
//$tablename = "";

$conn = new mysqli($servername, $username, $password, $tablename);
$conn->set_charset("utf8");

if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

?>

