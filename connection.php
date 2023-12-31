<?php

$host = "localhost"; // e.g., "localhost"
$user = "root";
$password = "Somvlakisme16";
$database = "hogwarts";

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
