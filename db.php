<?php
$servername = "localhost:3307";  // Change if your MySQL runs on a different port
$username = "root";  
$password = "";  
$database = "staf";  

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
