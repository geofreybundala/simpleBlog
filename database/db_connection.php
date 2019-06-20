<?php
$servername = "localhost";
$username = "root";
$password = "bundala1234";

// Create connection

$conn = new mysqli("localhost", $username, $password, "simple_blog");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
