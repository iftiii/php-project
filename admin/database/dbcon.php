<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$database="dazzling_glitter";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

