<?php
$servername = "localhost";
$username = "uy5aypf1ygo0x";
$password = "q7ggbv5j0b5t";
$dbname = "dbwpb0qdtmtckz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
