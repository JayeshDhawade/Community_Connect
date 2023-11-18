<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "community";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();

session_destroy();
header("location: index.php");
?>
